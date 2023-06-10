<?php

namespace App\Core\Application\Services\GrandTalkshow;

use App\Core\Application\FileUpload\FileUpload;
use App\Core\Application\Mail\GtsStatusMail;
use App\Core\Application\Services\Event\EventService;
use App\Core\Domain\Repositories\SqlGrandTalkshowRepository;
use App\Core\Domain\Models\Eloquents\GrandTalkshow\GrandTalkshow;
use App\Core\Domain\Models\Eloquents\User\User;
use App\Core\Domain\Models\Eloquents\UserHasEvent\UserHasEvent;
use App\Exceptions\IseException;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Mail;
use Ramsey\Uuid\Uuid;
use Throwable;

class GrandTalkshowService
{
    private SqlGrandTalkshowRepository $repository;
    private EventService $eventService;

    public function __construct(SqlGrandTalkshowRepository $repository, EventService $eventService)
    {
        $this->repository = $repository;
        $this->eventService = $eventService;
    }

    public function getAllPeserta($search, $entries)
    {

        $paginate = GrandTalkshow::whereHas('user', function ($q) use ($search) {
            $q->where('users.full_name', 'like', '%' . $search . '%')->orWhere('users.email', 'like', '%' . $search . '%');
        })->paginate($entries);

        return $paginate;
    }

    public function accept($user_id)
    {
        $gtspeserta = GrandTalkshow::where('user_id', $user_id)->firstOrFail();

        $gtspeserta->status_type_id = 3;

        $gtspeserta->save();

        try {
            Mail::to($gtspeserta->user->email)->send(new GtsStatusMail(
                "",
                $gtspeserta->user->full_name,
                true
            ));
        } catch (Throwable $e) {
            IseException::throw("Gagal mengirim email", 1601);
        }

        return $gtspeserta;
    }

    public function reject($user_id, $reason)
    {
        $gtspeserta = GrandTalkshow::where('user_id', $user_id)->firstOrFail();

        try {
            Mail::to($gtspeserta->user->email)->send(new GtsStatusMail(
                $reason,
                $gtspeserta->user->full_name,
                true
            ));
        } catch (Throwable $e) {
            IseException::throw("Gagal mengirim email", 1601);
        }

        $gtspeserta->delete();

        $userHasEvent = UserHasEvent::where('user_id', $user_id)->where('event_id', 'a4a6c7cf-0208-11ee-a848-346f24386225');


        $userHasEvent->delete();
    }

    public function getPeserta($user_id)
    {
        $gtspeserta = GrandTalkshow::where('user_id', $user_id)->firstOrFail();

        return $gtspeserta;
    }

    public function register(GrandTalkshowRequest $request)
    {
        // check if user already registered
        $registered = GrandTalkshow::where('user_id', auth()->user()->id)->first();
        $user_has_event = $this->eventService->isUserOnEvent('a4a6c7cf-0208-11ee-a848-346f24386225', auth()->user()->id);

        if ($registered || $user_has_event) {
            IseException::throw('Anda sudah terdaftar', 3100);
        }

        $user = User::find(auth()->user()->id);

        $file_path = FileUpload::create($request->getShareProofFile(), "gts", auth()->user()->id . Carbon::now(), "Bukti_Follow_GTS");

        $file_path->upload();

        $gtspeserta = GrandTalkshow::create([
            'id' => Uuid::uuid4()->toString(),
            'user_id' => $user->id,
            'referral' => $request->getReferral(),
            'share_proof_file' => $file_path->getUrl(),
        ]);

        $this->eventService->registerUserToEvent('a4a6c7cf-0208-11ee-a848-346f24386225', auth()->user()->id);

        return $gtspeserta;
    }
}

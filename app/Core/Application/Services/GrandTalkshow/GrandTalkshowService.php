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

    public function getAllPeserta($search, $entries, $orderby, $order)
    {
        $columns = ['full_name', 'email'];

        $paginate = GrandTalkshow::join('users', 'grand_talkshow.user_id', '=', 'users.id')
            ->join('status_types', 'grand_talkshow.status_type_id', '=', 'status_types.id')
            ->where(function ($q) use ($search, $columns) {
                foreach ($columns as $column) {
                    $q->orWhere($column, 'like', '%' . $search . '%');
                }
            })
            ->orderBy($this->sanitizeOrderBy($orderby), $this->sanitizeOrder($order))
            ->paginate($entries);

        return $paginate;
    }

    protected function sanitizeOrderBy($orderby)
    {
        $allowedColumns = ['grand_talkshow.created_at', 'full_name', 'status_type_id'];
        return in_array($orderby, $allowedColumns) ? $orderby : 'grand_talkshow.created_at';
    }

    protected function sanitizeOrder($order)
    {
        return in_array(strtolower($order), ['asc', 'desc']) ? strtolower($order) : 'asc';
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
                false
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

    public function countRegistered()
    {
        $count = GrandTalkshow::count();

        return $count;
    }

    public function countVerified()
    {
        $count = GrandTalkshow::where('status_type_id', 3)->count();

        return $count;
    }

    public function sendNotify(): bool
    {
        // get all peserta which is status verified 3 and get their email from user table
        $pesertas = GrandTalkshow::where('status_type_id', 3)->get();
        $emails = $pesertas->pluck('user.email')->toArray();

        try {
            Mail::send('emails.notify-gts', [], function($message) use ($emails)
            {    
                $message->to($emails)->subject('[D-5] ISE! Grand Talkshow 2023');    
            });
        } catch (Exception $e) {
            IseException::throw(Mail:: failures(), 1603);
            return false;
        }

        return true;
    }
}

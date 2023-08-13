<?php

namespace App\Http\Controllers\Presentation\Dashboard\Rise;

use App\Core\Application\Services\Rise\RiseRegistrationRequest;
use App\Core\Application\Services\Rise\RisePenyisihanRequest;
use App\Core\Application\Services\Rise\RisePembayaranRequest;
use App\Core\Application\Services\Rise\RiseSemifinalRequest;
use App\Core\Application\Services\Rise\RiseFinalRequest;
use App\Core\Application\Services\Event\EventService;
use App\Core\Application\Services\Rise\RiseService;
use App\Http\Controllers\Pages\BaseController;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Throwable;

class RiseRegistrationController extends Component
{
    use BaseController;

    private EventService $event_service;
    private RiseService $service;
    private RiseRegistrationRequest $request;
    private RisePenyisihanRequest $request_penyisihan;
    private RisePembayaranRequest $request_pembayaran;
    private RiseSemifinalRequest $request_semifinal;
    private RiseFinalRequest $request_final;

    public bool $isOpen = false;
    public bool $isRegistered = false;
    public $date;
    public $peserta;

    public array $user_data = [
        "full_name" => "",
        "email" => "",
        "handphone" => "",
        "institution" => "",
    ];

    public array $msg = [
        'error' => '',
        'success' => '',
    ];

    public function boot(EventService $event_service, RiseService $service)
    {
        $this->event_service = $event_service;
        $this->service = $service;

        $this->isRegistered = $this->event_service->isUserOnEvent('78ec95d2-92c8-4ad2-9bc4-b32bcf049668', auth()->user()->id);

        $this->isOpen = $this->event_service->isEventOpen('78ec95d2-92c8-4ad2-9bc4-b32bcf049668');

        $this->user_data = [
            "full_name" => auth()->user()->full_name,
            "email" => auth()->user()->email,
            "handphone" => auth()->user()->handphone,
            "institution" => auth()->user()->institution,
        ];
        if($this->isRegistered)
        {
            $this->peserta = $this->service->getPeserta(auth()->user()->id);
        }

    }

    public function register()
    {
        $this->request = new RiseRegistrationRequest(
            $this->team_name,
            $this->leader_twibbon,
            $this->referral_code,
            $this->leader_student_card,
            $this->leader_poster,
            $this->leader_ig_follow,
            $this->member1_name,
            $this->member1_agency,
            $this->member1_phone,
            $this->member1_email,
            $this->member1_twibbon,
            $this->member1_student_card,
            $this->member1_poster,
            $this->member1_ig_follow,
            $this->member2_name ?? null,
            $this->member2_agency ?? null,
            $this->member2_phone ?? null,
            $this->member2_email ?? null,
            $this->member2_twibbon ?? null,
            $this->member2_student_card ?? null,
            $this->member2_poster ?? null,
            $this->member2_ig_follow ?? null
        );

        DB::beginTransaction();
        try {
            $this->dispatchToast('info', 'Menguplod form...', 'Mohon tunggu sebentar');
            $this->service->register($this->request);
            $this->dispatchToast('success', 'Berhasil Terdaftar', 'Anda telah terdaftar pada Rise');

            // redirect
        } catch (Throwable $e) {
            DB::rollBack();
            $this->msg['error'] = $e->getMessage();

            $this->dispatchToast('error', 'Terjadi kegagalan', $e->getMessage());
            return;
        }
        DB::commit();

        return redirect()->route('my.rise')->with('toastr-toast', [
            'type' => 'success',
            'title' => 'Berhasil mendaftar',
            'text' => 'Anda telah terdaftar pada RISE',
        ]);
    }
    public function registerPenyisihan()
    {
        $this->request_penyisihan = new RisePenyisihanRequest(
            $this->answer_file,
            $this->poster_file,
        );

        DB::beginTransaction();
        try {
            $this->dispatchToast('info', 'Menguplod form...', 'Mohon tunggu sebentar');
            $this->service->registerPenyisihan($this->request_penyisihan);
            $this->dispatchToast('success', 'Berhasil Terdaftar', 'Anda telah terdaftar pada Babak Penyisihan RISE');

            // redirect
        } catch (Throwable $e) {
            DB::rollBack();
            $this->msg['error'] = $e->getMessage();

            $this->dispatchToast('error', 'Terjadi kegagalan', $e->getMessage());
            return;
        }
        DB::commit();

        return redirect()->route('my.rise')->with('toastr-toast', [
            'type' => 'success',
            'title' => 'Berhasil mendaftar',
            'text' => 'Anda telah terdaftar pada Babak Penyisihan RISE',
        ]);
    }
    public function registerPembayaran()
    {
        $this->request_pembayaran = new RisePembayaranRequest(
            $this->account_owner,
            $this->bank_name,
            $this->payment_file,
        );

        DB::beginTransaction();
        try {
            $this->dispatchToast('info', 'Menguplod form...', 'Mohon tunggu sebentar');
            $this->service->registerPembayaran($this->request_pembayaran);
            $this->dispatchToast('success', 'Berhasil Terdaftar', 'Anda telah terdaftar pada Pembayaran RISE');

            // redirect
        } catch (Throwable $e) {
            DB::rollBack();
            $this->msg['error'] = $e->getMessage();

            $this->dispatchToast('error', 'Terjadi kegagalan', $e->getMessage());
            return;
        }
        DB::commit();

        return redirect()->route('my.rise')->with('toastr-toast', [
            'type' => 'success',
            'title' => 'Berhasil mendaftar',
            'text' => 'Anda telah terdaftar pada Pembayaran RISE',
        ]);
    }
    public function registerSemifinal()
    {
        $this->request_semifinal = new RiseSemifinalRequest(
            $this->youtube_link,
            $this->answer_file,
        );

        DB::beginTransaction();
        try {
            $this->dispatchToast('info', 'Menguplod form...', 'Mohon tunggu sebentar');
            $this->service->registerSemifinal($this->request_semifinal);
            $this->dispatchToast('success', 'Berhasil Terdaftar', 'Anda telah terdaftar pada Semifinal RISE');

            // redirect
        } catch (Throwable $e) {
            DB::rollBack();
            $this->msg['error'] = $e->getMessage();

            $this->dispatchToast('error', 'Terjadi kegagalan', $e->getMessage());
            return;
        }
        DB::commit();

        return redirect()->route('my.rise')->with('toastr-toast', [
            'type' => 'success',
            'title' => 'Berhasil mendaftar',
            'text' => 'Anda telah terdaftar pada Semifinal RISE',
        ]);
    }
    public function registerFinal()
    {
        $this->request_final = new RiseFinalRequest(
            $this->answer_file,
        );

        DB::beginTransaction();
        try {
            $this->dispatchToast('info', 'Menguplod form...', 'Mohon tunggu sebentar');
            $this->service->registerFinal($this->request_final);
            $this->dispatchToast('success', 'Berhasil Terdaftar', 'Anda telah terdaftar pada Final RISE');

            // redirect
        } catch (Throwable $e) {
            DB::rollBack();
            $this->msg['error'] = $e->getMessage();

            $this->dispatchToast('error', 'Terjadi kegagalan', $e->getMessage());
            return;
        }
        DB::commit();

        return redirect()->route('my.rise')->with('toastr-toast', [
            'type' => 'success',
            'title' => 'Berhasil mendaftar',
            'text' => 'Anda telah terdaftar pada Final RISE',
        ]);
    }
}

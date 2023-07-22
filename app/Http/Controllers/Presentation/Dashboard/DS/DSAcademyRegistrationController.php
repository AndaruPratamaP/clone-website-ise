<?php

namespace App\Http\Controllers\Presentation\Dashboard\DS;

use App\Core\Application\Services\DSAcademy\DSAcademyRegistrationRequest;
use App\Core\Application\Services\Event\EventService;
use App\Core\Application\Services\DSAcademy\DSAcademyService;
use App\Http\Controllers\Pages\BaseController;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Throwable;

class DSAcademyRegistrationController extends Component
{
    use BaseController;

    private EventService $event_service;
    private DSAcademyService $service;
    private DSAcademyRegistrationRequest $request;

    public bool $isOpen = false;
    public bool $isRegistered = false;
    public $date;

    public array $user_data = [
        "full_name" => "",
        "email" => ""
    ];

    public array $msg = [
        'error' => '',
        'success' => '',
    ];

    public function boot(EventService $event_service, DSAcademyService $service)
    {
        $this->event_service = $event_service;
        $this->service = $service;

        $this->isRegistered = $this->event_service->isUserOnEvent('3f99d663-7d8c-4afd-99eb-2f97e1eed585', auth()->user()->id);

        $this->isOpen = $this->event_service->isEventOpen('3f99d663-7d8c-4afd-99eb-2f97e1eed585');

        $this->user_data = [
            "full_name" => auth()->user()->full_name,
            "email" => auth()->user()->email,
        ];
    }

    public function register()
    {
        $this->request = new DSAcademyRegistrationRequest(
            $this->nama_tim,
            $this->jurusan_ketua,
            $this->insta_ketua,
            $this->twib_ketua,
            $this->cv_ketua,
            $this->bukti_ketua,
            $this->nama_anggota1,
            $this->univ_anggota1,
            $this->jurusan_anggota1,
            $this->email_anggota1,
            $this->wasap_anggota1,
            $this->insta_anggota1,
            $this->twib_anggota1,
            $this->cv_anggota1,
            $this->bukti_anggota1,
            $this->nama_anggota2,
            $this->univ_anggota2,
            $this->jurusan_anggota2,
            $this->email_anggota2,
            $this->wasap_anggota2,
            $this->insta_anggota2,
            $this->twib_anggota2,
            $this->cv_anggota2,
            $this->bukti_anggota2,
            $this->alasan_tim,
            $this->tujuan_tim,
            $this->harapan_tim,
            $this->sumber_informasi,
            $this->bukti_pembayaran
        );

        DB::beginTransaction();
        try {
            $this->dispatchToast('info', 'Menguplod form...', 'Mohon tunggu sebentar');
            $this->service->register($this->request);
            $this->dispatchToast('success', 'Berhasil Terdaftar', 'Anda telah terdaftar pada DS Academy');

            // redirect
        } catch (Throwable $e) {
            DB::rollBack();
            $this->msg['error'] = $e->getMessage();

            $this->dispatchToast('error', 'Terjadi kegagalan', $e->getMessage());
            return;
        }
        DB::commit();

        return redirect()->route('my.ds')->with('toastr-toast', [
            'type' => 'success',
            'title' => 'Berhasil mendaftar',
            'text' => 'Anda telah terdaftar pada DS Academy',
        ]);
    }
}

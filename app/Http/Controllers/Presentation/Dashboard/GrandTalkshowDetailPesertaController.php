<?php

namespace App\Http\Controllers\Presentation\Dashboard;

use App\Core\Application\Services\GrandTalkshow\GrandTalkshowService;
use Livewire\Component;

class GrandTalkshowDetailPesertaController extends Component
{
    private GrandTalkshowService $gts_service;

    public array $user_data = [
        "user_id" => "",
        "full_name" => "",
        "handphone" => "",
        "institution" => "",
        "referral" => "",
        "share_proof_file" => ""
    ];

    public array $msg = [
        'error' => '',
        'success' => '',
    ];

    public function boot(GrandTalkshowService $gts_service)
    {
        $this->gts_service = $gts_service;

        $this->getUserData();
    }

    public function getUserData()
    {
        $gts_user = $this->gts_service->getPeserta(request()->route('user_id'));

        $this->user_data = [
            "user_id" => $gts_user->user->id,
            "full_name" => $gts_user->user->full_name,
            "handphone" => $gts_user->user->handphone,
            "email" => $gts_user->user->email,
            "institution" => $gts_user->user->institution,
            "referral" => $gts_user->referral,
            "share_proof_file" => $gts_user->share_proof_file
        ];
    }

    public function acceptPeserta()
    {
        $this->gts_service->accept($this->user_data["user_id"]);
    }

    public function rejectPeserta()
    {
        $this->gts_service->reject($this->user_data["user_id"]);
    }
}

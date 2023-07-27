<?php

namespace App\Core\Application\Services\Bionix;

use Illuminate\Http\UploadedFile;

class BionixRequest
{
    private string $team_name;
    private string $asal_sekolah;
    private string $ketua_id;
    private string $ketua_twibbon;
    private string $anggota_name;
    private string $anggota_email;
    private string $anggota_hp;
    private string $anggota_twibbon;

    protected UploadedFile $payment_file;
    private UploadedFile $ketua_student_card;
    private UploadedFile $ketua_poster;
    protected UploadedFile $ketua_bukti_insta;
    private UploadedFile $anggota_student_card;
    private UploadedFile $anggota_poster;
    protected UploadedFile $anggota_bukti_insta;


    public function __construct(
        string $team_name,
        string $asal_sekolah,
        string $anggota_name,
        string $anggota_email,
        string $anggota_hp,
        UploadedFile $ketua_student_card,
        UploadedFile $ketua_poster,
        string $ketua_twibbon,
        UploadedFile $ketua_bukti_insta,
        UploadedFile $anggota_student_card,
        UploadedFile $anggota_poster,
        string $anggota_twibbon,
        UploadedFile $anggota_bukti_insta,
        UploadedFile $payment_file
    ) {
        $this->team_name = $team_name;
        $this->asal_sekolah = $asal_sekolah;
        $this->anggota_name = $anggota_name;
        $this->anggota_email = $anggota_email;
        $this->anggota_hp = $anggota_hp;
        $this->ketua_student_card = $ketua_student_card;
        $this->ketua_poster = $ketua_poster;
        $this->ketua_twibbon = $ketua_twibbon;
        $this->ketua_bukti_insta = $ketua_bukti_insta;
        $this->anggota_student_card = $anggota_student_card;
        $this->anggota_poster = $anggota_poster;
        $this->anggota_twibbon= $anggota_twibbon;
        $this->anggota_bukti_insta= $anggota_bukti_insta;
        $this->payment_file = $payment_file;
    }

    public function getTeamName(): string
    {
        return $this->team_name;
    }
    public function getAsalSekolah(): string
    {
        return $this->asal_sekolah;
    }
    public function getKetuaId(): string
    {
        return $this->ketua_id;
    }
    public function getKetuaTwibbon(): string
    {
        return $this->ketua_twibbon;
    }
    public function getAnggotaName(): string
    {
        return $this->anggota_name;
    }
    public function getAnggotaEmail(): string
    {
        return $this->anggota_email;
    }
    public function getAnggotaHp(): string
    {
        return $this->anggota_hp;
    }
    public function getAnggotaTwibbon(): string
    {
        return $this->anggota_twibbon;
    }

    public function getKetuaStdCard(): UploadedFile
    {
        return $this->ketua_student_card;
    }
    public function getKetuaPoster(): UploadedFile
    {
        return $this->ketua_poster;
    }
    public function getAnggotaStdCard(): UploadedFile
    {
        return $this->anggota_student_card;
    }
    public function getAnggotaPoster(): UploadedFile
    {
        return $this->anggota_poster;
    }
    public function getPaymentFile(): UploadedFile
    {
        return $this->payment_file;
    }
    public function getKetuaBuktiInsta(): UploadedFile
    {
        return $this->ketua_bukti_insta;
    }
    public function getAnggotaBuktiInsta(): UploadedFile
    {
        return $this->anggota_bukti_insta;
    }
}

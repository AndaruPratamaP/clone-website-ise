<?php

namespace App\Core\Application\Services\Moodle;

use App\Core\Domain\Models\Eloquents\Bionix\Bionix;
use App\Core\Domain\Models\Eloquents\BionixMoodle\BionixMoodle;
use App\Core\Domain\Models\Eloquents\BionixRoadshow\BionixRoadshow;

class BionixMoodleService
{
    public function __construct()
    {

    }

    public function getVerifiedBionix()
    {
        $id = 31;

        $pesertas = Bionix::where('status_type_id', $id)
            ->whereNotIn('ketua_id', function ($query) {
                $query->select('users_id')
                    ->from('bionix_moodle');
            })
            ->get();

        return $pesertas;
    }

    public function getVerifiedRoadshow()
    {
        $id = 28;

        $pesertas = BionixRoadshow::where('status_type_id', $id)
            ->whereNotIn('ketua_id', function ($query) {
                $query->select('users_id')
                    ->from('bionix_moodle');
            })
            ->get();

        return $pesertas;
    }

    public function formatUsername(string $team_name)
    {
        $team_name = strtolower($team_name);
        $team_name = str_replace(' ', '_', $team_name);

        return $team_name;
    }

    public function generatePassword()
    {
        return substr(str_shuffle('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'), 0, 8);
    }

    public function extractName(string $name)
    {
        $exploded = explode(' ', $name);
        $first_name = $exploded[0];
        $last_name = $exploded[count($exploded) - 1];

        return [
            'first_name' => $first_name,
            'last_name' => $last_name,
        ];
    }

    public function generate()
    {
        $generated = [];

        $pesertas = $this->getVerifiedBionix();

        foreach ($pesertas as $peserta) {
            $name = $this->extractName($peserta->user->full_name);

            $user_id = $peserta->ketua_id;
            $username = $this->formatUsername($peserta->team_name);
            $first_name = $name['first_name'];
            $last_name = $name['last_name'];
            $password = $this->generatePassword();
            $email = $peserta->user->email;

            $generated[] = [
                "users_id" => $user_id,
                "username" => $username,
                "firstname" => $first_name,
                "lastname" => $last_name,
                "email" => $email,
                "password" => $password,
                "course1" => "BIONIX",
                "role1" => "student"
            ];
        }

        $pesertas = $this->getVerifiedRoadshow();

        foreach ($pesertas as $peserta) {
            $name = $this->extractName($peserta->ketua->full_name);

            $user_id = $peserta->ketua_id;
            $username = $this->formatUsername($peserta->team_name);
            $first_name = $name['first_name'];
            $last_name = $name['last_name'];
            $password = $this->generatePassword();
            $email = $peserta->ketua->email;

            $generated[] = [
                "users_id" => $user_id,
                "username" => $username,
                "firstname" => $first_name,
                "lastname" => $last_name,
                "email" => $email,
                "password" => $password,
                "course1" => "BIONIX",
                "role1" => "student"
            ];
        }

        // input in bionix_moodle
        foreach ($generated as $peserta) {
            BionixMoodle::create($peserta);
        }

        return true;
    }

    public function getMyCredential(string $user_id)
    {
        $credential = BionixMoodle::where('users_id', $user_id)->first();

        return $credential;
    }
}

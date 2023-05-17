<?php

namespace App\Core\Domain\Repositories;

use App\Core\Domain\Models\Facades\GrandTalkshow\GrandTalkshow;
use Illuminate\Support\Facades\DB;

class SqlGrandTalkshowRepository
{
    public function getAll(): array
    {
        $rows = DB::table('grand_talkshow')->get();

        if (!$rows) {
            return null;
        }

        return $this->constructFromRows($rows->all());
    }

    public function find(int $id): ?GrandTalkshow
    {
        $row = DB::table('grand_talkshow')->where('id', $id)->first();

        if (!$row) {
            return null;
        }

        return $this->constructFromRows([$row])[0];
    }

    public function constructFromRows(array $rows): array
    {
        $GrandTalkshows = [];
        foreach ($rows as $row) {
            $GrandTalkshows[] = new GrandTalkshow(
                $row->id,
                $row->share_proof_file,
                $row->referral,
                $row->user_id,
            );
        }
        return $GrandTalkshows;
    }
}
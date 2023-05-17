<?php

namespace App\Core\Application\Services\GrandTalkshow;

use App\Core\Domain\Repositories\SqlGrandTalkshowRepository;
use App\Core\Domain\Models\Eloquents\GrandTalkshow\GrandTalkshow;
use Illuminate\Database\Eloquent\Collection;

class GrandTalkshowService
{
  private SqlGrandTalkshowRepository $repository;

  public function __construct(SqlGrandTalkshowRepository $repository)
  {
    $this->repository = $repository;
  }

  public function getAllPeserta($search)
  {

    $paginate = GrandTalkshow::whereHas('user', function ($q) use ($search) {
      $q->where('users.full_name', 'like', '%' . $search . '%')->orWhere('users.email', 'like', '%' . $search . '%');
    })->paginate(2);
    
    return $paginate;
  }
}

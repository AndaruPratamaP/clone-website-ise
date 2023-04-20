<?php

namespace App\Core\Domain\Models\Facades;

use App\Core\Domain\Models\Facades\User\UserId;

class UserAccount
{
    private UserId $user_id;

    /**
     * @param UserId $user_id
     */
    public function __construct(UserId|string $user_id)
    {
        if (is_string($user_id)) {
            $this->user_id = new UserId($user_id);
        } else {
            $this->user_id = $user_id;
        }
    }

    /**
     * @return UserId
     */
    public function getUserId(): UserId
    {
        return $this->user_id;
    }

}

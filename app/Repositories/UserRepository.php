<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository extends BaseRepository
{
    /**
     * construct
     */
    public function __construct(protected User $user)
    {
        $this->model = $user;
    }

}

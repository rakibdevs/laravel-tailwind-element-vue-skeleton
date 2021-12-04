<?php

namespace App\Services;

use App\Repositories\UserRepository;

class UserService
{
    public function __construct(
        protected UserRepository $userRepository
    ) {
    }
    /**
     * Register a user with Roles
     *
     * @param Request $request
     */
    public function register($request)
    {
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'user_type' => $request->user_type,
        ];

        return $this->userRepository->store($data);
    }
}

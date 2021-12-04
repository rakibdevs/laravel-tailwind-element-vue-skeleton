<?php

namespace App\Services;

use App\Repositories\UserRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;

class AuthService
{
    public function __construct(
        protected UserRepository $userRepository
    ) {
    }

    /**
     * Login
     *
     * @param Request $request
     */
    public function login($request): null|array
    {
        $credential = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        if (Auth::attempt($credential)) {
            $request->session()->regenerate();

            $user = auth()->user();
            $userLanding = $user->user_type == 'admin' ? url('/admin') : url('/');

            return [
                'user' => $user,
                'location' => $userLanding,
            ];
        }

        return null;
    }

    /**
     * Logout
     *
     * @return bool
     */
    public function logout($request): bool
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return true;
    }
}

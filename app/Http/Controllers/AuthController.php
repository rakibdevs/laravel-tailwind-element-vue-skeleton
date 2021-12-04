<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Services\AuthService;
use App\Services\UserService;
use Illuminate\Http\Request;

class AuthController extends BaseController
{
    public function __construct(
        protected AuthService $authService,
        protected UserService $userService
    ) {
    }

    /**
     * login page
     */
    public function index()
    {
        return view('pages.login');
    }

    /**
     * register a new user
     */
    public function register(RegisterRequest $request)
    {
        return $this->userService->register(($request));
    }

    /**
     * login
     */
    public function login(LoginRequest $request)
    {
        $data = $this->authService->login($request);

        if (!empty($data)) {
            return $this->successResponse($data);
        }

        return $this->failedResponse('The provided credentials do not match our records.');
    }

    /**
     * logout
     */
    public function logout(Request $request)
    {
        $this->authService->logout($request);

        return redirect('/');
    }
}

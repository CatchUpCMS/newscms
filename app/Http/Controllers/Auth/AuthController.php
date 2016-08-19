<?php

namespace NewsCMS\Http\Controllers\Auth;

use NewsCMS\Events\Auth\Login;
use NewsCMS\Events\Auth\Logout;
use NewsCMS\Http\Controllers\Controller;
use NewsCMS\Http\Requests\LoginRequest;

class AuthController extends Controller
{
    public function login(LoginRequest $request)
    {
        $credentials = [
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ];
        $event = event(new Login($credentials));
        if ($event) {
            return redirect()->intended();
        } else {
            return redirect('admin/login');
        }
    }

    public function logout()
    {
        $event = event(new Logout());
        if ($event) {
            return redirect('/');
        } else {
            return redirect('/admin');
        }
    }
}

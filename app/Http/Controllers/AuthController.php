<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function auth(Request $request)
    {
        preg_match("/^([a-z0-9_-]+\.)*[a-z0-9_-]+@[a-z0-9_-]+(\.[a-z0-9_-]+)*\.[a-z]{2,6}$/", $request->get('login'), $result);
//        dd($result);
        $login = !empty($result) ? 'email' : 'login';

        if (Auth::attempt([
            $login => $request->get('login'),
            'password' => $request->get('password')
        ])){
            return redirect('/landlord');
        }
        else {
            return redirect()->route('login');
        }
    }
}

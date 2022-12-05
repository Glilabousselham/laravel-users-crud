<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {


        $user = User::where([['email', $request->email], ['isadmin', true]])->first();


        if ($user && Auth::attempt($request->only(['email', 'password']))) {

            $request->session()->regenerate();
            return redirect()->intended('/users');
        }

        return back();
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/auth/login');
    }
}
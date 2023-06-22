<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Member;
use App\Models\User;


class AuthController extends Controller
{
    function login(){
        return view('login_member');
    }

    function login_admin(){
        return view('login_admin');
    }

    function auth(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        
        if (Auth::guard('member')->attempt($credentials)){
            $request->session()->regenerate();
            return redirect('beranda');
        }
        if (Auth::guard('web')->attempt($credentials)){
            $request->session()->regenerate();
            return redirect('product');
        }
    }

    function logout_admin(){
        Auth::logout();
        return redirect('login/admin');
    }

    function logout_member(){
        Auth::logout();
        return redirect('login/member');
    }

}

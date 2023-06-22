<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    function register(){
        return view('register_admin');
    }
    function create(Request $request){
        $validate = $this->validate($request,[
            'name' => 'required|string',
            'email' => 'required|string',
            'password' => 'required_with:confirmpassword|min:8|same:confirmpassword',
        ]);
        $validate['password']=bcrypt($request->password);
        User::create($validate);
        return redirect('login/admin');
    }
}

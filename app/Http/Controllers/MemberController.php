<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    function register(){
        return view('register_member');
    }
    function create(Request $request){
        $validate = $this->validate($request,[
            'nama' => 'required|string',
            'email' => 'required|string',
            'password' => 'required_with:confirmpassword|min:8|same:confirmpassword',
        ]);
        $validate['password']=bcrypt($request->password);
        Member::create($validate);
        return redirect('login/member');
    }
}

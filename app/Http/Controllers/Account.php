<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class account extends Controller
{
    public function show_register(){
        return view ('RegisterView');
    }

    public function show_login(){
        return view ('LoginView');
    }

    public function register_validate(Request $request){
        $request->validate([
            'username' => 'required|unique:accounts,username',
            'email' => 'required|email|unique:accounts,email',
            'password' => 'required|min:10',
            'password_confirm' => 'required|same:password',
        ]);
        
        $datareg = [
            'username' => $request->username,
            'email' =>$request->email,
            'password' => Hash::make($request->password_confirm),
        ];
    }
}

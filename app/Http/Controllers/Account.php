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
}

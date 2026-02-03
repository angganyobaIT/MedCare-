<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show_profile(){
        return view('ProfileView');
    }
}

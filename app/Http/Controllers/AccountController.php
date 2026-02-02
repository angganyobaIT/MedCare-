<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
use App\Models\Account; 
use Illuminate\Support\Facades\Hash;


class AccountController extends Controller
{
    public function show_register(){
        return view ('RegisterView');
    }

    public function show_login(){
        return view ('LoginView');
    }

    public function register_validate(Request $request) {
        $request->validate([
            'username_reg' => 'required|unique:accounts,username',
            'email_reg' => 'required|email|unique:accounts,email',
            'telephone_reg' => 'required|min:11',
            'password_reg' => 'required|min:10',
            // FIX: samakan dengan nama input password di atasnya
            'password_confirm_reg' => 'required|same:password_reg', 
        ]);
        
        $datareg = [
            'username'  => $request->username_reg,
            'telephone' => $request->telephone_reg,
            'email'     => $request->email_reg,
            'password'  => Hash::make($request->password_confirm_reg), // Gunakan password_reg
        ];

        // FIX: Gunakan nama model yang benar (Account, bukan Accounts)
        $user = Account::create($datareg);

        // Jangan lupa beri feedback setelah simpan!
        return redirect('/login')->with('success', 'Registrasi Berhasil!');
    }
}
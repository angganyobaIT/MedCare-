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

    // LOGIC REGISTER
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

    // LOGIC LOGIN 
    public function login_validate(Request $request) {
        // 1. Validasi Input
        $credentials = $request->validate([
            'username_log' => 'required',
            'password_log' => 'required',
        ]);

        // 2. Mapping data agar sesuai dengan nama kolom di database
        $datalog = [
            'username' => $request->username_log,
            'password' => $request->password_log,
        ];

        // 3. Proses Attempt Login
        if (Auth::attempt($datalog)) { 
            // 4. Regenerate session jika sukses
            $request->session()->regenerate();

            return redirect()->intended('DashboardUser'); 
            // intended() akan membawa user ke halaman yang tadinya ingin mereka buka
        } 

        // 5. Jika gagal, balikkan dengan pesan error
        return back()->withErrors([
            'login_error' => 'Username atau Password salah.',
        ])->onlyInput('username_log'); // Agar user tidak perlu ketik ulang username
    }
}
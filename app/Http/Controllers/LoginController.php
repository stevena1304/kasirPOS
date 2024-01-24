<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function index() {
        return view('login');
    }

    public function authenticate(Request $request)
    {

        $data = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        // jika user telah mengisi data
        if (Auth::attempt($data)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        } else {
            return back()->withErrors([
                'salah' => 'Email atau Password anda salah!!',
            ]);
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}

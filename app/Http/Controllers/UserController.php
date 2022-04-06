<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register() {
        $data['title'] = 'Register';
        return view('user/register', $data);
    }
    public function register_action(Request $request) {
        $user = new User([
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'password' => Hash::make($request->password),
        ]); 
        $user -> save();
        // return redirect()->('login');
        return redirect()->route('login');
    }
    public function login() {
        $data['title'] = 'Login';
        return view('user/login', $data);
    }
    public function login_action(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt([
            'nama' => $request->nama, 
            'password' => $request->password
        ])) {
            $request->session()->regenerate();
            return redirect('/');
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

<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    public function showLogin()
    {
        return view('auth.login');
    }


    public function login(Request $request)
    {
        $user = User::where('email', $request->email)->first();


        if ($user && Hash::check($request->password, $user->password)) {
            session(['user' => $user]);
            return redirect()->route('dashboard');
        }


        return back()->with('error', 'Email atau password salah!');
    }


    public function logout()
    {
        session()->forget('user');
        return redirect()->route('login');
    }
}
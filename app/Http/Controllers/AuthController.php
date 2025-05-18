<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function showLogin()
    {
        return view('auth.login');
    }


    public function login(Request $request)
    {
        // Jika permintaan dari API (JSON)
        if ($request->wantsJson()) {
            $credentials = $request->only('email', 'password');

            if (!$token = JWTAuth::attempt($credentials)) {
                return response()->json(['error' => 'Unauthorized'], 401);
            }

            return response()->json([
                'access_token' => $token,
                'token_type' => 'bearer',
                'user' => auth()->user()
            ]);
        }
        // Jika permintaan dari web (form biasa)
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

    public function me()
    {
        return response()->json(auth()->user());
    }

}
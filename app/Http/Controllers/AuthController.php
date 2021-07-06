<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\MessageBag;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email|exists:users',
            'password' => 'required',
        ]);

        if (! auth()->attempt($data)) {

            $errors = new MessageBag(['password' => 'Incorrect Password .']);

            return back()->withErrors($errors)->withInput();

        }

        return redirect()->route('home');
    }

    public function register(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email|unique:users',
            'name' => 'required|max:25',
            'password' => 'required|min:8|confirmed'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        auth()->attempt($request->only(['email' , 'password']));

        return redirect()->route('home');

    }

    public function logout()
    {
        Auth::logout();

        session()->regenerateToken();

        return redirect()->route('home');
    }
}

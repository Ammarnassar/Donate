<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
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

        if (! auth()->attempt($data , true)) {

            $errors = new MessageBag(['password' => 'Incorrect Password .']);

            return back()->withErrors($errors)->withInput();

        }

        if (auth()->user()->role) {
            return redirect()->route('admin.index');
        } else {
            return redirect()->route('home');
        }

    }

    public function logout()
    {
        Auth::logout();

        session()->regenerateToken();

        return redirect()->route('home');
    }
}

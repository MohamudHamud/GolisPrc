<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Hash;

class AuthController extends Controller
{
   
    public function login(Request $request) {
        
        return view('auth.login');
    }

    public function Auth_login(Request $request) {
        

       
        $remember = $request->has('rememberMe');

        // Attempt to authenticate the user
        if (Auth::attempt(['Email' => $request->Email, 'password' => $request->password], $remember)) {
            // Authentication passed, redirect to intended page
            return redirect()->intended('/dashboard')->with('success', 'Welcome back!');
        }

        // Authentication failed, redirect back with an error message
        return back()->withErrors([
            'Email' => 'The provided credentials do not match our records.',
        ])->withInput($request->only('Email')); // Retain the email input
    }

    public function logOut() {
        Auth::logout();
        return redirect('/')->with('success', 'Logged Out Successfully');
    }
}
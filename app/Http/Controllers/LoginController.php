<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function login()
    {
        return view("Login.login_form");
    }

    public function login_check(Request $request)
    {
        $credentials = $request->only('email', 'password');

        // Check email + password
        if (Auth::attempt($credentials)) {

            // Login success
            return redirect()->route('admin.home');
        }

        // Login failed
        return back()->withErrors([
            'email' => 'Invalid email or password.',
        ]);
    }
}

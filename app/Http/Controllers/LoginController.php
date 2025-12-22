<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class LoginController extends Controller
{
    //
    public function showLogin()
    {
        if (session()->has('admin_logged_in')) {
            return redirect('admin/AdminDash');
        }

        return view('admin.login');
    }


    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();

        if ($user && Hash::check($request->password, $user->password)) {

            session()->put('admin_logged_in', true);
            session()->put('admin_id', $user->id);
            return redirect('/admin/AdminDash');

        }

        return back()->with('error', 'Invalid email or password!');
    }

    public function logout()
    {
        session()->forget('admin_logged_in');
        return redirect('/admin/login');
    }

    public function dashboard()
    {

        $blogs = Blog::latest('id')->take(6)->get();

        $admin = User::find(session('admin_id'));

        return view('admin.AdminDash', compact('blogs', 'admin'));
    }
}

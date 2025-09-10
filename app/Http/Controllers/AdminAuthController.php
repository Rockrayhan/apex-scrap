<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminAuthController extends Controller
{

    public function dashboard()
    {
        $blogs = Blog::all();
        return view('dashboard', compact('blogs'));
    }


    public function showLoginForm()
    {
        return view('admin.login');
    }


    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $admin = Admin::where('email', $request->email)->first();

        if ($admin && Hash::check($request->password, $admin->password)) {
            session(['admin_logged_in' => true, 'admin_id' => $admin->id]);
            return redirect()->route('dashboard')->with('success', 'Welcome admin!');
        }

        return back()->withErrors(['Invalid email or password.']);
    }



    public function logout()
    {
        session()->forget(['admin_logged_in', 'admin_id']);
        return redirect()->route('admin.login')->with('success', 'Logged out successfully.');
    }



    public function showChangePasswordForm()
    {
        return view('admin.change-password');
    }



    public function changePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:6|confirmed',
        ]);

        $admin = Admin::find(session('admin_id'));

        if (!Hash::check($request->current_password, $admin->password)) {
            return back()->withErrors(['current_password' => 'Current password is incorrect']);
        }

        $admin->password = Hash::make($request->new_password);
        $admin->save();

        return redirect()->route('dashboard')->with('success', 'Password changed successfully');
    }
}

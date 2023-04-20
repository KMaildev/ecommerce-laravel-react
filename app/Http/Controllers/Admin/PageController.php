<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{

    public function showLogin()
    {
        return view('admin.login');
    }

    public function submitLogin(Request $request)
    {
        request()->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $admin = Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'));
        return $admin;
    }


    public function adminLogout()
    {
        Auth::logout();
        return redirect()->route('showLogin');
    }


    public function showDashboard()
    {
        return view('admin.dashboard');
    }
}

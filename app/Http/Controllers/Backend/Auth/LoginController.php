<?php

namespace App\Http\Controllers\Backend\Auth;

use App\Http\Controllers\Backend\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return Auth::guard('admin')->check() ? redirect()->route('dashboard') :  view('backend.auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only(['email', 'password']);
        if (Auth::guard('admin')->attempt($credentials))
        {
            return redirect()->route('dashboard');
        }
        else {
            return redirect()->back()->with('error', __('wrong'));
        }
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('login.index');
    }
}

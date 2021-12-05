<?php

namespace App\Http\Controllers\Frontend;

// use App\Http\Controllers\Controller;

use App\Http\Requests\User\UserRequestAdd;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('frontend.auth.account');
    }

    public function submitLogin(Request $request)
    {
        $credentials = $request->only('email', 'password');
        // dd($credentials);
        if (Auth::attempt($credentials)) {
            
            return redirect()->route('home');
        } else {
            return redirect()->back()
                ->withErrors('Dang nhap that bai');
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    public function register()
    {
        return view('frontend.auth.register');
    }

    public function submitRegister(Request $request)
    {
        // if ($request->fails()) {
        //     return back()->withErrors($request)->withInput();
        // }
        $sql = User::where('email', $request->email)->first();
        // dd($sql);
        if (!$sql) {
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = $request->password;
            $user->phone_number = $request->phone_number;
            $user->address = $request->address;
            $user->save();
            return redirect()
                ->route('login')
                ->withSuccess('request success');
        } else {
            return back()
                ->withErrors('Tên tài khoản đã tồn tại');
        }
    }
}

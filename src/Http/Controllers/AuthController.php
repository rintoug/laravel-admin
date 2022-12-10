<?php

namespace Rintoug\LaravelAdmin\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        if(Auth::user()) {
            return Redirect('admin/dashboard');
        }
        return view('laravel-admin::admin.login', []);

    }

    public function loginPost(Request $request)
    {

        $validator = $request->validate([
            'email'     => 'required',
            'password'  => 'required|min:6'
        ]);

        $attributes = $request->only(['email', 'password']);
        if (Auth::attempt($attributes)) {
            if(Auth::user()->type == 'admin') {
                return redirect()->route('laravel-admin.admin.dashboard');
            }
            else {
                return redirect()->route('home');
            }
        }
        else {
            return redirect()->back()->withErrors("Login Failed")->withInput();
        }
    }
    public function dashboard(Request $request)
    {
        if(Auth::user() == null) {
            return Redirect('admin/login');
        }
        return view('laravel-admin::admin.dashboard', []);

    }

    public function logout() {
        Session::flush();
        Auth::logout();
        return Redirect('admin/login');
    }


}

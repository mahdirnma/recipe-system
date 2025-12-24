<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginUserRequest;
use App\Http\Requests\RegisterUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginForm(){
        return view('auth.login');
    }

    public function login(LoginUserRequest $request)
    {
        $credentials = $request->only('email', 'password');
        if (!Auth::attempt($credentials)) {
            return redirect()->back()->with('error', 'Invalid Credentials');
        }
        return redirect()->route('home');
    }
    public function registerForm()
    {
        return view('auth.register');
    }
    public function register(RegisterUserRequest $request){
        $user=User::create($request->validated());
        if($user){
            Auth::login($user);
        }
        return redirect()->route('login.form');
    }
    public function logout(){
        Auth::logout();
        return to_route('login.form');
    }
}

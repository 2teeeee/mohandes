<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login(): View {
        return view("user.login");
    }

    public function authenticate(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'mobile' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('home');
        }

        return back()->withErrors([
            'mobile' => 'اطلاعات وارد شده صحیح نمی باشد.',
        ])->onlyInput('mobile');
    }


    public function register(): View {
        return view("user.register");
    }

    public function userDefine(Request $request): RedirectResponse
    {
        $inputs = $request->validate([
            'name'      => ['required'],
            'mobile'    => ['required'],
            'password'  => ['required'],
        ]);

        $user = User::create([
            'name'      => $request->input("name"),
            'mobile'    => $request->input("mobile"),
            'password'  => $request->input("password"),
        ]);;

        Auth::login($user);
        $request->session()->regenerate();
        return redirect()->intended('home');
    }
}

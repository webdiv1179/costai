<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class LoginController extends Controller
{
    //
    public function showlogin()
    {
        return view('LandingPage.index');
    }
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'phone' => ['required'],
            'password' => ['required']
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/')->with('success', 'تم تسجيل الدخول بنجاح');
        }

        return back()->withErrors(['phone' => 'رقم الهاتف أو كلمة المرور غير صحيحة']);
    }




    public function register(Request $request)
    {
        $validated = $request->validate([
            'phone' => 'required|unique:users',
            'password' => 'required|confirmed|min:6',
            'gender' => 'required|in:male,female',
        ]);



        $user = User::create([
            'phone' => $validated['phone'],
            'password' => bcrypt($validated['password']),
            'gender' => $validated['gender'],
        ]);

        // dd($validated,$user);

        Auth::login($user);

        return redirect()->back()->with('success', 'تم إنشاء الحساب بنجاح');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->with('success', 'تم تسجيل الخروج');
    }
}

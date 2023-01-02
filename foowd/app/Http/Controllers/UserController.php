<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register()
    {
        return view('register');
    }
    public function login()
    {
        $data['title'] = 'Login';
        return view('login', $data);
    }
    public function register_action(Request $request)
    {
        $request->validate([
            'Email' => 'required|unique:users',
            'Name' => 'required',
            'Number' => 'required',
            'Date'=>'required',
            'Password' => 'required',
            'Password2' => 'required|same:Password',
        ]);

        $user = new User([
            'email' => $request->Email,
            'nama' => $request->Name,
            'no_hp' => $request->Number,
            'birth' => $request->Date,
            'password' => Hash::make($request->Password),
        ]);
        $user->save();

        return redirect()->route('login')->with('success', 'Registration success. Please login!');
    }
    public function login_action(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        if (Auth::attempt(['email' => $request->Email, 'password' => $request->Password])) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        return back()->withErrors([
            'password' => 'Wrong email or password',
        ]);
    }

}

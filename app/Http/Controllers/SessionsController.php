<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', [
            'except' => ['show', 'create', 'store']
        ]);

        $this->middleware('guest', [
            'only' => ['create']
        ]);
    }
    public function create()
    {
        return view('sessions.create');
    }

    public function store(Request $request)
    {
        $crenditials = $this->validate($request, [
            'email' => 'required|email|max:255',
            'password' => 'required|min:6',
        ]);

        if (Auth::attempt($crenditials, $request->has('remember'))) {
            session()->flash('success', 'Welcome back!');
            $fallback = route('users.show', Auth::user());
            return redirect()->intended($fallback);
        }

        session()->flash('danger', 'Incorrect email or password, please try again.');
        return redirect()->back()->withInput();
    }

    public function destroy()
    {
        Auth::logout();
        session()->flash('success', 'Log out successfully.');
        return redirect('login');
    }
}

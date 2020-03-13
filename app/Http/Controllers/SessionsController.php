<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionsController extends Controller
{
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
            return redirect()->route('users.show', ['user' => Auth()->user()]);
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

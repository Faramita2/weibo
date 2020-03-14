<?php

namespace App\Http\Controllers\auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\PasswordReset;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Mockery\Generator\StringManipulation\Pass\Pass;

class ResetPasswordController extends Controller
{
    public function showResetForm(Request $request)
    {
        PasswordReset::where('token', $request->token)->firstOrFail();
        return view('auth.passwords.reset');
    }

    public function reset(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email|max:255',
            'password' => 'required|confirmed|min:6',
        ]);

        $user = User::where('email', $request->email)->firstOrFail();
        $user->password = bcrypt($request->password);
        $user->save();

        PasswordReset::where('email', $request->email)->delete();
        Auth::login($user);
        session()->flash('success', 'You have updated your password successfully!');
        return redirect()->route('users.show', $user);
    }
}

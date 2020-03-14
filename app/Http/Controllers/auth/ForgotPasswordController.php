<?php

namespace App\Http\Controllers\auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\ResetPassword;
use App\Models\User;
use App\Models\PasswordReset;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class ForgotPasswordController extends Controller
{
    public function showLinkRequestForm()
    {
        return view('auth.passwords.email');
    }

    public function sendResetLinkEmail(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email|max:255'
        ]);

        $user = User::where('email', $request->email)->first();

        if ($user) {
            $token = Str::random(20);
            PasswordReset::create([
                'email' => $user->email,
                'token' => $token,
                'created_at' => now()
            ]);

            Mail::to($request->email)->send(new ResetPassword($token));
            session()->flash('success', 'An link to reset password has been sent to your email.');
            return back();
        }

        session()->flash('danger', 'This email not exists, please check again.');
        return back();
    }
}

@component('mail::message')
# Reset your password

Click below button to reset your password.

@component('mail::button', ['url' => route('password.reset', $token)])
Reset password
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

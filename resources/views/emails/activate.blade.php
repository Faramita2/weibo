@component('mail::message')
# Welcome to Weibo app

Please click following button to activate your account.

@component('mail::button', ['url' => route('activate_email', $user->activation_token)])
Activate
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

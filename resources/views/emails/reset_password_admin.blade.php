Hi {{ $name }},

<br>
<p>You are receiving this email because we received a password reset request for your account.</p>
<p><a href={{url(config('app.url').route('admin.passwordreset', ['otp' => $otp, 'email' => $email], false))}}>Reset Password</a></p>
<p>If you did not request a password reset, no further action is required.</p>

<p>Thanking You</p>

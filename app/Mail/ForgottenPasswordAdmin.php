<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ForgottenPasswordAdmin extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $otp, $email)
    {
        $this->name = $name;
        $this->otp = $otp;
        $this->email = $email;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.password_reset_admin')
        ->from('noreply.webanix@gmail.com', 'Vaibhav')
        ->subject('Reset Password Notification')
        ->line('You are receiving this email because we received a password reset request for your account.')
        ->action('Reset Password', url(config('app.url').route('admin.passwrdreset', ['token' => $this->otp, 'email' => $this->email], false)))
        ->line('If you did not request a password reset, no further action is required.');

        // return (new MailMessage)
        //     ->subject(Lang::get('Reset Password Notification'))
        //     ->line(Lang::get('You are receiving this email because we received a password reset request for your account.'))
        //     ->action(Lang::get('Reset Password'), url(config('app.url').route('password.reset', ['token' => $this->token, 'email' => $notifiable->getEmailForPasswordReset()], false)))
        //     ->line(Lang::get('This password reset link will expire in :count minutes.', ['count' => config('auth.passwords.'.config('auth.defaults.passwords').'.expire')]))
        //     ->line(Lang::get('If you did not request a password reset, no further action is required.'));
        // }
    }
}

<?php

namespace App\Mail;
// Contoh Namespace di MailgunTransportFactory.php


use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;


class ResetPasswordMail extends Mailable
{
    use Queueable, SerializesModels;

    public $resetToken;  // Deklarasikan variabel di sini

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($resetToken)
    {
        $this->resetToken = $resetToken;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('reset-password');
    }
}

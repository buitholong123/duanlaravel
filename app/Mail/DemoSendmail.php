<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class DemoSendmail extends Mailable
{
    use Queueable, SerializesModels;
    public $name;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->name = "FPT Polytechnic";
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mails.mail');
    }
}

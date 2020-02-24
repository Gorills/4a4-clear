<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailClass extends Mailable
{
    use Queueable, SerializesModels;

    protected $name;
    protected $tel;
    protected $msg;



    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $tel, $msg)
    {
        $this->name = $name;
        $this->tel = $tel;
        $this->msg = $msg;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.contact-mail');
    }
}

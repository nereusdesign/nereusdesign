<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactUs extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($stuff)
    {
        $this->message = $stuff->message;
        $this->fromEmail = $stuff->email;
        $this->fromName = $stuff->name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('contact@nereusdesign.com')->subject('Contact Us')->view('mail.basicContact')->with(['msg' => $this->message,'fromName' => $this->fromName,'fromEmail' => $this->fromEmail]);
    }
}

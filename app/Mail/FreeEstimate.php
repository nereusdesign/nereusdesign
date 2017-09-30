<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class FreeEstimate extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($stuff)
    {
      $this->fromEmail = $stuff->email;
      $this->fromName = $stuff->name;
      $this->phone = $stuff->phone;
      $this->website = $stuff->website;
      $this->onlineSale = $stuff->onlineSale;

      $this->webdesign = $stuff->webdesign;
      $this->seo = $stuff->seo;
      $this->marketing = $stuff->marketing;

      $this->message = $stuff->goals

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('contact@nereusdesign.com')->subject('Estimate Request')->view('mail.basicContact')->with(['msg' => $this->message,'fromName' => $this->fromName,'fromEmail' => $this->fromEmail]);
    }
}

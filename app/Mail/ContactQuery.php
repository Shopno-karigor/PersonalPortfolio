<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactQuery extends Mailable
{
    use Queueable, SerializesModels;
    //Custom added
    public $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        //Custom added
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //
        return $this->from('portfolio@ratul.info', 'Portfolio Mailer')
        ->subject('Contact Query')
        ->view('frontend.contact-query');
    }
}

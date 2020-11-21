<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Contact extends Mailable
{
    use Queueable, SerializesModels;

    public $sender_name, $sender_email, $sender_message;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct( $sender_name, $sender_email, $sender_message)
    {
        $this->sender_name = $sender_name;
        $this->sender_email = $sender_email;
        $this->sender_message = $sender_message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->from($this->sender_email, $this->sender_name)
            ->markdown('mail.contact')
            ->with('message', $this->sender_message);
    }
}

<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Storage;

class Registration extends Mailable
{
    use Queueable, SerializesModels;

    public object $registrant;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($registrant)
    {
        $this->guest = $registrant;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $file = Storage::get('business_planning.ics');

        return $this->subject('Registration Confirmation')
            ->markdown('email.registration')
            ->attach($file, array('mime' => "text/calendar"));
    }
}


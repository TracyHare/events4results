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
        $this->registrant = $registrant;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $file = 'events/business_planning.ics';

        return $this->subject('Registration Confirmation')
            ->replyTo('rsvp@remax-results.com')
            ->markdown('email.registration')
            ->attach($file, ['mime' => "text/calendar"]);
    }
}


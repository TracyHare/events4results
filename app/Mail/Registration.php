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
        if ($this->registrant->class == 'Federal Fair Housing' && $this->registrant->lunch == 'No Lunch') {
            $file = 'events/2022-01-25-1.ics';
        } else if ($this->registrant->class == 'Federal Fair Housing' && $this->registrant->lunch != 'No Lunch') {
            $file = 'events/2022-01-25-1-l.ics';
        } else if ($this->registrant->class == 'Smart Growth for the 21st Century' && $this->registrant->lunch == 'No Lunch') {
            $file = 'events/2022-01-25-2.ics';
        } else if ($this->registrant->class == 'Smart Growth for the 21st Century' && $this->registrant->lunch != 'No Lunch') {
            $file = 'events/2022-01-25-2-l.ics';
        } else {
            $file = 'events/2022-01-25.ics';
        }

        return $this->subject('Registration Confirmation')
            ->replyTo('rsvp@remax-results.com')
            ->markdown('email.registration')
            ->attach($file, ['mime' => "text/calendar"]);
    }
}


<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EventBookingOrder extends Mailable
{
    use Queueable, SerializesModels;
    public $name;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $ticket_no, $message)
    {
        $this->name = $name;
        $this->ticket_no = $ticket_no;
        $this->messages = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.event_order')
        ->from('noreply@28svllp.com', 'Vaibhav')
        ->subject('Event Ticket Booking')
        ->with([
            'messages' => $this->messages
        ]);
    }
}

<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CustomEmailId extends Mailable
{
    use Queueable, SerializesModels;
    public $name;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($ticket_no, $message)
    {
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
        if(!empty($ticket_no))
        {
            $subject = 'Enquiry Ticket ['.$this->ticket_no.']';
        }
        else{
            $subject = 'Enquiry received';
        }
        return $this->markdown('emails.enquiry_reply_from_admin')
        ->from('noreply@28svllp.com', 'Vaibhav')
        ->subject($subject)
        ->with([
            'messages' => $this->messages
        ]);

    }
}

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
    public function __construct($ticket_no,$message,$name,$mobile,$email)
    {
		$this->ticket_no = $ticket_no;
		$this->messages = $message;
		$this->mobile = $mobile;
		$this->email = $email;
		$this->name = $name;
		
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        if(!empty($this->ticket_no))
        {
            $subject = 'Enquiry Ticket ['.$this->ticket_no.']';
        }
        else{
            $subject = 'Enquiry received';
        }
		//dd($this->name);
        return $this->markdown('emails.enquiry_reply_from_admin')
        ->from('noreply@28svllp.com', 'Vaibhav')
        ->subject($subject)
        ->with([
            'messages' => $this->messages,
			'name'=>$this->name,
			'mobile'=>$this->mobile,
			'email'=>$this->email
        ]);

    }
}

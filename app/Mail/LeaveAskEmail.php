<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class LeaveAskEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $data, $recipient_address, $subject, $recipient_name, $sender_address, $sender_name;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data, $sender_address, $subject, $sender_name, $recepient_name)
    {
        $this->data = $data;
        $this->sender_address = $sender_address;
        $this->subject = $subject;
        $this->sender_name = $sender_name;
        $this->recepient_name =$recepient_name;
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.mail')
                    ->from($sender_address, $sender_name)
                    ->subject($subject)
                    ->with([ 'recepient_name'=>$this->recepient_name,'application_message' => $this->data['message'] ]);
      
    }
}

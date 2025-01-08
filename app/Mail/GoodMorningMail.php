<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class GoodMorningMail extends Mailable
{
    use Queueable, SerializesModels;
    public $data;

    /**
     * Create a new message instance.
     */
    public function __construct($data)
    {
        
        
        $this->data = $data;
    }

    
    public function build()
    {
        return $this->subject($this->data['subject'])
        ->view('emails.morning-mail')
        ->with('data', $this->data);
    }
}

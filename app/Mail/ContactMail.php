<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $emails;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($emails)
    {
        $this->emails = $emails;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('New Contact Mail')
                    ->view('email_template')
                    ->with('emails', $this->emails);
                    
    }
}









/*class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $validatedData;
    public $firstname;
    //public $lastname;
    public $phone;
    public $email;
    public $messageLines;//

    /**
     * Create a new message instance.
     *
     * @return void
     */
    /*public function __construct($validatedData)
    {
        $this->firstname = $validatedData['firstname'];
        //$this->lastname =  $validatedData['lastname'];
        $this->phone = $validatedData['phone'];
        $this->email = $validatedData['email'];
        $this->messageLines = explode("\n", $validatedData['message']);
    }*/

    /**
     * Build the message.
     *
     * @return $this
     */
   // public function build()
    //{
        
    //}
//}
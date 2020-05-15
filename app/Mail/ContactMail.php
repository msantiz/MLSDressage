<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $email;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($request)
    {
        $this->email=$request;

        /*if(empty($this->input['email'])){
            $this->input['email'] = 'santizml@gmail.com'
        }*/
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('New Contact Mail')
                    ->from($this->email->email, $this->email->name)
                    ->to('santizml@gmail.com')
                    ->view('contactmail');
    }
    
    public function test_input(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:30',
            'email' => 'required|max:35',
            'phone' => 'required|numeric',
            'message' => 'required|alpha_num'
        ]);
        \App\Form::create($validatedData);
        return response()->json('Form is successfuly validated');
    }
}

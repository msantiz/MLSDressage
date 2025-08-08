<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;

use App\Mail\ContactMail;

use Illuminate\Http\RedirectResponse;

use Illuminate\Support\Facades\Mail;

class ContactMailController extends Controller {

//public function index() {

      //return view('contact');

//}


/** * Send Contact Email Function via Mail. * * @return RedirectResponse */

public function contactSendMail(ContactRequest $request): RedirectResponse {

         $validatedData = $request->validated(/*[
        'firstname' => 'required|string|max:100',
        'email'     => 'required|email:rfc,dns|max:255',
        'phone'     => 'nullable|string|max:30',   // <= allow null
        'message'   => 'required|string|max:5000',
         ]*/);

         Mail::to("mlsdressage@gmail.com")->send(new \App\Mail\ContactMail($validatedData));

  
         return redirect('/contact2')->with('success', 'Thanks for reaching out - we will be in touch soon!');
         //return back();
         

}


}

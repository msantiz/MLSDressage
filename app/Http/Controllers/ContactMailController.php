<?php

namespace App\Http\Controllers;

//use App\Http\Requests\ContactRequest;

use App\Mail\ContactMail;
//use Mail;
use Illuminate\Http\Request;

//use Illuminate\Http\RedirectResponse;

use Illuminate\Support\Facades\Mail;

class ContactMailController extends Controller
{
    function index()
    {
       return view('contactus');
    }

    function send(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required | email',
            'message' => 'required'
        ]);

        $data = array(
            'name' => $request->name,
            'message' => $request->message
        );

        Mail::to('mlsdressage@gmail.com')->send(new ContactMail($data));
        return back()->with('success', 'Thanks for contacting us!');
    }
}





//public function index() {

      //return view('contact2');
      //return view('contactus');

//}


/** * Send Contact Email Function via Mail. * * @return RedirectResponse */

/*public function contactSendMail(ContactRequest $request): RedirectResponse {

         $validatedData = $request->validated();

         Mail::to('santizml@gmail.com')->send(new ContactMail($validatedData));

         //Mail::to('your_email@gmail.com')->send(new SendMail($testMailData));

  
         header('Location: contact2');
exit();
         //return back();
         

}*/




<?php
<<<<<<< HEAD
=======

>>>>>>> 62c50caed168900022e23d697654e431ccb3d5a0
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use App\Http\Requests\Contact;
use Illuminate\Http\Request;

<<<<<<< HEAD

=======
>>>>>>> 62c50caed168900022e23d697654e431ccb3d5a0
class ContactController extends Controller
{
    public function store(Contact $request){
        Log::emergency("Made it to the store");
        Mail::send(new ContactMail($request));
        return redirect('/');
    }
<<<<<<< HEAD
}
=======
}
>>>>>>> 62c50caed168900022e23d697654e431ccb3d5a0

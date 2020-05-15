<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use Illuminate\Http\Requests\Contact;
use Illuminate\Http\Request;


class ContactController extends Controller
{
    public function store(contact $request){
        Log::emergency("Made it to the store");
        Mail::send(new ContactMail($request));
        return redirect('/');
    }
}
<?php

namespace Kkthen2002\Contact2\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Kkthen2002\Contact2\Models\Contact;

// use Bitfumes\Contact\Mail\ContactMailable;
// use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact::contact');
    }

    public function send(Request $request)
    {
        //Mail::to(config('contact.send_email_to'))->send(new ContactMailable($request->message, $request->name));
        Contact::create($request->all());
        return redirect(route('contact'));
    }
}

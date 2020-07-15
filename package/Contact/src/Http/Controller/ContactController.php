<?php

namespace Yadav\Contact\Http\Controller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yadav\Contact\Models\Contact;
use Illuminate\Support\Facades\Mail;
use Yadav\Contact\Mail\ContactMailable;


class ContactController extends Controller
{

    public function index () 
    {
 
        return view('contact::contact');

    }

    public function send (Request $request) 
    {

        Mail::to(config('contact.send_mail_to'))->send(new ContactMailable($request->message));
        Contact::create($request->all());
        return \redirect()->route('contact');

    }

}

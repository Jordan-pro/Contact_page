<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Mail;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact()
    {
        return view('contact-us');
    }

    public function sendEmail(Request $request)
    {
        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'number' => $request->number,
            'msg' => $request->msg
        ];


        Mail::to('freejordan09@gmail.com')->send(new ContactMail($details));
        return back()->with('message_sent', 'Your message has been successdully!');
    }
}

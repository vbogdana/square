<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Mail;

class ContactController extends Controller
{
    function contact(Request $request) {
        $subject = $request->input('subject');
        
        $data = [
           'firstName' => $request->input('firstName'),
           'lastName' => $request->input('lastName'),
           'email' => $request->input('email'),
           'content' => $request->input('content')
        ];
        
        
        Mail::send('emails.reservation', $data, function ($message)
        {
            $message->to('bveselinovic555@gmail.com');
            $message->subject('Website Reservation');
        });

    }
}

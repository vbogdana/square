<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Mail;

class ContactController extends Controller
{
    function reserve(Request $request) {
        
        $data = [
           'firstName' => $request->input('firstName'),
           'lastName' => $request->input('lastName'),
           'phone' => $request->input('phone'),
           'people' => $request->input('people'),
           'seating' => $request->input('seating'),
           'day' => $request->input('day'),
           'content' => $request->input('content')
        ];
        
        
        Mail::send('emails.reservation', $data, function ($message)
        {
            $message->to('bveselinovic555@gmail.com');
            $message->subject('Website Reservation Club Square');
        });
        
        if( count(Mail::failures()) > 0 ) {
            return view('success', ['success' => "We are very sorry, but Your reservation wasn't successful!"]);
        } else {
            return view('success', ['success' => 'Your reservation was successful!']); 
        }

    }
}

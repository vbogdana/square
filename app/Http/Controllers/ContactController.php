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
        
        echo "Uspesna rezervacija";

    }
}

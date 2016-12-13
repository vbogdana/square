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

        /*
        $emails = ['topbelgrade@gmail.com', 'beba_sadalla@yahoo.co.uk'];
        Mail::send('emails.reservation', $data, function ($message) use ($emails)
        {
            $message->to($emails);
            $message->subject('Website Reservation Club Square');
        });
        */
        
        Mail::send('emails.reservation', $data, function ($message)
        {
            $message->to('topbelgrade@gmail.com')->subject('Website Reservation Club Square');
            $message->to('beba_sadalla@yahoo.co.uk')->subject('Website Reservation Club Square');
        });
        
        if( count(Mail::failures()) > 0 ) {
            return view('result', ['result' => "fail"]);
            //return redirect()->route('online-reservation', ['result' => "fail"]);
        } else {
            return view('result', ['result' => "success"]); 
            //return redirect()->route('online-reservation', ['result' => "success"]);
        }

    }
}

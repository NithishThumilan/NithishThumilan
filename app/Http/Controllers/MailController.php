<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFromMail;

class MailController extends Controller
{
    

     public function sendContactMail(Request $request){

        $contact_data = [];

        $contact_data['name'] = $request->input('name');
        $contact_data['email'] = $request->input('email');
        $contact_data['message'] = $request->input('message');



         Mail::to('nithishkumar47002@gmail.com')->send(new ContactFromMail($contact_data));
         return redirect()->back()->withSuccess('Email Send Successfully !');



     }


}

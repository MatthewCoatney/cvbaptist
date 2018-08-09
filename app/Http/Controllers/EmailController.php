<?php

namespace App\Http\Controllers;

use Mail;
use App\Mail\Mailtrap;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function send(Request $request){

                $emails = ['matthew@anewcreation.org', 'cvbc@sti.net'];

                $name = $request->input('name');

                $email = $request->input('email');
                $phone = $request->input('phone');
                $company = $request->input('company');
                $content = $request->input('content');

                Mail::send('emails.send',['name' => $name, 'email' => $email, 'phone' => $phone, 'company' => $company, 'content' => $content], function($message) use ($emails)
               {
                $message->to($emails)->subject('CVBaptist.org Contact Form');
               });



                // testing output
                return response()->view('emails.received');

    }
}

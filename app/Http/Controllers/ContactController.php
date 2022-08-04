<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Mail;

class ContactController extends Controller
{
    public function contact()
    {
        return view('contact',[
            'title' => 'Contact'
        ]);
    }

    public function sendEmail (Request $request)
    {
        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'phone' => $request->phone,
            'msg' => $request->msg
        ];

        Mail::to('astiyanurhayati18@gmail.com')->send(new ContactMail ($details) );
        return back()->with('message_sent', 'Terimaksih, Pesan anda sudah terkirim!');
    }
    
}

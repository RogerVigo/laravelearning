<?php

namespace App\Http\Controllers;

use App\Mail\Email;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{


    public function store()
    {
        request()->validate(['email' => 'required|email']);
        /*
               Mail::raw('It works', function ($message) {
                $message->to(request('email'))->subject('Hello There');
               });
        */
        Mail::to(request('email'))->send(new Email('shirts'));
        return redirect('/contact')->with('message', 'Email sent!');
    }


    public function show()
    {
        return view('contact.contact');
    }


}

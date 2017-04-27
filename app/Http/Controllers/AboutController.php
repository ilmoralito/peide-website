<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use App\Http\Requests\ContactEmailRequest;

class AboutController extends Controller
{
    public function index()
    {
        return view('about.index');
    }

    public function sendEmail(ContactEmailRequest $contactEmailRequest)
    {
        \Mail::to('mario.martinez@ucc.edu.ni')->send(new Contact(request()));

        session()->flash('message', 'Mensaje enviado. Te contactaremos pronto');
        return redirect()->route('about');
    }
}

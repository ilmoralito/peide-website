<?php

namespace App\Http\Controllers;

use App\Mail\Contact;

class AboutController extends Controller
{
    public function index()
    {
        return view('about.index');
    }

    public function sendEmail()
    {
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        \Mail::to('mario.martinez@ucc.edu.ni')->send(new Contact(request()));

        return redirect()->route('about');
    }
}

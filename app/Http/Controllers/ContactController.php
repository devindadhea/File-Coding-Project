<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function showForm() {
        $contacts = Contact::all();
        return view('contact', compact('contacts')
        );
    }
    public function sendEmail(Request $request)
    {
       $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ];

        Mail::to('devindadheaindira@gmail.com')
            ->send(new ContactMail($data));
        return redirect()->back()->with('success', 'Your message has been sent successfully!');

        // Mail::send('emails.contact', $data, function ($message) use ($data) {
        //     $message->to('devindadheaindira@gmail.com')->subject('Email from Laravel');
        // });
    }
}

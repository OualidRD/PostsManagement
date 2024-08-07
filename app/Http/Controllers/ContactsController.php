<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function contacts()
    {
        return view('contacts');
    }

    public function sendEmail(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'email' => 'required|email',
            'description' => 'required|string',
        ]);

        $details = [
            'title' => $request->title,
            'email' => $request->email,
            'description' => $request->description,
        ];

        Mail::to('oualidraidi0@gmail.com')->send(new ContactMail($details));

        return back()->with('success', 'Email sent successfully!');
    }
}

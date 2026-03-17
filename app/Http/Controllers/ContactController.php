<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMessage;


class ContactController extends Controller
{
    public function send(Request $request)
    {
        $data = $request->validate([
            'name' => ['required','min:2'],
            'email' => ['required','email'],
            'message' => ['required','min:5'],
        ]);

        Mail::to('test@email.com')->send(
            new ContactMessage($data)
        );

        return back()->with('success', 'Message sent successfully!');
    }
}

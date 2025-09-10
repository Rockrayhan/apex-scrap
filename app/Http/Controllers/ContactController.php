<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function showForm()
    {
        return view('frontend.contact');
    }

    public function send(Request $request)
    {
        $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        $myEmail = config('mail.from.address');
        $appName = config('app.name');

        // 1. Send email to admin / receiver
        Mail::raw(
            "Name: {$request->name}\nEmail: {$request->email}\n\nMessage:\n{$request->message}",
            function ($mail) use ($request, $myEmail ) {
                $mail->to($myEmail) // 👈 your email
                    ->subject($request->subject);
            }
        );

        // 2. Send auto-reply to the SENDER
        Mail::raw(
            "Dear {$request->name},\n\nThank you for contacting us. 
We have received your message and will get back to you shortly.\n\nBest Regards,\n{$appName}",
            function ($mail) use ($request) {
                $mail->to($request->email) // 👈 sender’s email
                    ->subject('We received your message');
            }
        );

        return back()->with('success', 'Your message has been sent successfully!');
    }
}





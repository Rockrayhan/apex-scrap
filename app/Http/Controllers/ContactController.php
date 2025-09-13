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

    //     public function send(Request $request)
    //     {
    //         $request->validate([
    //             'name'    => 'required|string|max:255',
    //             'email'   => 'required|email',
    //             'subject' => 'required|string|max:255',
    //             'message' => 'required|string',
    //         ]);

    //         $myEmail = config('mail.from.address');
    //         $appName = config('app.name');

    //         // 1. Send email to admin / receiver
    //         Mail::raw(
    //             "Name: {$request->name}\nEmail: {$request->email}\n\nMessage:\n{$request->message}",
    //             function ($mail) use ($request, $myEmail) {
    //                 $mail->to($myEmail) // 👈 your email
    //                     ->subject($request->subject);
    //             }
    //         );

    //         // 2. Send auto-reply to the SENDER
    //         Mail::raw(
    //             "Dear {$request->name},\n\nThank you for contacting us. 
    // We have received your message and will get back to you shortly.\n\nBest Regards,\n{$appName}",
    //             function ($mail) use ($request) {
    //                 $mail->to($request->email) // 👈 sender’s email
    //                     ->subject('We received your message');
    //             }
    //         );

    //         return back()->with('success', 'Your message has been sent successfully!');
    //     }



    public function send(Request $request)
    {
        // 1. Validate all new fields
        $request->validate([
            'name'            => 'required|string|max:255',
            'email'           => 'required|email',
            'scrap_category'  => 'required|string|max:255',
            'material_type'   => 'required|string|max:255',
            'estimated_weight' => 'required|string|max:255',
            'details'         => 'nullable|string',
        ]);

        $myEmail = config('mail.from.address');
        $appName = config('app.name');

        // 2. Send email to admin / receiver
        $adminMessage = "
Name: {$request->name}
Email: {$request->email}
Phone: " . ($request->phone ?? 'N/A') . "
Scrap Category: {$request->scrap_category}
Material Type: {$request->material_type}
Estimated Weight: {$request->estimated_weight}

Additional Details:
{$request->details}
";


        Mail::raw($adminMessage, function ($mail) use ($myEmail, $request) {
            $mail->to($myEmail)
                ->subject("New Scrap Inquiry from {$request->name}");
        });

        // 3. Send auto-reply to the sender
        $autoReply = "Dear {$request->name},\n\n"
            . "Thank you for contacting us. We have received your message regarding "
            . "{$request->scrap_category} ({$request->material_type}, {$request->estimated_weight}) and will get back to you shortly.\n\n"
            . "Best Regards,\n"
            . config('app.name');

        Mail::raw($autoReply, function ($mail) use ($request) {
            $mail->to($request->email)
                ->subject('We received your message');
        });

        return back()->with('success', 'Your message has been sent successfully!');
    }
}

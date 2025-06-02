<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $validated = $request->validate([
            'form_name'    => 'required|string|max:255',
            'form_email'   => 'required|email',
            'form_subject' => 'nullable|string|max:255',
            'form_phone'   => 'nullable|string|max:30',
            'form_message' => 'required|string',
            'g-recaptcha-response' => 'required|captcha',
        ]);

        Mail::to(env('COMPANY_EMAIL'))->send(new ContactFormMail($validated));

        return back()->with('success', 'Thank you for contacting us! We will get back to you soon.');
    }
}

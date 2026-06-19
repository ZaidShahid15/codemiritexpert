<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(ContactFormRequest $request)
    {
        Mail::to(env('CONTACT_MAIL_RECEIVER', '1zaidshaikh234@gmail.com'))->send(new ContactFormMail($request->validated()));
        return back()->with('success', "Your message has been sent! We'll get back to you within 24 hours.");
    }
}

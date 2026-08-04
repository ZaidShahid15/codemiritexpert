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

    public function audit(\Illuminate\Http\Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'website_url' => 'nullable|url|max:255',
            'business_type' => 'required|string|max:255',
        ]);

        $content = "New Free Website Audit Request\n\n";
        $content .= "Name: " . $validated['name'] . "\n";
        $content .= "Email: " . $validated['email'] . "\n";
        $content .= "Website URL: " . ($validated['website_url'] ?? 'Not provided') . "\n";
        $content .= "Business Type: " . $validated['business_type'] . "\n";

        Mail::raw($content, function ($message) use ($validated) {
            $message->to(env('CONTACT_MAIL_RECEIVER', '1zaidshaikh234@gmail.com'))
                    ->subject('New Website Audit Request from ' . $validated['name']);
        });

        return back()->with('audit_success', "Thanks! We'll send your audit within 24 hours.");
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactSubmissionRequest;
use App\Models\ContactSubmission;
use Illuminate\Http\RedirectResponse;

class ContactSubmissionController extends Controller
{
    /**
     * Persist a contact request and redirect back with feedback.
     */
    public function store(StoreContactSubmissionRequest $request): RedirectResponse
    {
        ContactSubmission::create([
            'name' => $request->string('name')->toString(),
            'email' => $request->string('email')->toString(),
            'phone' => $request->string('phone')->toString() ?: null,
            'subject' => $request->string('subject')->toString() ?: null,
            'message' => $request->string('message')->toString(),
            'agree_privacy' => $request->boolean('agree_privacy'),
            'agree_marketing' => $request->boolean('agree_marketing'),
            'ip_address' => $request->ip(),
            'user_agent' => $request->userAgent(),
            'source_page' => $request->headers->get('referer'),
        ]);

        return redirect()
            ->route('contact')
            ->with('status', 'Thank you. Your message has been received and our team will contact you shortly.');
    }
}

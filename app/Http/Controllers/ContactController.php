<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Http\Requests\ContactRequest;
use App\Mail\MailShipped;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Mail;

class ContactController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param ContactRequest $request
     * @return RedirectResponse|Redirector
     */
    public function store(ContactRequest $request)
    {
        $param = $request->validated();
        $contact = Contact::create($param);
        flash('Your message was successful send')->success();
        Mail::to('hita@gmail.com')->send(
            new MailShipped($contact));
        return redirect(route('home.page'));
    }
}

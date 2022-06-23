<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Mail\ContactForm;
use Illuminate\Support\Facades\Mail;

class MailController
{

    public function contact()
    {
        return view('contact');
    }

    public function contactForm(ContactFormRequest $request)
    {
        Mail::to('kkrut8803@gmail.com')->send(new ContactForm($request->validated()));
//        dd($request);
        return redirect(route('contact'));
    }
}

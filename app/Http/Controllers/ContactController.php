<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;

use App\Mail\Contact;

class ContactController extends Controller
{
    public function create() {
        return view('contacts');
    }

    public function store() {
        request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        // Mail::raw(request('message'), function ($message) {
        //     $message->from(request('email'), request('name'));
        //     $message->to('admin@gmail.com');
        // });

        Mail::to(request('email'))
            ->send(new Contact());

        // $data = ["JKS"];
        // Mail::send('mail.contact-me', [], function ($message) {
        //     $message->from(request('email'), request('name'));
        //     $message->to('admin@gmail.com');
        // });

        return redirect(route('contacts.create'))->with('message', 'Email sent');
    }
}

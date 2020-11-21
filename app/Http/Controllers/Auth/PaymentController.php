<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Events\Payment;
use App\Notifications\PaymentReceived;

class PaymentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('payment');
    }

    public function store()
    {
        // do the payment 

        Payment::dispatch();
        // request()->user()->notify(new PaymentReceived());
        // Notification::send(request()->user(), new PaymentReceived());

        return redirect(route('payment.create'));
    }
}

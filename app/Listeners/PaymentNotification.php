<?php

namespace App\Listeners;

use App\Events\Payment;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Notifications\PaymentReceived;

class PaymentNotification
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  Payment  $event
     * @return void
     */
    public function handle(Payment $event)
    {
        request()->user()->notify(new PaymentReceived());
    }
}

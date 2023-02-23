<?php

namespace App\Listeners;

use App\Events\BookingCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class ChargeBooking implements ShouldQueue
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

    public function handle(BookingCreated $event)
    {
        $event->booking->user->charge($event->booking->price * 100, $event->booking->user->defaultPaymentMethod()->id);
    }
}

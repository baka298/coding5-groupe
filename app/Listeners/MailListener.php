<?php

namespace App\Listeners;

use App\Events\MailEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Mail;
use App\Mail\JadMail;

class MailListener
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
     * @param  MailEvent  $event
     * @return void
     */
    public function handle(MailEvent $event)
    {
        Mail::to('bellavia-d@hotmail.com')->send(new JadMail($event->lucas));
    }
}
    
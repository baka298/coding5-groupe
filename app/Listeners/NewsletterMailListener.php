<?php

namespace App\Listeners;

use App\Events\NewsletterMailEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Mail;
use App\Mail\JadMail;

class NewsletterMailListener
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
     * @param  NewsletterMailEvent  $event
     * @return void
     */
    public function handle(NewsletterMailEvent $event)
    {
        Mail::to('jad.riahi12@gmail.com')->send(new JadMail($event->request));
    }
}

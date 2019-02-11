<?php

namespace App\Listeners;

use App\Events\NewsletterMailEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Mail;
use App\Mail\JadMail;
use Illuminate\Support\Facades\DB;

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
        $query = DB::table('newsletters')->select('email')->get();
        Mail::to($query)->send(new JadMail($event->request));
    }
}

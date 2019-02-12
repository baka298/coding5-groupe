<?php

namespace App\Listeners;

use App\Events\MailEvent2;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Mail;
use App\Mail\ArticlesMail;
class MailListener2
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
     * @param  MailEvent2  $event
     * @return void
     */
    public function handle(MailEvent2 $event)
    {
        Mail::to('admin@hotmail.com')->send(new ArticlesMail($event->request));
    }
}

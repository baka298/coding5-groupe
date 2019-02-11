<?php

namespace App\Listeners;
use Illuminate\Http\Request;
use App\Events\Mail as Mail2;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Mail;
use App\Mail\XavierMail;

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
     * @param  Mail  $event
     * @return void
     */
    public function handle(Mail2 $event)
    {
        Mail::to($event->request)->send(new XavierMail($event->request)); 
    }
}

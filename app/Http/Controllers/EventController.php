<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;
use Carbon\Carbon;

class EventController extends Controller
{
    

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    
    {
        
       $events = Event::all();

       return view('events',compact('events'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('events/event-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $event = new Event;

        $event->start_date  = $request->start_date ;
        $event->end_date = $request->end_date;

        $event->start_hours = $request->start_hours;
        $event->end_hours = $request->end_hours;

        $event->title = $request->title;
        $event->desc = $request->desc;
        $event->lieu  = $request->lieu ;


        $event->save();

        $events = Event::all();

       return view('events',compact('events'));




    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
      return view('events.event-edit',compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        $event->start_date = $request->start_date;
        $event->end_date = $request->end_date;
        $event->start_hours = $request->start_hours;
        $event->end_hours = $request->end_hours;
        $event->lieu = $request->lieu;
        $event->title = $request->title;
        $event->desc = $request->desc;
        $event->save();

        $events = Event::all();

        return view('events',compact('events'));






    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        $event->delete();
        $events = Event::all();

        return view('events',compact('events'));
    }
}

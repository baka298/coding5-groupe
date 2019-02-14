<?php

namespace App\Http\Controllers;

use App\newsletter;
use Illuminate\Http\Request;
use Auth;
use StoreNewsletter;

class NewsletterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $newsletters = Newsletter::all();
        return view('newsletters',compact('newsletters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('newsletters-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newnews = new Newsletter;
        $newnews->name = $request->name;
        $newnews->email = $request->email;
        $newnews->save();
        $newsletters = Newsletter::all();
        return view('newsletters',compact('newsletters'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\newsletter  $newsletter
     * @return \Illuminate\Http\Response
     */
    public function show(newsletter $newsletter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\newsletter  $newsletter
     * @return \Illuminate\Http\Response
     */
    public function edit(newsletter $newsletter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\newsletter  $newsletter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, newsletter $newsletter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\newsletter  $newsletter
     * @return \Illuminate\Http\Response
     */
    public function destroy(newsletter $newsletter)
    {
        $newsletter->delete();
        $newsletters = Newsletter::all();
        return view('newsletters',compact('newsletters'));
    }
}

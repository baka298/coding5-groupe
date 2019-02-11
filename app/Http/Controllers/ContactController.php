<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use Mail;
use App\Mail\ContactMail;


class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function all()
    {
        $tableau = Contact::all();
        return view('contact-list', compact('tableau'));
    }
    public function index()
    {
        return view('demandecontact');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nc = new Contact;
        $nc->nom = $request->nom;
        $nc->prenom = $request->prenom;
        $nc->email = $request->email;
        $nc->demande = $request->demande;
        $nc->save();
        return view('welcome');
        

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        $cont = Contact::where('id', $contact->id)->first();
        return view('contact-edit', compact('cont'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        $contact->reponse = $request->reponse;
        $contact->status = $request->status;
        $contact->save();
        if($request->check_email)
        {
            Mail::to($contact->email)
            ->send(new ContactMail($contact));
        } 
        return view('home');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        //
    }
}

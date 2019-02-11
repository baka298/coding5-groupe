<?php

namespace App\Http\Controllers;

use App\Partenariat;
use Illuminate\Http\Request;
use Mail;
use App\Mail\PartMail;
class PartenariatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('demandepartenariat');
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
    public function all()
    {
        $tableau = Partenariat::All();
        return view('part-list', compact('tableau'));
    }
    public function store(Request $request)
    {
        $np = new Partenariat;
        $np->nom = $request->name;
        $np->prenom = $request->prenom;
        $np->email = $request->email;
        $np->arg = $request->argu;
        $np->save();
        return view('welcome');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Partenariat  $partenariat
     * @return \Illuminate\Http\Response
     */
    public function show(Partenariat $partenariat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Partenariat  $partenariat
     * @return \Illuminate\Http\Response
     */
    public function edit(Partenariat $partenariat)
    {
        $part = Partenariat::where('id', $partenariat->id)->first();
        return view('part-edit', compact('part'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Partenariat  $partenariat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Partenariat $partenariat)
    {
        $partenariat->validation = $request->validation;
        $partenariat->save();
        Mail::to($partenariat->email)
        ->send(new PartMail($partenariat));
        return view('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Partenariat  $partenariat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Partenariat $partenariat)
    {
        //
    }
}

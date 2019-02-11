<?php

namespace App\Http\Controllers;

use App\Profil;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateProfilRequest;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $profils = Profil::all();
        return view('profil.profil', compact('profils'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(User $user) {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function show(Profil $profil) {
        return view('profil.profil-show', compact('profil'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function edit(Profil $profil)
    {
        return view('profil.profil-edit', compact('profil'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProfilRequest $request, Profil $profil)
    {
        $profil->name = $request->name;
        $profil->firstname = $request->firstname;
        $profil->dateDeNaissance = $request->dateDeNaissance;
        $profil->gsm = $request->gsm;
        $profil->adresse = $request->adresse;
        $profil->ville = $request->ville;
        $profil->pays = $request->pays;

        if(isset($request->image)){
            $profil->image = $request->image->store('', 'profil');
        }

        $profil->save();

        return view('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profil $profil)
    {
        //
    }
}

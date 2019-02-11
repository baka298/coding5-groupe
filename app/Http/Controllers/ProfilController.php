<?php

namespace App\Http\Controllers;

use App\Profil;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allprofils=Profil::all();
        return view('Profil.profil',compact('allprofils'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Profil.profil-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newprofil= new Profil;
        $newprofil->naissance = $request->naissance;
        $newprofil->ville = $request->ville;
        $newprofil->adresse = $request->adresse;
        $newprofil->cp = $request->cp;
        $newprofil->np = $request->np;
        $newprofil->gsm = $request->gsm;
        $newprofil->gsm2 = $request->gsm2;
        $newprofil->fixe = $request->fixe;
        $newprofil->save();

        $allprofils=Profil::all();

        return view ('Profil.profil',compact('allprofils'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $profil=profil::where('id',$id)->first();
        return view('Profil.profil-show',compact('profil'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profil=profil::where('id',$id)->first();
        return view('Profil.profil-edit',compact('profil'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $allprofiles = Profil::find($id);
        //$user = new User;
         $allprofiles->naissance =$request->naissance;
         $allprofiles->ville=$request->ville;
         $allprofiles->adresse=$request->adresse;
         $allprofiles->cp=$request->cp;
         $allprofiles->np=$request->np;
         $allprofiles->gsm=$request->gsm;
         $allprofiles->gsm2=$request->gsm2;
         $allprofiles->fixe=$request->fixe;
         $allprofiles->save();
         $allprofiles = Profil::all();
 
         return view('Profil.profil',compact('allprofiles'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function destroy($allprofiles)
    {
       $allprofiles=Profil::find($allprofiles);
        $allprofiles->delete();

        return redirect()->back();
    }
}

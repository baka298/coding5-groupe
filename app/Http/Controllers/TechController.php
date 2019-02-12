<?php

namespace App\Http\Controllers;

use App\Tech;
use Illuminate\Http\Request;
use App\Http\Requests\StoreTech;
class TechController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $techs = Tech::all();

        return  view('techs.techs-index',compact('techs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('techs.techs-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTech $request)
    {
        
        $newcat = new Tech;
        $newcat->categorie = $request->categorie;
        $newcat->save();
        $newcat = Tech::all();
        return view('home',compact('newtech'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tech  $tech
     * @return \Illuminate\Http\Response
     */
    public function show(Tech $tech)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tech  $tech
     * @return \Illuminate\Http\Response
     */
    public function edit(Tech $tech)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tech  $tech
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tech $tech)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tech  $tech
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tech $tech)
    {
        $tech->delete();
        $tech = Tech::all();
        return view('home',compact('tech'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Tech;
use Illuminate\Http\Request;
use Auth;

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
        return view('techs',compact('techs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('techs-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newtech = new Tech;
        $newtech->name = $request->name;
        $newtech->save();
        $techs = Tech::all();
        return view('techs',compact('techs'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tech  $tech
     * @return \Illuminate\Http\Response
     */
    public function show(Tech $tech)
    {
        return view ('techs-show',compact('tech'));
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
        $techs = Tech::all();
        return view('techs',compact('techs'));
    }
}

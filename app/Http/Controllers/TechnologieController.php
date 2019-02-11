<?php

namespace App\Http\Controllers;

use App\Technologie;
use App\Article;
use Illuminate\Http\Request;

class TechnologieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('technologie.technologie-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newTech = new Technologie;
        $newTech->name = $request->name;
        $newTech->save();
        $articles = Article::all();
        $tech = Technologie::all();
        return view('article', compact('articles', 'tech'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Technologie  $technologie
     * @return \Illuminate\Http\Response
     */
    public function show(Technologie $technologie)
    {
        $articles = Article::where('technologie_id', $technologie->id)->get();
        $tech = Technologie::all();
        return view('technologie',compact('articles', 'tech'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Technologie  $technologie
     * @return \Illuminate\Http\Response
     */
    public function edit(Technologie $technologie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Technologie  $technologie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Technologie $technologie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Technologie  $technologie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Technologie $technologie)
    {
        //
    }
}

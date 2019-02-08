<?php

namespace App\Http\Controllers;

use App\Produit;
use Illuminate\Http\Request;
use Storage;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tableau = Produit::All();
        return view('lesproduits', compact('tableau'));
    }
    public function all()
    {
        $tableau = Produit::All();
        return view('produit-liste', compact('tableau'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('produit-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $np = new Produit;
        $np->titre = $request->titre;
        $np->prix = $request->prix;
        $np->image = $request->image->store('','image');
        $np->save();
        return view('produit-create');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function show(Produit $produit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function edit(Produit $produit)
    {
        $pd = Produit::where('id', $produit->id)->first();
        return view('produit-edit', compact('pd'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produit $produit)
    {
        $produit->titre = $request->titre;
        $produit->prix = $request->prix;
        $produit->image = $request->image->store('','image');
        $produit->save();
        return view('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produit $produit)
    {
        $produit->delete();
        return view('home');
    }
}

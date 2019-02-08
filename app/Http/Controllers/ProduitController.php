<?php

namespace App\Http\Controllers;

use App\Produit;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProduit;
class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produits = Produit::all();
        return view('produit',compact('produits'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('produits-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProduit $request)
    {
        $newproduit= new Produit;
        $newproduit->image = $request->image->store('','image');
        $newproduit->name = $request->name;
        $newproduit->description = $request->description;
        $newproduit->prix = $request->prix;
        $newproduit->save();

        return view('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function show(Produit $produit)
    {
        return view ('produit-show',compact('produit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function edit(Produit $produit)
    {
        return view ('produit-edit',compact('produit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function update(StoreProduit $request, Produit $produit)
    {
        $produit->image = $request->image->store('','image');
        $produit->name = $request->name;
        $produit->description = $request->description;
        $produit->prix = $request->prix;

        $produit->update();

        $produits = Produit::all();

        return view ('produit',compact('produits'));

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
        $produits = Produit::all();
        

        return view('produit',compact('produits'));

    }
}

<?php

namespace App\Http\Controllers;

use App\Produit;
use Illuminate\Http\Request;
use App\Http\Requests\ProduitsR;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produits = Produit::All();
        return view("produits",compact('produits'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('produits/produit-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProduitsR $request)
    {
        $product = new Produit;
        $product->image  =  $request->image->store('','productImage');

        $product->title  =  $request->title;
        $product->desc  =  $request->desc;
        $product->content  =  $request->content;
        $product->price  =  $request->price;

        $product->save();
        return view('produits');




    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function show(Produit $produit)
    {
        return view('produits.produit-show',compact('produit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function edit(Produit $produit)
    {
        return view ("produits.produit-edit",compact('produit'));
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
        $produit->image  =  $request->image->store('','productImage');

        $produit->title  =  $request->title;
        $produit->desc  =  $request->desc;
        $produit->content  =  $request->content;
        $produit->price  =  $request->price;

        $produit->save();

        $produits = Produit::All();
        return view('produits',compact('produits'));
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
        $produits = Produit::All();
        return view('produits',compact('produits'));
    }
}

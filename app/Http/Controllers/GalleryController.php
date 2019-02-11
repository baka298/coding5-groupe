<?php

namespace App\Http\Controllers;

use App\Gallery;
use Illuminate\Http\Request;
use App\Http\Requests\StoreGallery;
use App\Http\Requests\UpdateGallery;
use Storage;


class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gallery= Gallery::all();
        return view('gallery.gallery', compact('gallery'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('gallery.createimages'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGallery $request)
    {
        $newgallery = new Gallery;
        $newgallery->title=$request->title;
        $newgallery->description=$request->description;
        $newgallery->image=$request->image->store('','image');
        $newgallery->save();
        $gallery=Gallery::all();
        return view('gallery.gallery', compact('gallery'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        return view('gallery.editimages', compact('gallery')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGallery $request, Gallery $gallery)
    {
        $gallery->title=$request->title;
        $gallery->description=$request->description;
        $gallery->image=$request->image->store('','image');
        $gallery->save();
        $gallery= Gallery::all();
        return view('gallery.gallery',compact('gallery'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery)
    {
        $gallery->delete();
        $gallery=Gallery::all();
        return view('gallery.gallery', compact('gallery'));
    }

 
}

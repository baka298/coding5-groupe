<?php

namespace App\Http\Controllers;

use App\Photo;
use Illuminate\Http\Request;
use Auth;
use App\Http\Requests\StorePhoto;
use App\Services\Intervention;
use Storage;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $photos = Photo::all();
        return view('photos',compact('photos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('photos-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Intervention $intervention)
    {
        $newphoto = new Photo;

        $newphoto->image = $intervention->imgResize('image','150','150',$request->image);
        $newphoto->name = $request->name;
        $newphoto->description = $request->description;
        $newphoto->save();
        $photos = Photo::all();
        return view('photos',compact('photos'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function show(Photo $photo)
    {
        return view ('photos-show',compact('photo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function edit(Photo $photo)
    {
        return view ('photos-edit',compact('photo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Photo $photo)
    {
        $photo->name = $request->name;
        // $photo->image = $request->image->store('','image');
        $photo->description = $request->description;
        $photo->save();
        $photos = Photo::all();
        return view ('photos',compact('photos'));
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Photo $photo)
    {
        $photo->delete();
        $photos = Photo::all();
        return view('photos',compact('photos'));
    }
}

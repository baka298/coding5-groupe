<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;
use Storage;
use Image;
use App\Services\Intervention;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function client()
    {
        $photos = Photo::all();
        return view('photouser.photo_index', compact('photos'));
    }
    public function index()
    {
        $photos = photo::all();
        return view('photo.photo_index',compact('photos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
        return view('photo.photo_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Intervention $intervention )
    {
          // $newarticle =$intervention->imageResize();
          $newphoto = new Photo;
          $newphoto->image = $request->image->store('','image');
        //   $lien = storage::disk('image')->path($newphoto->image);
        //   $img = Image::make($lien)->resize(500,500);
          $img = $intervention->imageResize('image','500','500',$newphoto->image);
          $img->save();
  
          $newphoto->name =$request->name;
          $newphoto->description =$request->description;
          $newphoto->save();
          // dd($request);
          $photos = Photo::all();
          return view('photouser.photo_index',compact('photos'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function show(Photo $photo)
    {
        return view('photo.photo_show',compact('photo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function edit(Photo $photo)
    {
        return view('photouser.photo_edit',compact('photo'));
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
        $photo->image = $request->image->store('','image');
        $photo->name = $request->name;
        $photo->description = $request->description;
        $photo->save();

        $photos = Photo::all();
        return view('photouser.photo_index',compact("photos"));
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
        return view('photo.photo_index',compact('photos'));
    }
}

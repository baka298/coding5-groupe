<?php

namespace App\Http\Controllers;

use App\Faq;
use Illuminate\Http\Request;
use App\Http\Requests\StoreFaq;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $faq= Faq::all();
        return view('faq.faq', compact('faq'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('faq.createquestion');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFaq $request)
    {
        $newfaq= new Faq;
        $newfaq->title=$request->title;
        $newfaq->question=$request->question;
        $newfaq->name=$request->name;
        $newfaq->save();
        $faq= Faq::all();
        return view('faq.faq', compact('faq'));
    

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function show(Faq $faq)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function edit(Faq $faq)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Faq $faq)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function destroy(Faq $faq)
    {
        $faq->delete();
        $faq=Faq::all();
        return view('faq.faq', compact('faq'));
    }

    public function answer(Faq $faq){
        return view('faq.createanswer', compact('faq'));
    }

    public function answerStore(Faq $faq, Request $request){
        $faq->name = $request->name;
        $faq->title = $request->title;
        $faq->question = $request->question;
        $faq->answer = $request->answer;
        $faq->save();
        $faq= Faq::all();
        return view('faq.faq', compact('faq'));
       
    }
}

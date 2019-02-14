<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use App\Services\Intervention;
use Image;
use Storage;
use App\Http\Requests\StoreArticle;
use Auth;
use App\Events\MailEvent;
use App\Tech;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all();
        return view('articles',compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tech = Tech::all();
        return view ('articles-create',compact('tech'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newarticle = new Article;
        $newarticle->name = $request->name;
        $newarticle->description = $request->description;
        $newarticle->tech_id = $request->techid;

        $newarticle->save();
        //dd($request);
        $articles = Article::all();
        event(new MailEvent($request));
        return view('articles',compact('articles'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article, Tech $tech)
    {
        return view ('articles-show',compact('article', 'tech'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        return view ('articles-edit',compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        $article->name = $request->name;
        $article->description = $request->description;
        $article->save();
        
        $articles = Article::all();
        return view ('articles',compact('articles'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $article->delete();
        $articles = Article::all();
        return view('articles',compact('articles'));
    }
}

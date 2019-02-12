<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use App\Services\Intervention;
use App\Events\MailEvent2;
use App\Tech;
use Image;
use App\Http\Requests\StoreArticle;
class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $article = Article::all();
        return view('articles.articles-index', compact('article'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $techs = Tech::all();
        return view('articles.articles-create',compact('techs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreArticle $request, Intervention $intervention)
    {
        $article = new Article;
        $article->image =  $intervention->imgresize('image',150,150 ,$request->image);
        $article->title = $request->title;
        $article->text = $request->text;
        $article->tech_id = $request->tech_id;
        $article->save();
        event(new MailEvent2($request));
        $article = Article::all();
        return view('articles.articles-index', compact('article'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        return view('articles.articles-show',compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        return view('articles.articles-edit',compact('article'));
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
        // $article->image = $request->image->store('','image');
        // $image = $intervention->imgresize('image',150,150 ,$article->image);
        // $image->save();
        $article->title = $request->title;
        $article->text = $request ->text;
        $article->save();
        $article = Article::all();
        return view('articles.articles-index',compact('article'));
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
        $article = Article::all();
        return view('articles.articles-index',compact('article'));
    }
}

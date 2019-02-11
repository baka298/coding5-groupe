<?php

namespace App\Http\Controllers;

use App\Article;
use App\Technologie;
use App\Services\Intervention;
use Illuminate\Http\Request;

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
        $tech = Technologie::all();
        return view('article', compact('articles', 'tech'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $articles = Article::all();
        $tech = Technologie::all();
        return view('article.article-create', compact('articles', 'tech'));   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Intervention $intervention)
    {
        $newa = new Article;
        $newa->image = $request->image->store('','imageArticle');
        $image = $intervention->imageResize("imageArticle", 150, 150, $newa->image);
        $image->save();
        $newa ->titre =$request ->titre;
        $newa ->texte =$request ->texte;

        $newa ->technologie_id=$request->technologie_id;
        $newa->save();
        $articles = Article::all();
        $tech = Technologie::all();
        return view('article', compact('articles', 'tech'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        return view('article.article-show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        return view('article.article-edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article, Intervention $intervention)
    {
        $article->titre=$request->titre;
        $article->texte=$request->texte;
        $article->image = $request->image->store('','imageArticle');
        $image = $intervention->imageResize("imageArticle", 150, 150, $article->image);
        $image->save();
        $article->save();
        $articles = Article::all();
        return view('article', compact('articles'));
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
       return view('article', compact('articles'));
    }
}

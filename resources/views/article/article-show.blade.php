@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Les Articles</h1>
    <a href="{{route('article.create')}}"><button>Créer un Article</button></a>
@stop

@section('content')
    <div class="row">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{Storage::disk('imageArticle')->url($article->image)}}" alt="Card image cap">
                <div class="card-body">
                <h5 class="card-title">{{$article->titre}}</h5>
                <p class="card-text">{{$article->texte}}</p>
                <a href="{{route('article.edit', ['article'=> $article->id])}}" class="btn btn-primary">Update Article</a>
                </div>
            </div>
    </div>
@stop
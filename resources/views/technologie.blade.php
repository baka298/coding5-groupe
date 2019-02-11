@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <div class="mt-3">
        @foreach ($tech as $item)
        <a href="{{route('technologie.show', ['id'=>$item->id])}}"><button class="btn btn-primary mr-2">{{$item->name}}</button></a>
        @endforeach
        <a href="{{route('article.index')}}"><button class="btn btn-primary mr-2">All Articles</button></a>
    </div>
@stop

@section('content')
    <div class="row">
        @foreach ($articles as $item)
            <div class="card ml-3" style="width: 18rem;">
                <img class="card-img-top" src="{{Storage::disk('imageArticle')->url($item->image)}}" alt="Card image cap">
                <div class="card-body">
                <h5 class="card-title">{{$item->titre}}</h5>
                <p class="card-text">{{$item->texte}}</p>
                <a href="{{route('article.show', ['article'=> $item->id])}}" class="btn btn-primary">Show Article</a>
                </div>
            </div>
        @endforeach
    </div>
@stop
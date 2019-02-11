@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Les Articles</h1>
    <div class="d-flex">
            <a href="{{route('article.create')}}"><button class="btn btn-warning mt-2 mr-2">Créer un Article</button></a>
            <a href="{{route('technologie.create')}}"><button class="btn btn-warning mt-2 mr-2   ">Créer une Catégorie</button></a>
    </div>
    <div class="mt-3">
        @foreach ($tech as $item)
        <a href="{{route('technologie.show', ['id'=>$item->id])}}"><button class="btn btn-primary mr-2">{{$item->name}}</button></a>
        @endforeach
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
                <div class="d-flex">
                    <a href="{{route('article.show', ['article'=> $item->id])}}" class="btn btn-primary">Show Article</a>
                    <form action = "{{route('article.destroy', ['user'=>$item->id])}}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger ml-2 ">Delete</button>
                    </form>
                </div>
                </div>
            </div>
        @endforeach
    </div>
@stop
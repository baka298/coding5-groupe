@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Les Articles</h1>
    <a href="{{route('article.create')}}"><button class="btn btn-warning">Créer un Article</button></a>
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
                <form action = "{{route('article.destroy', ['user'=>$item->id])}}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger ml-2 ">Delete User</button>
                </form>
                </div>
            </div>
        @endforeach
    </div>
@stop
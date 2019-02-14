@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Articles</h1>
@stop

@section('content')
  <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h1 class="card-title">{{ $article->name }}</h1>
      <p class="card-text">{!! ($article->description) !!}</p>
      <h5 class="card-text">Catégorie : {{ $article->art->name }}</h5>
      <div class="row">
        <div class="col-3">
        <a href="{{ route('articles.edit',['id'=>$article->id]) }}" class="btn btn-success m-2">Edit</a>
      </div>
      <div class="col-3">
        <form action="{{ route('articles.destroy',['id'=>$article->id]) }}" method="POST">
          @method('delete')
          @csrf
          <button class="btn btn-outline bg-danger m-2" type="submit">Delete</button>
        </form>
      </div>
      </div>
    </div>
  </div>
@stop
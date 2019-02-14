@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="text-center">ARTICLES</h1>
@stop

@section('content')
<div class="row">
  @foreach ($articles as $item)
    <div class="card m-4 text-center text-uppercase border" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{ $item->name }}</h5>
                <a href="{{ route('articles.show',['articles'=>$item->id]) }}" class="btn btn-warning">Show more</a>
            </div>  
    </div>
  @endforeach
</div>
@stop
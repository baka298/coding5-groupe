@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="text-center">PHOTOS</h1>
@stop

@section('content')
<div class="row">
  @foreach ($photos as $item)
    <div class="card m-4 text-center text-uppercase border" style="width: 18rem;">
            <img class="card-img-top" src="{{Storage::disk('image')->url($item->image)}}" alt="Card image cap">
            <div class="card-body">
                <a href="{{ route('photos.show',['photos'=>$item->id]) }}" class="btn btn-warning">Show more</a>
            </div>  
    </div>
  @endforeach
</div>
@stop
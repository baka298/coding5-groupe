@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Photos</h1>
@stop

@section('content')
  <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="{{Storage::disk('image')->url($photo->image)}}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">{{ $photo->name }}</h5>
      <p class="card-text">{!! ($photo->description) !!}</p>
      <div class="row">
        <div class="col-3">
        <a href="{{ route('photos.edit',['id'=>$photo->id]) }}" class="btn btn-success m-2">Edit</a>
      </div>
      <div class="col-3">
        <form action="{{ route('photos.destroy',['id'=>$photo->id]) }}" method="POST">
          @method('delete')
          @csrf
          <button class="btn btn-outline bg-danger m-2" type="submit">Delete</button>
        </form>
      </div>
      </div>
    </div>
  </div>
@stop
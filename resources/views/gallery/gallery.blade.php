@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    
<div class="row">
    <a name="" id="" class="btn btn-primary" href="{{route('gallery.create')}}" role="button">New image</a>
</div>

<div class="row">
    @foreach ($gallery as $item)
<div class="card" style="width: 18rem;">
<img src="{{Storage::disk('image')->url($item->image)}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$item->title}}</h5>
      <p class="card-text">{{$item->description}}</p>
    <a href="{{route('gallery.edit', ['gallery'=>$item->id])}}" class="btn btn-primary">Edit</a>
      <form action="{{route('gallery.destroy',['gallery'=>$item->id])}}" method="POST">
        @method('DELETE')
    @csrf

    <button type="submit">Delete</button>
    </form>
    </div>
  </div>
@endforeach
</div>
@stop
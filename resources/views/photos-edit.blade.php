@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
<div class="container text-center">
    <h1>Edit Photo</h1>
</div>
@stop


@section('content')

<div class="container">
    <form class="form-inline" action="{{  route('photos.update', ['id'=>$photo->id]) }}" method="POST">

      @method('PUT')
      @csrf

      <div class="form-group">
        <label for=""></label>
        <input type="text" value="{{ $photo->name }}" name="name" id="" class="form-control p-3 m-3" placeholder="Photo" aria-describedby="helpId">
        <input type="text" value="{{ $photo->description }}" name="description" id="" class="form-control p-3 m-3" placeholder="Description" aria-describedby="helpId">
        <button class="m-3" type="submit">submit</button>
      </div>
    </form>
</div>
@stop
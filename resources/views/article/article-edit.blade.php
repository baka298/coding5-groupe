@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Create User</h1>
@stop

@section('content')

<form action ="{{route('article.update', ['article'=>$article->id])}}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf

    <div class="form-group">
      <label for="titre">Title</label>
      <input type="text"
        class="form-control" name="titre" id="titre" aria-describedby="helpId" placeholder="" value="{{$article->name}}">
      <small id="helpId" class="form-text text-muted">-</small>
    </div>
    <div class="form-group">
        <label for="texte">Description</label>
        <input type="text"
          class="form-control" name="texte" id="texte" aria-describedby="helpId" placeholder="" value="{{$article->firstname}}">
        <small id="helpId" class="form-text text-muted">-</small>
      </div>

    <div class="form-group">
        <label for="image">Image</label>
        <input type="file" name="image">
    </div>

    <button class="btn btn-success mr-2" type="submit">submit</button>
</form>

    <br>
    <br>
    <a href="{{route('home')}}"><button class="btn btn-primary">Return Home</button></a>

@stop
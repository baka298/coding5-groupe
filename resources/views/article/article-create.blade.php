@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Create Your Article</h1>
@stop

@section('content')

<form action ="{{route('article.store')}}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
      <label for="titre">Title</label>
      <input type="text"
        class="form-control" name="titre" id="titre" aria-describedby="helpId" placeholder="">
      <small id="helpId" class="form-text text-muted">-</small>
    </div>

    <div class="form-group">
        <label for="texte">Description</label>
        <input type="text" name="texte" id="texte" class="form-control" placeholder="" aria-describedby="helpId">
    </div>
    
    <input type="file" name="image" id="image">

    <button class="btn btn-success mr-2" type="submit">submit</button>
</form>
    <a href="{{route('article.index')}}"><button class="mt-3 btn btn-primary">Go Back</button></a>
@stop
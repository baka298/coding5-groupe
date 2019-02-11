@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Create Your Categorie</h1>
@stop

@section('content')

<form action ="{{route('technologie.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    
    <div class="form-group">
        <label for="name">Catégorie</label>
        <input type="text" name="name" id="name" class="form-control" placeholder="" aria-describedby="helpId">
    </div>
    
    <button class="btn btn-success mr-2" type="submit">submit</button>
</form>
<br>
    <a href="{{route('article.index')}}"><button class="mt-3 btn btn-primary">Go Back</button></a>
@stop
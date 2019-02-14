@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>CREATE PROFILE</h1>
@stop

@section('content')
    
<form action="{{route('profils.store')}} " method="POST" enctype="multipart/form-data">

  @csrf
<div class="form-group">
  <label for="">Prénom</label>
  <input type="text" name="prenom" id="" class="form-control" placeholder="" aria-describedby="helpId">
</div>
<div class="form-group">
    <label for="">Nom</label>
    <input type="text" name="nom" id="" class="form-control" placeholder="" aria-describedby="helpId">
  </div>
  <div class="form-group">
      <label for="">Photo</label>
      <input type="file" name="photo" id="">
    </div>

    <button class="btn btn-success" type="submit">create</button>

</form>

@stop
@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>YOUR PROFIL</h1>
@stop

@section('content')
   <form action="{{route('profil.update', ['profil' => $profil->id])}}" method="POST" enctype="multipart/form-data">
      @method('PUT')
      @csrf
      <div class="form-group">
         <label for="">Nom</label>
         <input type="text" class="form-control" value="{{ $profil->name }}" name="name" placeholder="Nom">
      </div> 
      <div class="form-group">
         <label for="">Prénom</label>
         <input type="text" class="form-control" value="{{ $profil->firstname }}" name="firstname" placeholder="Prénom">
      </div> 
      <div class="form-group">
         <label for="">Date de naissance</label>
         <input type="date" class="form-control" value="{{ $profil->dateDeNaissance == null ? '' : $profil->dateDeNaissance->format('Y-m-d') }}" name="dateDeNaissance">
      </div> 
      <div class="form-group">
         <label for="">Numéro de téléphone</label>
         <input type="text" class="form-control" value="{{ $profil->gsm }}" name="gsm" placeholder="gsm">
      </div> 
      <div class="form-group">
         <label for="">Adresse</label>
         <input type="text" class="form-control" value="{{ $profil->adresse }}" name="adresse" placeholder="adresse">
      </div> 
      <div class="form-group">
         <label for="">Ville</label>
         <input type="text" class="form-control" value="{{ $profil->ville }}" name="ville" placeholder="ville">
      </div> 
      <div class="form-group">
         <label for="">Pays</label>
         <input type="text" class="form-control" value="{{ $profil->pays }}" name="pays" placeholder="pays">
      </div> 
      <img src="{{Storage::disk('profil')->url($profil->image)}}" class="card-img-top" alt="">
      <div class="form-group">
         <label for="">Image</label>
         <input type="file" class="form-control custom-file" name="image">
      </div> 
      <input type="submit" class="btn btn-success" value="envoyer">

   </form>
   <hr>
   <a href="{{ route('home')}}" class="btn btn-secondary mt-3 mr-2">HOME</a>
   <a href="{{ route('profil.index')}}" class="btn btn-info mt-3">USERS</a>

@stop
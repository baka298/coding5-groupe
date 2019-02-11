@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>YOUR PROFIL</h1>
@stop

@section('content')
      <div class="card mb-3">
         <img class="pdp" src="{{Storage::disk('profil')->url($profil->image)}}" style="max-height: 100%;" alt="...">

         <div class="card-body">
            <div class="form-group">
               <h1 class="text-primary">Welcome {{ $profil->firstname }} ! </h1>
               
               <br>
               <p><b>Nom, Prénom : </b>{{ $profil->name }},{{ $profil->firstname }}</p>
               <p><b>Date de naissance : </b> {{ $profil->dateDeNaissance }}</p>
               <p><b>Email : </b>{{ $profil->user->email }}</p>
               <p><b>Numéro de téléphone : </b>{{ $profil->gsm }}</p>
               <p><b>Adresse : </b>{{ $profil->adresse }}</p>
               <p><b>Ville : </b>{{ $profil->ville }}</p>
               <p><b>Pays : </b>{{ $profil->pays }}</p>

            </div>
            <a href="{{ route('profil.edit',['profil' => $profil->id])}}" class="btn btn-warning mt-3 mr-2">EDIT</a>
         </div>


      </div>

   <a href="{{ route('home')}}" class="btn btn-secondary mt-3 mr-2">HOME</a>
   <a href="{{ route('profil.index')}}" class="btn btn-info mt-3">USERS</a>

@stop

<style>

.pdp {
   width: 200px;
   height: 200px;
   border-radius: 50%;
   border: 4px solid #4780BE;
   margin: 20px;
}

</style>
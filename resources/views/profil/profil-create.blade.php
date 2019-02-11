@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>CREATE YOUR PROFIL</h1>
@stop

@section('content')

   <form action="{{ route ('profil.store')}}" method="POST">
   @csrf   

      <div class="card mb-3">
         <img src="..." class="card-img-top" alt="...">

         <div class="card-body">
            <div class="form-group">
               <label for="">Firstname</label>
               <input type="text" class="form-control" name="firstname" id="" aria-describedby="helpId" placeholder="">
               
               <label for="">Name</label>
               <input type="text" class="form-control" name="name" id="" aria-describedby="helpId" placeholder="">

               <label for="">Date de naissance</label>
               <input type="text" class="form-control" name="dateDeNaissance" id="" aria-describedby="helpId" placeholder="">

               <label for="">Email</label>
               <input type="text" class="form-control" name="email" id="" aria-describedby="helpId" placeholder="">

               <label for="">GSM</label>
               <input type="text" class="form-control" name="gsm" id="" aria-describedby="helpId" placeholder="">

               <label for="">Adresse</label>
               <input type="text" class="form-control" name="adresse" id="" aria-describedby="helpId" placeholder="">

               <label for="">Ville</label>
               <input type="text" class="form-control" name="ville" id="" aria-describedby="helpId" placeholder="">

               <label for="">Pays</label>
               <input type="text" class="form-control" name="pays" id="" aria-describedby="helpId" placeholder="">
            </div>
         </div>
         
         <button class="btn btn-warning" type="submit">CREATE</button>

      </div>
   </form>

   <a href="{{ route('home')}}" class="btn btn-secondary mt-3 mr-2">HOME</a>
   <a href="{{ route('user.index')}}" class="btn btn-info mt-3">USERS</a>

@stop
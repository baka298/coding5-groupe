@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="text-danger">Création d'un Profil</h1>
@stop

@section('content')
<form action="{{route('profil.store')  }}" method="POST">
    @csrf
   <div class="form-group">
        <label for="">Date de Naissance</label>
        <input type="date"
    class="form-control" name="naissance" id="" aria-describedby="helpId" placeholder="">
   </div>
   <div class="form-group">
        <label for="">Ville</label>
        <input type="text"
        class="form-control" name="ville" id="" aria-describedby="helpId" placeholder="">
       </div>
   <div class="form-group">
        <label for="">Adresse</label>
        <input type="texte"
          class="form-control" name="adresse" id="" aria-describedby="helpId" placeholder="">
    </div>
        <div class="form-group">
        <label for="">Code Postale</label>
        <input type="text"
        class="form-control" name="cp" id="" aria-describedby="helpId" placeholder="">
    </div>
    <div class="form-group">
        <label for="">Numero de Porte</label>
        <input type="text"
        class="form-control" name="np" id="" aria-describedby="helpId" placeholder="">
    </div>
    <div class="form-group">
        <label for="">GSM</label>
        <input type="text"
        class="form-control" name="gsm" id="" aria-describedby="helpId" placeholder="">
    </div>
    <div class="form-group">
        <label for="">Gsm en cas d'urgence</label>
        <input type="text"
        class="form-control" name="gsm2" id="" aria-describedby="helpId" placeholder="">
    </div>
    <div class="form-group">
        <label for="">Téléphonne Fixe</label>
        <input type="text"
        class="form-control" name="fixe" id="" aria-describedby="helpId" placeholder="">
    </div>
    <button type="submit" class="btn btn-info">Submit</button>

</form>
@stop
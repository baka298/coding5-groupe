@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="text-danger">Création d'un Profil</h1>
@stop

@section('content')
<form action="{{route('profil.update',['all'=>$profil->id])  }}" method="POST">
    @method('PUT')
    @csrf
   <div class="form-group">
        <label for="">Date de Naissance</label>
        <input type="date"
    class="form-control" name="naissance" id="" aria-describedby="helpId" placeholder="" value={{ old('naissance', $profil->naissance) }}>
   </div>
   <div class="form-group">
        <label for="">Ville</label>
        <input type="text"
        class="form-control" name="ville" id="" aria-describedby="helpId" placeholder="" value="{{ old('ville', $profil->ville) }}">
       </div>
   <div class="form-group">
        <label for="">Adresse</label>
        <input type="texte"
          class="form-control" name="adresse" id="" aria-describedby="helpId" placeholder="" value={{ old('adresse',$profil->adresse) }}>
    </div>
        <div class="form-group">
        <label for="">Code Postale</label>
        <input type="text"
        class="form-control" name="cp" id="" aria-describedby="helpId" placeholder="" value="{{ old('cp', $profil->cp) }}">
    </div>
    <div class="form-group">
        <label for="">Numero de Porte</label>
        <input type="text"
        class="form-control" name="np" id="" aria-describedby="helpId" placeholder="" value="{{ old('np', $profil->np) }}">
    </div>
    <div class="form-group">
        <label for="">GSM</label>
        <input type="text"
        class="form-control" name="gsm" id="" aria-describedby="helpId" placeholder="" value={{ old('gsm', $profil->gsm) }}>
    </div>
    <div class="form-group">
        <label for="">Gsm en cas d'urgence</label>
        <input type="text"
        class="form-control" name="gsm2" id="" aria-describedby="helpId" placeholder="" value={{ old('gsm2', $profil->gsm2) }}>
    </div>
    <div class="form-group">
        <label for="">Téléphonne Fixe</label>
        <input type="text"
        class="form-control" name="fixe" id="" aria-describedby="helpId" placeholder="" value="{{ old('fixe', $profil->fixe) }}">
    </div>
    <button type="submit" class="btn btn-info">Submit</button>

</form>
@stop
@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="text-danger">Welcome Bro</h1>
@stop

@section('content')
   <h3>Modification d'un utilisateur</h3>

   <form action="{{ route('user.update',['all'=>$user->id]) }}" method="POST">
    @method('PUT')
       @csrf
       <div class="form-group">
         <label for="">Nom</label>
         <input type="text"
           class="form-control" name="name" id="" aria-describedby="helpId" placeholder="" value={{ old('name',$user->name) }}>
       </div>
       <div class="form-group">
        <label for="">Prénom</label>
        <input type="text"
          class="form-control" name="prenom" id="" aria-describedby="helpId" placeholder="" value={{ old('prenom',$user->prenom) }}>
      </div>
      <div class="form-group">
        <label for="">E-Mail</label>
        <input type="text"
          class="form-control" name="email" id="" aria-describedby="helpId" placeholder="" value="{{ old('email',$user->email) }}">
      </div>
      <div class="form-group">
            <label for="">Mot de Passe</label>
            <input type="text"
              class="form-control" name="password" id="" aria-describedby="helpId" placeholder="" value={{ old('password',$user->password) }}>
          </div>

      <button type="submit" class="btn btn-info">Submit</button>
   </form>
@stop
@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="text-danger">Welcome Bro</h1>
@stop

@section('content')
    <p>Tu es connecté ! Voici les différentes actions que tu peux effectués ci-dessous !</p>

    <a href="{{ route('user.index') }}"><button type="button" class="btn btn-secondary">Liste des Utilisateurs</button></a>
    <a href="{{ route('user.create') }}"><button type="button" class="btn btn-secondary">Créer un Utilisateur</button></a>
   
@stop
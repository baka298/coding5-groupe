@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="text-danger">Welcome Bro</h1>
@stop

@section('content')
    <p>Tu es connecté ! Voici les différentes actions que tu peux effectués ci-dessous !</p>

    <a href="{{ route('user.index') }}"><button type="button" class="btn btn-secondary">Liste des Utilisateurs</button></a>
    <a href="{{ route('user.create') }}"><button type="button" class="btn btn-secondary">Créer un Utilisateur</button></a>
    <a href="{{ route('profil.index') }}"><button type="button" class="btn btn-secondary">Liste des profiles</button></a>
    <a href="{{ route('profil.create') }}"><button type="button" class="btn btn-secondary">Creation d'un profil</button></a>
    <a href="{{ route('role.index') }}"><button type="button" class="btn btn-secondary">Liste des rôles</button></a>
    <a href="{{ route('role.create') }}"><button type="button" class="btn btn-secondary">Creation d'un rôle</button></a>
    <a href="{{ route('mailform') }}"><button type="button" class="btn btn-secondary">Envoyé un mail</button></a>
    <a href="{{ route('newsletter.create') }}"><button type="button" class="btn btn-secondary">Newsletter</button></a>
    
   
@stop
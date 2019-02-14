@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
@stop

@section('content')
<a class="btn btn-warning" href="{{route('users.index')}} ">back to all users</a>
  @can('update', $profil)
  <a class="btn btn-primary" href="{{route('profils.edit',['id'=>$profil->id])}}" role="button">edit profile</a>
  @endcan 

<div class="jumbotron">
    <h1 class="display-4">{{$profil->prenom}}</h1>
    <h1 class="lead">{{$profil->nom}}</h1>
    <hr class="my-4">
    <img src="{{Storage::disk('image')->url($profil->image)}}" width="700">
  </div>


@stop
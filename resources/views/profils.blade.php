@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Profils</h1>
@stop

@section('content')


<div class="card-columns">
@foreach ($profils as $profil)  

<div class="card" style="width: 18rem;">
    <img class="card-img-top" src="{{Storage::disk('image')->url($profil->photo)}}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">{{$profil->prenom}} {{$profil->nom}} </h5>
      <a href="{{route('article.show',['id'=>$article->id])}} " class="btn btn-primary">show</a>
      @can('delete', $profil)
      <form action="{{route('profils.destroy', ['id'=>$profil->id])}}" method="POST">
      @method('DELETE')
      @csrf
      <button class="btn btn-danger" type="submit">delete</button>
      </form>
      @endcan
    </div>
  </div>

  @endforeach
</div>

@stop
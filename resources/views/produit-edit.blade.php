@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>NEW PRODUITS</h1>
@stop

@section('content')
    <form action="{{route('produits.update',['produit'=>$pd->id])}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="container">
            <div class="form-group w-25">
                <p>Nom de l'article:</p>
              <input type="text" class="form-control" name="titre" id="" aria-describedby="helpId" value="{{$pd->titre}}" required>
            </div>
            <div class="form-group w-25">
                <p>Prix de l'article:</p>
                <input type="text" class="form-control" name="prix" id="" aria-describedby="helpId" value="{{$pd->prix}}" required>
            </div>
            <div class="form-group w-25">
                <p>Image de l'article:</p>
                <input type="file" name="image" id="" value="{{$pd->image}}" required>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-outline-success">Ajouter</button>
            </div>
        </div>
    </form>
@stop
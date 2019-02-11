@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>NEW PRODUITS</h1>
@stop

@section('content')
    <form action="{{route('partenariat.update',['partenariat'=>$part->id])}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="container">
            <div class="form-group w-25">
                <select name="validation" class="custom-select custom-select-sm pb-2">
                        <option selected>Que voulez-vous faire?</option>
                        <option value="0">Mettre en attente</option>
                        <option value="1">Accepter la demande</option>
                        <option value="2">Refuser la demande</option>
                </select>
                <button type="submit" class="mt-2 btn btn-secondary">
                    ENVOYER
                </button>
            </div>
        </div>
    </form>
@stop
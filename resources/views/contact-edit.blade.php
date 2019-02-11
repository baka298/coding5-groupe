@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>CONTACT REPONSE</h1>
@stop

@section('content')
    <form action="{{route('contact.update',['contact'=>$cont->id])}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
            <div class="form-group w-25">
                <p>REPONSE</p>
                <textarea name="reponse" id="" cols="60" rows="2"></textarea>
            </div>
            <div class="form-group w-25">
                <select name="status" class="custom-select custom-select-sm pb-2">
                        <option selected>Que voulez-vous faire?</option>
                        <option value="0">Mettre en attente</option>
                        <option value="1">Mettre la demande en REPONDU</option>
                </select>
            </div>
            <div class="form-check pb-3">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="check_email">
                <label class="form-check-label" for="exampleCheck1">ENVOYER UN EMAIL?</label>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-outline-success">Répondre</button>
            </div>
    </form>
@stop
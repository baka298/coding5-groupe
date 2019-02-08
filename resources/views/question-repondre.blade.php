@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>NEW PRODUITS</h1>
@stop

@section('content')
<h1>{{$qs->question}}</h1>
    <form action="{{route('question.update',['question'=>$qs->id])}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
            <div class="form-group w-25">
                <p>Réponse</p>
                <textarea name="reponse" id="" cols="60" rows="2"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-outline-success">Répondre</button>
            </div>
        </div>
    </form>
@stop
@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Page D'Accueil</h1>
@stop

@section('content')
    <a href="{{route('article.index')}}"><button class="btn btn-warning">Articles Index</button></a>
@stop
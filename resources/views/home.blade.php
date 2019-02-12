@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<a class="btn btn-primary" href="{{route('articles.index')}}">Check our articles</a>
@stop
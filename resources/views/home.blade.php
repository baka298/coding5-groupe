@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>HOME</h1>
@stop

@section('content')
    <p>WELCOME!</p>

<a href="{{route('produit.index')}}" class="btn btn-danger">Produit</a>

<a href="{{route('mail')}}" class="btn btn-danger">Contact</a>


@stop
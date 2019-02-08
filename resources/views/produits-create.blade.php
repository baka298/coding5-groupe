@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>E-SHOP</h1>
@stop

@section('content')
    <p>Crée votre produit</p>

<a href="{{route('produit.index')}}"class="btn btn-danger">Produit</a>
@stop
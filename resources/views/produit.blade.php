@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>E-SHOP</h1>
@stop

@section('content')
    <p>WELCOME TO E-SHOP!</p>

<a href="{{route('home')}}"class="btn btn-danger">HOME</a>
<a href="{{route('produit.create')}}" class=" btn btn-danger">Produits-Create</a>
@stop
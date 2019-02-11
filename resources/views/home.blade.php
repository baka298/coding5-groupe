@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <p>You are logged in!</p>
    <a href="{{ route('user.index') }}" class="btn btn-primary">USERS</a>
    <a href="{{ route('role.index') }}" class="btn btn-dark">ROLES</a>
    <a href="{{ route('profil.index') }}" class="btn btn-primary">PROFILES</a>
    <a href="{{ route('product.index') }}" class="btn btn-dark">PRODUCTS</a>
@stop
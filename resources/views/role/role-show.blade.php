@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>ONE ROLE</h1>
@stop

@section('content')
<div class="container">
    <h3 class='text-primary'>Role's name : {{$role->name}}</h3>
</div>

<a href="{{ route('home')}}" class="btn btn-secondary mt-5 mr-2">HOME</a>
<a href="{{ route('role.index')}}" class="btn btn-info mt-5">ROLES</a>

@stop
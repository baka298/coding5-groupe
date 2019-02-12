@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
<h1>Coding5-groupe</h1>
@stop

@section('content')
    
<a class="btn btn bg-danger text-white" href="{{route('photo.index')}}">Gallery</a>
<a  class="btn btn bg-blue m-3" href="{{route('question.index')}}">FAQ</a>
@stop
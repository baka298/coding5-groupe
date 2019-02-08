@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Subscribe to our newsletter!</h1>
@stop

@section('content')
    <div class="container">
    
        @foreach ($newsletter as $item)
            <div class="row">
            <col-6>{{$item->name}}</col-6>
            <col-6>{{$item->email}}</col-6>
            </div>
    
        @endforeach
    </div>
    
@stop
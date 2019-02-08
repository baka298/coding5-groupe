@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Event show</h1>
@stop

@section('content')
<div class="container">
    <h1>{{$event->title}}</h1>
    <h6 class="text-muted">{{$event->from_date->format('d')}} {{$event->from_date->format('M')}} {{$event->from_date->format('y')}} <strong>to</strong> {{$event->to_date->format('d')}} {{$event->to_date->format('M')}} {{$event->to_date->format('y')}}</h6>
    <h6 class="text-muted">{{$event->adress}}</h6>
    <br>
    <div>{{$event->text}}</div>
</div>
@stop
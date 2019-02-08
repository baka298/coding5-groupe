@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
<h1>Event list <a href="{{route('event.create')}}" class="btn btn-primary btn-sm">create an event</a></h1>
@stop

@section('content')
<div class="container">
    @foreach ($events as $event)
    <div class="card flex-md-row mb-4 shadow-sm h-md-250">
        <div class="card-body d-flex flex-column align-items-start">
            <strong class="d-inline-block mb-2 text-success">Event</strong>
            <h3 class="mb-0">
                <a class="text-dark" href="#">{{$event->title}}</a>
            </h3>
            <div class="mb-1 text-muted">{{$event->from_date->format('d')}} {{$event->from_date->format('M')}} {{$event->from_date->format('y')}} <strong>to</strong> {{$event->to_date->format('d')}} {{$event->to_date->format('M')}} {{$event->to_date->format('y')}}</div>
            <div class="mb-1 text-muted">{{$event->adress}}</div>
            <br>
            <p class="card-text mb-auto">{{str_limit($event->text, 300)}}</p>
            <br>
            <div class="links d-flex">
                <a href="{{route('event.show', ['event' => $event->id])}}">Show ...</a>
                <a href="{{route('event.edit', ['event' => $event->id])}}" class="text-warning ml-3">Edit</a>
                <form action="{{route('event.destroy', ['event' => $event->id])}}" style="display: inline;" method="POST">
                    @method('DELETE')
                    @csrf
                    <button href="#" class="text-danger ml-3" style="background: none; border:none;">Delete</button>
                </form>
            </div>
        </div>
        <div class="bg-success flex-column d-flex justify-content-center align-items-center" style="min-width: 200px !important;">
            <h2>{{$event->from_date->format('d')}}</h2>
            <h4>{{$event->from_date->format('M')}}</h4>
        </div>
    </div>
    @endforeach
</div>
@stop

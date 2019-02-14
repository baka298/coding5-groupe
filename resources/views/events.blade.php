@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Calendar</h1>
@stop

@section('content')
   
<table class="table">
        <thead>
          <tr>
            <th scope="col">Event</th>
            <th scope="col">Place</th>
            <th scope="col">Date</th>
            <th scope="col">Time</th>
            
          </tr>
        </thead>
        
        <tbody>
        <tr>
        @foreach ($events as $event)
        <td>{{$event->name}}</td>
        <td>{{$event->place}}</td>
        <td>{{$event->date}}</td>
        <td>{{$event->time}}</td>
        @can('admin')
          <td> 
              <a href="{{route('events.edit', ['id'=>$event->id])}}" class="btn btn-warning">edit</a>
          </td>
        @endcan
        <td> 
        @can('admin')
            <form action="{{route('events.destroy',['id'=>$event->id])}} " method="POST">
            @method('DELETE')
            @csrf
                <button class="btn btn-danger"> delete </button>
            </form>
        @endcan
         </td>

        </tr>
        @endforeach
        </tbody>
</table>

@stop
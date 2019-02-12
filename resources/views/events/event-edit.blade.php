@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>New Events</h1>
@stop

@section('content')


<form  method="POST" action="{{route('event.update',['event' => $event->id])}}" method="POST" enctype="multipart/form-data">
@csrf
 @method('PUT')



<div class="form-group">
    <label for="title">Title</label>
    <input type="text"
      class="form-control" name="title" id="title" aria-describedby="helpId" placeholder="" value="{{$event->title}}">
  </div>

  <div class="form-group">
      <label for="title">Lieu</label>
      <input type="text"
        class="form-control" name="lieu" id="lieu" aria-describedby="helpId" placeholder="" value="{{$event->lieu}}">
    </div>

  

  <div class="form-group">
    <label for="desc">Description</label>
    <input type="text"
      class="form-control" name="desc" id="desc" aria-describedby="helpId" placeholder="" value="{{$event->desc}}">
  </div>

  

  <div class="form-group">
        <label>Date Debut</label>
        <input type="date"
          class="form-control" name="start_date" aria-describedby="helpId" placeholder="" value="{{$event->start_date}}">
  </div>

  <div class="form-group">
        <label>Heure Debut</label>
        <input type="time"
          class="form-control" name="start_hours" aria-describedby="helpId" placeholder="" value="{{$event->start_hours}}">
  </div>


  <div class="form-group">
        <label>Date Fin</label>
        <input type="date"
          class="form-control" name="end_date" aria-describedby="helpId" placeholder="" value="{{$event->end_date}}">
  </div>

  <div class="form-group">
        <label>Heure Fin</label>
        <input type="time"
          class="form-control" name="end_hours" aria-describedby="helpId" placeholder="" value="{{$event->end_hours}}">
  </div>
    

<button>Submit</button>
</form>

      @stop
@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>CREATE EVENT</h1>
@stop

@section('content')
    
<form action="{{route('events.store')}} " method="POST" enctype="multipart/form-data">

  @csrf
<div class="form-group">
  <label for="">Event name</label>
  <input type="text" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId">
</div>
<div class="form-group">
    <label for="">Place</label>
    <input type="text" name="place" id="" class="form-control" placeholder="" aria-describedby="helpId">
  </div>
  <div class="form-group">
      <label for="">Date</label>
      <input type="date" name="date" id="">
    </div>
    <div class="form-group">
      <label for="">Time</label>
      <input type="time" name="time" id="">
    </div>

    <button class="btn btn-success" type="submit">create</button>

</form>

@stop
@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Edit this user</h1>
@stop

@section('content')
    
<form action="{{route('events.update', ['id'=>$event->id])}} " method="POST">

  @method('PUT')
  @csrf

<div class="form-group">
    <label for="">Event Name</label>
    {{-- @if($errors->has('email'))
    @foreach($errors->get('email') as $error)
      <div class="text-danger">{{$errors->first('email')}} </div>
    @endforeach 
  @endif --}}

    <input type="text" name="name"  value="{{old('name', $event->name)}} " class="form-control {{$errors->has('name') ? 'border-danger':''}}" placeholder="" aria-describedby="helpId">
  </div>

  <div class="form-group">
      <label for="">Place</label>
      <input type="text" name="place" value="{{$event->place}} " class="form-control" placeholder="" aria-describedby="helpId">
    </div>
    <div class="form-group">
        <label for="">Date</label>
        <input type="date" name="date" value="{{$event->date}} " class="form-control" placeholder="" aria-describedby="helpId">
      </div>
      <div class="form-group">
          <label for="">Time</label>
          <input type="time" name="time" value="{{$event->time}} " class="form-control" placeholder="" aria-describedby="helpId">
        </div>

    <button class="btn btn-success" type="submit">update</button>

</form>

@stop
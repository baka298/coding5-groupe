@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    
<form action="{{route('mail')}} " method="POST">

  @csrf

  <div class="form-group">
    <label for="">Name</label>
    <input type="text" name="name" id="" class="form-control">
  </div>
  <div class="form-group">
      <label for="">Email</label>
      <input type="text" name="email" id="" class="form-control">
    </div>
    
    <button type="submit">submit</button>

</form>

@stop
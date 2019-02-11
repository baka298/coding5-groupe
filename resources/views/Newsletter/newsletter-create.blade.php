@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="text-danger">Newsletter</h1>
@stop

@section('content')
    <form action="{{ route('newsletter.store') }}" method="POST">
        @csrf
    <div class="form-group">
      <label for="">Email Newsletter</label>
      <input type="text"
        class="form-control" name="email" id="" aria-describedby="helpId" placeholder="">
      
    </div>
    <button type="submit" class="btn btn-success">Submit</button>
</form>
   
@stop
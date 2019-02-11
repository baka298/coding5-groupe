@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="text-danger">Welcome Bro</h1>
@stop

@section('content')
<form action="{{ route('role.store') }}" method="POST">
    @csrf
   <div class="form-group">
     <label for="">Rôles</label>
     <select class="form-control" name="name" id="">
       <option>Admin</option>
       <option>Editor</option>
       <option>Guest</option>
     </select>
   </div>
   <button type="submit" class="btn btn-success">Submit</button>
</form>
   
@stop
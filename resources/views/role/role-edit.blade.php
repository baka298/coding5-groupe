@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Roles create</h1>
@stop

@section('content')
<div class="container">
  <form action="{{route('role.update', ['role' => $role->id])}}" method="POST">
    @method('PUT')
    @csrf
    @if($errors->any())
    <div class="alert alert-danger px-5">
        <ul class="list-group">
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="form-group">
      <label for="">Role</label>
      <input type="text" class="form-control" id="inlineFormInputGroupUsername" value="{{$role->name}}" name="role" placeholder="role">
    </div> 
    <button class="btn btn-success" type="submit">Valider</button>
  </form>
</div>
@stop

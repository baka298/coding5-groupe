@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Techs</h1>
@stop

@section('content')
  <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">{{ $tech->name }}</h5>
      <div class="row">
      <div class="col-3">
        <form action="{{ route('techs.destroy',['id'=>$tech->id]) }}" method="POST">
          @method('delete')
          @csrf
          <button class="btn btn-outline bg-danger m-2" type="submit">Delete</button>
        </form>
      </div>
      </div>
    </div>
  </div>
@stop
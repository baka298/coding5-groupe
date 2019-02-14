@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="text-center">Nos Newsletters</h1>
@stop

@section('content')
<div class="row">
  @foreach ($newsletters as $item)
    <div class="container">
          <div class="row">
            <div class="col-4">{{ $item->email }}</div>
            <div class="col-4">{{ $item->name }}</div>
            <div class="col-4">
                  <form action="{{ route('newsletters.destroy',['id'=>$item->id]) }}" method="POST">
                        @method('delete')
                        @csrf
                        <button class="btn btn-outline bg-danger m-2" type="submit">Delete</button>
                  </form>
            </div>
          </div>
    </div>
  @endforeach
</div>
@stop
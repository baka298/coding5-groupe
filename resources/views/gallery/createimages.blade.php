@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<form action="{{route('gallery.store')}}" method="POST" enctype="multipart/form-data">
        
        @csrf

        <div class="form-group">
          <label for="">Image</label>
          @if ($errors->has('image')) 
          @foreach ($errors->get('image') as $error)
    <div class="text-danger">{{$errors->first('image')}}</div>
          @endforeach
      @endif
          <input type="file"
            class="form-control" name="image" id="" aria-describedby="helpId" placeholder="">
          <small id="helpId" class="form-text text-muted">Upload an image</small>
        </div>

        <div class="form-group">
            <label for="">Title</label>
            @if ($errors->has('title')) 
            @foreach ($errors->get('title') as $error)
      <div class="text-danger">{{$errors->first('title')}}</div>
            @endforeach
        @endif
            <input type="text"
              class="form-control" name="title" id="" aria-describedby="helpId" placeholder="">
          </div>

          <div class="form-group">
            <label for="">Description</label>
            @if ($errors->has('description')) 
          @foreach ($errors->get('description') as $error)
    <div class="text-danger">{{$errors->first('description')}}</div>
          @endforeach
      @endif
            <input type="text"
              class="form-control" name="description" id="description" aria-describedby="helpId" placeholder=""> 
          </div>  

        <button type="submit">Submit</button>

    </form>
@stop
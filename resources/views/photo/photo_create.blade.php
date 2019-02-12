@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    
@stop

@section('content')
<h1>Create Picture</h1>

<a class="btn btn bg-blue" href="{{route('home')}}">Page précédente</a>

<a class="btn btn bg-blue" href="{{route('photo.index')}}">Base de donnée</a>
    
  <form action="{{route('photo.store')}}" method="POST" enctype="multipart/form-data">
  @csrf
      <div class="form-group">
            <label for="">Image</label>
            @if($errors->has('image'))
                  @foreach ($errors->get('image') as $error)
                        <div class="text-danger">
                              {{$errors->first('image')}}
                        </div>
                  @endforeach
            @endif
            <input type="file" class="form-control" name="image" id="" aria-describedby="helpId" placeholder="">
          
      </div>
      <div class="form-group">
            <label for="">Name</label>
            @if($errors->has('name'))
                  @foreach ($errors->get('name') as $error)
                        <div class="text-danger">
                              {{$errors->first('name')}}
                        </div>
                  @endforeach
            @endif
            <textarea class="form-control {{$errors-> has('name')?'border-danger':''}}" name="name" id="" rows="3" value="{{old('name')}}"></textarea>
      </div>

      <div class="form-group">
            <label for="">Description</label>
            @if($errors->has('name'))
                  @foreach ($errors->get('name') as $error)
                        <div class="text-danger">
                              {{$errors->first('name')}}
                        </div>
                  @endforeach
            @endif
            <textarea class="form-control{{$errors-> has('name')?'border-danger':''}}" name="description" id="" rows="3" value="{{old('name')}}"></textarea>
      </div>

     
      <button class="btn-warning" type="submit">Submit</button>
    
  </form>
@stop
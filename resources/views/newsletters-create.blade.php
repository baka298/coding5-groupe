@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="col-4 text-center">Create Newsletter</h1>
@stop

@section('content')
  <form class="col-4" action="{{route('newsletters.store')}}" method="POST" enctype="multipart/form-data">

  @csrf


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
        <label for="">Email</label>
        @if($errors->has('email'))
              @foreach ($errors->get('email') as $error)
                    <div class="text-danger">
                          {{$errors->first('email')}}
                    </div>
              @endforeach
        @endif
        <textarea class="form-control {{$errors-> has('email')?'border-danger':''}}" name="email" id="" rows="3" value="{{old('email')}}"></textarea>
  </div>
     
      
      <button class="btn-warning btn" type="submit">Submit</button>
    
  </form>
@stop
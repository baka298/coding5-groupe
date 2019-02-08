@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Subscribe to our newsletter!</h1>
@stop

@section('content')
    <div class="container">
    <form action="{{route('submitMail')}}" method="POST">

        @csrf

            <div class="form-group">
              <label for="">Name</label>
              @if ($errors->has('name'))
                  @foreach ($errors->get('name') as $error)
            <p class="text-danger">{{$errors->first('name')}}</p>
                  @endforeach
              @endif
              <input type="text"
                class="form-control {{$errors->has('name')?'border-danger':''}}" name="name" id="" aria-describedby="helpId" placeholder="">
              
            </div>

            <div class="form-group">
              <label for="">Email</label>
              @if ($errors->has('email'))
                  @foreach ($errors->get('email') as $error)
            <p class="text-danger">{{$errors->first('email')}}</p>
                  @endforeach
              @endif
              <input type="text"
                class="form-control {{$errors->has('email')?'border-danger':''}}" name="email" id="" aria-describedby="helpId" placeholder="">
              
            </div>

            <button type="submit">Submit</button>
        </form>
    </div>
@stop
@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<form action="{{route('questionsubmit')}}" method="post">

    
        @csrf
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
         <label for="">Question</label>
         @if ($errors->has('question')) 
          @foreach ($errors->get('question') as $error)
    <div class="text-danger">{{$errors->first('question')}}</div>
          @endforeach
      @endif
         <textarea class="form-control" name="question" id="" rows="3"></textarea>
       </div>

          <div class="form-group">
            <label for="">Name</label>
            @if ($errors->has('name')) 
          @foreach ($errors->get('name') as $error)
    <div class="text-danger">{{$errors->first('name')}}</div>
          @endforeach
      @endif
            <input type="text"
              class="form-control" name="name" id="" aria-describedby="helpId" placeholder="">
          </div>


          <button type="submit">Submit</button>
    </form>
@stop
@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Edit</h1>
@stop

@section('content')

<div class="container">

<form action="{{route('question.update',['id'=>$question->id])}}" method="POST" enctype="multipart/form-data">
  @method('PUT')
  @csrf
        
        
        <div class="form-group">
          <label for="">Réponse</label>
          @if($errors->has('reponse'))
            @foreach ($errors-> get('reponse') as $error)
              <div class="text-danger">
                {{$errors->first('reponse')}}
              </div>
            @endforeach
          @endif
            <textarea class="form-control{{$errors-> has('reponse')?'border-danger':''}}" name="reponse" id="" rows="3" value="{{old('reponse')}}"></textarea>
        </div>
        <button class="btn btn-danger" type="submit">
          UPDATE
        </button>
</form>
       
</div>
  
@stop
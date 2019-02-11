@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Contact</h1>
@stop

@section('content')
    <h4>Contact </h4>


<form action="{{route('formulaire.store')}}" method='POST'>
   @csrf
    <div class="form-group">
      <label for="">First Name</label>
        @if ($errors->has('name'))
            @foreach($errors -> get('name') as $error)
	            <div class= "text-danger">{{$errors->first('name')}}</div> 
            @endforeach
          @endif 
      <input type="text" class="form-control {{$errors->has('name') ? 'border-danger':''}} " name="name" id="" aria-describedby="helpId" placeholder="" value="{{old('name')}}">
        
    </div>
    <div class="form-group">
      <label for="">Last Name</label>
       @if ($errors->has('lastname'))
            @foreach($errors -> get('lastname') as $error)
	            <div class= "text-danger">{{$errors->first('lastname')}}</div> 
            @endforeach
        @endif 
      <input type="text"
        class="form-control {{$errors->has('lastname') ? 'border-danger':''}} " name="lastname" id="" aria-describedby="helpId" placeholder="" value="{{old('lastname')}}">
    </div>
    <div class="form-group">
      <label for="">Email</label>
       @if ($errors->has('email'))
            @foreach($errors -> get('email') as $error)
	            <div class= "text-danger">{{$errors->first('email')}}</div> 
            @endforeach
          @endif 
      <input type="text"
        class="form-control  {{$errors->has('email') ? 'border-danger':''}}" name="email" id="" aria-describedby="helpId" placeholder="" value="{{old('email')}}">
    </div>
    <div class="form-group">
      <label for="">Telephone</label>
       @if ($errors->has('telephone'))
            @foreach($errors -> get('telephone') as $error)
	            <div class= "text-danger">{{$errors->first('telephone')}}</div> 
            @endforeach
          @endif 
      <textarea class="form-control {{$errors->has('telephone') ? 'border-danger':''}}" name="telephone" id="" rows="3" value="{{old('telephone')}}"></textarea>
    </div>
    <div class="form-group">
      <label for="">Question</label>
       @if ($errors->has('question'))
            @foreach($errors -> get('question') as $error)
	            <div class= "text-danger">{{$errors->first('question')}}</div> 
            @endforeach
        @endif 
      <textarea class="form-control {{$errors->has('question') ? 'border-danger':''}}" name="question" id="" rows="3" value="{{old('question')}}"></textarea>
    </div>
    
    <br>
    <br>
    <button type="submit" class="btn-success">Submit</button>
</form>

@stop


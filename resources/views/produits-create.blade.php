@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>E-SHOP</h1>
@stop

@section('content')
    <p>Crée votre produit</p>

<a href="{{route('produit.index')}}"class="btn btn-danger">Produit</a>

<form action="{{route('produit.store')}}" method='POST' enctype="multipart/form-data">
   @csrf
    <div class="form-group">
      <label for="">Image</label>
        @if ($errors->has('image'))
            @foreach($errors -> get('image') as $error)
	            <div class= "text-danger">{{$errors->first('image')}}</div> 
            @endforeach
          @endif 
      <input type="file" class="form-control {{$errors->has('image') ? 'border-danger':''}}" name="image" id="" aria-describedby="helpId" placeholder="" value="{{old('image')}}">
        
    </div>
    <div class="form-group">
      <label for="">Name</label>
       @if($errors->has('name'))
              @foreach($errors->get('name') as $error)
	              <div class="text-danger">{{$errors->first('name')}}</div> 
              @endforeach
            @endif
      <input type="text"
        class="form-control {{$errors->has('name') ? 'border-danger':''}}" name="name" id="" aria-describedby="helpId" placeholder=""value="{{old('name')}}">
    </div>
    <div class="form-group">
      <label for="">description</label>
        @if ($errors->has('description'))
            @foreach($errors -> get('description') as $error)
	            <div class= "text-danger">{{$errors->first('description')}}</div> 
            @endforeach
        @endif
      <textarea class="form-control {{$errors->has('description') ? 'border-danger':''}}" name="description" id="" rows="3" value="{{old('description')}}"></textarea>
    </div>
    <div class="form-group">
      <label for="">prix</label>
       @if ($errors->has('prix'))
            @foreach($errors -> get('prix') as $error)
	            <div class= "text-danger">{{$errors->first('prix')}}</div> 
            @endforeach
        @endif 
      <textarea class="form-control {{$errors->has('prix') ? 'border-danger':''}}" name="prix" id="" rows="3" value="{{old('prix')}}"></textarea>
    </div>
    
    <br>
    <br>
    <button type="submit" class="btn-success">Submit</button>
</form>

@stop


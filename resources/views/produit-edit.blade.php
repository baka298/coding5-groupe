@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Edit-Produit</h1>
@stop

@section('content')

<div class="container">

<form action="{{route('produit.update',['produits'=>$produit->id])}}" method="POST" enctype="multipart/form-data">
  @method('PUT')
  @csrf
        <div class="form-group">
          <label for="">Image</label>
          @if ($errors->has('image'))
            @foreach($errors -> get('image') as $error)
	            <div class= "text-danger">{{$errors->first('image')}}</div> 
            @endforeach
          @endif 
          <input type="file" class="form-control" name="image" id="" aria-describedby="helpId" placeholder="">
        
        </div>
        <div class="form-group">
            <label for="">Name</label>
            @if($errors->has('name'))
              @foreach($errors->get('name') as $error)
	              <div class="text-danger">{{$errors->first('name')}}</div> 
              @endforeach
            @endif 
            <input type="text" class="form-control {{$errors->has('name') ? 'border-danger':''}}" name="name" id="" aria-describedby="helpId" placeholder="" value="{{old('name')}}">
            
        </div>
        <div class="form-group">
          <label for="">Description</label>
          @if ($errors->has('description'))
            @foreach($errors -> get('description') as $error)
	            <div class= "text-danger">{{$errors->first('description')}}</div> 
            @endforeach
          @endif 
          <textarea class="form-control" name="description" id="" rows="3"></textarea>
        </div>
        <div class="form-group">
          <label for="">Prix</label>
          @if ($errors->has('prix'))
            @foreach($errors -> get('prix') as $error)
	            <div class= "text-danger">{{$errors->first('prix')}}</div> 
            @endforeach
          @endif 
          <textarea class="form-control" name="prix" id="" rows="3"></textarea>
        </div>
        <button class="btn btn-danger" type="submit">
          UPDATE
        </button>
</form>
       
</div>
  
@stop
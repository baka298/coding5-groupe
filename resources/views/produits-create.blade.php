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
        
      <input type="file" class="form-control" name="image" id="" aria-describedby="helpId" placeholder="">
        
    </div>
    <div class="form-group">
      <label for="">Name</label>
       
      <input type="text"
        class="form-control" name="name" id="" aria-describedby="helpId" placeholder="">
    </div>
    <div class="form-group">
      <label for="">description</label>
       
      <textarea class="form-control" name="description" id="" rows="3"></textarea>
    </div>
    <div class="form-group">
      <label for="">prix</label>
       
      <textarea class="form-control" name="prix" id="" rows="3"></textarea>
    </div>
    
    <br>
    <br>
    <button type="submit" class="btn-success">Submit</button>
</form>

@stop


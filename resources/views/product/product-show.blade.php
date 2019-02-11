@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>YOUR PRODUCT</h1>

   <div class="row mt-4">
         <div class="col-4">
            <div class="card mb-3" style="width: 95%; height: 450px;">
               <img class="card-img-top" src="{{ $product->photo }}" alt="Card image cap">
               <div class="card-body">
                  <h5 class="card-title">{{ $product->name }}</h5>
                  <p class="card-text">{{ $product->description }}</p>
                  <h5 class="card-text" style="text-align:right; color:blue;"><b>{{ $product->price }} €</b></h5>
               
                  <a href="{{route('product.edit',['id'=>$product->id])}}" class="btn btn-warning mr-1 mt-4">EDIT</a>
               
               </div>
            </div>
         </div>
   </div>
@stop

@section('content')
   <a href="{{ route('home')}}" class="btn btn-secondary mt-1 mr-2">HOME</a>
   <a href="{{ route('product.index')}}" class="btn btn-info mt-1">PRODUCTS</a>
@stop
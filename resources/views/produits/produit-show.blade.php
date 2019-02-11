@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Nos Produits</h1>
@stop

@section('content')


<a href="{{route('produit.create')}}"><button >Create Product</button></a><br>

<div class="row">


  
  
  
  <div class="col-3">
    <div class="card mb-3" style="width: 18rem;">
        <img class="card-img-top" src="{{Storage::disk('productImage')->url($produit->image)
      }}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">{{$produit->title}}</h5>
          <p class="card-text">{{$produit->desc}}</p>
          <a href="" class="btn btn-primary">{{$item->price}} €</a>
        </div>
      </div>
    </div>
    
   
    
    
    
    
    
    
    
  </div>

      @stop
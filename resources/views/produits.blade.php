@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Nos Produits</h1>
@stop

@section('content')


<a href="{{route('produit.create')}}"><button >Create Product</button></a><br>

<div class="row">


  @foreach ($produits as $item) 
  
  
  <div class="col-3">
      <a href="{{route('produit.show',['produit' => $item->id])}}"><button>S</button></a>
      <a href="{{route('produit.edit',['produit' => $item->id])}}"><button>E</button></a>
      <form action="{{route('produit.destroy',['produit' => $item->id])}}" method="POST" style="display:inline;">
     @csrf
     @method('delete')
        <button type="submit">D</button>
    </form>

    <div class="card mb-3" style="width: 18rem;">
        <img class="card-img-top" src="{{Storage::disk('productImage')->url($item->image)
      }}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">{{$item->title}}</h5>
          <p class="card-text">{{$item->desc}}</p>
          <a href="" class="btn btn-primary">{{$item->price}} €</a>
        </div>
      </div>
    </div>
    
   
    
    
    
    
    
    
    @endforeach
  </div>

      @stop
@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>SHOW</h1>
@stop

@section('content')

<div class="container">
        <div class="row">
            <div class="card m-2 p-3" style="width: 18rem;">
                    <img class="card-img-top" src="{{Storage::disk('image')->url($produit->image)}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-name">{{$produit->name}}</h5>
                        <p class="card-description">{{$produit->description}}</p>
                        <p class="card-description">{{$produit->prix}}</p>
                    
                    </div>
                    
                    <form action="{{route('produit.destroy',['id'=>$produit->id])}}" method="post">
                        @method('delete')
                        @csrf
                        <button class="btn btn bg-danger text-white" type="submit">Delete</button>
                    </form>
                    
            </div>
        </div>
</div>
   
@stop
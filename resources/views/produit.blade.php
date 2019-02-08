@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>E-SHOP</h1>
@stop

@section('content')
    <p>WELCOME TO E-SHOP!</p>

<a href="{{route('home')}}"class="btn btn-danger">HOME</a>
<a href="{{route('produit.create')}}" class=" btn btn-danger">Produits-Create</a>


<div class="container">
    <div class="row">
        @foreach($produits as $item)
                <div class="card m-2 p-3" style="width: 18rem;">
                    <img class="card-img-top" src="{{Storage::disk('image')->url($item->image)}}">
                    
                    <div class="card-body">
                        <h5 class="card-name">{{$item->name}}</h5>
                        <p class="card-description">{{$item->description}}</p>
                        <p class="card-description">{{$item->prix}}</p>
                        {{-- chemin pour le show --}}
                        <a class="btn btn bg-warning text-dark m-2 p-2 " href="{{route('produit.show',['id'=>$item->id])}}">Show</a>
                        {{-- chemin pour le edit --}}
                        <a class="btn btn bg-black text-white" href="{{route('produit.edit',['id'=>$item->id])}}">Edit</a>
                        
                    </div>
                </div>
        @endforeach
    </div>
</div>
@stop
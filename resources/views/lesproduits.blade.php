@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Nos produits</h1>
       <div class="row">
           @foreach ($tableau as $item)
           <div class="col-lg-3 ml-2 mt-2">
               <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{Storage::disk('image')->url($item->image)}}" alt="Card image cap" style="height: 200px;">
                    <div class="card-body">
                    <h5 class="card-title"><i>{{$item->titre}}</i></h5>
                        <a href="#" class="btn btn-primary">Acheter pour <b class="text-danger">{{$item->prix}}€</b></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
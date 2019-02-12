@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Create picture</h1>
    <a class="btn btn bg-blue" href="{{route('photo.create')}}">Page précédente</a>
   
@stop

@section('content')

    <div class="container">
        <div class="row">
            @foreach($photos as $item)
                    <div class="card m-2 p-3" style="width: 18rem;">
                        <img class="card-img-top" src="{{Storage::disk('image')->url($item->image)}}">
                        
                        <div class="card-body">
                            <h5 class="card-name">{{$item->name}}</h5>
                            <p class="card-description">{{$item->description}}</p>
                            {{-- chemin pour le show --}}
                             <a class="btn btn bg-warning text-dark m-2 p-2 " href="{{route('photo.show',['id'=>$item->id])}}">Show</a> 
                            {{-- chemin pour le edit --}}
                             <a class="btn btn bg-black text-white" href="{{route('photo.edit',['id'=>$item->id])}}">Edit</a>
                        </div> 

                    </div>
            @endforeach 
        </div>
    </div> 
@stop 
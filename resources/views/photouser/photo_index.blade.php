@extends('layouts.app')

@section('content')
    <div class="m-5 p-2">
        <h1>Gallery</h1>
    </div>
    {{-- <a class="btn btn bg-blue" href="{{route('photo.create')}}">Page précédente</a> --}}
   
    <div class="container">
        <div class="row">
            @foreach($photos as $item)
                    <div class="card m-2 p-3" style="width: 18rem;">
                        <img class="card-img-top" src="{{Storage::disk('image')->url($item->image)}}">
                        
                        <div class="card-body">
                            <h5 class="card-name">{{$item->name}}</h5>
                            <p class="card-description">{{$item->description}}</p>
                            {{-- chemin pour le show --}}
                             {{-- <a class="btn btn bg-warning text-dark m-2 p-2 " href="{{route('photo.show',['id'=>$item->id])}}">Show</a>  --}}
                            {{-- chemin pour le edit --}}
                            {{-- <a class="btn btn bg-black text-white" href="{{route('photo.edit',['id'=>$item->id])}}">Edit</a> --}}
                        </div> 
                    </div>
            @endforeach 
        </div>
    </div> 
@endsection

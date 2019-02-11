@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
   <h1 class="mb-4">PRODUCTS</h1>

   <td colspan="3">
      <a href="#" style="display:block;" class="btn btn-secondary d-block">ADD A PRODUCT</a>
   </td> 
   
   <div class="row mt-4">
      @foreach ($product as $item)
         <div class="col-4">
            <div class="card mb-5" style="width: 95%; height: 450px;">
               <img class="card-img-top" src="{{ $item->photo }}" alt="Card image cap">
               <div class="card-body">
                  <h5 class="card-title">{{ $item->name }}</h5>
                  <p class="card-text">{{ $item->description }}</p>
                  <h5 class="card-text" style="text-align:right; color:blue;"><b>{{ $item->price }} €</b></h5>
                  
                  <a href="{{route('product.show', ['id'=>$item->id])}}" class="btn btn-success mr-1 mt-2">READ</a>
                  <a href="" class="btn btn-warning mr-1 mt-2">EDIT</a>
                  <form action="{{ route('product.destroy',['id'=>$item->id])}}" method="post">
                     @method('DELETE')
                     @csrf
                        <button type="submit" class="btn btn-danger mt-2">DELETE</button>
                  </form>
               </div>
            </div>
         </div>
      @endforeach
   </div>
@stop

@section('content')
    <a href="{{ route('home')}}" class="btn btn-secondary mt-1 mr-2">HOME</a>
@stop
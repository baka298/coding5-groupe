@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>EDIT YOUR PRODUCT</h1>

   <form action="{{ route('product.update',['product'=>$product->id])}}" method="POST" enctype="multipart/form-data">
   @method('PUT')
   @csrf
      <div class="row mt-4">
         <div class="col-4">
            <div class="card mb-3" style="width: 95%; height: 350px;">
               <input type="file" name="photo" class="m-3" value='{{$product->photo}}'>
               <div class="card-body">
                  
                  <h5 class="card-title">Name</h5>
                  <input type="text" name="name" value='{{old('name',$product->name)}}'>
                  @if($errors->has('name'))
                  @foreach($errors->get('name') as $error)
                     <div class="text-danger">{{$error}}</div>
                  @endforeach
                  @endif   

                  <h5 class="card-text">Description</h5>
                  <input type="text" name="description" value='{{old('description',$product->description)}}'>
                  @if($errors->has('description'))
                  @foreach($errors->get('description') as $error)
                     <div class="text-danger">{{$error}}</div>
                  @endforeach
                  @endif   

                  <h5 class="card-text">Price</h5>
                  <input type="text" name="price" value='{{old('price',$product->price)}}'>
                  @if($errors->has('price'))
                  @foreach($errors->get('price') as $error)
                     <div class="text-danger">{{$error}}</div>
                  @endforeach
                  @endif   

                  <button type="submit" class='btn btn-warning mt-4'>UPDATE</button>
               </div>
            </div>
         </div>
      </div>
   </form>
@stop

@section('content')
   <a href="{{ route('home')}}" class="btn btn-secondary mt-1 mr-2">HOME</a>
   <a href="{{ route('product.index')}}" class="btn btn-info mt-1">PRODUCTS</a>
@stop
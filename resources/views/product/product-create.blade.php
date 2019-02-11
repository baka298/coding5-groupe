@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>CREATE A PRODUCT</h1>

   <form action="{{ route('product.store')}}" method="POST" enctype="multipart/form-data">
   @csrf
      <div class="row mt-4">
         <div class="col-4">
            <div class="card mb-3" style="width: 95%; height: 450px;">
               <input type="file" name="photo" class="m-3">
               <div class="card-body">

                  <h5 class="card-title">Name</h5>
                  <input type="text" class="form-control" name="name" aria-describedby="helpId">
                  @if($errors->has('name'))
                     @foreach($errors->get('name') as $error)
                        <div class="text-danger">{{ $errors->first('name')}}</div>
                     @endforeach
                  @endif

                  <h5 class="card-text">Description</h5>
                  <input type="text" class="form-control" name="description" aria-describedby="helpId">
                  @if($errors->has('description'))
                     @foreach($errors->get('description') as $error)
                        <div class="text-danger">{{ $errors->first('description')}}</div>
                     @endforeach
                  @endif

                  <h5 class="card-text">Price</h5>
                  <input type="text" class="form-control" name="price" aria-describedby="helpId">
                  @if($errors->has('price'))
                     @foreach($errors->get('price') as $error)
                        <div class="text-danger">{{ $errors->first('price')}}</div>
                     @endforeach
                  @endif

                  <button type="submit" class='btn btn-warning mt-4'>CREATE</button>
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
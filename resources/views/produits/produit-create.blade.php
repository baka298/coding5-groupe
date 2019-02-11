@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Nos Produits</h1>
@stop

@section('content')


<form action="{{route('produit.store')}}" method="POST" enctype="multipart/form-data">
@csrf

@foreach ($errors->all() as $message) {
  
{{$message}}.<br/>
}
@endforeach
<div class="form-group">
  <label for="image">Image</label>
  <input type="file"
    class="form-control" name="image" id="image" aria-describedby="helpId" placeholder="">
</div>

<div class="form-group">
    <label for="title">Title</label>
    <input type="text"
      class="form-control" name="title" id="title" aria-describedby="helpId" placeholder="">
  </div>

  <div class="form-group">
    <label for="desc">Description</label>
    <input type="text"
      class="form-control" name="desc" id="desc" aria-describedby="helpId" placeholder="">
  </div>

  <div class="form-group">
    <label for="content">Content</label>
    <input type="text"
      class="form-control" name="content" id="content" aria-describedby="helpId" placeholder="">
  </div>

  <div class="form-group">
    <label for="price">Price</label>
    <input type="number"
      class="form-control" name="price" id="price" aria-describedby="helpId" placeholder="">
  </div>

<button>Submit</button>
</form>

      @stop
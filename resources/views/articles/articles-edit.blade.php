@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>EDIT ARTICLE</h1>
@stop

@section('content')

<form action="{{route('articles.update', ['id'=>$article->id])}}" method="POST">
@method('PUT')
@csrf

{{-- <div class="form-group">
  <label for=""></label>
  <input value="{{$item->title}}"   type="text"
    class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
</div> --}}

{{-- input title --}}
<div class="form-group">
  <label for="">TITLE</label>
  <input value="{{$article->title}}"  type="text"
    class="form-control" name="title" id="title" aria-describedby="helpId" placeholder="">
</div>
{{-- input texte --}}
<div class="form-group">
<label for="">TEXTE</label>
<textarea name="text" cols="30" rows="10" id="summary-ckeditor">{{$article->text}}</textarea>
</div>
<script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
<script>
   CKEDITOR.replace( 'summary-ckeditor' );
</script>



<button class="btn btn-danger" type="submit" >UPDATE ME</button>

</form>

@stop
@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>CREATE ARTICLES</h1>
@stop

@section('content')

<form action="{{route('articles.store')}}" method='POST' enctype="multipart/form-data">
@csrf
{{-- input title --}}
    <div class="form-group">
      <label for="">TITLE</label>
      @if($errors->has('title'))
            @foreach($errors->get('title') as $error)
            <div class="text-danger">{{$error}}</div>
            @endforeach
        @endif
      <input type="text"
        class="form-control" name="title" id="" aria-describedby="helpId" placeholder="">
    </div>
    <div class="form-group">
        <label for="imageInput">File input</label>
        <input data-preview="#preview" name="image" type="file" id="">
       
    </div>
    {{-- input texte --}}
    <div class="form-group">
        <textarea class="form-control" name="text" id="summary-ckeditor" rows="3"></textarea>
        <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
        <script>
   CKEDITOR.replace( 'summary-ckeditor' );
</script>
</div>
<select name="tech_id">
        @if($errors->has('name'))
        @foreach($errors->get('name') as $error)
        <div class="text-danger">{{$error}}</div>
        @endforeach
    @endif
    @foreach ($techs as $tech)
    <option value="{{$tech->id}}">{{$tech->categorie}}</option>
    @endforeach
</select>
<div>
        <br>
<button type="submit">SUBMIT</button>
</div>
  </div>
</form>


@stop
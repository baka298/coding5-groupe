@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>CREATE ARTICLES</h1>
@stop

@section('content')
<form action="{{route('techs.store')}}" method='POST' enctype="multipart/form-data">
        @csrf
        {{-- input title --}}
            <div class="form-group">
              <label for="">CATEGORY OF TECH</label>
              @if($errors->has('categorie'))
              @foreach($errors->get('categorie') as $error)
              <div class="text-danger">{{$error}}</div>
              @endforeach
          @endif
              <input type="text"
                class="form-control" name="categorie" value="{{old('categorie')}}"id="" aria-describedby="helpId" placeholder="">
            </div>

            
            
            <button type="submit">SUBMIT</button>
        </form>
        @stop
@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="col-4 text-center">Create Article</h1>
@stop

@section('content')
  <form class="col-4" action="{{route('articles.store')}}" method="POST" enctype="multipart/form-data">

  @csrf


      <div class="form-group">
            <label for="">Name</label>
            @if($errors->has('name'))
                  @foreach ($errors->get('name') as $error)
                        <div class="text-danger">
                              {{$errors->first('name')}}
                        </div>
                  @endforeach
            @endif
            <textarea class="form-control {{$errors-> has('name')?'border-danger':''}}" name="name" id="" rows="3" value="{{old('name')}}"></textarea>
      </div>
      
      <div class="form-group">
            <label for="">Description</label>
            @if($errors->has('name'))
                  @foreach ($errors->get('name') as $error)
                        <div class="text-danger">
                              {{$errors->first('name')}}
                        </div>
                  @endforeach
            @endif
            <textarea class="form-control{{$errors-> has('name')?'border-danger':''}}" name="description" id="summary-ckeditor" rows="3" value="{{old('name')}}"></textarea>
      </div>
      <div class="form-group">
            <label for="">Tech</label>
                  <select name="techid" id="">
            
            @foreach ($tech as $item)
                  <option value="{{$item->id}}">{{$item->name}}</option>
            @endforeach
                  </select>
      </div>
     
      
      <button class="btn-warning btn" type="submit">Submit</button>

      

      <script src="{{asset('vendor/unisharp/laravel-ckeditor/ckeditor.js')}}"></script>
      <script>
            CKEDITOR.replace( 'summary-ckeditor' );
      </script>
    
  </form>
@stop
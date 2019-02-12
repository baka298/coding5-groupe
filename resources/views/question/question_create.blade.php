{{-- @extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    
@stop

@section('content')


 {{-- <a class="btn btn bg-blue" href="{{route('home')}}">Page précédente</a> --}}

 
<a class="btn btn bg-blue" href="{{route('question.index')}}">Base de donnée</a> 

    
  <form action="{{route('question.store')}}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="form-group container-fluid">
            <label for="">Question</label>
            
            <textarea class="form-control{{$errors-> has('question')?'border-danger':''}}" name="question" id="" rows="3" value="{{old('question')}}"></textarea>
      </div>
      <button class="btn-warning  " type="submit">Submit</button>
    
  </form>
@stop --}}
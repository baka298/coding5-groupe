@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')


<form action="{{route('answersubmit', ['faq'=>$faq->id])}}" method="post">    
@method('PUT')
@csrf

<div class="form-group">
        <label for="">Title</label>
        <input type="text"
          class="form-control" name="title" id="" aria-describedby="helpId" placeholder="" value="{{ old('title', $faq->title)}}" readonly>
      </div>

     <div class="form-group">
       <label for="">Question</label>
       <input class="form-control" name="question" id=""  value="{{ old('question', $faq->question)}}" readonly></input>
     </div>

        <div class="form-group">
          <label for="">Name</label>
          <input type="text"
            class="form-control" name="name" id="" aria-describedby="helpId" placeholder="" value="{{ old('name', $faq->name)}}" readonly>
        </div>

   <div class="form-group">
     <label for="">Answer</label>
     <textarea class="form-control" name="answer" id="" rows="3" "></textarea>
   </div>

<button type="submit">Submit</button>

</form>
@stop
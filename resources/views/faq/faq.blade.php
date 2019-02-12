@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')

<a name="" id="" class="btn btn-primary" href="{{route('question')}}" role="button">Ask a question</a>

   @foreach ($faq as $item)

      @if ($item->answer)
      <div class="border">
            <h2>{{$item->title}}</h2>
             <h3>Question:</h3>
             <p>{{$item->question}}</p>
             <br>
             
             <p>Name: {{$item->name}}</p>
             <br>
             <h3>Answer:</h3>
             <p>{{$item->answer}}</p>
            
     
         <a name="" id="" class="btn btn-primary" href="{{route('answer', ['faq'=>$item->id])}}" role="button">Answer</a>
     
         <form action="{{route('delete',['faq'=>$item->id])}}" method="POST">
                 @method('DELETE')
             @csrf
         
             <button type="submit">Delete</button>
             </form>
     </div>
      @endif

      <div class="border">
            <h2>{{$item->title}}</h2>
             <h3>Question:</h3>
             <p>{{$item->question}}</p>
             <br>
             
             <p>Name: {{$item->name}}</p>
             <br>
             <h3>Answer:</h3>
             <p>{{$item->answer}}</p>
            
     
         <a name="" id="" class="btn btn-primary" href="{{route('answer', ['faq'=>$item->id])}}" role="button">Answer</a>
     
         <form action="{{route('delete',['faq'=>$item->id])}}" method="POST">
                 @method('DELETE')
             @csrf
         
             <button type="submit">Delete</button>
             </form>
     </div>
   @endforeach
@stop
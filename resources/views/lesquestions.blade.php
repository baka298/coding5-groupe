@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Les Questions</h1>
        <form action="{{route('question.store')}}" method="post">
            @csrf
            @method('POST')
            <div class="w-75">
                <h3>Poser votre question</h3>
                <textarea name="question" id="" cols="60" rows="2" required></textarea>
            </div>
            <div class="mt-1">
                <button class="btn btn-primary">POSER LA QUESTION</button>
            </div>
        </form>
        <p>
            ________
        </p>
       <div class="row">
           @foreach ($tableau as $item)
           <div class="col-lg-3 ml-2 mt-2">
                <div class="card">
                    <h5 class="card-header">Question # {{$item->id}}</h5>
                        <div class="card-body">
                          <h5 class="card-title">{{$item->question}}</h5>
                            @if ($item->reponse)
                                {{$item->reponse}}
                                <div class="text-right">
                                    <i>
                                        Traité par Admin
                                    </i>
                                </div>
                            @else
                            <div class="reponse">
                                <i>Aucune réponse</i>
                            </div>
                            @endif

                        </div>
                      </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
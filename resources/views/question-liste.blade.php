@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>NOS QUESTIONS</h1>
@stop

@section('content')
<table class="table">
        <thead>
          <tr>
            <th scope="col">#ID</th>
            <th scope="col">Question</th>
            <th scope="col">Réponse</th>

          </tr>
        </thead>
        <tbody>
@foreach ($tableau as $item)          
          <tr>
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->question}}</td>
            <td>
                @if ($item->reponse)
                    {{$item->reponse}}
                @else
                    Pas de reponse
                @endif
            </td>
            <td>
                @if (!$item->reponse)
                <a href="{{route('question.edit',['question' => $item->id])}}" class="btn btn-success">REPONDRE</a>
                @endif
            </td>
@endforeach

          </tr>
        </tbody>
      </table>
@stop
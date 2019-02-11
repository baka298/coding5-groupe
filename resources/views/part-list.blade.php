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
            <th scope="col">Nom</th>
            <th scope="col">Prenom</th>
            <th scope="col">Email</th>
            <th scope="col">Argumentation</th>
            <th scope="col">STATUS</th>
            <th scope="col">ACTION</th>

          </tr>
        </thead>
        <tbody>
@foreach ($tableau as $item)          
          <tr>
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->nom}}</td>
            <td>{{$item->prenom}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->arg}}</td>
            <td>
                @if ($item->validation === 0)
                    <span class="badge badge-secondary">EN ATTENTE</span>
                @elseif ($item->validation === 1)
                    <span class="badge badge-success">ACCEPTEE</span>
                @else
                    <span class="badge badge-danger">REFUSEE</span>
                @endif
            </td>

            <td>
                <a href="{{route('partenariat.edit',['partenariat' => $item->id])}}" class="btn btn-warning">EDIT</a>
            </td>
@endforeach

          </tr>
        </tbody>
      </table>
@stop
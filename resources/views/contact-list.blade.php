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
            <td>{{$item->demande}}</td>
            <td>
                @if ($item->status === "0")
                    <span class="badge badge-secondary">EN ATTENTE</span>
                @else
                    <span class="badge badge-success">ACCEPTEE</span>
                @endif
            </td>

            <td>
                <a href="{{route('contact.edit',['contact' => $item->id])}}" class="btn btn-warning">EDIT</a>
            </td>
@endforeach

          </tr>
        </tbody>
      </table>
@stop
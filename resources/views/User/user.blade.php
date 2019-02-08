@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="text-danger">Liste des utilisateurs</h1>
@stop

@section('content')
<table class="table table-dark">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nom</th>
        <th scope="col">Prénom</th>
        <th scope="col">Email</th>
      </tr>
    </thead>
    @foreach ($all as $item)
    <tbody>
      <tr>
        <th scope="row">{{ $item->id }}</th>
        <td>{{ $item->name }}</td>
        <td>{{ $item->prenom }}</td>
        <td>{{ $item->email }}</td>
        <td> <a href="{{ route('user.show', ['id' =>$item->id]) }}"><button type="button" class="btn btn-primary bouton">Show</button></a>
        <a href="{{ route('user.edit',['id' =>$item->id]) }}"><button type="button" class="btn btn-success ml-2">Edit</a>
        <form style="display: inline;" action="{{ route('user.destroy', ['user' =>$item->id]) }}" method="POST">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-danger bouton ml-2">Delete</button>
            </form>
        </td>
      </tr>
     
    </tbody>
     @endforeach
  </table>
@stop
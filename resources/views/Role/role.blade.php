@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="text-danger">Liste des Rôles</h1>
@stop

@section('content')
<table class="table table-dark">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Role</th>
          </tr>
        </thead>
        @foreach ($allroles as $item)
            
       
        <tbody>
          <tr>
            <th scope="row">{{ $item->id }}</th>
            <td>{{ $item->name }}</td>
            <td><a href="{{ route('role.show', ['id' =>$item->id]) }}"><button type="button" class="btn btn-primary bouton">Show</button></a>
                <a href="{{ route('role.edit',['id' =>$item->id]) }}"><button type="button" class="btn btn-success ml-2">Edit</a>
                    <form style="display: inline;" action="{{ route('role.destroy', ['role' =>$item->id]) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger bouton ml-2">Delete</button>
                            </form></td>
          </tr>
        
        </tbody>
         @endforeach
      </table>
      
@stop
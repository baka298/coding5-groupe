@extends('adminlte::page')

@section('title', 'AdminLTE')
@section('content')

@stop

@section('content_header')
    <h1 class="text-danger">Détail du rôle</h1>
<table class="table table-dark">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Role</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">{{ $roles->id }}</th>
            <td>{{ $roles->name }}</td>
            
          </tr>
        
        </tbody>
      </table>


   
@stop
@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>ONE USER</h1>
@stop

@section('content')

   <table class="table">
      <thead class="thead-dark">
         <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Password</th>
            <th scope="col">Actions</th>
         </tr>
      </thead>
        
      <tbody>
         <tr>
            <th scope="row">{{$user->id}}</th>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->password}}</td>
            <td>
               <a href="{{route('user.edit',['id'=>$user->id])}}" class="btn btn-warning">EDIT</a>
            </td>
         </tr>
      </tbody>
   </table>

   <a href="{{ route('home')}}" class="btn btn-secondary mt-1 mr-2">HOME</a>
   <a href="{{ route('user.index')}}" class="btn btn-info mt-1">USERS</a>

@stop
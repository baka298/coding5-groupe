@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>USER</h1>
@stop

@section('content')

   <table class="table">
      <thead class="thead-dark">
         <tr>
            <th scope="col">#</th>
            <th scope="col">Firstame</th>
            <th scope="col">Role</th>
            <th scope="col">Email</th>
            <th scope="col">Password</th>
            <th scope="col"></th>
            <th scope="col">Method</th>
            <th scope="col"></th>
         </tr>
      </thead>
      @foreach ($user as $item)
         <tbody>
            <tr>
               <th scope="row">{{ $item->id }}</th>
               <td>{{ $item->firstname }}</td>
               <td>{{ $item->role->name }}</td>
               <td>{{ $item->email }}</td>
               <td>********</td>
               <td>
                     <a href="{{route('user.show', ['id'=>$item->id])}}" class="btn btn-success">READ</a>
               </td>
               <td>
                     <a href="{{route('user.edit',['id'=>$item->id])}}" class="btn btn-warning">EDIT</a>
               </td>
               <td>
                     <form action="{{ route('user.destroy',['id'=>$item->id])}}" method="post">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger">DELETE</button>
                     </form>
               </td>
            </tr>
         </tbody>
      @endforeach
   </table>

   <a href="{{ route('home') }}" class="btn btn-secondary">HOME</a>
   <a href="{{ route('user.create')}}" class="btn btn-info ml-3">CREATE USER</a>

@stop

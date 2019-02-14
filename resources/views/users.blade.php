@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Users</h1>
@stop

@section('content')
   
<table class="table">
        <thead>
          <tr>
            <th scope="col">#ROLE ID</th>
            <th scope="col">Role</th>
            <th scope="col">Email</th>
            {{-- <th scope="col">Password</th> --}}
            
          </tr>
        </thead>
        
        <tbody>
        <tr>
        @foreach ($users as $item)
        <th scope="row"> {{$item->role_id}} </th>
        <td class="{{$item->status===0 ? 'text-light':''}}">{{$item->role->name}}</td>
        <td class="{{$item->status===0 ? 'text-light':''}}">{{$item->email}}</td>
        {{-- <td class="{{$item->status===0 ? 'text-light':''}}">{{$item->password}}</td> --}}
        <td class="{{$item->status===0 ? 'text-light':''}}">
            <a href="{{route('profils.show', ['id'=>$item->profil_id])}}" class="btn btn-primary">show profile</a></td>
        
        <td> 
          @can('update', $item)
            <a href="{{route('users.edit', ['id'=>$item->id])}}" class="btn btn-warning">edit</a>
          @endcan 
        </td>
        <td> 
          @can('admin')
          <form action="{{route('users.destroy',['id'=>$item->id])}} " method="POST">
          @method('DELETE')
          @csrf
              <button class="btn btn-danger"> delete </button>
          </form>
          @endcan
         </td>
        <td>
          @can('admin')
            @if ($item->status===1)
            <a href="{{route('users.block',['id'=>$item->id])}} " class="btn btn-dark">désactiver user</a>
            @else
            <a href="{{route('users.deblock',['id'=>$item->id])}} " class="btn btn-success">réactiver user</a>
            @endif
          @endcan
        
        </td>

        </tr>
        @endforeach
        </tbody>
</table>

@stop
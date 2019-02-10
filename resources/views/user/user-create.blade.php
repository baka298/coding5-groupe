@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>CREATE AN USER</h1>
@stop

@section('content')

   <form action="{{ route ('user.store')}}" method="POST">
      @csrf
   
      <table class="table">
         <thead class="thead-dark">
            <tr>
               <th scope="col">Name</th>
               <th scope="col">Email</th>
               <th scope="col">Password</th>
               <th scope="col">Actions</th>
            </tr>
         </thead>
           
         <tbody>
            <tr>
               <td>
                  <input type="text" name="name">
                  @if($errors->has('name'))
                     @foreach($errors->get('name') as $error)
                        <div class="text-danger">{{ $errors->first('name')}}</div>
                     @endforeach
                  @endif
               </td>
               <td>
                  <input type="text" name="email">
                  @if($errors->has('email'))
                     @foreach($errors->get('email') as $error)
                        <div class="text-danger">{{ $errors->first('email')}}</div>
                     @endforeach
                  @endif
               </td>
               <td>
                  <input type="text" name="password">
                  @if($errors->has('password'))
                     @foreach($errors->get('password') as $error)
                        <div class="text-danger">{{ $errors->first('password')}}</div>
                     @endforeach
                  @endif
               </td>
               <td>
                  <button class="btn btn-warning" type="submit">CREATE</button>
               </td>
            </tr>
         </tbody>
      </table>
   </form>

   <a href="{{ route('home')}}" class="btn btn-secondary mt-1 mr-2">HOME</a>
   <a href="{{ route('user.index')}}" class="btn btn-info mt-1">USERS</a>

@stop
@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>CREATE AN USER</h1>
@stop

@section('content')

   <form action="{{ route('user.store')}}" method="POST">
      @csrf
   
      <table class="table">
         <thead class="thead-dark">
            <tr>
               <th scope="col">Email</th>
               <th scope="col">Password</th>
               <th scope="col">Role</th>
               <th scope="col">Actions</th>
            </tr>
         </thead>
           
         <tbody>
            <tr>
               <td>
                  <input type="text" class="form-control" placeholder="email" name="email" value="{{old('email')}}">
                  @if($errors->has('email'))
                     @foreach($errors->get('email') as $error)
                        <div class="text-danger">{{ $errors->first('email')}}</div>
                     @endforeach
                  @endif
               </td>
               <td>
                  <input type="password" class="form-control" placeholder="password" name="password">
                  @if($errors->has('password'))
                     @foreach($errors->get('password') as $error)
                        <div class="text-danger">{{ $errors->first('password')}}</div>
                     @endforeach
                  @endif
               </td>
               <td>
                  <select name="role" class="custom-select">
                     @foreach ($roles as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>
                     @endforeach
                  </select>
                  @if($errors->has('role'))
                     @foreach($errors->get('role') as $error)
                        <div class="text-danger">{{ $errors->first('role')}}</div>
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

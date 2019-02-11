@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>EDIT USER</h1>
@stop

@section('content')

   <form action="{{ route ('user.update', ['user'=>$user->id])}}" method="POST">
      @method('PUT')
      @csrf
   
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
               
               <td>
                  @if($errors->has('name'))
                     @foreach($errors->get('name') as $error)
                        <div class="text-danger">{{$error}}</div>
                     @endforeach
                  @endif   
                  <input type="text" name="name" value='{{old('name',$user->name)}}'>
               </td>

               <td>
                  @if($errors->has('email'))
                     @foreach($errors->get('email') as $error)
                        <div class="text-danger">{{$error}}</div>
                     @endforeach
                  @endif 
                  <input type="text" name="email" value='{{old('email',$user->email)}}'>
               </td>
               
               <td>
                  @if($errors->has('password'))
                     @foreach($errors->get('password') as $error)
                        <div class="text-danger">{{$error}}</div>
                     @endforeach
                  @endif 
                  <input type="text" name="password" value='{{old('password',$user->password)}}'>
               </td>
               
               <td>
                  <button class="btn btn-warning" type="submit">UPDATE</button>
               </td>
            </tr>
         </tbody>
      </table>
   </form>

   <a href="{{ route('home')}}" class="btn btn-secondary mt-1 mr-2">HOME</a>
   <a href="{{ route('user.index')}}" class="btn btn-info mt-1">USERS</a>

@stop

@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>EDIT USER</h1>
@stop

@section('content')


    {{-- input  name--}}


{{-- input  email--}}
<div class="form-group">
    <label for="">EMAIL</label>
    @if($errors->has('email'))
@foreach($errors->get('email') as $error)
<div class="text-danger">{{$error}}</div>
@endforeach
@endif
<input value="{{old('email',$user->email)}}" 
type="text"
      class="form-control" name="email" id="" aria-describedby="helpId" placeholder="">
  </div>

  {{-- input password --}}
<div class="form-group">
<label for="">SITE</label>
@if($errors->has('password'))
@foreach($errors->get('password') as $error)
<div class="text-danger">{{$error}}</div>
@endforeach
@endif
<input value="{{old('password',$user->password)}}"  type="text" value="{{$user->password}}"
  class="form-control" name="password" id="" aria-describedby="helpId" placeholder="">
</div>

    
<button class="btn btn-danger" type="submit" >UPDATE ME</button>

    
    </form>

@stop
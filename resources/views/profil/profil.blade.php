@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Profiles</h1>
@stop

@section('content')
<div class="container">
    <table class="table table-striped">
    <thead>
        <tr>
        <th scope="col">Picture</th>
        <th scope="col">Firstname</th>
        <th scope="col">Lastname</th>
        <th scope="col">User_id</th>
        <th scope="col">Email</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($profils as $profile)
            <tr>
                <th scope="row">
                    <div style="width: 30px; height: 30px; border-radius: 50%; overflow: hidden;">
                        <img src="{{Storage::disk('profil')->url($profile->image)}}" alt="" style="max-height: 100%;">
                    </div>
                </th>
                <td>{{$profile->firstname}}</td>
                <td>{{$profile->name}}</td>
                <td>{{$profile->user_id}}</td>
                <td>{{$profile->user->email}}</td>
                <td>
                  <a href="{{route('profil.show', ['profil' => $profile->id])}}" class="btn btn-sm btn-primary">Show</a>
                  <a href="{{route('profil.edit', ['profil' => $profile->id])}}" class="btn btn-sm btn-warning">Edit</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@stop
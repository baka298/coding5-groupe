@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Event Create</h1>
@stop

@section('content')
<div class="container">
    @if($errors->any())
    <div class="alert alert-danger px-5">
        <ul class="list-group">
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="{{route('event.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="">Title</label>
            <input type="text" class="form-control" name="title" value="{{old('title')}}" placeholder="Title">
        </div>
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="">Date From</label>
                    <input type="date" class="form-control" value="{{old('from_date')}}" name="from_date" placeholder="from date">
                </div> 
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="">Date To</label>
                    <input type="date" class="form-control" value="{{old('to_date')}}" name="to_date" placeholder="to date">
                </div> 
            </div>
        </div>
        <div class="form-group">
            <label for="">Adress</label>
            <input type="text" class="form-control" name="adress" value="{{old('adress')}}" placeholder="Adress">
        </div>
        <div class="form-group">
            <label for="">Text</label>
            <textarea id="" cols="30" rows="10" class="form-control" name="text">{{old('text')}}</textarea>
        </div>
        <button class="btn btn-success" type="submit">Valider</button>
    </form>
</div>
@stop
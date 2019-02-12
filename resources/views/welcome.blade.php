@extends('layouts.app')
@section('content')
<div class="text-center">
    <a class="btn btn-primary" href="{{route('qtest')}}">Les questions</a>
<a class="btn btn-primary" href="{{route('question.create')}}">Formulaire des questions</a>
<a class="btn btn bg-danger text-white" href="{{route('photouser.photo.index')}}">Gallery</a>
</div>
    
@endsection   

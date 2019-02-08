@extends('layouts.app')
@section('content')
    <div class="container">
    <a href="{{url('/produits')}}" class="btn btn-primary">
        La Boutique
    </a>
    <a href="{{url('/question')}}" class="btn btn-primary">
        Vos questions
    </a>
    </div>
@endsection
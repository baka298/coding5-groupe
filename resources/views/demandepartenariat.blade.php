@extends('layouts.app')
@section('content')
<div class="lol" style="width: 100%">
    <form action="{{route('partenariat.store')}}" method="post">
    @csrf
    @method('POST')
    <div class="ml-5 card w-50">
        <div class="text-center">
            <h1>Demande de partenariat</h1>
        </div>
        <div class="formulair p-5">
            <div class="form-group w-50">
                <label for="name">Nom:</label>
                <input type="text" class="form-control" name="name" id="name" aria-describedby="helpId" placeholder="">
            </div>
            <div class="form-group w-50">
                <label for="prenom">Prenom:</label>
                <input type="text" class="form-control" name="prenom" id="prenom" aria-describedby="helpId" placeholder="">
            </div>
            <div class="form-group w-50">
                    <label for="prenom">Email:</label>
                    <input type="email" class="form-control" name="email" id="prenom" aria-describedby="helpId" placeholder="">
                </div>
            <div class="form-group w-50">
                <label for="argu">Argumenter la demande:</label><br>
                <textarea name="argu" id="argu" cols="50" rows="10"></textarea>
            </div>
            <div class="form-group w-50">
                <button class="btn btn-outline-dark" type="submit">Demander</button>
            </div>  
        </div>
    </div>
    </form>
</div>
@endsection
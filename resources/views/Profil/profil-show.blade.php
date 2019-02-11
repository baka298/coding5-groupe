@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="text-danger">Détails du Profil</h1>
@stop

@section('content')
<table class="table table-dark">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Date de naissance</th>
            <th scope="col">Ville</th>
            <th scope="col">Adresse</th>
            <th scope="col">Code Postale</th>
            <th scope="col">Numéro de Porte</th>
            <th scope="col">N° de Téléphonne</th>
            <th scope="col">N° de Téléphonne 2</th>
            <th scope="col">N° de Téléphonne Fixe</th>
          </tr>
        </thead>
       
        <tbody>
          <tr>
            <th scope="row">{{ $profil->id }}</th>
            <td>{{ $profil->naissance }}</td>
            <td>{{ $profil->ville }}</td>
            <td>{{ $profil->adresse }}</td>
            <td>{{ $profil->cp }}</td>
            <td>{{ $profil->np }}</td>
            <td>{{ $profil->gsm }}</td>
            <td>{{ $profil->gsm2 }}</td>
            <td>{{ $profil->fixe }}</td>
           
      </table>
@stop
@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="text-danger">Liste des Profils</h1>
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
        @foreach ($allprofiles as $item)
        <tbody>
          <tr>
            <th scope="row">{{ $item->id }}</th>
            <td>{{ $item->naissance }}</td>
            <td>{{ $item->ville }}</td>
            <td>{{ $item->adresse }}</td>
            <td>{{ $item->cp }}</td>
            <td>{{ $item->np }}</td>
            <td>{{ $item->gsm }}</td>
            <td>{{ $item->gsm2 }}</td>
            <td>{{ $item->fixe }}</td>
            <td><td> <a href="{{ route('profil.show', ['id' =>$item->id]) }}"><button type="button" class="btn btn-primary bouton">Show</button></a>
                <a href="{{ route('profil.edit',['id' =>$item->id]) }}"><button type="button" class="btn btn-success ml-2">Edit</a>
                <form style="display: inline;" action="{{ route('profil.destroy', ['profil' =>$item->id]) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger bouton ml-2">Delete</button>
                    </form>
                </td></td>
          </tr>
         
        </tbody> 
        @endforeach
      </table>
@stop
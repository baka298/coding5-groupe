@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>NOS PRODUITS</h1>
@stop

@section('content')
<table class="table">
        <thead>
          <tr>
            <th scope="col">#ID</th>
            <th scope="col">Image</th>
            <th scope="col">Titre</th>
            <th scope="col">Prix</th>
            <th scope="col">ACTION</th>
          </tr>
        </thead>
        <tbody>
@foreach ($tableau as $item)          
          <tr>
            <th scope="row">{{$item->id}}</th>
            <td><img src="{{Storage::disk('image')->url($item->image)}}" alt="" style="border-radius: 99%; height: 75px; width: 75px;"></td>
            <td>{{$item->titre}}</td>
            <td>{{$item->prix}}€</td>
            <td>
                <a href="{{route('produits.edit',['produit' => $item->id])}}" class="btn btn-warning">EDIT</a>
                <form style="display: inline;" action="{{route('produits.destroy',['produit' => $item->id])}}" method="post">
                @csrf
                @method('DELETE')
                    <button class="btn btn-danger">
                        DELETE
                    </button>
                </form>
            </td>
@endforeach

          </tr>
        </tbody>
      </table>
@stop
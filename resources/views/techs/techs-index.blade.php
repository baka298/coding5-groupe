
  @extends('adminlte::page')
  
  @section('title', 'AdminLTE')
  
  @section('content_header')
  <h1>THE CATEGORIES</h1>
  @stop
  
  @section('content')
  <a class="btn btn-primary"href="{{route('techs.create')}}">CREATE A CATEGORY</a>
  <br>
  <div class="row">
    @foreach($techs as $item)
        <div class="card col-3" style="width: 18rem;">
            <div class="card-body">
            <h5 class="card-title">{{$item->categorie}}</h5>
            <form action="{{route('techs.destroy', ['id'=>$item->id])}}" method="POST">
                @method('DELETE')
                @csrf
            <button class="btn btn-danger" type="submit">DELETE ME</button>
        </form>
        
            </div>
        </div>
    @endforeach
</div>
<hr>


  @stop
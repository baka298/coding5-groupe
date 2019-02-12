
  @extends('adminlte::page')
  
  @section('title', 'AdminLTE')
  
  @section('content_header')
  <h1>ARTICLES</h1>
  @stop
  
  @section('content')
  <a class="btn btn-primary"href="{{route('techs.index')}}">CHECK OUR CATEGORIES</a>
  <a class="btn btn-success" href="{{route('articles.create')}}">CREATE AN ARTICLE</a>
  
  <div class="row">
    @foreach($article as $item)
    <br>
        <div class="card col-3" style="width: 18rem;">
        <img class="card-img-top" src="{{Storage::disk('image')->url($item->image)}}"" alt="Card image cap">
            <div class="card-body">
            <h5 class="card-title">{{$item->title}}</h5>
            <a href="{{route('articles.show',['id'=>$item->id])}}" class="btn btn-primary">READ ME MORE</a>
            <a class="btn btn-warning" href="{{route('articles.edit',['id'=>$item->id])}}">EDIT ME</a>
            <form action="{{route('articles.destroy', ['id'=>$item->id])}}" method="POST">
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
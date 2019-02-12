
  @extends('adminlte::page')

  @section('title', 'AdminLTE')
  
  @section('content_header')
      <h1>SHOW ARTICLE</h1>
  @stop
  
  @section('content')
  <div class="row">
        <div class="card col-3" style="width: 18rem;">
        <img class="card-img-top" src="{{Storage::disk('image')->url($article->image)}}" alt="Card image cap">
            <div class="card-body">
            
            <h5 class="card-title">{{$article->title}}</h5>
            <p class="card-text">{!!($article->text)!!}</p>
            <p class="card-text">{{$article->tech_id}}</p>
            </div>
        </div>
</div>
<hr>

<a class="btn btn-success" href="{{route('articles.index')}}">RETURN</a>

  @stop
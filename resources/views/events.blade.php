@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Nos Events</h1>
@stop

@section('content')


    
   
    <div class="container">
		<div class="row">
			<div class="[ col-xs-12 col-sm-offset-2 col-sm-8 ]">
				<ul class="event-list">
                    @foreach ($events as $item)
                        
					<li>
						<time>
                        <span class="day">{{$item->start_date->format('d')}}</span>
							<span class="month">{{$item->start_date->format('M')}}</span>
							<span class="year">{{$item->start_date->format('y')}}</span>
							<span class="time">{{(strtotime($item->end_date) - strtotime($item->start_date))/86400}} Day</span>
						</time>
						<img alt="Independence Day" src="https://farm4.staticflickr.com/3100/2693171833_3545fb852c_q.jpg" />
						<div class="info">
							<h2 class="title">{{$item->title}}</h2>
							
						<p class="desc">{{$item->desc}}</p>
						
                            <ul>
									<li style="width:50%;">Start at : </span>{{$item->start_hours}}</li>
									<li>
											<strong>{{$item->lieu}}</strong>
									</li>
									<li style="width:50%;">End At : {{$item->end_hours}}  </li>

								
                            </ul>
						</div>
						<div class="social">
							<ul>
								<li class="facebook" style="width:33%;"><a href="#facebook"><span class="fa fa-facebook"></span></a></li>
								<li class="twitter" style="width:34%;"><a href="#twitter"><span class="fa fa-twitter"></span></a></li>
								<li class="google-plus" style="width:33%;"><a href="#google-plus"><span class="fa fa-google-plus"></span></a></li>
							</ul>
						</div>
						
						 <form  method="POST" style='display:inline-block' action="{{route('event.destroy',['event'=>$item->id])}}">
						 |@method('delete')
						 @csrf
						 <button type='submit'>D</button>
						 
						 
						 </form>
						 <a href='{{route('event.edit',['event'=>$item->id])}}'><button>E</button></a>

					</li>
                    @endforeach

					
				</ul>
			</div>
		</div>
	</div>
    
    
    
    
    
  

@stop
@extends('layouts.app')
@section('content')
<div class="text-center">
    <ul>
        @foreach ($questions as $item)
        @if($item->réponse)   
        <li>Question:</li>
        {{$item->question}}
        <li>Reponse:</li>
        {{$item->réponse}}
        @endif
    @endforeach
</ul>

</div>
    
@endsection   

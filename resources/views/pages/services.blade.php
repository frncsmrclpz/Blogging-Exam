@extends('layout.lay')

@section('content')
    <br>
    <h1>{{$title}}</h1>
    <p>These are our services</p>
    @if(count($services) > 0)
        <ul>
            @foreach($services as $service)
                <li class="list-group-item">{{$service}}</li>
            @endforeach
        </ul>
    @endif
        
        

@endsection
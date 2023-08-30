@extends('app')

@section('title', 'Hello Blade')

@section('content')
    @if(2 == $font)
    <h1 style="color: red ">Hello Blade </h1>
    @else
    <h1 style="color: blue ">Hello Blade </h1>
    @endif
    <ul>
        @foreach($peaople as $person)
        <li>{{$person['name']}} <i>{{$person['age']}}</i></li>
        @endforeach
    </ul>
@endsection
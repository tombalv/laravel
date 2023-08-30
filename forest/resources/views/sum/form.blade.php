@extends('app')

@section('title', 'Sum')

@section('content')
    <h1>Sum</h1>
    <form action="{{route('sum-submit')}}" method="post" style="border: 1px solid black; width:200px; padding: 10px; margin:10px;  ">
            <input type="text" name="x" style="width: 30px;">
            <b>+</b>
            <input type="text" name="y" style="width: 30px;">
            <b>= {{$sum}}</b> 
            <div style="margin-top: 20px;">
            <button type="submit" >Sum it</button>
            </div>
            @csrf
    </form>
@endsection
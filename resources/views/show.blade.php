@extends('layouts')

@section('content')

@foreach($people as $p)
    <h4> {{$p['firstname']}} {{$p['lastname']}} {{$p['age']}} </h4>
    <h4> <a href="/edit/{{$p['id']}}"> Edit </a> </h4>
    <h4> <a href="/delete/{{$p['id']}}"> Delete </a> </h4>
@endforeach

@endsection()
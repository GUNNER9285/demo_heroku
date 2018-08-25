@extends('layouts')

@section('content')

    <form action="/edit/{{$people['id']}}" method="POST">
        First name:<br>
        <input type="text" name="firstname" value="{{$people['firstname']}}">
        <br>
        Last name:<br>
        <input type="text" name="lastname" value="{{$people['lastname']}}">
        <br>
        Age:<br>
        <input type="number" name="age" value="{{$people['age']}}">
        <br><br>
        <input type="submit" value="Submit">
    </form>

@endsection()
@extends('layouts')

@section('content')

    <form action="/create" method="POST">
        First name:<br>
        <input type="text" name="firstname">
        <br>
        Last name:<br>
        <input type="text" name="lastname">
        <br>
        Age:<br>
        <input type="number" name="age">
        <br><br>
        <input type="submit" value="Submit">
    </form>

@endsection()
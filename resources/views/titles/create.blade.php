@extends('layouts.app')

@section('content')






<form action={{action('TitlesController@store')}} method="POST" accept-charset="UTF-8">
    First name: <input type="text" name="name"><br>
    Last name: <input type="text" name="author"><br>
    <input type="text" name="type">
    <input type="submit" value="Submit">
</form>

@endsection
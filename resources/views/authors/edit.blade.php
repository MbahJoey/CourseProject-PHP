@extends('layouts.app')

@section('content')

    <form  method="post" action="{{action('AuthorsController@update', $authors->id )}}">
        {{ csrf_field() }}
        <input type="hidden" class="form-control" name="_method" value="patch"/>
        <div class="form-group">
            <label for="name">First Name:</label>
            <input value="{{$authors['firstName']}}" type="text" class="form-control" name="firstName" id="firstName" />
        </div>
        <div class="form-group">
            <label for="author">Last Name:</label>
            <input value="{{$authors['lastName']}}" type="text" class="form-control" name="lastName" id="lastName" />
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>

@endsection
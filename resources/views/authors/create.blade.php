@extends('layouts.app')

@section('content')

    <form action="/authors" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            {{ csrf_field() }}
            <label for="firstName">First Name:</label>
            <input type="text" class="form-control" name="firstName" id="firstName" />
        </div>
        <div class="form-group">
            {{ csrf_field() }}
            <label for="lastName">Last Name:</label>
            <input type="text" class="form-control" name="lastName" id="lastName" />
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>

@endsection
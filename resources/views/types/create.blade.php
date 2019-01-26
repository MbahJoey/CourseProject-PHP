@extends('layouts.app')

@section('content')

    <form action="/types" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            {{ csrf_field() }}
            <label for="name">Type:</label>
            <input type="text" class="form-control" name="name" id="name" />
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>

@endsection
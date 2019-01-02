@extends('layouts.app')

@section('content')

    <form action="/titles" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            {{ csrf_field() }}
            <label for="name">Title:</label>
            <input type="text" class="form-control" name="name" id="name" />
        </div>
        <div class="form-group">
            {{ csrf_field() }}
            <label for="author">Author:</label>
            <input type="text" class="form-control" name="author" id="author" />
        </div>
        <div class="form-group">
            {{ csrf_field() }}
            <label for="type">Type:</label>
            <input type="text" class="form-control" name="type" id="type" />
        </div>
        <div class="form-group">
            {{ csrf_field() }}
            <label for="pdate">Published date:</label>
            <input type="date" class="form-control" name="pdate" id="pdate" />
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>

@endsection
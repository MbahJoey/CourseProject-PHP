@extends('layouts.app')

@section('content')

    <form action="{{action('SearchController@SearchByAuthor')}}" method="POST" role="search">
        {{ csrf_field() }}
        <div class="input-group">
            <input type="text" class="form-control" name="input" placeholder="Search by author, type or title">
            <span class="input-group-btn">
            <button type="submit" class="btn btn-primary">
                <span class="glyphicon glyphicon-search">Search</span>
            </button>
        </span>
        </div>
    </form>


<div class="jumbotron text-center">
    <p>
        <a class="btn btn-primary btn-lg" href="/login" role="button">Login</a>
        <a class="btn btn-primary btn-lg" href="/register" role="button">Register</a>
    </p>
</div>


@endsection
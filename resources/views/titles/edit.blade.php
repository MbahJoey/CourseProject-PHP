@extends('layouts.app')

@section('content')

    <form  method="post" action="{{action('TitlesController@update', $titles->id )}}">
        {{ csrf_field() }}
        <input type="hidden" class="form-control" name="_method" value="patch"/>
        <div class="form-group">
            <label for="name">Title:</label>
            <input placeholder="{{$titles['name']}}" type="text" class="form-control" name="name" id="name" />
        </div>
        <div class="form-group">
            <label for="author">Author:</label>
            <input placeholder="{{$titles['author']}}" type="text" class="form-control" name="author" id="author" />
        </div>
        <div class="form-group">
            <label for="type">Type:</label>
            <input  placeholder="{{$titles['type']}}" type="text" class="form-control" name="type" id="type" />
        </div>
        <div class="form-group">
            <label for="pdate">Published date:</label>
            <input placeholder="{{$titles['pdate']}}" type="date" class="form-control" name="pdate" id="pdate" />
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>

@endsection
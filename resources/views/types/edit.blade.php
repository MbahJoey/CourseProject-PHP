@extends('layouts.app')

@section('content')


    <form  method="post" action="{{action('TypesController@update', $types->id )}}">
        {{ csrf_field() }}
        <input type="hidden" class="form-control" name="_method" value="patch"/>
        <div class="form-group">
            <label for="name">Type:</label>
            <input value="{{$types['name']}}" type="text" class="form-control" name="name" id="name" />
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>

@endsection
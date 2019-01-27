@extends('layouts.app')

@section('content')

    <div class="form-group">
        <form method="post" enctype="multipart/form-data" action="{{url('images')}}">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="imageDescription">Image Description:</label>
                <input type="text" class="form-control" name="imageDescription" id="imageDescription" />
            </div>
            <div class="form-group">
            <input class="form-control-file" type="file" name="customImage">
        </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Upload</button>
            </div>
            </form>
    </div>

@endsection
@extends('layouts.app')

@section('content')
<form>
    <div class="form-group">
        <label>Title</label>
        <textarea placeholder="Type the title here..." class="form-control"></textarea>
    </div>

    <div class="form-group">
        <label>Author</label>
        <textarea placeholder="Type the author here..." class="form-control"></textarea>
    </div>

    <div class="form-group">
        <label>Type</label>
        <textarea placeholder="Type the type here..." class="form-control"></textarea>
    </div>

    <input type="submit" class="btn btn-success">
</form>
@endsection
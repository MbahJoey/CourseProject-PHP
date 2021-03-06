@extends('layouts.app')

@section('content')

    <p></p>

    <table class="table table-hover">
        <thead class="black white-text table-primary">
        <tr>
            <th>Title</th>
            <th>Author</th>
            <th>Type</th>
            <th>Published</th>
        </tr>
        </thead>
        <tbody0>
            <tr>
                <td>{{$titles['name']}}</td>
                <td>{{$titles['author']}}</td>
                <td>{{$titles['name']}}</td>
                <td>{{$titles['pdate']}}</td>
            </tr>
        </tbody0>
    </table>

    <div class="float-right">
        <a href="/titles" class="btn btn-secondary">Back</a>
    </div>
@endsection
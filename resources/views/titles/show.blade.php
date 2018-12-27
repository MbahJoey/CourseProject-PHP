@extends('layouts.app')

@section('content')
    <a href="/titles" class="btn btn-secondary">Back</a>
    <table class="table table-hover">
        <thead>
        <tr>
            <th>Title</th>
            <th>Author</th>
            <th>Type</th>
            <th>Published</th>
        </tr>
        </thead>
        <tbody0>
            <tr>
                <td>{{$titles->name}}</td>
                <td>{{$titles->author}}</td>
                <td>{{$titles->type}}</td>
                <td>{{$titles->pdate}}</td>
            </tr>
        </tbody0>
    </table>

@endsection
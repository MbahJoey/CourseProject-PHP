@extends('layouts.app')

@section('content')

    <p></p>

    <table class="table table-hover">
        <thead class="black white-text table-primary">
        <tr>
            <th>ID</th>
            <th>Type</th>
            <th>Created date</th>
        </tr>
        </thead>
        <tbody0>
            <tr>
                <td>{{$types->id}}</td>
                <td>{{$types['name']}}</td>
                <td>{{$types['created_at']}}</td>
            </tr>
        </tbody0>
    </table>

    <div class="float-right">
        <a href="/types" class="btn btn-secondary">Back</a>
    </div>
@endsection
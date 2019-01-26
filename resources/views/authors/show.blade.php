@extends('layouts.app')

@section('content')

    <p></p>

    <table class="table table-hover">
        <thead class="black white-text table-primary">
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Created Date</th>
        </tr>
        </thead>
        <tbody0>
            <tr>
                <td>{{$authors['firstName']}}</td>
                <td>{{$authors['lastName']}}</td>
                <td>{{$authors['created_at']}}</td>
            </tr>
        </tbody0>
    </table>

    <div class="float-right">
        <a href="/authors" class="btn btn-secondary">Back</a>
    </div>
@endsection
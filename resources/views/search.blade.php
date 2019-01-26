@extends('layouts.app')

@section('content')

    <div class="container">
    @if(isset($details))
        <table class="table table-striped">
            <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
            </tr>
            </thead>
            <tbody>
            @foreach($details as $author)
                <tr>
                    <td>{{$author->firstName}}</td>
                    <td>{{$author->lastName}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif
</div>

@endsection
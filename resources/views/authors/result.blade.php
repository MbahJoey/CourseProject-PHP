@extends('layouts.app')

@section('content')

    <p></p>

    <div class="container">
    @if(isset($details))
        <table class="table table-striped">
            <thead class="black white-text table-primary">
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
            </tr>
            </thead>
            <tbody>
            @foreach($details as $authors)
                <tr>
                    <td>{{$authors->firstName}}</td>
                    <td>{{$authors->lastName}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        @elseif(isset($message))
            <h1>{{$message}}</h1>
        @endif
</div>

@endsection
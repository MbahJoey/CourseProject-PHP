@extends('layouts.app')

@section('content')
    <div class="container">
    @if(isset($details))
        <table class="table table-striped">
            <thead class="black white-text table-primary">
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Type</th>
            </tr>
            </thead>
            <tbody>
            @foreach($details as $titles)
                <tr>
                    <td>{{$titles->name}}</td>
                    <td>{{$titles->author}}</td>
                    <td>{{$titles->type}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        @elseif(isset($message))
            <h1>{{$message}}</h1>
        @endif
</div>

@endsection
@extends('layouts.app')

@section('content')

    @if (count ($titles) > 0)
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Type</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($titles as $title)
                    <tr>
                        <td><a href="/titles/{{$title->id}}">{{$title->name}}</a></td>
                        <td>{{$title->author}}</td>
                        <td>{{$title->type}}</td>
                        <td><a href="/titles" class="btn btn-danger" role="button">Delete</a></td>
                    </tr>
                </tbody>

        @endforeach
        @else
            <p>No titles found</p>
    @endif
            </table>

            <div class="float-right">
                <a href="/titles/create" class="btn btn-primary" role="button">Create</a>
            </div>
@endsection
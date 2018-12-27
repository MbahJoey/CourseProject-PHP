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
                    </tr>
                </tbody>
        @endforeach
        @else
            <p>No titles found</p>
    @endif
            </table>
@endsection
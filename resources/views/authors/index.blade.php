@extends('layouts.app')

@section('content')

    <p></p>

    @if (count ($authors) > 0)
            <table class="table table-hover table-responsive-s">
                <caption>List of Authors</caption>
                <thead class="black white-text table-primary">
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                @foreach($authors as $author)
                    <tr>
                        <td>{{$author->firstName}}</td>
                        <td>{{$author->lastName}}</td>
                        <td>
                                @if(!Auth::guest())
                                    <form action="{{action('AuthorsController@destroy', $author->id )}}" method="post">
                                        {{csrf_field()}}
                                        <input name="_method" type="hidden" value="DELETE">
                                        <button class="btn btn-danger" type="submit">Delete</button>
                                        <a href="/authors/{{$author->id}}/edit" class="btn btn-secondary" role="button">Edit</a>
                                @endif
                                        <a href="/authors/{{$author->id}}"  class="btn btn-info" role="button">Show</a></form></td>
                    </tr>
                </tbody>

        @endforeach
        @else
            <p>No authors found</p>
    @endif
            </table>
            @if(!Auth::guest())
                <div class="float-right">
                    <a href="/authors/create" class="btn btn-primary" role="button">Create</a>
                </div>
            @endif
            {{$authors->links()}}
@endsection
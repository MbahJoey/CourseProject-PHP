@extends('layouts.app')

@section('content')

    <p></p>

    @if (count ($titles) > 0)
            <table class="table table-hover table-responsive-s">
                <caption>List of titles</caption>
                <thead class="black white-text table-primary">
                    <tr>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Type</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                @foreach($titles as $title)
                    <tr>
                        <td><a href="/titles/{{$title->id}}">{{$title->name}}</a></td>
                        <td>{{$title->author}}</td>
                        <td>{{$title->type}}</td>
                        <td>
                            @if(!Auth::guest())
                            <form action="{{action('TitlesController@destroy', $title->id )}}" method="post">
                                {{csrf_field()}}
                                <input name="_method" type="hidden" value="DELETE">
                                <button class="btn btn-danger" type="submit">Delete</button>
                        <a href="/titles/{{$title->id}}/edit" class="btn btn-info" role="button">Edit</a>
                            </form>
                            @endif
                        </td>
                    </tr>
                </tbody>

        @endforeach
        @else
            <p>No titles found</p>
    @endif
            </table>

            @if(!Auth::guest())
            <div class="float-right">
                <a href="/titles/create" class="btn btn-primary" role="button">Create</a>
            </div>
            @endif
@endsection
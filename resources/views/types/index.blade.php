@extends('layouts.app')

@section('content')

    <p></p>

    @if (count ($types) > 0)
            <table class="table table-hover table-responsive-s align-middle">
                <caption>List of types</caption>
                <thead class="black white-text table-primary">
                    <tr>
                        <th>ID</th>
                        <th>Type</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                @foreach($types as $type)
                    <tr>
                        <td>{{$type->id}}</td>
                        <td><a href="/types/{{$type->id}}">{{$type->name}}</a></td>

                        <td>
                        @if(!Auth::guest())
                        <form action="{{action('TypesController@destroy', $type->id )}}" method="post">
                                {{csrf_field()}}
                                <input name="_method" type="hidden" value="DELETE">
                                <button class="btn btn-danger" type="submit">Delete</button>
                        <a href="/types/{{$type->id}}/edit" class="btn btn-info" role="button">Edit</a>
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
                    <a href="/types/create" class="btn btn-primary" role="button">Create</a>
                </div>
            @endif
@endsection
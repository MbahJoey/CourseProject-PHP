@extends('layouts.app')

@section('content')
    <div class="container">
    @if(isset($details))
        <table class="table table-striped">
            <thead class="black white-text table-primary">
            <tr>
                <th>Type</th>
            </tr>
            </thead>
            <tbody>
            @foreach($details as $types)
                <tr>
                    <td>{{$types->name}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        @elseif(isset($message))
            <h1>{{$message}}</h1>
        @endif
</div>

@endsection
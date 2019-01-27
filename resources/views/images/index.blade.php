@extends('layouts.app')

@section('content')

    <p></p>

    @if (count ($images) > 0)
            @foreach($images as $image)

                    <div class="row">
                        <div class="col-md-4 mx-auto d-block">
                            <div class="thumbnail">
                                <img class="mx-auto float-xs-right" src="<?php echo asset('storage/images/' . $image->fileName);?>" {{$image->fileName}} alt="image"  style="width:100%">
                                <div class="caption">
                                    <p>{{$image->imageDescription}}</p>
                                </div>
                            </div>

                        @if(!Auth::guest())
                            <form action="{{action('ImagesController@destroy', $image->id )}}" method="post">
                                {{csrf_field()}}
                                <input name="_method" type="hidden" value="DELETE">
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </div>
                    </div>
                        @endif

            @endforeach
            @else
                <p>No images found</p>
            @endif

        @if(!Auth::guest())
            <div class="float-right">
                <a href="/images/create" class="btn btn-primary" role="button">Upload Image</a>
            </div>
        @endif
@endsection
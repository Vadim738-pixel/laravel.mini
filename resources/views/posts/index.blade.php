@extends('layouts.main')
@section('content')

    <div class="form-group">
        <label> </label>
    </div>

    <div>
        <div>
            <a href="{{route('posts.create')}}" class="btn btn-success mb-3">Add one</a>
        </div>


        @foreach($posts as $post)
            <div><a href="{{route('posts.show', $post->id)}}">{{$post->id}}.  {{$post->title}}</a></div>

            <div class="form-group">
                <label> </label>
            </div>

        @endforeach
    </div>

@endsection



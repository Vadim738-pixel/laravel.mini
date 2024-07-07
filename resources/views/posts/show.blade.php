@extends('layouts.main')
@section('content')

    <div class="form-group">
        <label> </label>
    </div>

    <div>

            <div>{{$post->id}}.  {{$post->title}}</div>
            <div>{{$post->content}}</div>

    </div>

    <div class="form-group">
        <label> </label>
    </div>

    <div>
        <a href="{{route('posts.edit', $post->id)}}">Edit</a>
    </div>

    <div class="form-group">
        <label> </label>
    </div>

    <div>
        <form action="{{route('posts.delete', $post->id)}}" method="post">
            @csrf
            @method('delete')
            <input type="submit" value="delete" class="btn btn-danger">
        </form>

    </div>

    <div class="form-group">
        <label> </label>
    </div>

    <div>
        <a href="{{route('posts.index')}}">Back</a>
    </div>

@endsection



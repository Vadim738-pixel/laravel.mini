@extends('layouts.main')
@section('content')
    <div>

        <div class="form-group">
            <label> </label>
        </div>

        <form action="{{route('posts.update', $post->id)}}" method="post">

                    @csrf
                    @method('patch')

            <div class="form-group">
                <label for="title">Title</label>
                <input name='title' type="text" class="form-control" id="title" placeholder="Title">
            </div>
            <div class="form-group">
                <label> </label>
            </div>

            <div class="form-group">
                <label for="content">Content</label>
                <textarea name='content' class="form-control" id="content" placeholder="Content"></textarea>
            </div>

            <div class="form-group">
                <label> </label>
            </div>

            <div class="form-group">
                <label  for="image">Image</label>
                <input name="image" type="text" class="form-control" id="image" placeholder="Image">
            </div>

            <div class="form-group">
                <label> </label>
            </div>



            <div class="form-group">
                <label for="category">Category</label>
                <select class="form-control" id="category" name="category_id">
                    @foreach($categories as $category)
                        <option

                            {{$category->id === $post->category->id ? ' selected' : ''}}

                            value="{{$category->id}}">{{$category->title}}</option>
                    @endforeach
                </select>
            </div>


            <div class="form-group">
                <label> </label>
            </div>

            <div class="form-group">
                <label for="tags">Tags</label>
                <select multiple class="form-control" id="tags" name="tags[]">
                    @foreach($tags as $tag)
                        <option
                            @foreach($post->tags as $postTag)
                                {{$tag->id === $postTag->id ? ' selected' : ''}}
                            @endforeach
                            value="{{$tag->id}}">{{$tag->title}}</option>
                    @endforeach
                </select>
            </div>


            <div class="form-group">
                <label> </label>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>

@endsection


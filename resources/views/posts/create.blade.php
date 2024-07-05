@extends('layouts.main')
@section('content')
    <div>

        <div class="form-group">
            <label> </label>
        </div>

        <form action="{{route('posts.store')}}" method="post">

                    @csrf

            <div class="form-group">
                <label for="title">Title</label>
                <input name='title' type="text" class="form-control" id="title"  placeholder="Title" >
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
                <input name="image" type="text" class="form-control" id="image"  placeholder="Image">
            </div>

            <div class="form-group">
                <label> </label>
            </div>

            <div class="form-group">
                <label for="category">Category</label>
                <select multiple class="form-control" id="category" name="category_id">
                    @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->title}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label> </label>
            </div>


            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>

@endsection



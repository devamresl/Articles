@extends('layouts.apps')
@section('title', 'Edit')
@section('content')
    <div class="container">
        <div class="card card-default mt-5">
            <div class="card-heager mt-2 ml-4">Category Name</div>
            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form class="form-control" action="{{ route('posts.update', $post->id) }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <label>Post Title</label>
                        <input type="text" name="title" value="{{ $post->title }}">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <input type="text" name="description" value="{{ $post->description }}">
                    </div>
                    <div class="form-group">
                        <label>Content</label>
                        <input type="text" name="content" value="{{ $post->content }}">
                    </div>
                    <div class="form-group">
                        <label>Photo</label>
                        <input type="file" name="photo" value="{{ $post->photo }}">
                    </div>
                    <div class="form-control">
                        <label for="inputName" class="control-label">Category Name</label>
                        <select name="Category" class="form-control SlectBox">
                            <!--placeholder-->
                            <option value="" selected disabled>Choose Category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}"> {{ $category->c_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary float-right">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.apps')
@section('title', 'Create')
@section('content')
    <div class="container">
        <div class="card card-default mt-5">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="card-heager mt-2 ml-4 h4">New Post</div>
            <div class="card-body">
                <form class="form-control" action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Category Name</label>
                        <input type="text" name="title">
                    </div>
                    <div class="form-group">
                        <label>Category Name</label>
                        <input type="text" name="description">
                    </div>
                    <div class="form-group">
                        <label>Category Name</label>
                        <input type="text" name="content">
                    </div>
                    <div class="form-group">
                        <label>Category Name</label>
                        <input type="file" name="photo">
                    </div>
                    <div class="form-group">
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
                        <button type="submit" class="btn btn-primary float-right">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

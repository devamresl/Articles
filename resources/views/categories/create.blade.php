@extends('layouts.apps')
@section('title', 'Create')
@section('content')
    <div class="container">
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        <div class="card card-default mt-5">
            <div class="card-heager mt-2 ml-4">Category Name</div>
            <div class="card-body">
                <form class="form-control" action="{{ route('categories.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Category Name</label>
                        <input type="text" name="c_name">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary float-right">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

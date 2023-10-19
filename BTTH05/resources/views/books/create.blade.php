@extends('layouts.app')

@section('content')
<div class="container">
    <h3 style="text-align: center; font-weight: 700;">Add Book</h3>
    <div class="row">
        <div class="col-12 col-md-6 mx-auto">
            <form action="{{ route('books.store') }}" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label class = "form-label" for="title">Title</label>
                    <input type="text" name="title" class="form-control" id="title" required>
                </div>
                <div class="form-group mb-3">
                    <label class = "form-label" for="author_name">Name Author</label>
                    <input type="text" name="author_name" class="form-control" id="author_name" required>
                </div>
                <div class="form-group mb-3 text-center">
                    <button type="submit" class="btn btn-success">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
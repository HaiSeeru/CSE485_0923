@extends('layouts.app')

@section('content')
<div class="container">
    <h3 style="text-align: center; font-weight: 700;">Add Author</h3>
    <div class="row">
        <div class="col-12 col-md-6 mx-auto">
            <form action="{{ route('authors.store') }}" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label class = "form-label" for="name">Name</label>
                    <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group mb-3 text-center">
                    <button type="submit" class="btn btn-success">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="container d-flex justify-content-between align-items-center">
        <h1>Authors List</h1>
        <a href="{{ route('authors.create') }}" class="btn btn-success m-0">Add</a>
    </div>
    
    <table class="table table-bordered">
        <thead>
            <tr class="text-center">
                <th>ID</th>
                <th>Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($authors as $author)
                <tr class="text-center">
                    <td>{{ $author->id }}</td>
                    <td>{{ $author->name }}</td>
                    <td>
                        <a href="{{ route('authors.show', $author->id) }}" class="btn btn-warning btn-sm"><i class="bi bi-eye"></i></a>
                        <a href="{{ route('authors.edit', $author->id) }}" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i></a>   
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal-{{ $author->id }}">
                            <i class="bi bi-trash"></i>
                        </button>
                    </td>

                    <!-- model delete -->
                    <!-- Modal -->
                    <div class="modal fade" id="deleteModal-{{ $author->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Delete Confirmation</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Are you sure you want to delete this author?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <form action="{{ route('authors.destroy', $author->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
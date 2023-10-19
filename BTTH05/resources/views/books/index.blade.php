@extends('layouts.app')

@section('content')
<div class="container">
     @if ($message = Session::get('success'))
            
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ $message }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <script>
            setTimeout(function () {
                document.querySelector('.alert').style.display = 'none';
            }, 5000); // 5000 milliseconds = 5 seconds
        </script>
    @endif
    <div class="container d-flex justify-content-between align-items-center">
        <h1>Books List</h1>
        <a href="{{ route('books.create') }}" class="btn btn-success m-0">Add</a>
    </div>
    
    <table class="table table-bordered">
        <thead>
            <tr class="text-center">
                <th>ID</th>
                <th>Title</th>
                <th>Author</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
                <tr class="text-center">
                    <td>{{ $book->id }}</td>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->author->name }}</td>
                    <td>
                        <a href="{{ route('books.show', $book->id) }}" class="btn btn-warning btn-sm"><i class="bi bi-eye"></i></a>
                        <a href="{{ route('books.edit', $book->id) }}" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i></a>   
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal-{{ $book->id }}">
                            <i class="bi bi-trash"></i>
                        </button>
                    </td>

                    <!-- model delete -->
                    <!-- Modal -->
                    <div class="modal fade" id="deleteModal-{{ $book->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Delete Confirmation</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Are you sure you want to delete this book?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <form action="{{ route('books.destroy', $book->id) }}" method="POST">
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
    <div class="container text-center mt-3">
          {!! $books->withQueryString()->links('pagination::bootstrap-5') !!}
    </div>
</div>
@endsection
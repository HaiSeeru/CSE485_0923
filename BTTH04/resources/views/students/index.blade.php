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
        <h1>Students List</h1>
        <a href="{{route('students.create')}}" class="btn btn-success m-0">Add</a>
    </div>
    
    <table class="table table-bordered">
        <thead>
            <tr class="text-center">
                <th>ID</th>
                <th>Name</th>
                <th>Date of Birth</th>
                <th>Phone Number</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr class="text-center">
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->dateOfBorn }}</td>
                    <td>{{ $student->numberphone }}</td>
                    <td>
                        <form action="{{route('students.destroy', $student->id)}}" method="post" class="text-center">
                            @csrf
                            @method('DELETE')

                            <a href="{{route('students.show', $student->id)}}" class="btn btn-warning btn-sm"><i class="bi bi-eye"></i></a>

                            <a href="{{route('students.edit', $student->id)}}" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i></a>   

                            <button type="submit" class="btn btn-danger btn-sm"><i class="bi bi-trash" onclick="return confirm('Do you want to delete this student?');"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

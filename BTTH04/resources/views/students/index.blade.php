@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Student List</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Date of Birth</th>
                <th>Phone Number</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->dateOfBorn }}</td>
                    <td>{{ $student->numberphone }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

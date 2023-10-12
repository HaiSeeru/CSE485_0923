@extends('layouts.app')

@section('content')
<div class="container">
    <h3 style="text-align: center; font-weight: 700;">Add Student</h3>
    <div class="row">
        <div class="col-12 col-md-6 mx-auto">
            <form action="{{ route('students.store') }}" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label class = "form-label" for="name">Name</label>
                    <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group mb-3">
                    <label class = "form-label" for="dateOfBorn">Date of Birth</label>
                    <input type="date" name="dateOfBorn" class="form-control" id="dateOfBorn" required>
                </div>
                <div class="form-group mb-3">
                    <label class = "form-label" for="numberphone">Phone Number</label>
                    <input type="text" name="numberphone" class="form-control" id="numberphone" required>
                </div>
                <div class="form-group mb-3 text-center">
                    <button type="submit" class="btn btn-success">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

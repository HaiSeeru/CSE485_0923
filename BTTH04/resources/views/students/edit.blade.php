@extends('layouts.app')

@section('content')

<div class="row justify-content-center mt-3">
    <div class="col-md-8">

        @if ($message = Session::get('error'))
            <div class="alert alert-warning" role="alert">
                {{ $message }}
            </div>
        @endif

        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Edit Student
                </div>
                <div class="float-end">
                    <a href="{{ route('students.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('students.update', $student->id) }}" method="post">
                    @csrf
                    @method("PUT")

                    <div class="mb-3 row">
                        <label for="id" class="col-md-4 col-form-label text-md-end text-start">ID:</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('id') is-invalid @enderror" id="id" name="id" value="{{ $student->id }}">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="name" class="col-md-4 col-form-label text-md-end text-start">Name</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ $student->name }}">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="dateOfBorn" class="col-md-4 col-form-label text-md-end text-start">Date Of Born</label>
                        <div class="col-md-6">
                          <input type="date" class="form-control @error('dateOfBorn') is-invalid @enderror" id="dateOfBorn" name="dateOfBorn" value="{{ $student->dateOfBorn }}">
                            
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="numberphone" class="col-md-4 col-form-label text-md-end text-start">Number Phone:</label>
                        <div class="col-md-6">
                          <input type="text" step="0.01" class="form-control @error('numberphone') is-invalid @enderror" id="numberphone" name="numberphone" value="{{ $student->numberphone }}">
                            
                        </div>
                    </div>
                    
                    <div class="mb-3 row">
                        <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Update">
                    </div>
                    
                </form>
            </div>
        </div>
    </div>    
</div>
    
@endsection
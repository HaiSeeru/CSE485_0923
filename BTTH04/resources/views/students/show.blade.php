@extends('layouts.app')

@section('content')

<div class="row justify-content-center mt-3">
    <div class="col-md-8">

        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Student Information
                </div>
                <div class="float-end">
                    <a href="{{ route('students.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                </div>
            </div>
            <div class="card-body">

                    <div class="row">
                        <label for="code" class="col-md-4 col-form-label text-md-9 text-start"><strong>ID:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $student->id }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="name" class="col-md-4 col-form-label text-md-end text-start"><strong>Name:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $student->name }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="quantity" class="col-md-4 col-form-label text-md-end text-start"><strong>Date Of Born:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $student->dateOfBorn }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="price" class="col-md-4 col-form-label text-md-end text-start"><strong>Number Phone:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $student->numberphone }}
                        </div>
                    </div>
            </div>
        </div>
    </div>    
</div>
    
@endsection
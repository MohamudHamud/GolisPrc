@extends('layouts.app')



<!-- Edit Customer Section -->
@section('content')
<div class="pagetitle" style="height: 100vh;">
    <h3 class="mt-5">Edit Customer</h3>
    <section class="section">
        <div class="card">
            <div class="card-body border border-primary rounded shadow-sm bg-light">
                <h5 class="card-title">Edit Customer</h5>
                <form action="{{ url('/customers/edit/'.$getRecord->id) }}" method="POST">
                    @csrf

                    <!-- Customer Name Field -->
                    <div class="row mb-4 align-items-center">
                        <label for="inputName" class="col-sm-2 col-form-label fw-bold">Customer Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="name" value="{{ $getRecord->name }}" class="form-control" required>
                        </div>
                    </div>

                    <!-- Contact Information Field -->
                    <div class="row mb-4 align-items-center">
                        <label for="inputContact" class="col-sm-2 col-form-label fw-bold">Contact Information</label>
                        <div class="col-sm-10">
                            <input type="text" name="contact_information" value="{{ $getRecord->contact_information }}" class="form-control" required>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="text-center mt-4">
                        <button type="submit" class="btn btn-primary btn-lg px-5">Update Customer</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
@endsection

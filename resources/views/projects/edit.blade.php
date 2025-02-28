@extends('layouts.app')

@section('content')
<div class="pagetitle" style="height: 100vh;">
    <h3>Edit Project</h3>
    <section class="section">
        <div class="card">
            @include('message')
            <div class="card-body border border-primary rounded shadow-sm bg-light">
                <h5 class="card-title">Edit Project</h5>

                <form action="{{ url('/projects/edit/'.$getRecord->id) }}" method="POST">
                    @csrf

                    <!-- Project Name Field -->
                    <div class="row mb-4 align-items-center">
                        <label for="inputName" class="col-sm-2 col-form-label fw-bold">Project Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="name" value="{{ $getRecord->name }}" class="form-control" required>
                        </div>
                    </div>

                    <!-- Project Description Field -->
                    <div class="row mb-4 align-items-center">
                        <label for="inputDescription" class="col-sm-2 col-form-label fw-bold">Description</label>
                        <div class="col-sm-10">
                            <textarea name="description" class="form-control" rows="4">{{ $getRecord->description }}</textarea>
                        </div>
                    </div>

                    <!-- Number of Users Field -->
                    <div class="row mb-4 align-items-center">
                        <label for="inputNoUsers" class="col-sm-2 col-form-label fw-bold">Number of Users</label>
                        <div class="col-sm-10">
                            <input type="number" name="no_users" value="{{ $getRecord->no_users }}" class="form-control" required>
                        </div>
                    </div>

                    <!-- Project Status Field -->
                    <div class="row mb-4 align-items-center">
                        <label for="inputStatus" class="col-sm-2 col-form-label fw-bold">Status</label>
                        <div class="col-sm-10">
                            <select name="status" class="form-select" required>
                            <option value="available">Select Status </option>
                                <option value="available" {{ $getRecord->status == 'available' ? 'selected' : '' }}>Available</option>
                                <option value="not available" {{ $getRecord->status == 'not available' ? 'selected' : '' }}>Not Available</option>
                            </select>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="text-center mt-4">
                        <button type="submit" class="btn btn-primary btn-lg px-5">Update Project</button>
                    </div>

                </form>
            </div>
        </div>
    </section>
</div>
@endsection

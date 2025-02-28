@extends('layouts.app')

@section('content')
<div class="pagetitle" style="min-height: 100vh;">
    <h3 class="mb-4">Add Project</h3>
    <section class="section">
        <div class="card">
            <div class="card-body border border-primary rounded shadow-sm bg-light p-4">
                <h5 class="card-title mb-4">Add New Project</h5>

                <form action="{{ url('/projects/add') }}" method="POST">
                    @csrf
                    
                    <!-- Project Name Input -->
                    <div class="row mb-4 align-items-center">
                        <label for="inputName" class="col-sm-2 col-form-label fw-bold">Project Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="name" class="form-control" placeholder="Enter the Project Name" required>
                        </div>
                    </div>

                    <!-- Description Input -->
                    <div class="row mb-4 align-items-center">
                        <label for="inputDescription" class="col-sm-2 col-form-label fw-bold">Description</label>
                        <div class="col-sm-10">
                            <textarea name="description" class="form-control" placeholder="Enter Project Description" rows="4"></textarea>
                        </div>
                    </div>

                    <!-- Number of Users -->
                    <div class="row mb-4 align-items-center">
                        <label for="inputNoUsers" class="col-sm-2 col-form-label fw-bold">Number of Users</label>
                        <div class="col-sm-10">
                            <input type="number" name="no_users" class="form-control" placeholder="Enter Number of Users" required>
                        </div>
                    </div>

                    <!-- Status Field -->
                    <div class="row mb-4 align-items-center">
                        <label for="inputStatus" class="col-sm-2 col-form-label fw-bold">Status</label>
                        <div class="col-sm-10">
                            <select name="status" class="form-control" required>
                            <option value="available">Select Status </option>
                                <option value="available">Available</option>
                                <option value="not available">Not Available</option>
                            </select>
                        </div>
                    </div>

                    

                    <!-- Submit Button -->
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">Submit Project</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
@endsection

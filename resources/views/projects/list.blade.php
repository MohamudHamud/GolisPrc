@extends('layouts.app')
@section('content')
    <div class="pagetitle">
        <section class="section mt-4">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body ">
                                <h2 class="card-title">Project List</h2>
                                <div class="d-flex justify-content-end mb-3">
                                    @if (!empty($PermissionAdd))
                                        <a href="{{ url('/projects') }}" class="btn btn-primary">
                                            <i class="bi bi-plus-circle"></i> Add Project
                                        </a>
                                    @endif
                                </div>

                                <!-- Responsive Project Table -->
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped">
                                        <thead class="table-primary">
                                            <tr>
                                                <th>Name</th>
                                                <th>Description</th>
                                                <th>Number of Users</th>
                                                <th>Status</th>
                                                @if (!empty($PermissionEdit) || !empty($PermissionDelete))
                                                    <th scope="col">Action</th>
                                                @endif
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($getRecord as $project)
                                                <tr>
                                                    <td>{{ $project->name }}</td>
                                                    <td>{{ $project->description }}</td>
                                                    <td>{{ $project->no_users }}</td>
                                                    <td>
                                                        @if($project->status === 'available')
                                                            <span class="badge bg-success">Available</span>
                                                        @elseif($project->status === 'not available')
                                                            <span class="badge bg-danger">Not Available</span>
                                                        @else
                                                            <span class="badge bg-secondary">Unknown</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if (!empty($PermissionEdit))
                                                            <a href="{{ url('/projects/edit/'.$project->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                                        @endif
                                                        @if (!empty($PermissionDelete))
                                                            <a href="{{ url('/projects/delete/'.$project->id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this project?')">Delete</a>
                                                        @endif
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div> <!-- End Table Responsive -->
                            </div>
                        </div>
                    </div>
                </div>




  <h5 class="card-title mb-4">Add New Project</h5>

<form action="{{ url('/projects/add') }}" method="POST">
    @csrf

    <!-- Project Name Input -->
    <div class="form-floating mb-4">
        <input type="text" name="name" class="form-control" id="inputName" placeholder="Enter the Project Name" required>
        <label for="inputName">Project Name</label>
    </div>

    <!-- Description Input -->
    <div class="form-floating mb-4">
        <textarea name="description" class="form-control" id="inputDescription" placeholder="Enter Project Description" style="height: 100px"></textarea>
        <label for="inputDescription">Description</label>
    </div>

    <!-- Number of Users -->
    <div class="form-floating mb-4">
        <input type="number" name="no_users" class="form-control" id="inputNoUsers" placeholder="Enter Number of Users" required>
        <label for="inputNoUsers">Number of Users</label>
    </div>

    <!-- Status Field -->
    <div class="form-floating mb-4">
        <select name="status" class="form-select" id="inputStatus" required>
            <option value="">Select Status</option>
            <option value="available">Available</option>
            <option value="not available">Not Available</option>
        </select>
        <label for="inputStatus">Status</label>
    </div>

    <!-- Submit Button -->
    <div class="d-flex justify-content-end">
        <button type="submit" class="btn btn-primary">Submit Project</button>
    </div>
</form>

    </section>
</div>


@endsection

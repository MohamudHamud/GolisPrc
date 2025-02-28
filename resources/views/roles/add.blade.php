@extends('layouts.app')

@section('content')
<div class="pagetitle" style="min-height: 100vh;">
    <h3 class="mb-4">Add Role</h3>
    <section class="section">
        <div class="card">
            <div class="card-body border border-primary rounded shadow-sm bg-light p-4">
                <h5 class="card-title mb-4">Add New Role</h5>

                <form action="" method="POST">
                    @csrf
                    <!-- Role Name Input -->
                    <div class="row mb-4 align-items-center">
                        <label for="inputName" class="col-sm-2 col-form-label fw-bold">Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="name" class="form-control" placeholder="Enter the Role" required>
                        </div>
                    </div>

                    <!-- Permissions Section -->
                    <div class="mb-3">
                        <label class="d-block mb-3 fw-bold" for="permissions">Permissions</label>
                        <div class="row">
                            @foreach($getPermission as $value)
                                <div class="col-md-6 mb-4">
                                    <!-- Permission Card -->
                                    <div class="card border border-secondary rounded shadow-sm">
                                        <div class="card-header bg-primary text-white">
                                            <!-- Name as Header -->
                                            <h5 class="mb-0">{{ $value['name'] }}</h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                @foreach($value['group'] as $group)
                                                    <div class="col-md-4 mb-2">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="{{ $group['id'] }}" name="premission_id[]" id="permission_{{ $group['id'] }}">
                                                            <label class="form-check-label" for="permission_{{ $group['id'] }}">
                                                                {{ $group['name'] }}
                                                            </label>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">Submit Role</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
@endsection

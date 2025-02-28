@extends('layouts.app')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
@section('content')
    <div class="pagetitle" style="height: 100vh;">
        <h3>Add User</h3>
        <section class="section">
            <div class="card">
                <div class="card-body border border-primary rounded shadow-sm bg-light">
                    <h5 class="card-title">Add New User</h5>

                    <!-- Add form action to route -->
                   <form action="{{ url('/Users/Add') }}" method="POST">
                       @csrf
                        <!-- Name Field -->
                        <div class="row mb-4 align-items-center">
                            <label for="inputName" class="col-sm-2 col-form-label fw-bold">Name</label>
                            <div class="col-sm-10">
                                <input type="text" name="name" value="{{ old('name') }}" placeholder="Enter the name" class="form-control" autocomplete="name" required>
                            </div>
                        </div>

                        <!-- Email Field -->
                        <div class="row mb-4 align-items-center">
                            <label for="inputEmail" class="col-sm-2 col-form-label fw-bold">Email</label>
                            <div class="col-sm-10">
                                <input type="email" name="email" value="{{ old('email') }}" placeholder="Enter the Email" class="form-control" autocomplete="email" required>
                                @if ($errors->has('email'))
                                    <div style="color:red" class="alert alert-danger">
                                        {{ $errors->first('email') }}
                                    </div>
                                @endif
                            </div>
                        </div>

                        <!-- Password Field -->
                        <div class="row mb-4 align-items-center">
                            <label for="inputPassword" class="col-sm-2 col-form-label fw-bold">Password</label>
                            <div class="col-sm-10">
                                <input type="password" name="password" class="form-control" placeholder="Enter the Password" autocomplete="new-password" required>
                            </div>
                        </div>




    <!-- Role Cards -->
    <div class="col-12">
 <!-- Role Selection -->
<div class="row mb-5">
    <!-- Centered Heading -->
    <div class="col-12 text-center mb-4">
        <label for="inputRole" class="fw-bold text-primary fs-4">Select a Role</label>
        <p class="text-muted" style="font-size: 0.95rem;">Choose one of the roles below to proceed</p>
    </div>

    <!-- Role Cards -->
    <div class="col-12">
        <div class="row g-3">
            @foreach($GetRole as $role)
                <div class="col-md-4 col-sm-6">
                    <!-- Role Card -->
                    <div class="card border-0 shadow-lg rounded role-card {{ 'role-color-' . strtolower($role->color) }}">
                        <div class="card-body text-center">
                            <!-- Icon for the Role -->
                            <div class="role-icon mb-3">
                                <i class="fa {{ $role->icon }}" style="font-size: 40px; color: {{ $role->color }};"></i>
                            </div>
                            
                            <!-- Role Name -->
                            <h5 class="card-title fw-bold text-dark mb-2">{{ $role->name }}</h5>
                            
                      
                            
                            <!-- Radio Button -->
                            <div class="form-check d-flex justify-content-center align-items-center">
                                <input 
                                    type="radio" 
                                    name="role_id" 
                                    id="role_{{ $role->id }}" 
                                    value="{{ $role->id }}" 
                                    class="form-check-input me-2" 
                                    required
                                />
                                <label class="form-check-label fw-semibold" for="role_{{ $role->id }}">Select</label>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Submit Button -->
    <div class="col-12 mt-4 text-center">
        <button type="submit" class="btn btn-primary btn-lg px-5">Submit</button>
    </div>
</div>

<!-- CSS for additional styling -->
<style>
    /* General card styling */
    .role-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        background-color: #fff;
        border-left: 5px solid transparent;
    }
    .role-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 8px 35px rgba(0, 0, 0, 0.2);
    }

    /* Role icon styling */
    .role-icon {
        padding: 10px;
        border-radius: 50%;
        background-color: rgba(0, 0, 0, 0.05);
        display: inline-block;
    }

    /* Radio button styling */
    .form-check-input:checked {
        background-color: #007bff; /* Primary color */
        border-color: #007bff;
    }
    .form-check-label {
        font-weight: 600;
        color: #555;
    }

    /* Role color dynamic classes */
    .role-color-red {
        border-left-color: #ff4d4d;
    }
    .role-color-blue {
        border-left-color: #4d79ff;
    }
    .role-color-green {
        border-left-color: #4dff88;
    }
    .role-color-yellow {
        border-left-color: #ffd24d;
    }

    /* Button styling */
    .btn-primary {
        font-size: 1rem;
        font-weight: 600;
        border-radius: 25px;
        transition: background-color 0.3s ease, transform 0.2s ease;
    }
    .btn-primary:hover {
        background-color: #0056b3;
        transform: translateY(-3px);
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .role-card {
            text-align: center;
        }
        .role-icon {
            margin: 0 auto 15px;
        }
    }
</style>
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection

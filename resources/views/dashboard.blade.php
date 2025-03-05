@extends('layouts.app')

@section('content')
<ol class="breadcrumb bg-light p-3 rounded">
    <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Home</a></li>
    <li class="breadcrumb-item active">Dashboard</li>
</ol>

<div class="container-fluid mt-2">
    <!-- Header Section -->
    <div class="text-center mb-5">
        <h2 class="font-weight-bold text-primary">Test Dashboard</h2>
        <p class="text-muted">Welcome</p>
    </div>
    <!-- Header Section -->

    <!-- Statistics Section -->
    <div class="row g-4 mb-5">
        <!-- Card for Users -->
        <div class="col-md-4">
            <div class="card border-0 bg-transparent h-100">
                <div class="card-body text-center bg-transparent">
                    <h5 class="card-title text-uppercase text-muted">Users</h5>
                    <p class="card-text display-4 text-primary">{{ $totalUsers }}</p>
                    <a href="{{ url('/Users/user') }}" class="btn btn-outline-primary btn-sm rounded-pill">View Details</a>
                </div>
            </div>
        </div>

        <!-- Card for Products -->
        <div class="col-md-4">
            <div class="card border-0 bg-transparent h-100">
                <div class="card-body text-center bg-transparent">
                    <h5 class="card-title text-uppercase text-muted">Total Products</h5>
                    <p class="card-text display-4 text-primary">{{ $totalProducts }}</p>
                    <a href="/products" class="btn btn-outline-primary btn-sm rounded-pill">View Details</a>
                </div>
            </div>
        </div>

        <!-- Card for Customers -->
        <div class="col-md-4">
            <div class="card border-0 bg-transparent h-100">
                <div class="card-body text-center bg-transparent">
                    <h5 class="card-title text-uppercase text-muted">Total Customers</h5>
                    <p class="card-text display-6 text-primary">
                        <strong>{{ $totalCustomers ?? 0 }}</strong>
                    </p>
                    <a href="{{ url('/customers') }}" class="btn btn-outline-primary btn-sm rounded-pill">View Details</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

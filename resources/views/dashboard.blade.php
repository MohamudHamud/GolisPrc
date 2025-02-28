@extends('layouts.app')

@section('content')
<ol class="breadcrumb bg-light p-3 rounded">
    <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Home</a></li>
    <li class="breadcrumb-item active">Dashboard</li>
</ol>

<div class="container-fluid mt-2">
    <!-- Header Section -->
    <div class="text-center mb-5">
        <img src="/assets/img/logo.png" alt="Qabaal Logo" class="img-fluid rounded-circle mb-3 shadow-sm" style="max-height: 100px; width: 100px;"> 
        <h2 class="font-weight-bold text-primary">Qabaal Dashboard</h2>
        <p class="text-muted">Welcome to the central hub for managing Qabaal data</p>
    </div>
    <!-- Header Section -->

    <!-- Statistics Section -->
<div class="row g-4 mb-5">
    <!-- Card for Departments -->
    <div class="col-md-4">
        <div class="card border-0 bg-transparent h-100">
            <div class="card-body text-center bg-transparent">
                <h5 class="card-title text-uppercase text-muted">Visitors</h5>
                <p class="card-text display-4 text-primary">{{$visitors}}</p>
                <a href="{{ url('/visitors') }}" class="btn btn-outline-primary btn-sm rounded-pill">View Details</a>
            </div>
        </div>
    </div>

    <!-- Card for Students -->
    <div class="col-md-4">
        <div class="card border-0 bg-transparent h-100">
            <div class="card-body text-center bg-transparent">
                <h5 class="card-title text-uppercase text-muted">Systesms</h5>
                <p class="card-text display-4 text-primary">{{$totalProjects}}</p>
                <a href="/projects" class="btn btn-outline-primary btn-sm rounded-pill">View Details</a>
            </div>
        </div>
    </div>

   
    
        <div class="col-md-4">
    <div class="card border-0 bg-transparent h-100">
        <div class="card-body text-center bg-transparent">
            <h5 class="card-title text-uppercase text-muted">Places of Visitors</h5>
            <p class="card-text display-6 text-primary">
                @if($mostVisitedPlaces->isNotEmpty())
                    @foreach($mostVisitedPlaces as $place)
                        <div>
                            <strong>{{ $place->city }}</strong>
                           
                            <td><strong>{{ $place->percentage }}% </strong></td>
                        </div>
                    @endforeach
                @else
                    <p>No data available</p>
                @endif
            </p>
            <a href="{{ url('/visitors') }}" class="btn btn-outline-primary btn-sm rounded-pill">View Details</a>
        </div>
    </div>
</div>

    
</div>

</div>
@endsection

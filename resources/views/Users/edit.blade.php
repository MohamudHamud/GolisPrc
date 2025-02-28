@extends('layouts.app')

  
@section('content')
    <div class="pagetitle" style="height: 100vh;">

    <h3>Edit User</h3>
    <section class="section">
  <!-- <div class="row">
    <div class="col-lg-6"> -->

      <div class="card">
        @include('message')
        <div class="card-body border border-primary rounded shadow-sm bg-light">
          <h5 class="card-title">Edit User</h5>
      
          <form action="{{ url('/Users/edit/'.$getRecord->id) }}" method="POST">
  

    @csrf
         <div class="row mb-4 align-items-center">
                            <label for="inputName" class="col-sm-2 col-form-label fw-bold">Name</label>
                            <div class="col-sm-10">
                                <input type="text" name="name" value="{{ $getRecord->name }}"  class="form-control" autocomplete="name" required>
                            </div>
                        </div>

                        <!-- Email Field -->
                        <div class="row mb-4 align-items-center">
                            <label for="inputEmail" class="col-sm-2 col-form-label fw-bold">Email</label>
                            <div class="col-sm-10">
                                <input type="email" name="email" value="{{ $getRecord->email }}"  class="form-control" autocomplete="email" required>
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
                                <input type="text" name="password" class="form-control" readonly  >
                                (do you want to change the password otherwise leave it )
                            </div>
                        </div>
                        <div class="row mb-4 align-items-center">
                        <div class="row">
                        <div class="container py-4">
                        <div class="container py-4">
                        <!-- Role Cards -->
                        <div class="row g-3">
                            @foreach($GetRole as $role)
                            <div class="col-md-4 col-sm-6">
                                <!-- Role Card -->
                                <div class="card border-0 shadow-lg rounded role-card">
                                    <div class="card-body text-center">
                                        <!-- Icon for the Role -->
                                        <div class="role-icon mb-3">
                                    <i class="fa {{ $role->icon }}" style="font-size: 40px; color: {{ $role->color }};"></i>
                                </div>

                                <!-- Role Name -->
                                <h5 class="card-title fw-bold text-dark mb-2">{{ $role->name }}</h5>

                                <!-- Role Description -->
                                <p class="card-text text-muted">{{ $role->description }}</p>

                                <!-- Radio Button -->
                                <div class="form-check d-flex justify-content-center align-items-center">
                                    <input 
                                        type="radio" 
                                        name="role_id" 
                                        id="role_{{ $role->id }}" 
                                        value="{{ $role->id }}" 
                                        class="form-check-input me-2" 
                                        {{ $getRecord->role_id == $role->id ? 'checked' : '' }}
                                        required
                                    />
                                    <label class="form-check-label fw-semibold" for="role_{{ $role->id }}">Select</label>
                                </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>

                            <!-- Submit Button -->
                            <div class="row mt-4">
                                <div class="col text-center">
                                    <button type="submit" class="btn btn-primary btn-lg px-5">Submit</button>
                                </div>
                            </div>
                        </div>





            
          </form>
      </div>
    </div>

 @endsection



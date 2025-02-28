@extends('layouts.app')

  
@section('content')
    <div class="pagetitle" style="height: 100vh;">

    <h3>Eit Role</h3>
    <section class="section">
  <!-- <div class="row">
    <div class="col-lg-6"> -->

      <div class="card">
        @include('message')
        <div class="card-body">
          <h5 class="card-title">Edit Role</h5>
      
      <form action="{{ url('/roles/edit/'.$getRecord->id) }}" method="POST">
         @csrf
          <div class="row mb-4 align-items-center">
              <label for="inputName" class="col-sm-2 col-form-label fw-bold">Name</label>
              <div class="col-sm-10">
                  <input type="text"  name="name"  value="{{ $getRecord->name }}" class="form-control" required>
              </div>
          </div>

             <!-- Permissions -->
             <div class="row mb-3">
                        <label style="display: block; margin-bottom: 20px;" for="inputText" class="col-sm-12 col-form-label"><b>Permissions</b></label>
                        @foreach($getPermission as $value)
                            <div class="row" style="margin-bottom: 20px;">
                                <div class="col-md-3">
                                    {{ $value['name'] }}
                                </div>
                                <div class="col-md-9">
                                    <div class="row">
                                        @foreach($value['group'] as $group)
                                            @php
                                                $checked = in_array($group['id'], $getRolePermission->pluck('permission_id')->toArray()) ? 'checked' : '';
                                            @endphp

                                            <div class="col-md-3">
                                                <label>
                                                    <input type="checkbox" {{ $checked }} value="{{ $group['id'] }}" name="permission_id[]"> 
                                                    {{ $group['name'] }}
                                                </label>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>





            <div class="row mb-5">
          
              <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Update Role</button>
              </div>
            </div>

          </form>
      </div>
    </div>

 @endsection



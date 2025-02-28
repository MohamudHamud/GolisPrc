@extends('layouts.app')
@section('content')
    <div class="pagetitle" style="height: 100vh;">


<section class="section ">
  <div class="row">
  @csrf
  @include('message')
    <div class="col-lg-12">
 
      <div class="card">
        <div class="card-body border border-primary rounded shadow-sm bg-light">
          <h2 class="card-title">Users List</h2>
                  <div class="d-flex justify-content-end mb-3">
                  @if (!empty($PermissionAdd))
            <a href="{{ url('/Users/Add') }}" class="btn btn-primary">
                <i class="bi bi-plus-circle"></i> Add User
              </a> @endif
               </div>

          <!-- Default Table -->
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Role</th>
                <th scope="col"> Date</th>
                @if (!empty($PermissionEdit) || !empty($PermissionDelete)) <th scope="col">Action</th>@endif
              </tr>
            </thead>
            <tbody>
            @foreach ($getRecord as $values)
              <tr>
                <th scope="row">{{$values->id }}</th>
                <td>{{$values->name }}</td>
                <td>{{$values->email }}</td>
                <td>{{$values->role_name }}</td>
                <td>{{$values->created_at }}</td>
                <td>
                @if (!empty($PermissionEdit))<a href="{{url ('/Users/edit/'.$values->id)}}" class="btn btn-primary btn-sm">Edit</a>@endif
                @if (!empty($PermissionDelete))<a href="{{url ('/Users/delete/'. $values->id)}}"    class="btn btn-danger btn-sm">Delete</a>@endif
               </td>
              </tr>
              @endforeach
             
            </tbody>
          </table>
    
        </div>
      </div>



    

   
    </div>


</section>


 @endsection

@extends('layouts.app')

@section('content')
<div class="pagetitle" style="min-height: 100vh;">
    <h3 class="mb-4">Customer List</h3>
    <section class="section mt-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title">Customer List</h2>
                            <div class="d-flex justify-content-end mb-3">
                                <button onclick="printReport()" class="btn btn-info">
                                    <i class="bi bi-printer"></i> Print Report
                                </button>
                                {{-- @if (!empty($PermissionAdd))
                                    <a href="{{ url('/customers') }}" class="btn btn-primary">
                                        <i class="bi bi-plus-circle"></i> Add Customer
                                    </a>
                                @endif --}}
                                <a href="{{ route('customers.exportCSV') }}" class="btn btn-success">
                                    <i class="bi bi-file-earmark-spreadsheet"></i> Export CSV
                                </a>
                            </div>

                            <!-- Responsive Customer Table -->
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead class="table-primary">
                                        <tr>
                                            <th>Name</th>
                                            <th>Contact Information</th>
                                            @if (!empty($PermissionEdit) || !empty($PermissionDelete))
                                                <th scope="col">Action</th>
                                            @endif
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($getRecord as $customer)
                                            <tr>
                                                <td>{{ $customer->name }}</td>
                                                <td>{{ $customer->contact_information }}</td>
                                                <td>
                                                    @if (!empty($PermissionEdit))
                                                        <a href="{{ url('/customers/edit/'.$customer->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                                    @endif
                                                    @if (!empty($PermissionDelete))
                                                        <a href="{{ url('/customers/delete/'.$customer->id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this customer?')">Delete</a>
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

            <h5 class="card-title mb-4">Add New Customer</h5>
            <form action="{{ url('/customers/add') }}" method="POST">
                @csrf

                <!-- Customer Name Input -->
                <div class="form-floating mb-4">
                    <input type="text" name="name" class="form-control" id="inputName" placeholder="Enter Customer Name" required>
                    <label for="inputName">Customer Name</label>
                </div>

                <!-- Contact Information Input -->
                <div class="form-floating mb-4">
                    <input type="text" name="contact_information" class="form-control" id="inputContact" placeholder="Enter Contact Information" required>
                    <label for="inputContact">Contact Information</label>
                </div>

                <!-- Submit Button -->
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Submit Customer</button>
                </div>
            </form>
        </div>
    </section>
</div>

<script>
    function printReport() {
        var printContent = document.querySelector(".table-responsive").innerHTML;
        var originalContent = document.body.innerHTML;
        document.body.innerHTML = printContent;
        window.print();
        document.body.innerHTML = originalContent;
    }
</script>
@endsection

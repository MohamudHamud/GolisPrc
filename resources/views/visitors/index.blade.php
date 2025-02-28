@extends('layouts.app')
<!-- DataTables CSS -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">

<!-- jQuery (necessary for DataTables) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- DataTables JS -->
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

@section('content')
    <div class="container-fluid py-4">
        @csrf
        @include('message') <!-- To display success/error messages -->
        
        <h2 class="mb-3">Visitors List</h2>
        <div class="table-responsive">
            <table id="requestsTable" class="table table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>City</th>
                        <th>Company</th>
                        <th>System</th>
                        <th>Description</th>
                        <th>Req At</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($requests as $request)
                        <tr>
                            <td>{{ $request->id }}</td>
                            <td>{{ $request->name }}</td>
                            <td>{{ $request->email }}</td>
                            <td>{{ $request->phone }}</td>
                            <td>{{ $request->city }}</td>
                            <td>{{ $request->institution }}</td>
                            <td>{{ $request->project}}</td>
                            <td>{{ $request->message }}</td>
                            <td>{{ $request->created_at }}</td>
                            <td class="d-flex gap-1">
                               
                                <a href="{{ url('/visitors/delete/'.$request->id) }}" class="btn btn-danger btn-sm" 
                                onclick="return confirm('Are you sure you want to delete this visitor?')">
                                Delete
                                </a>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- DataTable Initialization Script -->
    <script>
        $(document).ready(function() {
            $('#requestsTable').DataTable({
                "processing": true,
                "serverSide": true,
                "responsive": true,
                "order": [[0, 'desc']], // Default order by first column (ID)
                "language": {
                    "search": "Filter records:"
                }
            });
        });
    </script>
@endsection

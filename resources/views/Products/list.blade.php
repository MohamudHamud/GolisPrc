@extends('layouts.app')

@section('content')
<div class="pagetitle" style="min-height: 100vh;">
    <h3 class="mb-4">Product List</h3>
    <section class="section mt-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title">Product List</h2>
                            <div class="d-flex justify-content-end mb-3">
                                <button onclick="printReport()" class="btn btn-info">
                                    <i class="bi bi-printer"></i> Print Report
                                </button>
                                {{-- @if (!empty($PermissionAdd))
                                    <a href="{{ url('/products') }}" class="btn btn-primary">
                                        <i class="bi bi-plus-circle"></i> Add Product
                                    </a>
                                @endif --}}
                                <a href="{{ route('products.exportCSV') }}" class="btn btn-success">
                                    <i class="bi bi-file-earmark-spreadsheet"></i> Export CSV
                                </a>
                            </div>

                            <!-- Responsive Product Table -->
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead class="table-primary">
                                        <tr>
                                            <th>Name</th>
                                            <th>Price</th>
                                            <th>Description</th>
                                            <th>Stock Quantity</th>
                                            @if (!empty($PermissionEdit) || !empty($PermissionDelete))
                                                <th scope="col">Action</th>
                                            @endif
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($getRecord as $product)
                                            <tr>
                                                <td>{{ $product->name }}</td>
                                                <td>{{ $product->price }}</td>
                                                <td>{{ $product->description }}</td>
                                                <td>{{ $product->stock_quantity }}</td>
                                                <td>
                                                    @if (!empty($PermissionEdit))
                                                        <a href="{{ url('/products/edit/'.$product->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                                    @endif
                                                    @if (!empty($PermissionDelete))
                                                        <a href="{{ url('/products/delete/'.$product->id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this product?')">Delete</a>
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



            <h5 class="card-title mb-4">Add New Product</h5>
            <form action="{{ url('/products/add') }}" method="POST">
                @csrf

                <!-- Product Name Input -->
                <div class="form-floating mb-4">
                    <input type="text" name="name" class="form-control" id="inputName" placeholder="Enter the Product Name" required>
                    <label for="inputName">Product Name</label>
                </div>

                <!-- Price Input -->
                <div class="form-floating mb-4">
                    <input type="number" name="price" class="form-control" id="inputPrice" placeholder="Enter Product Price" step="0.01" required>
                    <label for="inputPrice">Price</label>
                </div>

                <!-- Description Input -->
                <div class="form-floating mb-4">
                    <textarea name="description" class="form-control" id="inputDescription" placeholder="Enter Product Description" style="height: 100px"></textarea>
                    <label for="inputDescription">Description</label>
                </div>

                <!-- Stock Quantity Input -->
                <div class="form-floating mb-4">
                    <input type="number" name="stock_quantity" class="form-control" id="inputStock" placeholder="Enter Stock Quantity" required>
                    <label for="inputStock">Stock Quantity</label>
                </div>

                <!-- Submit Button -->
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Submit Product</button>
                </div>
            </form>
        </div>
    </section>
</div>
@endsection

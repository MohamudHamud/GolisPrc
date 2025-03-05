@extends('layouts.app')

@section('content')
<div class="pagetitle" style="min-height: 100vh;">
    <h3 class="mb-4">Add Product</h3>
    <section class="section">
        <div class="card">
            <div class="card-body border border-primary rounded shadow-sm bg-light p-4">
                <h5 class="card-title mb-4">Add New Product</h5>

                <form action="{{ url('/products/add') }}" method="POST">
                    @csrf
                    
                    <!-- Product Name Input -->
                    <div class="row mb-4 align-items-center">
                        <label for="inputName" class="col-sm-2 col-form-label fw-bold">Product Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="name" class="form-control" placeholder="Enter the Product Name" required>
                        </div>
                    </div>

                    <!-- Price Input -->
                    <div class="row mb-4 align-items-center">
                        <label for="inputPrice" class="col-sm-2 col-form-label fw-bold">Price</label>
                        <div class="col-sm-10">
                            <input type="number" name="price" class="form-control" placeholder="Enter Product Price" step="0.01" required>
                        </div>
                    </div>

                    <!-- Description Input -->
                    <div class="row mb-4 align-items-center">
                        <label for="inputDescription" class="col-sm-2 col-form-label fw-bold">Description</label>
                        <div class="col-sm-10">
                            <textarea name="description" class="form-control" placeholder="Enter Product Description" rows="4"></textarea>
                        </div>
                    </div>

                    <!-- Stock Quantity Input -->
                    <div class="row mb-4 align-items-center">
                        <label for="inputStock" class="col-sm-2 col-form-label fw-bold">Stock Quantity</label>
                        <div class="col-sm-10">
                            <input type="number" name="stock_quantity" class="form-control" placeholder="Enter Stock Quantity" required>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">Submit Product</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
@endsection

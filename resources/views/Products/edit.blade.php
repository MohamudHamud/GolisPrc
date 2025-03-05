@extends('layouts.app')

@section('content')
<div class="pagetitle" style="height: 100vh;">
    <h3 class="mt-5">Edit Product</h3>
    <section class="section">
        <div class="card">
            <div class="card-body border border-primary rounded shadow-sm bg-light">
                <h5 class="card-title">Edit Product</h5>
                <form action="{{ url('/products/edit/'.$getRecord->id) }}" method="POST">
                    @csrf

                    <!-- Product Name Field -->
                    <div class="row mb-4 align-items-center">
                        <label for="inputName" class="col-sm-2 col-form-label fw-bold">Product Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="name" value="{{ $getRecord->name }}" class="form-control" required>
                        </div>
                    </div>

                    <!-- Price Field -->
                    <div class="row mb-4 align-items-center">
                        <label for="inputPrice" class="col-sm-2 col-form-label fw-bold">Price</label>
                        <div class="col-sm-10">
                            <input type="number" name="price" value="{{ $getRecord->price }}" class="form-control" step="0.01" required>
                        </div>
                    </div>

                    <!-- Description Field -->
                    <div class="row mb-4 align-items-center">
                        <label for="inputDescription" class="col-sm-2 col-form-label fw-bold">Description</label>
                        <div class="col-sm-10">
                            <textarea name="description" class="form-control" rows="4">{{ $getRecord->description }}</textarea>
                        </div>
                    </div>

                    <!-- Stock Quantity Field -->
                    <div class="row mb-4 align-items-center">
                        <label for="inputStock" class="col-sm-2 col-form-label fw-bold">Stock Quantity</label>
                        <div class="col-sm-10">
                            <input type="number" name="stock_quantity" value="{{ $getRecord->stock_quantity }}" class="form-control" required>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="text-center mt-4">
                        <button type="submit" class="btn btn-primary btn-lg px-5">Update Product</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
@endsection

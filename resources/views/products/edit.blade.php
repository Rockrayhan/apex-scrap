@extends('layouts.app')

@section('title', 'Edit product')

@section('content')
    <div class="container mt-4">
        <div class="card shadow-sm">
            <div class="card-header">
                <h4>Edit Product</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label">Category</label>
                        <select name="category_id" class="form-select" required>
                            @foreach ($categories as $cat)
                                <option value="{{ $cat->id }}"
                                    {{ $product->category_id == $cat->id ? 'selected' : '' }}>
                                    {{ $cat->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Product Name</label>
                        <input type="text" name="name_en" value="{{ old('name', $product->name) }}" class="form-control"
                            required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea name="description_en" class="form-control" rows="3">{{ old('description', $product->description) }}</textarea>
                    </div>



                    <div class="mb-3">
                        <label class="form-label">Current Image</label><br>
                        @if ($product->image)
                            <img src="{{ asset($product->image) }}" width="100" class="img-thumbnail mb-2">
                        @else
                            <span class="text-muted">No image uploaded</span>
                        @endif
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Upload New Image</label>
                        <input type="file" name="image" accept="image/*" class="form-control">
                    </div>



                    <button type="submit" class="btn btn-success">Update Product</button>
                    <a href="{{ route('admin.products.index') }}" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>
@endsection

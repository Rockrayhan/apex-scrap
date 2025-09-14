@extends('layouts.app')

@section('title', 'Edit product')

@section('content')
    <div class="container mt-4">
        <div class="card shadow-sm">
            <div class="card-header">
                <h4>Edit Product</h4>
            </div>


            {{-- Show Messages --}}
            <div>
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show mb-3" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                @if (session('error'))
                    <div class="alert alert-danger alert-dismissible fade show mb-3" role="alert">
                        {{ session('error') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show mb-3" role="alert">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
            </div>




            <div class="card-body">
                <form action="{{ route('admin.products.update', $product->id) }}" method="POST"
                    enctype="multipart/form-data">
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
                        <label class="form-label">Product Name (English) </label>
                        <input type="text" name="name_en" value="{{ old('name', $product->name) }}" class="form-control"
                            required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Product Name (Chinese) </label>
                        <input type="text" name="name_zh" value="{{ old('name_zh', $product->name_zh) }}" class="form-control"
                            required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Description (English) </label>
                        <textarea name="description_en" class="form-control" rows="3">{{ old('description', $product->description) }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Description (Chinese) </label>
                        <textarea name="description_zh" class="form-control" rows="3">{{ old('description_zh', $product->description_zh) }}</textarea>
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

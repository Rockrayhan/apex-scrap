@extends('layouts.app')

@section('title', 'Create product')

@section('content')
    <div class="container">
        <div class="card shadow-sm">
            <div class="card-header ">
                <h4>Add Product</h4>
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
                <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label">Category</label>
                        <select name="category_id" class="form-select" required>
                            <option value="">-- Select Category --</option>
                            @foreach ($categories as $cat)
                                <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Product Name (English)</label>
                        <input type="text" name="name_en" class="form-control" placeholder="Enter product name (English)" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Product Name (Chinese)</label>
                        <input type="text" name="name_zh" class="form-control" placeholder="Enter product name (Chinese)" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Description (English)</label>
                        <textarea name="description_en" class="form-control" rows="5" placeholder="Enter description (English)"></textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Description (Chinese) </label>
                        <textarea name="description_zh" class="form-control" rows="5" placeholder="Enter description (Chinese)"></textarea>
                    </div>


                    <div class="mb-3">
                        <label class="form-label">Image</label>
                        <input type="file" name="image" accept="image/*" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-success">Save Product</button>
                </form>
            </div>
        </div>
    </div>
@endsection

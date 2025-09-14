@extends('layouts.app')

@section('title', 'All Products')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2>Products</h2>
            <a href="{{ route('admin.products.create') }}" class="btn btn-primary">Add Product</a>
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


        @foreach ($categories as $category)
            <h6 class="mt-4">{{ $category->name }}</h6>

            @if ($category->products->count())
                <table class="table table-bordered table-hover align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($category->products as $prod)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $prod->name }}</td>
                                <td>
                                    @if ($prod->image)
                                        <img src="{{ asset($prod->image) }}" alt="{{ $prod->name }}" class="img-fluid"
                                            style="height: 70px; width: 80px">
                                    @else
                                        <span class="text-muted">No Image</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('admin.products.edit', $prod->id) }}"
                                        class="btn btn-warning btn-sm">Edit</a>

                                    <form action="{{ route('admin.products.destroy', $prod->id) }}" method="POST"
                                        style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Are you sure?')">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <p class="text-muted">No products found in this category.</p>
            @endif
        @endforeach
    </div>
@endsection

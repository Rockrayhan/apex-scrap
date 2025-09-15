@extends('layouts.app')

@section('title', 'All Products')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2>Products</h2>
            <a href="{{ route('admin.products.create') }}" class="btn btn-success">Add Product</a>
        </div>


        {{-- Toast Messages --}}
        <div class="position-fixed top-0 end-0 p-3" style="z-index: 1055">
            @if (session('success'))
                <div class="toast align-items-center bg-light text-success font-weight-bold border-0 show py-2" role="alert"
                    aria-live="assertive" aria-atomic="true">
                    <div class="d-flex">
                        <div class="toast-body">
                            {{ session('success') }}
                        </div>
                        <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
                            aria-label="Close"></button>
                    </div>
                </div>
            @endif

            @if (session('error'))
                <div class="toast align-items-center bg-light text-danger font-weight-bold border-0 show py-2" role="alert"
                    aria-live="assertive" aria-atomic="true">
                    <div class="d-flex">
                        <div class="toast-body">
                            {{ session('error') }}
                        </div>
                        <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
                            aria-label="Close"></button>
                    </div>
                </div>
            @endif

            @if ($errors->any())
                <div class="toast align-items-center bg-light text-danger font-weight-bold border-0 show py-2" role="alert"
                    aria-live="assertive" aria-atomic="true">
                    <div class="d-flex">
                        <div class="toast-body">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
                            aria-label="Close"></button>
                    </div>
                </div>
            @endif
        </div>

        {{-- Filter by category --}}
        <div class="dropdown mb-4">
            <button class="btn btn-light text-success dropdown-toggle" type="button" id="dropdownMenuButton1"
                data-bs-toggle="dropdown" aria-expanded="false">
                Filter by category
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li>
                    <a class="dropdown-item" href="javascript:void(0)" onclick="filterCategory('all')">
                        All Categories
                    </a>
                </li>
                @foreach ($categories as $category)
                    <li>
                        <a class="dropdown-item" href="javascript:void(0)" onclick="filterCategory('{{ $category->id }}')">
                            {{ $category->name }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
{{-- Category-wise tables --}}
<div class="mt-4">
    @foreach ($categories as $category)
        <div class="category-table mb-5 p-3 border rounded shadow-sm bg-white" id="category-{{ $category->id }}">
            <h6 class="mb-3 text-success fw-bold border-bottom pb-2">
                {{ $category->name }}
            </h6>

            @if ($category->products->count())
                <div class="table-responsive">
                    <table class="table table-bordered table-hover align-middle mb-0">
                        <thead class="table-light text-center">
                            <tr>
                                <th style="width: 5%;">#</th>
                                <th style="width: 35%;">Name</th>
                                <th style="width: 20%;">Image</th>
                                <th style="width: 20%;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($category->products as $prod)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td>{{ $prod->name }}</td>
                                    <td class="text-center">
                                        @if ($prod->image)
                                            <img src="{{ asset($prod->image) }}" alt="{{ $prod->name }}"
                                                class="img-thumbnail" style="height: 70px; width: 80px; object-fit: cover;">
                                        @else
                                            <span class="text-muted">No Image</span>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ route('admin.products.edit', $prod->id) }}"
                                            class="btn btn-warning btn-sm me-1">Edit</a>

                                        <form action="{{ route('admin.products.destroy', $prod->id) }}" method="POST"
                                            class="d-inline">
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
                </div>
            @else
                <p class="text-muted">No products found in this category.</p>
            @endif
        </div>
    @endforeach
</div>



    </div>



    <script>
        function filterCategory(categoryId) {
            const allTables = document.querySelectorAll('.category-table');

            if (categoryId === 'all') {
                allTables.forEach(table => table.style.display = 'block');
            } else {
                allTables.forEach(table => {
                    table.style.display = table.id === 'category-' + categoryId ? 'block' : 'none';
                });
            }
        }

        // Default → show all categories
        filterCategory('all');
    </script>

@endsection

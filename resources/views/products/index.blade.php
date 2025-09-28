@extends('layouts.app')

@section('title', 'All Products')

@section('content')

    <div class=" py-3 px-3 shadow-sm sticky-top bg-light" style="top: 4rem; z-index: 1000;">
        <div class="d-flex justify-content-between align-items-center mb-3 ">
            <h2 class="m-0">Products</h2>
            <a href="{{ route('admin.products.create') }}" class="btn btn-success">Add Product</a>
        </div>



        {{-- Filter by category --}}
        <div class="dropdown mb-4">
            <button class="btn btn-light text-success dropdown-toggle border-2 border-secondary" type="button" id="dropdownMenuButton1"
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

    </div>

    <div class="container">


        {{-- Toast Messages --}}
        <div class="position-fixed top-3 end-3 p-3" style="z-index: 2000">
            @if (session('success'))
                <div class="toast bg-success text-white shadow-lg fade show" role="alert" aria-live="assertive"
                    aria-atomic="true">
                    <div class="d-flex">
                        <div class="toast-body fw-bold">
                            ✅ {{ session('success') }}
                        </div>
                        <button type="button" class="btn-close btn-close-white me-2 m-auto"
                            data-bs-dismiss="toast"></button>
                    </div>
                </div>
            @endif

            @if (session('error'))
                <div class="toast bg-danger text-white shadow-lg fade show" role="alert" aria-live="assertive"
                    aria-atomic="true">
                    <div class="d-flex">
                        <div class="toast-body fw-bold">
                            ⚠️ {{ session('error') }}
                        </div>
                        <button type="button" class="btn-close btn-close-white me-2 m-auto"
                            data-bs-dismiss="toast"></button>
                    </div>
                </div>
            @endif
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
                                        <tr id="product-{{ $prod->id }}">
                                            <td class="text-center">{{ $loop->iteration }}</td>
                                            <td>{{ $prod->name }}</td>
                                            <td class="text-center">
                                                @if ($prod->image)
                                                    <img src="{{ asset($prod->image) }}" alt="{{ $prod->name }}"
                                                        class="img-thumbnail"
                                                        style="height: 70px; width: 80px; object-fit: cover;">
                                                @else
                                                    <span class="text-muted">No Image</span>
                                                @endif
                                            </td>
                                            <td class="text-center">
                                                <a href="{{ route('admin.products.edit', $prod->id) }}"
                                                    class="btn btn-warning btn-sm me-1">Edit</a>
                                                <form action="{{ route('admin.products.destroy', $prod->id) }}"
                                                    method="POST" class="d-inline">
                                                    @csrf @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"
                                                        onclick="return confirm('Are you sure?')">Delete</button>
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


    {{-- filtering script --}}
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

        filterCategory('all');
    </script>



    {{-- marking inserted product --}}
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const newProductId = "{{ session('newProductId') }}";
            if (newProductId) {
                const row = document.getElementById("product-" + newProductId);
                if (row) {
                    row.scrollIntoView({
                        behavior: "smooth",
                        block: "center"
                    });

                    // Flash effect
                    row.classList.add("table-success");
                    setTimeout(() => row.classList.remove("table-success"), 2000);
                }
            }
        });
    </script>





@endsection

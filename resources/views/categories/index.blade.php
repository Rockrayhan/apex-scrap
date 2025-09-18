@extends('layouts.app')

@section('title', 'All Category')

@section('content')

    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2>Categories</h2>
            {{-- <a href="{{ route('admin.categories.create') }}" class="btn btn-success">Add Category</a> --}}
        </div>


        {{-- show message --}}
        <div class="position-fixed top-0 p-3" style="z-index: 2000">
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


        <table class="table table-bordered table-hover">
            <thead class="table-light">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    {{-- <th>Slug</th> --}}
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $cat)
                    <tr id="category-{{ $cat->id }}">
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $cat->name }}</td>
                        {{-- <td>{{ $cat->slug }}</td> --}}

                        <td>
                            <a href="{{ route('admin.categories.edit', $cat->id) }}" class="btn btn-warning btn-sm">
                                Edit
                            </a>

                            {{-- <form action="{{ route('admin.categories.destroy', $cat->id) }}" method="POST"
                                style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Are you sure?')">
                                    Delete
                                </button>
                            </form> --}}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>




    {{-- marking inserted product --}}
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const newCategoryId = "{{ session('newCategoryId') }}";
            if (newCategoryId) {
                const row = document.getElementById("category-" + newCategoryId);
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

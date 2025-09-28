@extends('layouts.app')

@section('content')
    <div class="container pb-5 mb-5">

        {{-- Toast Messages --}}
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

        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2>All Blogs</h2>

            <form action="{{ route('blogs.index') }}" method="GET" class="flex gap-2">
                <input type="text" name="search"
                    placeholder="Search by Title"
                    value="{{ request('search') }}"
                    class="border border-success rounded p-2" />
                <button type="submit" class="btn btn-success">Search</button>
            </form>

            <a href="/admin/blogs/create" class="btn btn-success mb-3">Add New Blog</a>
        </div>


        <table class="table table-bordered table-striped align-middle">
            <thead class="table-light">
                <tr>
                    <th>#</th>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Category</th>
                    <th>Featured</th>
                    <th width="180">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($blogs as $key => $blog)
                    <tr id="blog-{{ $blog->id }}"
                        class="{{ session('newItemId') == $blog->id ? 'table-success' : '' }}">
                        <td>{{ $loop->iteration }}</td>
                        <td>
                            @if ($blog->image)
                                <img src="{{ asset($blog->image) }}" width="60" class="rounded">
                            @endif
                        </td>
                        <td>{{ $blog->title_en }}</td>
                        <td>{{ $blog->author }}</td>
                        <td>{{ $blog->category }}</td>
                        <td>
                            <span class="badge {{ $blog->featured_in_home ? 'bg-success' : 'bg-secondary' }}">
                                {{ $blog->featured_in_home ? 'Yes' : 'No' }}
                            </span>
                        </td>
                        <td>
                            <a href="{{ route('blogs.edit', $blog->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <a href="{{ route('blogs.delete', $blog->id) }}"
                                onclick="return confirm('Are you sure to delete?')" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Pagination Links -->
        <div class="d-flex justify-content-center">
            {!! $blogs->withQueryString()->links('pagination::bootstrap-4') !!}
        </div>
    </div>





    {{-- marking inserted product --}}
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const newItemId = "{{ session('newItemId') }}";
            if (newItemId) {
                const row = document.getElementById("blog-" + newItemId);
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

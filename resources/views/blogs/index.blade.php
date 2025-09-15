@extends('layouts.app')

@section('content')
    <div class="container pb-5 mb-5">

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
                <div class="toast align-items-center bg-light text-danger font-weight-bold border-0 show py-2"
                    role="alert" aria-live="assertive" aria-atomic="true">
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
                <div class="toast align-items-center bg-light text-danger font-weight-bold border-0 show py-2"
                    role="alert" aria-live="assertive" aria-atomic="true">
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


        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2>All Blogs</h2>
            <a href="/admin/blogs/create" class="btn btn-success mb-3"> Add New Blog</a>
        </div>

        @foreach ($blogs as $blog)
            <div class="card mb-2">
                <div class="card-body">
                    <h4>{{ $blog->title }}</h4>
                    <p>Author: {{ $blog->author }} | Category: {{ $blog->category }}</p>
                    @if ($blog->image)
                        <img src="{{ asset($blog->image) }}" width="150">
                    @endif
                    <p>{!! Str::limit(strip_tags($blog->description), 100) !!}</p>
                    <small>Featured: {{ $blog->featured_in_home ? 'Yes' : 'No' }}</small>
                    <br>

                    <!-- Action buttons -->
                    <a href="{{ route('blogs.edit', $blog->id) }}" class="btn btn-warning btn-sm mt-2">Edit</a>
                    <a href="{{ route('blogs.delete', $blog->id) }}" class="btn btn-danger btn-sm mt-2"
                        onclick="return confirm('Are you sure to delete?')">Delete</a>
                </div>
            </div>
        @endforeach

        {{ $blogs->links() }}
    </div>
@endsection

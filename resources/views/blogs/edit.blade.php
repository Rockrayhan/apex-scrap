@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Edit Blog</h2>


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

        <form action="{{ route('blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data"
            onsubmit="syncTinyMCEContent()" novalidate>
            @csrf

            <input type="text" name="author" placeholder="Author" class="form-control mb-2" value="{{ $blog->author }}"
                required>
            <input type="text" name="title_en" placeholder="Title" class="form-control mb-2"
                value="{{ $blog->title_en }}" required>
            <input type="text" name="category" placeholder="Category" class="form-control mb-2"
                value="{{ $blog->category }}" required>

            <label>Current Image:</label><br>
            @if ($blog->image)
                <img src="{{ asset($blog->image) }}" width="150" class="mb-2">
            @else
                <p class="text-muted">No image uploaded</p>
            @endif

            <input type="file" name="image" accept="image/*" class="form-control mb-2">

            <textarea name="description_en" placeholder="Description" class="form-control mb-2 getTinyMce" required>
            {{ $blog->description_en }}
            </textarea>

            <label>Featured in Home:</label>
            <select name="featured_in_home" class="form-control mb-2">
                <option value="1" {{ $blog->featured_in_home ? 'selected' : '' }}>Yes</option>
                <option value="0" {{ !$blog->featured_in_home ? 'selected' : '' }}>No</option>
            </select>

            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('blogs.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
@endsection

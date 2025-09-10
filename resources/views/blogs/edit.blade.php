@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Blog</h2>
    <form action="{{ route('blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data" onsubmit="syncTinyMCEContent()" novalidate>
        @csrf

        <input type="text" name="author" placeholder="Author" class="form-control mb-2" value="{{ $blog->author }}" required>
        <input type="text" name="title" placeholder="Title" class="form-control mb-2" value="{{ $blog->title }}" required>
        <input type="text" name="category" placeholder="Category" class="form-control mb-2" value="{{ $blog->category }}" required>

        <label>Current Image:</label><br>
        @if($blog->image)
            <img src="{{ asset($blog->image) }}" width="150" class="mb-2">
        @else
            <p class="text-muted">No image uploaded</p>
        @endif

        <input type="file" name="image" class="form-control mb-2">

        <textarea name="description" id="description" placeholder="Description" class="form-control mb-2" required>{{ $blog->description }}</textarea>

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

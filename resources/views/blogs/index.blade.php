@extends('layouts.app')

@section('content')
<div class="container pb-5 mb-5">
            <div class="d-flex justify-content-end my-3">
            <a href="{{ route('lang.switch', 'en') }}">English</a> |
            <a href="{{ route('lang.switch', 'zh') }}">中文</a>
        </div>
    <h2>All Blogs</h2>
    <a href="{{ route('blogs.create') }}" class="btn btn-primary mb-3">+ Add New Blog</a>

    @foreach($blogs as $blog)
    <div class="card mb-2">
        <div class="card-body">
            <h4>{{ $blog->title }}</h4>
            <p>Author: {{ $blog->author }} | Category: {{ $blog->category }}</p>
            @if($blog->image)
                <img src="{{ asset($blog->image) }}" width="150">
            @endif
            <p>{!! Str::limit(strip_tags($blog->description), 100) !!}</p>
            <small>Featured: {{ $blog->featured_in_home ? 'Yes' : 'No' }}</small>
            <br>
    
            <!-- Action buttons -->
            <a href="{{ route('blogs.edit', $blog->id) }}" class="btn btn-warning btn-sm mt-2">Edit</a>
            <a href="{{ route('blogs.delete', $blog->id) }}" class="btn btn-danger btn-sm mt-2" onclick="return confirm('Are you sure to delete?')">Delete</a>
        </div>
    </div>
    
    @endforeach

    {{ $blogs->links() }}
</div>
@endsection

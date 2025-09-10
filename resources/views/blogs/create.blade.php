@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Add Blog</h2>
        <form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data" onsubmit="syncTinyMCEContent()"
            novalidate>
            @csrf

            <input type="text" name="author" placeholder="Author" class="form-control mb-2" required>
            <input type="text" name="title_en" placeholder="English Title" class="form-control mb-2" required>
            {{-- <input type="text" name="title_zh" placeholder="Chinese Title" class="form-control mb-2" required> --}}
            <input type="text" name="category" placeholder="Category" class="form-control mb-2" required>
            <input type="file" name="image" class="form-control mb-2">

            <textarea name="description_en" id="description" placeholder="Description" class="form-control mb-2" required></textarea>

            {{-- <label for=""> Cinese Description </label>
            <textarea name="description_zh" id="description" placeholder="Description" class="form-control mb-2" required></textarea> --}}


            <label>Featured in Home:</label>
            <select name="featured_in_home" class="form-control mb-2">
                <option value="1">Yes</option>
                <option value="0">No</option>
            </select>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection

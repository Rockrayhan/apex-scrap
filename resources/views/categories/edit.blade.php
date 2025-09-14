@extends('layouts.app')

@section('title', 'Edit Category')

@section('content')
    <div class="container mt-4">
        <div class="card shadow-sm">
            <div class="card-header">
                <h4>Edit Category</h4>
            </div>

            {{-- show message --}}
            <div>
                @if (session('success'))
                    <div class="bg-green-100 text-green-800 px-4 py-3 rounded mb-4">
                        {{ session('success') }}
                    </div>
                @endif

                @if (session('error'))
                    <div class="bg-red-100 text-red-800 px-4 py-3 rounded mb-4">
                        {{ session('error') }}
                    </div>
                @endif

                @if ($errors->any())
                    <div class="bg-red-100 text-red-800 px-4 py-3 rounded mb-4">
                        <ul class="list-disc pl-5">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>

            <div class="card-body">
                <form action="{{ route('admin.categories.update', $category->id) }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Category Name (English)</label>
                        <input type="text" name="name_en" value="{{ old('name', $category->name) }}" class="form-control"
                            required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Category Name (Chinese)</label>
                        <input type="text" name="name_zh" value="{{ old('name_zh', $category->name_zh) }}" class="form-control"
                            required>
                    </div>
                    <button type="submit" class="btn btn-success">Update Category</button>
                    <a href="{{ route('admin.categories.index') }}" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>
@endsection

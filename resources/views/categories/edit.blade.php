@extends('layouts.app')

@section('title', 'Edit Category')

@section('content')
    <div class="container mt-4">
        <div class="card shadow-sm">
            <div class="card-header">
                <h4>Edit Category</h4>
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

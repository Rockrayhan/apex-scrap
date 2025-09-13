@extends('layouts.app')

@section('title', 'Create Categories')

@section('content')

<div class="container mt-4">
    <div class="card shadow-sm">
        <div class="card-header">
            <h4>Add Category</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.categories.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Category Name</label>
                    <input type="text" name="name_en" class="form-control" placeholder="Enter category name in English" required>
                </div>
                <button type="submit" class="btn btn-success">Save Category</button>
            </form>
        </div>
    </div>
</div>


@endsection


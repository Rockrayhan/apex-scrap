@extends('layouts.app')

@section('title', 'Create Categories')

@section('content')

    <div class="container mt-4">
        <div class="card shadow-sm">
            <div class="card-header">
                <h4>Add Category</h4>
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
                <form action="{{ route('admin.categories.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Category Name(English) </label>
                        <input type="text" name="name_en" class="form-control"
                            placeholder="Enter category name in English" required>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Category Name(Chinese) </label>
                        <input type="text" name="name_zh" class="form-control"
                            placeholder="Enter category name in Chinese" required>
                    </div>
                    <button type="submit" class="btn btn-success">Save Category</button>
                </form>
            </div>
        </div>
    </div>


@endsection

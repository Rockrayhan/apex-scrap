@extends('layouts.app')

@section('title', 'All Category')

@section('content')

    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2>Categories</h2>
            {{-- <a href="{{ route('admin.categories.create') }}" class="btn btn-success">Add Category</a> --}}
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


        <table class="table table-bordered table-hover">
            <thead class="table-light">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    {{-- <th>Slug</th> --}}
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $cat)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $cat->name }}</td>
                        {{-- <td>{{ $cat->slug }}</td> --}}

                        <td>
                            <a href="{{ route('admin.categories.edit', $cat->id) }}" class="btn btn-warning btn-sm">
                                Edit
                            </a>

                            {{-- <form action="{{ route('admin.categories.destroy', $cat->id) }}" method="POST"
                                style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Are you sure?')">
                                    Delete
                                </button>
                            </form> --}}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection

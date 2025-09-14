@extends('layouts.app')

@section('title', 'Apex scrap Dashboard')

@section('content')

    <div>


        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif




        <div class="container-fluid pt-4 px-4">
            <div class="row g-4">
                {{-- categories card --}}
                <div class="col-sm-6 col-xl-3">
                    <a href="{{ route('admin.categories.index') }}">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="bi bi-kanban fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2"> Categories </p>
                                <h6 class="mb-0"> {{ $categories->count() }} </h6>
                            </div>
                        </div>
                    </a>
                </div>
                {{-- products card --}}
                <div class="col-sm-6 col-xl-3">
                    <a href="{{ route('admin.products.index') }}">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="bi bi-kanban fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2"> Products </p>
                                <h6 class="mb-0"> {{ $products->count() }} </h6>
                            </div>
                        </div>
                    </a>
                </div>
                {{-- blogs card --}}
                <div class="col-sm-6 col-xl-3">
                    <a href="{{ route('blogs.index') }}">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="bi bi-kanban fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2"> Blogs </p>
                                <h6 class="mb-0"> {{ $blogs->count() }} </h6>
                            </div>
                        </div>
                    </a>
                </div>


            </div>
        </div>




    </div>

@endsection

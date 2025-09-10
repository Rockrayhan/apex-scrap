@extends('layouts.app')

@section('content')
<div class="container">

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

    <h3>Change Password</h3>
    <form method="POST" action="{{ route('admin.change.password') }}">
        @csrf
        <input type="password" name="current_password" placeholder="Current Password" class="form-control mb-2" required>
        <input type="password" name="new_password" placeholder="New Password" class="form-control mb-2" required>
        <input type="password" name="new_password_confirmation" placeholder="Confirm New Password" class="form-control mb-2" required>
        <button type="submit" class="btn btn-primary">Change Password</button>
    </form>
</div>


@endsection

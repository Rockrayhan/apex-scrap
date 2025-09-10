@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Available API Endpoints</h2>
    <ul class="list-group">

        <li class="list-group-item">
            <strong>GET /api/blogs</strong>
            <p>Fetch all blog posts.</p>
            <a href="{{ url('/api/blogs') }}" target="_blank">Get Blogs API</a>
        </li>

        <li class="list-group-item">
            <strong>GET /api/case-studies</strong>
            <p>Fetch all case studies.</p>
            <a href="{{ url('/api/case-studies') }}" target="_blank">Get Case-studies API</a>
        </li>

    </ul>
</div>
@endsection

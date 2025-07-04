@extends('layouts.app')

@section('title', $tank->name . ' - Tanklopedia')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-8">
            <h1 class="display-4">{{ $tank->name }}</h1>
            <p class="lead">{{ $tank->description }}</p>

            @if($tank->image_url)
                <img src="{{ $tank->image_url }}" class="img-fluid rounded mb-4" alt="{{ $tank->name }}">
            @endif

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Tank Details</h5>
                    <p><strong>Category:</strong> {{ ucfirst(str_replace('-', ' ', $tank->category)) }}</p>
                    <p><strong>Featured:</strong> {{ $tank->is_featured ? 'Yes' : 'No' }}</p>
                    <p><strong>Added:</strong> {{ $tank->created_at->format('M d, Y') }}</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Quick Actions</h5>
                    <a href="{{ route('home') }}" class="btn btn-secondary mb-2 w-100">← Back to Home</a>
                    <a href="{{ route('categories.show', $tank->category) }}" class="btn btn-outline-secondary w-100">View Similar Tanks</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

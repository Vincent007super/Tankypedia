@extends('layouts.app')

@section('title', $category . ' - Tanklopedia')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <h1 class="display-4 mb-4">{{ $category }}</h1>

            @if($tanks->isEmpty())
                <div class="alert alert-info">
                    <h4>No tanks found in this category yet!</h4>
                    <p>The armory is still being stocked. Check back soon for more steel beasts!</p>
                </div>
            @else
                <div class="row g-4">
                    @foreach($tanks as $tank)
                        <div class="col-md-4">
                            <div class="card h-100">
                                @if($tank->image_url)
                                    <img src="{{ $tank->image_url }}" class="card-img-top" alt="{{ $tank->name }}" style="height: 200px; object-fit: cover;">
                                @endif
                                <div class="card-body">
                                    <h5 class="card-title">{{ $tank->name }}</h5>
                                    <p class="card-text">{{ Str::limit($tank->description, 100) }}</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <a href="{{ route('tanks.show', $tank) }}" class="btn btn-outline-light">View Details</a>
                                        @if($tank->is_featured)
                                            <span class="badge bg-warning text-dark">Featured</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
</div>
@endsection

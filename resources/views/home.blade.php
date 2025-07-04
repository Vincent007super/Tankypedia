@extends('layouts.app')

@section('title', 'Tanklopedia – The Armored Encyclopedia')

@section('content')
<!-- Hero Section -->
<section class="hero text-center text-light">
    <div class="container">
        <h1 class="display-3 fw-bold">Tanklopedia</h1>
        <p class="lead">Your one-stop knowledge depot for every tracked steel beast known to man.</p>
        <a href="#featured" class="btn btn-outline-light btn-lg mt-4">Browse Tanks</a>
    </div>
</section>

<!-- Featured Tanks -->
<section id="featured" class="py-5">
    <div class="container">
        <h2 class="text-center mb-4">Featured Tanks</h2>
        <div class="row g-4">
            @foreach ($featuredTanks as $tank)
                <div class="col-md-4">
                    <div class="card h-100 text-center">
                        <img src="{{ $tank->image_url }}" class="card-img-top" alt="{{ $tank->name }}" style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $tank->name }}</h5>
                            <p class="card-text">{{ Str::limit($tank->description, 100) }}</p>
                            <a href="{{ route('tanks.show', $tank) }}" class="btn btn-sm btn-outline-light">View Details</a>
                        </div>
                    </div>
                </div>
            @endforeach
            @if ($featuredTanks->isEmpty())
                <div class="text-center">No featured tanks locked and loaded yet. Check your ammo depot.</div>
            @endif
        </div>
    </div>
</section>

<!-- Categories -->
<section class="py-5 bg-dark">
    <div class="container">
        <h2 class="text-center mb-4">Explore by Category</h2>
        <div class="row text-center">
            <div class="col-md-3 mb-3">
                <a href="{{ route('categories.show', 'light-tank') }}" class="btn btn-outline-secondary w-100">Light Tanks</a>
            </div>
            <div class="col-md-3 mb-3">
                <a href="{{ route('categories.show', 'medium-tank') }}" class="btn btn-outline-secondary w-100">Medium Tanks</a>
            </div>
            <div class="col-md-3 mb-3">
                <a href="{{ route('categories.show', 'heavy-tank') }}" class="btn btn-outline-secondary w-100">Heavy Tanks</a>
            </div>
            <div class="col-md-3 mb-3">
                <a href="{{ route('categories.show', 'tank-destroyer') }}" class="btn btn-outline-secondary w-100">Tank Destroyers</a>
            </div>
        </div>
    </div>
</section>

<!-- Latest Entries -->
<section class="py-5">
    <div class="container">
        <h2 class="text-center mb-4">Latest Additions</h2>
        <div class="list-group">
            @foreach ($latestTanks as $tank)
                <a href="{{ route('tanks.show', $tank) }}" class="list-group-item list-group-item-action bg-secondary text-light">
                    <strong>{{ $tank->name }}</strong> – {{ Str::limit($tank->description, 80) }}
                </a>
            @endforeach
            @if ($latestTanks->isEmpty())
                <div class="text-center text-muted">Still fueling up the database... stay tuned.</div>
            @endif
        </div>
    </div>
</section>
@endsection

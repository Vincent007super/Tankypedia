<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Tanklopedia – The Armored Encyclopedia')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #212529;
            color: white;
        }
        
        .navbar {
            background-color: #343a40 !important;
        }
        
        .navbar-brand {
            font-weight: bold;
            color: #fff !important;
        }
        
        .navbar-nav .nav-link {
            color: #fff !important;
        }
        
        .navbar-nav .nav-link:hover {
            color: #ffc107 !important;
        }
        
        .card {
            background-color: #343a40;
            border: none;
        }
        
        .card-body {
            color: white;
        }
        
        .list-group-item {
            background-color: #495057 !important;
            border-color: #6c757d !important;
        }
        
        .btn-outline-light:hover {
            background-color: #ffc107;
            border-color: #ffc107;
            color: #212529;
        }
        
        .hero {
            background: linear-gradient(135deg, #2c3e50, #34495e);
            padding: 100px 0;
            min-height: 60vh;
            display: flex;
            align-items: center;
        }
        
        footer {
            background-color: #000 !important;
        }
        
        @yield('additional-styles')
    </style>
    @yield('head')
</head>
<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">🚗 Tanklopedia</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
                        Categories
                    </a>
                    <ul class="dropdown-menu bg-dark">
                        <li><a class="dropdown-item text-light" href="{{ route('categories.show', 'light-tanks') }}">Light Tanks</a></li>
                        <li><a class="dropdown-item text-light" href="{{ route('categories.show', 'medium-tanks') }}">Medium Tanks</a></li>
                        <li><a class="dropdown-item text-light" href="{{ route('categories.show', 'heavy-tanks') }}">Heavy Tanks</a></li>
                        <li><a class="dropdown-item text-light" href="{{ route('categories.show', 'tank-destroyers') }}">Tank Destroyers</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Main Content -->
<main>
    @yield('content')
</main>

<!-- Footer -->
<footer class="py-4 bg-black text-center text-light mt-5">
    <div class="container">
        <p class="mb-0">© {{ date('Y') }} Tanklopedia. Built with firepower and PHP. All rights tracked.</p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
@yield('scripts')
</body>
</html>

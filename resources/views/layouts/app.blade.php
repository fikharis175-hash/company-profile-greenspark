<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'GreenSpark')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .nav-link-custom {
            color: #ffffff;
            text-decoration: none;
            font-weight: 500;
            padding-bottom: 4px;
            border-bottom: 2px solid transparent;
            transition: all 0.3s ease;
        }
        .nav-link-custom:hover, 
        .nav-link-custom.active {
            color: #198754 !important;
            border-bottom-color: #198754;
        }
    </style>
    @stack('styles')
</head>
<body class="bg-dark">

    <header class="bg-dark p-4">
        <nav class="container-fluid px-4">
            <div class="d-flex flex-row justify-content-between align-items-center">
                <a href="{{ route('home') }}" class="text-decoration-none text-success fw-bold fs-4 d-flex align-items-center gap-2"><img src="{{ asset('images/GreenSpark-logo.png') }}" alt="Logo" style="height: 30px;">GreenSpark</a>
                <div class="d-flex flex-row gap-4">
                    <a href="{{ route('home') }}" class="nav-link-custom {{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
                    <a href="{{ route('about') }}" class="nav-link-custom {{ request()->routeIs('about') ? 'active' : '' }}">About</a>
                    <a href="{{ route('services') }}" class="nav-link-custom {{ request()->routeIs('services') ? 'active' : '' }}">Services</a>
                    <a href="{{ route('contact') }}" class="nav-link-custom {{ request()->routeIs('contact') ? 'active' : '' }}">Contact us</a>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <section class="hero-banner d-flex align-items-center text-white position-relative">
            <div class="hero-overlay"></div>
        </section>
        @yield('content')
    </main>

    <footer class="bg-dark text-white-50 py-4 text-center border-top border-secondary">
        <div class="container">
            <p class="mb-0">&copy; {{ date('Y') }} GreenSpark. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/bootstrap.bundle.min.js"></script>
    @stack('scripts')
</body>
</html>
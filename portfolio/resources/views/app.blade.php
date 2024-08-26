<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'My Portfolio')</title>

    <!-- Bootstrap or Custom CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    @stack('styles') <!-- Allows for additional styles in child views -->
</head>
<body>
    <header class="bg-light py-3 mb-4">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="/">Portfolio</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('portfolio.index') }}">Projects</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('portfolio.create') }}">Add New Project</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <div class="container">
        @yield('content')
    </div>

    <footer class="bg-light py-3 mt-4">
        <div class="container text-center">
            <p>&copy; {{ date('Y') }} My Portfolio</p>
        </div>
    </footer>

    <!-- Bootstrap JS and Custom JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    @stack('scripts') <!-- Allows for additional scripts in child views -->
</body>
</html>

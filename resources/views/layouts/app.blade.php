<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'DUBASS - Groupe Scolaire')</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        :root {
            --dubass-blue: #2B3D88;
            --dubass-orange: #C25C26;
            --dubass-red: #dc2626;
            --dubass-light-blue: #4f6bdb;
        }

        body {
            font-family: 'Inter', sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
        }

        .btn-connexion {
            background-color: var(--dubass-blue);
            border-color: var(--dubass-blue);
            color: white;
            border-radius: 8px;
        }

        .btn-connexion:hover {
            background-color: #1e2a5f;
            border-color: #1e2a5f;
            color: white;
        }

        .triangle {
            width: 0;
            height: 0;
            border-top: 25px solid transparent;
            border-bottom: 25px solid transparent;
            border-right: 43px solid;
            display: inline-block;
        }

        .triangle-blue {
            border-right-color: var(--dubass-blue);
        }

        .triangle-orange {
            border-right-color: var(--dubass-orange);
        }

        .triangle-red {
            border-right-color: var(--dubass-red);
        }

        .triangles-container {
            display: flex;
            align-items: center;
            gap: 0;
        }

        .navbar-nav .nav-link {
            color: #6c757d !important;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .navbar-nav .nav-link:hover {
            color: var(--dubass-blue) !important;
        }

        .navbar-toggler {
            border: none;
            padding: 0.5rem;
            font-size: 1.25rem;
            background-color: var(--dubass-orange);
            border-radius: 8px;
        }

        .navbar-toggler:focus {
            box-shadow: none;
        }

        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='white' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
        }

        /* Menu Desktop */
        .desktop-navigation {
            display: block;
        }

        /* Menu Mobile */
        .mobile-navigation {
            display: none;
        }

        @media (max-width: 768px) {
            .desktop-navigation {
                display: none !important;
            }

            .mobile-navigation {
                display: none !important;
            }

            .mobile-nav-layout {
                display: flex;
                justify-content: space-between;
                align-items: center;
                width: 100%;
                padding: 0 1rem;
            }

            .mobile-navbar-collapse {
                margin-top: 1rem;
            }

            .mobile-navbar-nav {
                text-align: center;
                padding: 1rem 0;
                flex-direction: column;
            }
        }

        @stack('styles')
    </style>
</head>

<body>
<!-- Navigation Desktop -->
<nav class="navbar navbar-light bg-white desktop-navigation">
    <div class="container-fluid">
        <!-- Première ligne : Menu de navigation -->
        <div class="w-100 px-5">
            <ul class="navbar-nav d-flex flex-row justify-content-between w-100 px-0">
                <li class="nav-item">
                    <a class="nav-link" href="#">À propos de nous</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Nos programmes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Inscription</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Nos services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Emploi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contactez nous</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Espace parents</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Espace enseignants</a>
                </li>
            </ul>
        </div>

        <!-- Deuxième ligne : Logo + triangles + connexion -->
        <div class="d-flex justify-content-between align-items-center w-100 px-0 mx-n3">
            <!-- Logo -->
            <div class="d-flex align-items-center">
                <img src="{{ asset('front/logo.png') }}" alt="DUBASS" height="100">
            </div>

            <!-- Triangles au centre -->
            <div class="triangles-container">
                <div class="triangle triangle-blue"></div>
                <div class="triangle triangle-orange"></div>
                <div class="triangle triangle-red"></div>
            </div>

            <!-- Bouton connexion -->
            <button class="btn btn-connexion">
                <i class="fas fa-user"></i>
                Connexion
            </button>
        </div>
    </div>
</nav>

<!-- Navigation Mobile -->
<nav class="navbar navbar-expand-lg navbar-light bg-white mobile-navigation">
    <div class="container-fluid">
        <!-- Logo + hamburger + connexion -->
        <div class="mobile-nav-layout">
            <!-- Logo -->
            <div class="d-flex align-items-center">
                <img src="{{ asset('front/logo.png') }}" alt="DUBASS" height="120">
            </div>

            <!-- Menu hamburger -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mobileNavbarNav" aria-controls="mobileNavbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Bouton connexion -->
            <button class="btn btn-connexion">
                <i class="fas fa-user"></i>
                Connexion
            </button>
        </div>

        <!-- Menu mobile collapse -->
        <div class="collapse navbar-collapse mobile-navbar-collapse" id="mobileNavbarNav">
            <ul class="navbar-nav mobile-navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">À propos de nous</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Nos programmes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Inscription</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Nos services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Emploi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contactez nous</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Espace parents</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Espace enseignants</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Contenu principal -->
<main>
    @yield('content')
</main>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
@stack('scripts')
</body>
</html>

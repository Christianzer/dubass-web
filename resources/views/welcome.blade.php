@extends('layouts.app')

@section('title', 'DUBASS - Groupe Scolaire')

@push('styles')
    <style>
        .btn-dubass-primary {
            background-color: var(--dubass-orange);
            border-color: var(--dubass-orange);
            color: white;
            font-weight: 600;
            padding: 12px 30px;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .btn-dubass-primary:hover {
            background-color: #a04a20;
            border-color: #a04a20;
            color: white;
            transform: translateY(-2px);
        }

        .btn-dubass-secondary {
            background-color: white;
            color: var(--dubass-blue);
            border-color: var(--dubass-blue);
            font-weight: 600;
            padding: 12px 30px;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .btn-dubass-secondary:hover {
            background-color: var(--dubass-blue);
            border-color: var(--dubass-blue);
            color: white;
            transform: translateY(-2px);
        }

        .btn-dubass-inscription {
            background-color: var(--dubass-orange);
            border-color: var(--dubass-orange);
            color: white;
            font-weight: 600;
            padding: 12px 30px;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .btn-dubass-inscription:hover {
            background-color: var(--dubass-orange);
            border-color: var(--dubass-orange);
            color: white;
            transform: translateY(-2px);
        }

        .hero-section {
            min-height: 35vh;
            display: flex;
            align-items: center;
            margin-top: -3rem;
            flex-shrink: 0;
        }

        .hero-title {
            font-size: 2.5rem;
            font-weight: 700;
            line-height: 1.2;
            color: var(--dubass-blue);
        }

        .hero-subtitle {
            font-size: 2rem;
            font-weight: 700;
            line-height: 1.2;
        }

        .text-orange {
            color: var(--dubass-orange);
        }

        .text-red {
            color: var(--dubass-red);
        }

        .hero-image-container {
            padding: 2rem;
            position: relative;
            overflow: hidden;
        }

        .banner-section {
            background-color: transparent;
            padding: 0;
            flex: 1;
            display: flex;
            align-items: stretch;
        }

        /* Masquer le menu mobile sur desktop */
        .mobile-dropdown-menu {
            display: none;
        }

        .banner-container {
            display: flex;
            height: 100%;
            min-height: 200px;
            max-height: 250px;
            border-radius: 0;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            width: 100%;
        }

        .banner-block {
            flex: 1;
            padding: 1.5rem;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: white;
            position: relative;
        }

        .banner-block-1 {
            background-color: var(--dubass-blue);
        }

        .banner-block-2 {
            background-color: var(--dubass-orange);
        }

        .banner-block-3 {
            background-color: var(--dubass-blue);
        }

        .banner-title {
            font-family: 'Inter', sans-serif;
            font-size: 0.9rem;
            font-weight: 700;
            text-transform: uppercase;
            margin-bottom: 1rem;
            line-height: 1.2;
            text-align: center;
            width: 100%;
        }

        .banner-content {
            display: flex;
            align-items: center;
            gap: 1rem;
            width: 100%;
        }

        .banner-icon {
            font-size: 3rem;
            color: white;
            flex-shrink: 0;
        }

        .banner-text {
            font-family: 'Inter', sans-serif;
            font-size: 0.9rem;
            line-height: 1.3;
            margin: 0;
            flex: 1;
        }

        .banner-list {
            font-family: 'Inter', sans-serif;
            font-size: 0.8rem;
            line-height: 1.4;
            margin: 0;
            padding: 0;
            list-style: none;
            flex: 1;
        }

        .banner-list li {
            margin-bottom: 0.3rem;
        }

        @media (max-width: 768px) {
            .hero-section {
                display: none;
            }

            .mobile-hero-section-1 {
                background-color: var(--dubass-blue);
                padding: 1rem 0;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 55vh;
                height: 55dvh;
            }

            .mobile-hero-section-1 img {
                max-width: 95%;
                max-height: 90%;
                object-fit: contain;
            }

            .mobile-hero-section-2 {
                background-color: white;
                padding: 1rem;
                height: 35vh;
                height: 35dvh;
                display: flex;
                flex-direction: column;
                justify-content: center;
            }

            .mobile-sections-container {
                position: fixed;
                top: 0;
                left: 0;
                width: 100vw;
                height: 100vh;
                height: 100dvh;
                display: flex;
                flex-direction: column;
                z-index: 1000;
            }

            .mobile-hero-section-2 .hero-title {
                font-size: 1.1rem;
                font-weight: 700;
                line-height: 1.2;
                color: var(--dubass-blue);
                text-align: left;
                margin-bottom: 1rem;
            }

            .mobile-hero-section-2 .hero-subtitle {
                font-size: 1rem;
                font-weight: 700;
                line-height: 1.2;
                color: #333;
                text-align: left;
                margin-bottom: 2rem;
            }

            .mobile-hero-section-2 .buttons-container {
                display: flex;
                flex-direction: row;
                gap: 0.8rem;
                justify-content: center;
                align-items: center;
            }

            .mobile-hero-section-2 .btn {
                font-size: 0.8rem;
                padding: 8px 16px;
            }

            .mobile-hero-section-3 {
                padding: 0;
                height: 10vh;
                height: 10dvh;
                display: flex;
                flex-direction: column;
            }

            .mobile-banners {
                display: flex;
                flex-direction: row;
                gap: 0;
                height: 100%;
                flex: 1;
            }

            .mobile-banner {
                padding: 1rem;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                color: white;
                font-weight: 700;
                font-size: 0.8rem;
                text-transform: uppercase;
                flex: 1;
                gap: 0.3rem;
                text-align: center;
            }

            .mobile-banner-icon {
                font-size: 1.5rem;
                margin-bottom: 0.3rem;
            }

            html, body {
                margin: 0;
                padding: 0;
                height: 100%;
                width: 100%;
                overflow: hidden;
            }

            body {
                display: flex;
                flex-direction: column;
                height: 100dvh;
                height: 100vh;
            }

            main {
                flex: 1;
                display: flex;
                flex-direction: column;
                margin: 0;
                padding: 0;
                height: 100%;
            }

            .mobile-banner-menu {
                background-color: var(--dubass-orange);
            }

            .mobile-banner-portail {
                background-color: var(--dubass-blue);
            }

            .mobile-banner-contact {
                background-color: var(--dubass-orange);
            }

            .banner-section {
                display: none;
            }

            /* Menu déroulant mobile - seulement sur mobile */
            .mobile-dropdown-menu {
                position: fixed;
                top: 0;
                left: 0;
                width: 100vw;
                height: 100vh;
                background-color: rgba(0, 0, 0, 0.8);
                z-index: 2000;
                display: none;
                opacity: 0;
                transition: opacity 0.3s ease;
            }

            .mobile-dropdown-menu.show {
                display: flex !important;
                opacity: 1;
            }

            .mobile-menu-content {
                width: 80%;
                max-width: 300px;
                background-color: white;
                height: 100vh;
                padding: 2rem 0;
                transform: translateX(-100%);
                transition: transform 0.3s ease;
            }

            .mobile-dropdown-menu.show .mobile-menu-content {
                transform: translateX(0);
            }

            .mobile-menu-header {
                padding: 0 1.5rem 2rem;
                border-bottom: 2px solid var(--dubass-blue);
                margin-bottom: 2rem;
            }

            .mobile-menu-title {
                color: var(--dubass-blue);
                font-size: 1.2rem;
                font-weight: 700;
                margin: 0;
            }

            .mobile-menu-close {
                position: absolute;
                top: 1rem;
                right: 1rem;
                background: none;
                border: none;
                font-size: 1.5rem;
                color: var(--dubass-blue);
                cursor: pointer;
            }

            .mobile-menu-item {
                display: block;
                padding: 1rem 1.5rem;
                color: #333;
                text-decoration: none;
                border-bottom: 1px solid #eee;
                transition: background-color 0.2s ease;
            }

            .mobile-menu-item:hover {
                background-color: #f8f9fa;
                color: var(--dubass-blue);
            }

            .mobile-menu-item i {
                margin-right: 0.75rem;
                width: 20px;
                color: var(--dubass-orange);
            }
        }
    </style>
@endpush

@section('content')

    <!-- Hero Section Desktop -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <!-- Contenu gauche -->
                <div class="col-lg-6">
                    <div class="pe-lg-4">
                        <h1 class="hero-title mb-3">
                            Nous procurons à vos enfants
                        </h1>
                        <h2 class="hero-subtitle mb-4">
                            La <span class="text-orange">meilleure</span> éducation au <span class="text-red">meilleur</span> prix
                        </h2>

                        <!-- Boutons d'action -->
                        <div class="d-flex flex-column flex-sm-row gap-3 mt-5">
                            <a href="{{ route('inscription') }}"  class="btn btn-dubass-inscription btn-lg">
                                <i class="fas fa-edit me-2"></i>
                                Inscription
                            </a>
                            <a href="{{ route('about') }}"  class="btn btn-dubass-secondary btn-lg">
                                En savoir plus
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Image hero -->
                <div class="col-lg-6 mt-5 mt-lg-0">
                    <div class="hero-image-container position-relative">
                        <img src="{{ asset('front/herosection.png') }}" alt="Hero Section" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mobile Hero Sections -->
    <div class="mobile-sections-container d-block d-md-none">
        <section class="mobile-hero-section-1 position-relative">
            <div class="text-center">
                <img src="{{ asset('front/herosection.png') }}" alt="Hero Section" class="img-fluid" style="max-width: 100%; max-height: 85%;">
            </div>
            <div class="position-absolute start-0 bottom-0 mb-3 ms-3">
                <a href="#" class="text-white text-decoration-none fw-bold fs-3" style="font-family: 'Poppins', sans-serif;">À propos de nous</a>
            </div>
        </section>

        <section class="mobile-hero-section-2" style="font-family: 'Roboto', sans-serif;">
            <h1 class="hero-title fs-1">
                Nous procurons à vos enfants
            </h1>
            <h2 class="hero-subtitle fs-2">
                La <span class="text-orange">meilleure</span> éducation au <span class="text-red">meilleur</span> prix
            </h2>

            <div class="buttons-container">
                <a href="{{ route('inscription') }}"  class="btn btn-dubass-inscription fs-5">
                    <i class="fas fa-edit me-2"></i>
                    Inscription
                </a>
                <a href="{{ route('about') }}"  class="btn btn-dubass-secondary fs-5">
                    En savoir plus
                </a>
            </div>
        </section>

        <section class="mobile-hero-section-3">
            <div class="mobile-banners">
                <div class="mobile-banner mobile-banner-menu" id="mobileMenuBtn">
                    <i class="fas fa-bars mobile-banner-icon"></i>
                    <span>Menu</span>
                </div>
                <a href="{{ route('about') }}" class="mobile-banner mobile-banner-portail" style="text-decoration: none;">
                    <i class="fas fa-unlock mobile-banner-icon"></i>
                    <span>Portail</span>
                </a>
                <a href="{{ route('contact') }}" class="mobile-banner mobile-banner-contact">
                    <i class="fas fa-envelope mobile-banner-icon"></i>
                    <span>Contact</span>
                </a>
            </div>
        </section>
    </div>

    <!-- Menu déroulant mobile -->
    <div class="mobile-dropdown-menu" id="mobileDropdownMenu">
        <div class="mobile-menu-content">
            <div class="mobile-menu-header">
                <h3 class="mobile-menu-title">Navigation</h3>
                <button class="mobile-menu-close" id="mobileMenuClose">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="mobile-menu-items">
                <a href="{{ route('about') }}" class="mobile-menu-item">
                    <i class="fas fa-info-circle"></i>
                    À propos
                </a>
                <a href="{{ route('founder') }}" class="mobile-menu-item">
                    <i class="fas fa-user"></i>
                    Mot du fondateur
                </a>
                <a href="{{ route('programs') }}" class="mobile-menu-item">
                    <i class="fas fa-book"></i>
                    Programmes
                </a>
                <a href="{{ route('team') }}" class="mobile-menu-item">
                    <i class="fas fa-users"></i>
                    Équipe dirigeante
                </a>
                <a href="{{ route('parents') }}" class="mobile-menu-item">
                    <i class="fas fa-home"></i>
                    Espace parents
                </a>
                <a href="{{ route('teachers') }}" class="mobile-menu-item">
                    <i class="fas fa-chalkboard-teacher"></i>
                    Espace enseignants
                </a>
                <a href="{{ route('inscription') }}" class="mobile-menu-item">
                    <i class="fas fa-edit"></i>
                    Inscription
                </a>
                <a href="{{ route('contact') }}" class="mobile-menu-item">
                    <i class="fas fa-envelope"></i>
                    Contact
                </a>
            </div>
        </div>
    </div>

    <!-- Section des valeurs -->
    <section class="banner-section">
        <div class="container">
            <div class="banner-container">
                <!-- Bloc 1 : Enseignement de Qualité -->
                <div class="banner-block banner-block-1">
                    <h3 class="banner-title">UN ENSEIGNEMENT DE QUALITÉ</h3>
                    <div class="banner-content">
                        <div class="banner-icon">
                            <i class="fas fa-user-tie"></i>
                        </div>
                        <p class="banner-text">Nous dispensons un enseignement de qualité basé sur des méthodes pédagogiques modernes et personnalisées.</p>
                    </div>
                </div>

                <!-- Bloc 2 : Encadrement Optimal -->
                <div class="banner-block banner-block-2">
                    <h3 class="banner-title">UN ENCADREMENT OPTIMAL</h3>
                    <div class="banner-content">
                        <div class="banner-icon">
                            <i class="fas fa-copy"></i>
                        </div>
                        <p class="banner-text">Nous limitons l'effectif de nos classes pour permettre une approche pédagogique individualisée et favoriser un cadre agréable et bienveillant.</p>
                    </div>
                </div>

                <!-- Bloc 3 : Atmosphère Familiale -->
                <div class="banner-block banner-block-3">
                    <h3 class="banner-title">ATMOSPHÈRE FAMILIALE</h3>
                    <div class="banner-content">
                        <div class="banner-icon">
                            <i class="fas fa-globe"></i>
                        </div>
                        <ul class="banner-list">
                            <li>Classes spacieuses thématiques</li>
                            <li>Cantine aérée</li>
                            <li>Clubs</li>
                            <li>Activités extra-scolaires</li>
                            <li>Suivi personnalisé</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const mobileMenuBtn = document.getElementById('mobileMenuBtn');
    const mobileDropdownMenu = document.getElementById('mobileDropdownMenu');
    const mobileMenuClose = document.getElementById('mobileMenuClose');

    // Ouvrir le menu
    mobileMenuBtn.addEventListener('click', function() {
        mobileDropdownMenu.classList.add('show');
        document.body.style.overflow = 'hidden'; // Empêcher le scroll
    });

    // Fermer le menu avec le bouton X
    mobileMenuClose.addEventListener('click', function() {
        mobileDropdownMenu.classList.remove('show');
        document.body.style.overflow = 'auto'; // Réactiver le scroll
    });

    // Fermer le menu en cliquant sur l'overlay
    mobileDropdownMenu.addEventListener('click', function(e) {
        if (e.target === mobileDropdownMenu) {
            mobileDropdownMenu.classList.remove('show');
            document.body.style.overflow = 'auto';
        }
    });

    // Fermer le menu avec la touche Escape
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && mobileDropdownMenu.classList.contains('show')) {
            mobileDropdownMenu.classList.remove('show');
            document.body.style.overflow = 'auto';
        }
    });
});
</script>
@endpush

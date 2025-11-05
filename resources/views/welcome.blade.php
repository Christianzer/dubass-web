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
            .hero-title, .hero-subtitle {
                font-size: 1.8rem;
            }

            .hero-section .row {
                flex-direction: column-reverse;
            }

            .hero-section .col-lg-6:first-child {
                text-align: center;
                margin-top: 1rem;
            }

            .hero-image-container {
                padding: 1rem;
            }

            .hero-section {
                margin-bottom: 2rem;
            }

            .banner-container {
                flex-direction: column;
                min-height: auto;
                max-height: none;
                height: auto;
            }

            .banner-block {
                padding: 1rem 0.5rem;
                min-height: 140px;
                display: flex;
                flex-direction: column;
                justify-content: center;
            }

            .banner-content {
                flex-direction: column;
                text-align: center;
                gap: 0.5rem;
            }

            .banner-icon {
                font-size: 2rem;
                margin-bottom: 0.3rem;
            }

            .banner-title {
                font-size: 0.8rem;
                margin-bottom: 0.5rem;
            }

            .banner-text {
                font-size: 0.8rem;
                text-align: center;
            }

            .banner-list {
                font-size: 0.75rem;
                text-align: center;
            }
        }
    </style>
@endpush

@section('content')

    <!-- Hero Section -->
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
                            <button class="btn btn-dubass-inscription btn-lg">
                                <i class="fas fa-edit me-2"></i>
                                Inscription
                            </button>
                            <button class="btn btn-dubass-secondary btn-lg">
                                En savoir plus
                            </button>
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

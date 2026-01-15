@extends('layouts.app')

@section('title', 'À propos de nous - DUBASS - Groupe Scolaire')

@push('styles')
    <style>
        :root {
            --dubass-blue: #2B3D88;
            --dubass-orange: #C25C26;
            --dubass-red: #dc2626;
            --dubass-light-blue: #4f6bdb;
        }

        .about-section {
            padding: 1rem 0 0;
            background: white;
            height: auto;
            display: flex;
            flex-direction: column;
            overflow: hidden;
            margin: 0;
        }

        .section-header {
            text-align: left;
            margin-bottom: 1.5rem;
        }

        .section-subtitle {
            font-size: 1.1rem;
            font-weight: 600;
            letter-spacing: 3px;
            text-transform: uppercase;
            color: var(--dubass-blue);
            margin-bottom: 1rem;
            position: relative;
            padding-left: 2rem;
        }

        .section-subtitle::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            width: 4px;
            height: 100%;
            background-color: var(--dubass-blue);
            border-radius: 2px;
        }

        .main-title {
            font-size: 2.8rem;
            font-weight: 700;
            line-height: 1.1;
            margin-bottom: 2rem;
            position: relative;
        }

        .title-blue {
            color: var(--dubass-blue);
        }

        .title-orange {
            color: var(--dubass-orange);
        }

        .decorative-element {
            position: absolute;
            top: -20px;
            right: -80px;
            width: 80px;
            height: 80px;
        }

        .quarter-circle {
            width: 60px;
            height: 60px;
            background: var(--dubass-red);
            border-radius: 0 0 0 100%;
            position: relative;
        }

        .decorative-dots {
            position: absolute;
            top: 20px;
            left: 20px;
        }

        .dot {
            width: 4px;
            height: 4px;
            background: var(--dubass-blue);
            border-radius: 50%;
            display: inline-block;
            margin: 2px;
        }


        .description-text {
            font-size: 1.05rem;
            line-height: 1.7;
            color: #333;
            text-align: justify;
            margin-bottom: 1rem;
        }

        .description-text p {
            margin-bottom: 1.2rem;
        }

        .students-image {
            width: 130%;
            height: 80%;
            object-fit: cover;
            margin-left: -10%;
        }

        .colored-band {
            display: flex;
            margin-top: 1rem;
            width: 100%;
            left: 0;
            margin-left: 0;
        }

        .band-section {
            flex: 1;
            padding: 1.5rem 1rem;
            text-align: center;
            color: white;
            font-weight: 600;
            font-size: 1.1rem;
            text-decoration: none;
            display: block;
            transition: all 0.3s ease;
        }

        .band-section:hover {
            color: white;
            transform: translateY(-2px);
            text-decoration: none;
            filter: brightness(1.1);
        }

        .band-blue {
            background-color: var(--dubass-blue);
        }

        .band-orange {
            background-color: var(--dubass-orange);
        }

        .band-red {
            background-color: var(--dubass-red);
        }

        .section-title {
            color: var(--dubass-blue);
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 3rem;
            text-align: center;
            position: relative;
        }

        .section-title::after {
            content: '';
            display: block;
            width: 80px;
            height: 4px;
            background: var(--dubass-orange);
            margin: 1rem auto;
            border-radius: 2px;
        }

        .mission-card {
            background: white;
            border-radius: 15px;
            padding: 3rem;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            border: 2px solid transparent;
            transition: all 0.3s ease;
            height: 100%;
        }

        .mission-card:hover {
            transform: translateY(-5px);
            border-color: var(--dubass-orange);
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }

        .mission-icon {
            background: linear-gradient(135deg, var(--dubass-blue), var(--dubass-orange));
            color: white;
            width: 80px;
            height: 80px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            margin: 0 auto 2rem;
        }

        .mission-card h3 {
            color: var(--dubass-blue);
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 1.5rem;
            text-align: center;
        }

        .mission-card p {
            color: #666;
            line-height: 1.8;
            text-align: center;
        }

        .values-section {
            background: linear-gradient(45deg, #f8f9fa 0%, #e9ecef 100%);
            padding: 6rem 0;
        }

        .value-item {
            text-align: center;
            padding: 2rem 1rem;
        }

        .value-number {
            background: var(--dubass-orange);
            color: white;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            font-weight: 700;
            margin: 0 auto 1.5rem;
        }

        .value-item h4 {
            color: var(--dubass-blue);
            font-size: 1.3rem;
            font-weight: 600;
            margin-bottom: 1rem;
        }

        .value-item p {
            color: #666;
            line-height: 1.6;
        }

        .team-section {
            padding: 6rem 0;
        }

        .team-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
        }

        .team-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 50px rgba(0,0,0,0.2);
        }

        .team-card img {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }

        .team-card-body {
            padding: 2rem;
            text-align: center;
        }

        .team-card h5 {
            color: var(--dubass-blue);
            font-size: 1.3rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        .team-card .position {
            color: var(--dubass-orange);
            font-weight: 500;
            margin-bottom: 1rem;
        }

        .team-card p {
            color: #666;
            line-height: 1.6;
            font-size: 0.95rem;
        }

        .stats-section {
            background: var(--dubass-blue);
            color: white;
            padding: 4rem 0;
        }

        .stat-item {
            text-align: center;
            padding: 1rem;
        }

        .stat-number {
            font-size: 3rem;
            font-weight: 700;
            color: var(--dubass-orange);
            display: block;
            line-height: 1;
        }

        .stat-label {
            font-size: 1.1rem;
            font-weight: 500;
            margin-top: 0.5rem;
            opacity: 0.9;
        }

        @media (max-width: 768px) {
            .desktop-navigation {
                display: none !important;
            }

            .mobile-navigation {
                display: block !important;
            }

            .about-hero h1 {
                font-size: 2rem;
            }

            .section-title {
                font-size: 2rem;
            }

            .mission-card {
                padding: 2rem;
                margin-bottom: 2rem;
            }

            .stat-number {
                font-size: 2rem;
            }

            .main-title {
                font-size: 2rem;
                margin-bottom: 1.5rem;
            }

            .section-subtitle {
                font-size: 1rem;
                letter-spacing: 2px;
            }

            .students-image {
                width: 100%;
                height: auto;
                margin-left: 0;
                margin-top: 2rem;
            }

            .row {
                height: auto !important;
            }

            .col-lg-6 {
                margin-bottom: 2rem;
            }

            .description-text {
                font-size: 1rem;
            }

            .colored-band {
                display: flex;
                flex-direction: row;
                margin-top: 2rem;
                width: 100%;
            }

            .band-section {
                padding: 1rem;
                font-size: 1rem;
                text-align: center;
            }
        }
    </style>

    @include('partials.navbar-styles')
    @include('partials.navbar-mobile-styles')
    @include('partials.colored-band-styles')
@endpush

@section('content')
    <!-- Section principale À propos de nous -->
    <section class="about-section">
        <div class="container h-100 d-flex flex-column">

            <!-- Contenu principal -->
            <div class="row" style="height: 500px;">
                <!-- Texte descriptif (côté gauche) -->
                <div class="col-lg-6">
                    <div class="section-header">
                        <div class="section-subtitle">À PROPOS DE NOUS</div>
                        <h1 class="main-title">
                            <span class="title-blue">Nous sommes une école</span><br>
                            <span class="title-orange">d'excellence et d'innovation</span>
                        </h1>
                    </div>
                    <div class="description-text">
                        <p>Le groupe scolaire Dubass a été créé en octobre 2014 à l'initiative de Mme Safoura FADIKA (Première Femme Ingénieur Informaticienne, et Ingénieur Statisticien-Économiste en Côte d'Ivoire), et du Professeur Kanvaly FADIGA (Professeur Titulaire en Sciences de l'Éducation), son époux, personnalités qui ont apporté une contribution significative à la formation de la jeunesse en Côte d'Ivoire et en Afrique sub-saharienne.</p>

                        <p>Notre école est fondée sur des valeurs solides et une conviction profonde envers le pouvoir de l'éducation pour façonner l'avenir de nos élèves.</p>

                        <p>À Dubass, nous croyons en l'épanouissement de chaque enfant dans un environnement d'apprentissage inclusif et stimulant.</p>
                    </div>
                </div>

                <!-- Image des élèves (côté droit) -->
                <div class="col-lg-6">
                    <div class="text-center">
                        <img src="{{ asset('front/multi.png') }}" alt="Élèves en uniforme DUBASS" class="students-image">
                    </div>
                </div>
            </div>

        </div>

        @include('partials.colored-band')
    </section>


@endsection

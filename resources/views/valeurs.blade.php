@extends('layouts.internal')

@section('title', 'Nos Valeurs - DUBASS - Groupe Scolaire')
@section('page-subtitle', 'NOS VALEURS')

@push('styles')
    <style>
        .valeurs-section {
            height: 510px;
            display: flex;
            flex-direction: column;
            background: #FFFFFF;
        }

        .content-container {
            display: flex;
            height: 100%;
            flex: 1;
            padding: 0;
        }

        /* Section Gauche */
        .left-section {
            flex: 0.8;
            background: #FFFFFF;
            padding: 30px 25px;
            display: flex;
            flex-direction: column;
        }

        .main-title {
            font-size: 42px;
            font-weight: 700;
            line-height: 1.2;
            margin-bottom: 20px;
            padding-left: 25px;
        }

        .title-blue {
            color: #1E4B8C;
        }

        .title-orange {
            color: #FF8C42;
        }

        .divider-line {
            width: 65%;
            height: 2px;
            background: #D0D0D0;
            margin: 15px 0 20px 25px;
        }

        .description-text {
            color: #1A1A1A;
            font-size: 24px;
            line-height: 1.6;
            padding: 0 25px;
            text-align: left;
        }

        /* Section Centrale */
        .center-section {
            flex: 0.8;
            background: #0F3D7A;
            position: relative;
            padding: 25px 20px;
            display: flex;
            flex-direction: column;
        }

        .nav-dots {
            position: absolute;
            top: 20px;
            right: 20px;
            display: flex;
            gap: 8px;
        }

        .dot {
            width: 5px;
            height: 5px;
            border-radius: 50%;
            background: rgba(255,255,255,0.5);
        }

        .values-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .value-item {
            display: flex;
            align-items: center;
            margin-bottom: 28px;
            position: relative;
        }

        .value-icon {
            width: 42px;
            height: 42px;
            border-radius: 50%;
            background: #FF8C42;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 20px;
            margin-right: 15px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.15);
            position: absolute;
            left: -35px;
            z-index: 2;
        }

        .value-text {
            color: white;
            font-size: 28px;
            font-weight: 600;
            margin-left: 10px;
        }

        /* Section Droite */
        .right-section {
            flex: 1;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .student-photo {
            width: 68%;
            height: 100%;
            object-fit: cover;
            border-radius: 5px;
        }

        @media (max-width: 992px) {
            .content-container {
                flex-direction: column;
                height: auto;
                flex-wrap: wrap;
                gap: 15px;
                padding: 0.5rem;
            }

            .left-section,
            .center-section,
            .right-section {
                flex: none;
                min-height: 200px;
            }

            .band-section {
                padding: 1.5rem 1rem;
                font-size: 1.1rem;
            }
        }

        @media (max-width: 768px) {
            .main-title {
                font-size: 32px;
            }

            .description-text {
                font-size: 20px;
            }

            .value-text {
                font-size: 22px;
            }

            .content-container {
                height: auto;
                flex-direction: column;
                gap: 20px;
                padding: 0.5rem;
            }

            .band-section {
                padding: 1rem;
                font-size: 1rem;
            }
        }
    </style>
@endpush

@section('content')
    <!-- Section principale Valeurs -->
    <section class="valeurs-section">
        <!-- Container du contenu -->
        <div class="content-container">
            <!-- Section Gauche -->
            <div class="left-section">
                <h1 class="main-title">
                    <span class="title-blue">Nous construisons</span><br>
                    <span class="title-orange">un avenir brillant</span><br>
                    <span class="title-blue">pour vos enfants</span>
                </h1>
                <div class="divider-line"></div>
                <p class="description-text">
                    Nous construisons ensemble un avenir brillant pour vos enfants et en cela pour la Côte d'Ivoire avec notre école d'excellence
                </p>
            </div>

            <!-- Section Centrale -->
            <div class="center-section">
                <div class="nav-dots">
                    <div class="dot"></div>
                    <div class="dot"></div>
                    <div class="dot"></div>
                </div>
                <ul class="values-list">
                    <li class="value-item">
                        <div class="value-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <span class="value-text">Le respect</span>
                    </li>
                    <li class="value-item">
                        <div class="value-icon">
                            <i class="fas fa-user-friends"></i>
                        </div>
                        <span class="value-text">L'humilité</span>
                    </li>
                    <li class="value-item">
                        <div class="value-icon">
                            <i class="fas fa-heart"></i>
                        </div>
                        <span class="value-text">La rigueur</span>
                    </li>
                    <li class="value-item">
                        <div class="value-icon">
                            <i class="fas fa-lightbulb"></i>
                        </div>
                        <span class="value-text">La créativité</span>
                    </li>
                    <li class="value-item">
                        <div class="value-icon">
                            <i class="fas fa-eye"></i>
                        </div>
                        <span class="value-text">La transparence</span>
                    </li>
                    <li class="value-item">
                        <div class="value-icon">
                            <i class="fas fa-handshake"></i>
                        </div>
                        <span class="value-text">Le partage</span>
                    </li>
                    <li class="value-item">
                        <div class="value-icon">
                            <i class="fas fa-globe"></i>
                        </div>
                        <span class="value-text">La diversité</span>
                    </li>
                </ul>
            </div>

            <!-- Section Droite -->
            <div class="right-section">
                <img src="{{ asset('images/student6.png') }}" alt="Élève DUBASS" class="student-photo">
            </div>
        </div>

        @include('partials.colored-band')
    </section>
@endsection

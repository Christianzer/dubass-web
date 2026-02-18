@extends('layouts.internal')

@section('title', 'Notre Mission - DUBASS - Groupe Scolaire')
@section('page-subtitle', 'NOTRE MISSION')

@push('styles')
    <style>
        .mission-section {
            height: 450px;
            background: linear-gradient(45deg, #4f6bdb 0%, #A8B5C8 100%);
            display: flex;
            position: relative;
            overflow: hidden;
        }

        .mission-container {
            width: 100%;
            max-width: 1400px;
            margin: 0 auto;
            display: flex;
            height: 100%;
        }

        /* Section Gauche - 60% */
        .left-section {
            width: 50%;
            display: flex;
            flex-direction: column;
            position: relative;
            z-index: 2;
        }

        /* En-tête NOTRE MISSION */
        .mission-header {
            position: relative;
            padding-top: 30px;
            padding-left: 35px;
        }

        .mission-header::before {
            content: '';
            position: absolute;
            left: 23px;
            top: 30px;
            width: 4px;
            height: 15px;
            background: var(--dubass-blue);
            border-radius: 2px;
        }

        .mission-label {
            font-size: 12px;
            font-weight: 300;
            color: var(--dubass-blue);
            text-transform: uppercase;
            letter-spacing: 3px;
            margin-left: 12px;
        }

        /* Titre Principal */
        .mission-titles {
            padding: 20px 35px 0 35px;
        }

        .main-title-line1 {
            font-size: 48px;
            font-weight: 700;
            color: var(--dubass-blue);
            line-height: 1.1;
            margin: 0;
        }

        .main-title-line2 {
            font-size: 48px;
            font-weight: 700;
            color: var(--dubass-orange);
            line-height: 1.1;
            margin: 5px 0 0 0;
        }

        /* Texte Descriptif */
        .mission-description {
            padding: 30px 0px;
            text-align: center;
            max-width: 500px;
        }

        .mission-description p {
            font-size: 20px;
            font-weight: 400;
            color: #1A1A1A;
            line-height: 1.7;
            margin: 0;
            text-align: justify;
        }

        /* Élément Graphique Décoratif */
        .decorative-arc {
            position: absolute;
            right: 100px;
            top: 280px;
            width: 140px;
            height: 140px;
            border: 10px solid var(--dubass-orange);
            border-radius: 50%;
            border-top: 10px solid transparent;
            border-right: 10px solid transparent;
            transform: rotate(45deg);
        }

        .decorative-dots {
            position: absolute;
            right: 50px;
            top: 200px;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 10px;
        }

        .dot {
            width: 6px;
            height: 6px;
            background: white;
            border-radius: 50%;
            opacity: 0.75;
        }

        /* Bouton Réservation */
        .reservation-btn {
            position: absolute;
            bottom: 40px;
            left: 35px;
            background: var(--dubass-blue);
            color: white;
            border: none;
            width: 300px;
            height: 48px;
            display: flex;
            align-items: center;
            padding-left: 25px;
            font-size: 15px;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s ease;
            border-radius: 2px;
        }

        .reservation-btn::before {
            content: '';
            width: 28px;
            height: 3px;
            background: white;
            margin-right: 15px;
        }

        .reservation-btn:hover {
            background: #1e2a5f;
        }

        /* Section Droite - 40% */
        .right-section {
            width: 50%;
            height: 100%;
            position: relative;
            overflow: hidden;
        }

        .professional-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
        }

        /* Responsive Design */
        @media (max-width: 992px) {
            .mission-section {
                height: auto;
                flex-direction: column;
            }

            .mission-container {
                flex-direction: column;
            }

            .left-section,
            .right-section {
                width: 100%;
            }

            .left-section {
                min-height: 500px;
                padding-bottom: 2rem;
            }

            .right-section {
                height: 400px;
            }

            .decorative-arc {
                right: 50px;
                top: 300px;
            }

            .decorative-dots {
                right: 20px;
                top: 220px;
            }

            .reservation-btn {
                position: relative;
                bottom: auto;
                left: auto;
                margin: 2rem 35px;
            }
        }

        @media (max-width: 768px) {
            .main-title-line1,
            .main-title-line2 {
                font-size: 36px;
            }

            .mission-description {
                padding: 20px 25px;
            }

            .mission-description p {
                font-size: 15px;
            }

            .decorative-arc {
                width: 120px;
                height: 120px;
                right: 30px;
                top: 320px;
            }

            .reservation-btn {
                width: calc(100% - 50px);
                margin: 2rem 25px;
            }

            .right-section {
                height: 300px;
            }
        }
    </style>
@endpush

@section('content')
    <section class="mission-section">
        <div class="mission-container">
            <!-- Section Gauche - Texte -->
            <div class="left-section">
                <!-- Titre Principal -->
                <div class="mission-titles">
                    <h1 class="main-title-line1">Éduquer, inspirer et créer</h1>
                    <h2 class="main-title-line2">des LEADERS</h2>
                </div>

                <!-- Texte Descriptif -->
                <div class="mission-description">
                    <p>Notre mission est d'éduquer, d'inspirer et de créer des leaders responsables, compétents et épanouis qui auront un impact positif sur la société en fournissant une éducation de qualité, inclusive et holistique à tous nos élèves.</p>
                </div>

                <!-- Bouton Réservation -->
                <button class="reservation-btn">Réservation</button>
            </div>

            <!-- Section Droite - Photo -->
            <div class="right-section">
                <img src="{{ asset('images/student4.png') }}" alt="Professionnelle DUBASS" class="professional-image">
            </div>
        </div>
    </section>
    @include('partials.colored-band')
@endsection

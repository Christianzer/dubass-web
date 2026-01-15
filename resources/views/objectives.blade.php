@extends('layouts.internal')

@section('title', 'Nos Objectifs - DUBASS - Groupe Scolaire')
@section('page-subtitle', 'NOS OBJECTIFS')

@push('styles')
    <style>
        .objectives-section {
            background: linear-gradient(to bottom, #A8B5C8 66.67%, white 66.67%);
            min-height: calc(100vh - 240px);
            display: flex;
            flex-direction: column;
        }

        .cards-container {
            display: flex;
            justify-content: center;
            align-items: stretch;
            gap: 12px;
            padding: 1rem 1rem 0 1rem;
            flex: 1;
        }

        .objective-card {
            background-color: #FF5E5A;
            border: 3px solid #8B9BB5;
            border-radius: 8px;
            box-shadow: 0 8px 15px rgba(74, 90, 106, 0.2);
            padding: 25px 18px;
            flex: 1;
            display: flex;
            flex-direction: column;
            font-family: 'Segoe UI', Arial, sans-serif;
        }

        .objective-card.card-1 {
            background-color: #FF5E5A;
        }

        .objective-card.card-2 {
            background-color: #FF8C42;
        }

        .objective-card.card-3 {
            background-color: #003D7A;
        }

        .objective-card.card-4 {
            background-color: #FF5E5A;
        }

        .objective-card.card-5 {
            background-color: #FF8C42;
        }

        .card-number {
            color: white;
            font-size: 70px;
            font-weight: 700;
            text-align: center;
            margin-bottom: 15px;
            line-height: 1;
        }

        .card-title {
            background-color: rgba(255, 255, 255, 0.3);
            border-radius: 25px;
            padding: 8px 12px;
            text-align: center;
            margin-bottom: 15px;
            font-size: 18px;
            font-weight: 600;
            color: black;
            letter-spacing: -0.3px;
        }

        .card-3 .card-title {
            background-color: #D1DCE8;
        }

        .card-text {
            color: white;
            font-size: 20px;
            line-height: 1.2;
            text-align: justify;
            flex-grow: 1;
            font-weight: 400;
        }

        @media (max-width: 992px) {
            .cards-container {
                flex-wrap: wrap;
                gap: 15px;
                padding: 0.5rem;
            }

            .objective-card {
                min-width: 280px;
                flex: 1 1 45%;
            }

            .band-section {
                padding: 1.5rem 1rem;
                font-size: 1.1rem;
            }
        }

        @media (max-width: 768px) {
            .cards-container {
                flex-direction: column;
                gap: 20px;
                padding: 0.5rem;
            }

            .objective-card {
                min-height: 250px;
            }

            .band-section {
                padding: 1rem;
                font-size: 1rem;
            }
        }
    </style>
@endpush

@section('content')
    <!-- Section principale Objectifs -->
    <section class="objectives-section">
        <!-- Container des cartes d'objectifs -->
        <div class="cards-container">
            <!-- Carte 1 -->
            <div class="objective-card card-1">
                <div class="card-number">1</div>
                <div class="card-title">Éducation de qualité</div>
                <div class="card-text">
                    Offrir une éducation de haute qualité qui répond aux normes internationales et prépare nos élèves à exceller dans un monde en constante évolution. Nous nous engageons à fournir un environnement d'apprentissage stimulant et inclusif.
                </div>
            </div>

            <!-- Carte 2 -->
            <div class="objective-card card-2">
                <div class="card-number">2</div>
                <div class="card-title">Promouvoir l'excellence académique</div>
                <div class="card-text">
                    Développer l'excellence académique chez nos élèves en cultivant leur curiosité intellectuelle et en leur fournissant les outils nécessaires pour atteindre leur plein potentiel dans toutes les disciplines.
                </div>
            </div>

            <!-- Carte 3 -->
            <div class="objective-card card-3">
                <div class="card-number">3</div>
                <div class="card-title">Promouvoir l'apprentissage holistique</div>
                <div class="card-text">
                    Adopter une approche holistique de l'éducation qui prend en compte le développement intellectuel, émotionnel, social et physique de chaque élève pour former des citoyens équilibrés et responsables.
                </div>
            </div>

            <!-- Carte 4 -->
            <div class="objective-card card-4">
                <div class="card-number">4</div>
                <div class="card-title">Cultiver la curiosité et la créativité</div>
                <div class="card-text">
                    Encourager la curiosité naturelle et la créativité de nos élèves à travers des méthodes pédagogiques innovantes et des activités qui stimulent leur imagination et leur esprit critique.
                </div>
            </div>

            <!-- Carte 5 -->
            <div class="objective-card card-5">
                <div class="card-number">5</div>
                <div class="card-title">Favoriser la diversité et l'inclusion</div>
                <div class="card-text">
                    Créer un environnement inclusif qui célèbre la diversité et garantit que chaque élève, indépendamment de son origine, se sente valorisé et puisse contribuer pleinement à la communauté scolaire.
                </div>
            </div>
        </div>

        @include('partials.colored-band')
    </section>
@endsection
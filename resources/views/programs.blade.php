@extends('layouts.internal')

@section('title', 'Nos programmes - DUBASS - Groupe Scolaire')
@section('page-subtitle', 'NOS PROGRAMMES')

@push('styles')
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        .page-container {
            height: 80vh;
            overflow: hidden;
            display: flex;
            flex-direction: column;
        }

        .programs-header-section {
            padding: 0;
            background: white;
            height: 12vh;
            flex-shrink: 0;
            display: flex;
            align-items: center;
        }

        .programs-content-section {
            display: flex;
            width: 100vw;
            position: relative;
            left: 50%;
            margin-left: -50vw;
            height: 66vh;
            flex: 1;
        }

        .section-header {
            margin: 0;
            text-align: left;
            flex-shrink: 0;
        }

        .section-title-banner {
            font-family: 'Poppins', sans-serif;
            font-size: 1.1rem;
            font-weight: 600;
            letter-spacing: 3px;
            text-transform: uppercase;
            color: var(--dubass-blue);
            position: relative;
            padding-left: 2rem;
        }

        .section-title-banner::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            width: 4px;
            height: 100%;
            background-color: var(--dubass-blue);
            border-radius: 2px;
        }

        .programs-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            width: 100%;
        }


        .programs-grid {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            gap: 0;
            width: 100%;
            height: 100%;
        }

        .program-column {
            padding: 3rem 2rem;
            text-align: center;
            color: white;
            display: grid;
            grid-template-rows: auto auto 1fr;
            gap: 2rem;
            height: 100%;
            position: relative;
            align-items: start;
        }

        .program-column-left {
            background-color: var(--dubass-orange);
        }

        .program-column-center {
            background-color: var(--dubass-blue);
        }

        .program-column-right {
            background-color: var(--dubass-red);
        }

        .program-icon {
            font-size: 3rem;
            color: white;
            line-height: 1;
            margin: 0;
        }

        .program-title {
            font-family: 'Poppins', sans-serif;
            font-size: 1.5rem;
            font-weight: 600;
            color: white;
            line-height: 1.2;
            margin: 0;
        }

        .program-text {
            font-family: 'Inter', sans-serif;
            font-size: 1.1rem;
            font-weight: 400;
            line-height: 1.6;
            color: white;
            text-align: center;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Responsive Design */
        @media (max-width: 1023px) {
            .programs-header-section {
                height: 15vh;
            }

            .programs-content-section {
                height: 85vh;
                flex-direction: column;
                left: 0;
                margin-left: 0;
                width: 100%;
            }

            .programs-grid {
                grid-template-columns: 1fr 1fr;
                grid-template-rows: 1fr 1fr;
                width: 100%;
                height: 100%;
            }

            .program-column:nth-child(3) {
                grid-column: 1 / -1;
            }

            .program-column {
                padding: 2rem 1.5rem;
                gap: 1.5rem;
            }

            .program-icon {
                font-size: 2.5rem;
            }

            .program-title {
                font-size: 1.3rem;
            }

            .program-text {
                font-size: 1rem;
                line-height: 1.5;
            }

            .section-title-banner {
                font-size: 1rem;
                letter-spacing: 3px;
            }
        }

        @media (max-width: 767px) {
            .page-container {
                height: 100vh;
                height: 100dvh;
            }

            .programs-header-section {
                height: 12vh;
            }

            .programs-content-section {
                height: 88vh;
                flex-direction: column;
                left: 0;
                margin-left: 0;
                width: 100%;
            }

            .programs-grid {
                grid-template-columns: 1fr;
                grid-template-rows: 1fr 1fr 1fr;
                width: 100%;
                height: 100%;
                gap: 0;
            }

            .program-column {
                padding: 1.5rem 1rem;
                gap: 1rem;
                grid-template-rows: auto auto 1fr;
            }

            .program-column:nth-child(3) {
                grid-column: auto;
            }

            .program-icon {
                font-size: 2rem;
            }

            .program-title {
                font-size: 1.1rem;
                line-height: 1.2;
            }

            .program-text {
                font-size: 0.9rem;
                line-height: 1.4;
            }

            .section-title-banner {
                font-size: 0.9rem;
                letter-spacing: 2px;
            }

            .programs-container {
                padding: 0 16px;
            }
        }

        /* Amélioration du contraste et de la lisibilité */
        .program-column-left {
            background: linear-gradient(135deg, var(--dubass-orange) 0%, #a04a20 100%);
        }

        .program-column-center {
            background: linear-gradient(135deg, var(--dubass-blue) 0%, #1e2a5f 100%);
        }

        .program-column-right {
            background: linear-gradient(135deg, var(--dubass-red) 0%, #b91c1c 100%);
        }

        .program-text {
            font-weight: 300;
            text-shadow: 0 1px 2px rgba(0,0,0,0.1);
        }

        .program-title {
            text-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
    </style>

    @include('partials.navbar-mobile-styles')
@endpush

@section('content')
    @include('partials.navbar-mobile')
<div class="page-container">
    <!-- Section en-tête -->
    <!-- Section contenu pleine largeur -->
    <section class="programs-content-section">
        <div class="programs-grid">
                <!-- Colonne gauche - Trois cycles d'enseignement -->
                <div class="program-column program-column-left">
                    <div class="program-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h2 class="program-title">Trois cycles d'enseignement</h2>
                    <p class="program-text">
                        Le groupe scolaire Dubass est un établissement privé, laïc et mixte regroupant le préscolaire, le primaire et le secondaire, garantissant ainsi le suivi et l'accompagnement des élèves tout le long de leur cursus scolaire.
                        <br><br>
                        Nos programmes d'études sont basés sur ceux du ministère de l'éducation nationale de Côte d'Ivoire et renforcés de méthodologies innovantes dans un environnement d'apprentissage inclusif et stimulant.
                    </p>
                </div>

                <!-- Colonne centre - Pédagogie internationale -->
                <div class="program-column program-column-center">
                    <div class="program-icon">
                        <i class="fas fa-globe"></i>
                    </div>
                    <h2 class="program-title">Pédagogie internationale</h2>
                    <p class="program-text">
                        Nous avons conçu des programmes éducatifs innovants qui intègrent à la fois les meilleures pratiques pédagogiques locales et internationales axées sur l'apprentissage actif et basée sur des méthodes d'enseignement interactives, encourageant les élèves à devenir des apprenants autonomes et créatifs.
                    </p>
                </div>

                <!-- Colonne droite - Développement des compétences -->
                <div class="program-column program-column-right">
                    <div class="program-icon">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <h2 class="program-title">Développement des compétences</h2>
                    <p class="program-text">
                        Nous mettons également un fort accent sur le développement des compétences non-académiques. Nous croyons que chaque enfant a le potentiel de devenir un citoyen global engagé, empathique et responsable. C'est pourquoi nous proposons des programmes d'éducation sociale et émotionnelle, ainsi que des activités parascolaires gratuites telles que les clubs, la danse, le sport, etc.
                    </p>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

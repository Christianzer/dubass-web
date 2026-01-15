@extends('layouts.internal')

@section('title', 'Espace Parents - DUBASS - Groupe Scolaire')
@section('page-subtitle', 'ESPACE PARENTS')

@push('styles')
    <style>
        .parents-section {
            padding: 2rem 0 0;
            background: white;
            min-height: calc(100vh - 160px);
            display: flex;
            flex-direction: column;
            overflow: hidden;
            margin: 0;
        }

        .section-header {
            text-align: left;
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

        .parents-image {
            width: 100%;
            max-height: 300px;
            object-fit: cover;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
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

        .service-card {
            background: #f8f9fa;
            border-radius: 10px;
            padding: 1rem;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            border: 2px solid transparent;
            transition: all 0.3s ease;
            margin-bottom: 1rem;
            height: 100%;
            display: flex;
            align-items: center;
        }

        .service-card:hover {
            transform: translateX(5px);
            border-color: var(--dubass-orange);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .service-icon {
            background: linear-gradient(135deg, var(--dubass-blue), var(--dubass-orange));
            color: white;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1rem;
            margin-right: 1rem;
            flex-shrink: 0;
        }

        .service-content h4 {
            color: var(--dubass-blue);
            font-size: 0.9rem;
            font-weight: 600;
            margin-bottom: 0.25rem;
        }

        .service-content p {
            color: #666;
            line-height: 1.4;
            font-size: 0.8rem;
            margin-bottom: 0;
        }

        .login-form {
            background: white;
            border-radius: 15px;
            padding: 2.5rem;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            border: 2px solid var(--dubass-blue);
            margin-top: 2rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-control {
            border: 2px solid #e9ecef;
            border-radius: 8px;
            padding: 12px 15px;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            border-color: var(--dubass-blue);
            box-shadow: 0 0 0 0.2rem rgba(43, 61, 136, 0.25);
        }

        .btn-login {
            background-color: var(--dubass-blue);
            border-color: var(--dubass-blue);
            color: white;
            padding: 10px 25px;
            font-size: 1rem;
            font-weight: 600;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .btn-login:hover {
            background-color: #1e2a5f;
            border-color: #1e2a5f;
            color: white;
            transform: translateY(-2px);
        }

        .btn-secondary-outline {
            background-color: transparent;
            border: 2px solid var(--dubass-orange);
            color: var(--dubass-orange);
            padding: 10px 25px;
            font-size: 1rem;
            font-weight: 500;
            border-radius: 8px;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
            text-align: center;
        }

        .btn-secondary-outline:hover {
            background-color: var(--dubass-orange);
            color: white;
            text-decoration: none;
        }

        @media (max-width: 768px) {
            .parents-section h1 {
                font-size: 2rem;
            }

            .service-card, .login-form {
                padding: 2rem;
                margin-top: 1rem;
            }
        }
    </style>
@endpush

@section('content')
    <!-- Section principale Espace Parents -->
    <section class="parents-section">
        <div class="container h-100 d-flex flex-column">
            <div class="row">
                <div class="col-lg-7">
                    <!-- En-tête de section -->
                    <div class="">
                        <h1 class="main-title">
                            <span class="title-blue">Suivez la scolarité</span><br>
                            <span class="title-orange">de votre enfant</span>
                        </h1>
                    </div>
                    <div class="description-text">
                        <p>L'espace parents DUBASS vous permet de suivre en temps réel la progression scolaire de votre enfant et de rester en contact permanent avec l'équipe pédagogique.</p>

                        <p>Accédez facilement aux notes, bulletins, emplois du temps, et communiquez directement avec les enseignants depuis votre espace personnel sécurisé.</p>
                    </div>

                    <!-- Services disponibles -->
                    <div class="services-box">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="service-card">
                                    <div class="service-icon">
                                        <i class="fas fa-chart-line"></i>
                                    </div>
                                    <div class="service-content">
                                        <h4>Suivi des notes</h4>
                                        <p>Consultez les notes et évaluations en temps réel.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="service-card">
                                    <div class="service-icon">
                                        <i class="fas fa-file-alt"></i>
                                    </div>
                                    <div class="service-content">
                                        <h4>Bulletins scolaires</h4>
                                        <p>Téléchargez les bulletins et appréciations.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="service-card">
                                    <div class="service-icon">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <div class="service-content">
                                        <h4>Emploi du temps</h4>
                                        <p>Consultez l'emploi du temps et changements.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="service-card">
                                    <div class="service-icon">
                                        <i class="fas fa-comments"></i>
                                    </div>
                                    <div class="service-content">
                                        <h4>Communication</h4>
                                        <p>Échangez avec les enseignants directement.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="service-card">
                                    <div class="service-icon">
                                        <i class="fas fa-user-check"></i>
                                    </div>
                                    <div class="service-content">
                                        <h4>Présences</h4>
                                        <p>Suivez absences et retards avec justifications.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="service-card">
                                    <div class="service-icon">
                                        <i class="fas fa-bell"></i>
                                    </div>
                                    <div class="service-content">
                                        <h4>Notifications</h4>
                                        <p>Recevez les informations et rappels importants.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Connexion (côté droit) -->
                <div class="col-lg-5">
                    <!-- Formulaire de connexion -->
                    <div class="login-form">
                        <h3 class="mb-4" style="color: var(--dubass-blue);">Connexion à l'espace parents</h3>
                        <form>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="identifiant" class="form-label">Identifiant</label>
                                        <input type="text" class="form-control" id="identifiant" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="mot_de_passe" class="form-label">Mot de passe</label>
                                        <input type="password" class="form-control" id="mot_de_passe" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-end">
                                <div class="col-md-6">
                                    <a href="#" class="text-muted" style="font-size: 0.85rem;">Mot de passe oublié ?</a>
                                </div>
                                <div class="col-md-6 text-end">
                                    <button type="submit" class="btn btn-login">
                                        <i class="fas fa-sign-in-alt me-2"></i>
                                        Se connecter
                                    </button>
                                </div>
                            </div>
                        </form>

                        <hr class="my-4">

                        <div class="text-center">
                            <p class="mb-2" style="color: var(--dubass-blue); font-weight: 600;">Pas encore de compte ?</p>
                            <a href="{{ route('contact') }}" class="btn-secondary-outline">
                                <i class="fas fa-envelope me-2"></i>
                                Demander un accès
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

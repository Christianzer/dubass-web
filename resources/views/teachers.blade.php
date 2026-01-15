@extends('layouts.internal')

@section('title', 'Espace Enseignants - DUBASS - Groupe Scolaire')
@section('page-subtitle', 'ESPACE ENSEIGNANTS')

@push('styles')
    <style>
        .teachers-section {
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

        .teachers-image {
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

        .tool-card {
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

        .tool-card:hover {
            transform: translateX(5px);
            border-color: var(--dubass-orange);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .tool-icon {
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

        .tool-content h4 {
            color: var(--dubass-blue);
            font-size: 0.9rem;
            font-weight: 600;
            margin-bottom: 0.25rem;
        }

        .tool-content p {
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
            border: 2px solid var(--dubass-orange);
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
            background-color: var(--dubass-orange);
            border-color: var(--dubass-orange);
            color: white;
            padding: 10px 25px;
            font-size: 1rem;
            font-weight: 600;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .btn-login:hover {
            background-color: #a64a1f;
            border-color: #a64a1f;
            color: white;
            transform: translateY(-2px);
        }

        .btn-secondary-outline {
            background-color: transparent;
            border: 2px solid var(--dubass-blue);
            color: var(--dubass-blue);
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
            background-color: var(--dubass-blue);
            color: white;
            text-decoration: none;
        }

        .resources-section {
            background: white;
            border-radius: 15px;
            padding: 1.5rem;
            margin-top: 1rem;
            border: 2px solid var(--dubass-blue);
        }

        .resource-item {
            display: flex;
            align-items: center;
            padding: 0.7rem;
            background: #f8f9fa;
            border-radius: 10px;
            margin-bottom: 0.5rem;
            transition: all 0.3s ease;
        }

        .resource-item:last-child {
            margin-bottom: 0;
        }

        .resource-item:hover {
            transform: translateX(5px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .resource-icon {
            background: var(--dubass-blue);
            color: white;
            width: 35px;
            height: 35px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.9rem;
            margin-right: 0.8rem;
            flex-shrink: 0;
        }

        .resource-content h6 {
            color: var(--dubass-blue);
            font-weight: 600;
            margin-bottom: 0.1rem;
            font-size: 0.85rem;
        }

        .resource-content p {
            color: #666;
            margin: 0;
            font-size: 0.75rem;
        }

        @media (max-width: 768px) {
            .teachers-section h1 {
                font-size: 2rem;
            }

            .tool-card, .login-form {
                padding: 2rem;
                margin-top: 1rem;
            }

            .resource-item {
                flex-direction: column;
                text-align: center;
            }

            .resource-icon {
                margin-right: 0;
                margin-bottom: 1rem;
            }
        }
    </style>
@endpush

@section('content')
    <!-- Section principale Espace Enseignants -->
    <section class="teachers-section">
        <div class="container h-100 d-flex flex-column">
            <div class="row">
                <div class="col-lg-7">
                    <!-- En-tête de section -->
                    <div class="">
                        <h1 class="main-title">
                            <span class="title-blue">Outils pédagogiques</span><br>
                            <span class="title-orange">et ressources</span>
                        </h1>
                    </div>
                    <div class="description-text">
                        <p>L'espace enseignants DUBASS met à votre disposition tous les outils nécessaires pour optimiser votre enseignement et faciliter la gestion de vos classes.</p>

                        <p>Accédez à votre tableau de bord personnalisé, gérez les notes, communiquez avec les parents et partagez des ressources pédagogiques.</p>
                    </div>

                    <!-- Outils pédagogiques -->
                    <div class="tools-box">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="tool-card">
                                    <div class="tool-icon">
                                        <i class="fas fa-chalkboard-teacher"></i>
                                    </div>
                                    <div class="tool-content">
                                        <h4>Gestion des classes</h4>
                                        <p>Gérez vos classes et suivez la progression.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="tool-card">
                                    <div class="tool-icon">
                                        <i class="fas fa-clipboard-list"></i>
                                    </div>
                                    <div class="tool-content">
                                        <h4>Saisie des notes</h4>
                                        <p>Saisissez notes et appréciations des élèves.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="tool-card">
                                    <div class="tool-icon">
                                        <i class="fas fa-calendar-week"></i>
                                    </div>
                                    <div class="tool-content">
                                        <h4>Planning de cours</h4>
                                        <p>Consultez votre emploi du temps.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="tool-card">
                                    <div class="tool-icon">
                                        <i class="fas fa-users"></i>
                                    </div>
                                    <div class="tool-content">
                                        <h4>Communication</h4>
                                        <p>Échangez avec parents et administration.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="tool-card">
                                    <div class="tool-icon">
                                        <i class="fas fa-book-open"></i>
                                    </div>
                                    <div class="tool-content">
                                        <h4>Ressources pédagogiques</h4>
                                        <p>Accédez à la bibliothèque de ressources.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="tool-card">
                                    <div class="tool-icon">
                                        <i class="fas fa-chart-bar"></i>
                                    </div>
                                    <div class="tool-content">
                                        <h4>Rapports et statistiques</h4>
                                        <p>Générez des rapports de performance.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

                <!-- Connexion (côté droit) -->
                <div class="col-lg-5">
                    <!-- Ressources utiles -->
                    <div class="resources-section">
                        <h5 class="mb-2" style="color: var(--dubass-blue);">Ressources utiles</h5>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="resource-item">
                                    <div class="resource-icon">
                                        <i class="fas fa-file-pdf"></i>
                                    </div>
                                    <div class="resource-content">
                                        <h6>Guide pédagogique</h6>
                                        <p>Manuel des méthodes DUBASS</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="resource-item">
                                    <div class="resource-icon">
                                        <i class="fas fa-question-circle"></i>
                                    </div>
                                    <div class="resource-content">
                                        <h6>Support technique</h6>
                                        <p>Aide et assistance</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Formulaire de connexion -->
                    <div class="login-form">
                        <h3 class="mb-4" style="color: var(--dubass-blue);">Connexion enseignants</h3>
                        <form>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email_enseignant" class="form-label">Email professionnel</label>
                                        <input type="email" class="form-control" id="email_enseignant" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="mot_de_passe_enseignant" class="form-label">Mot de passe</label>
                                        <input type="password" class="form-control" id="mot_de_passe_enseignant" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="se_souvenir">
                                        <label class="form-check-label" for="se_souvenir" style="font-size: 0.85rem;">
                                            Se souvenir de moi
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6 text-end">
                                    <button type="submit" class="btn btn-login">
                                        <i class="fas fa-sign-in-alt me-2"></i>
                                        Se connecter
                                    </button>
                                </div>
                            </div>
                            <div class="text-start mt-2">
                                <a href="#" class="text-muted" style="font-size: 0.85rem;">Mot de passe oublié ?</a>
                            </div>
                        </form>

                        <hr class="my-4">

                        <div class="text-center">
                            <p class="mb-2" style="color: var(--dubass-blue); font-weight: 600;">Nouveau enseignant ?</p>
                            <a href="{{ route('contact') }}" class="btn-secondary-outline">
                                <i class="fas fa-user-plus me-2"></i>
                                Demander un accès
                            </a>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>

@endsection

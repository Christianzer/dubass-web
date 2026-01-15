@extends('layouts.internal')

@section('title', 'Inscription - DUBASS - Groupe Scolaire')
@section('page-subtitle', 'INSCRIPTION')

@push('styles')
    <style>
        .inscription-section {
            padding: 1rem 0 0;
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

        .inscription-image {
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

        .inscription-form {
            background: white;
            border-radius: 15px;
            padding: 2.5rem;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            border: 2px solid var(--dubass-orange);
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

        .btn-inscription {
            background-color: var(--dubass-orange);
            border-color: var(--dubass-orange);
            color: white;
            padding: 12px 30px;
            font-size: 1.1rem;
            font-weight: 600;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .btn-inscription:hover {
            background-color: #a64a1f;
            border-color: #a64a1f;
            color: white;
            transform: translateY(-2px);
        }

        @media (max-width: 768px) {
            .inscription-section h1 {
                font-size: 2rem;
            }

            .inscription-form {
                padding: 2rem;
                margin-top: 1rem;
            }
        }
    </style>
@endpush

@section('content')
    <!-- Section principale Inscription -->
    <section class="inscription-section">
        <div class="container h-100 d-flex flex-column">
            <div class="row">
                <div class="col-lg-5">
                    <!-- En-tête de section -->
                    <div class="">
                        <h1 class="main-title">
                            <span class="title-blue">Rejoignez l'école</span><br>
                            <span class="title-orange">d'excellence DUBASS</span>
                        </h1>
                    </div>
                    <div class="description-text">
                        <p>Inscrivez votre enfant dans une école qui privilégie l'excellence académique, l'innovation pédagogique et l'épanouissement personnel.</p>

                        <p>Notre processus d'inscription est simple et transparent. Nous accompagnons chaque famille dans cette démarche importante pour l'avenir de leur enfant.</p>

                        <p>Rejoignez la communauté DUBASS et offrez à votre enfant une éducation de qualité dans un environnement stimulant et bienveillant.</p>
                    </div>
                </div>

                <div class="col-lg-7">
                    <!-- Formulaire d'inscription -->
                    <div class="inscription-form">
                        <h3 class="mb-4" style="color: var(--dubass-blue);">Formulaire de pré-inscription</h3>
                        <form>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="nom_enfant" class="form-label">Nom de l'enfant</label>
                                        <input type="text" class="form-control" id="nom_enfant" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="prenom_enfant" class="form-label">Prénom de l'enfant</label>
                                        <input type="text" class="form-control" id="prenom_enfant" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="date_naissance" class="form-label">Date de naissance</label>
                                        <input type="date" class="form-control" id="date_naissance" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="niveau_souhaite" class="form-label">Niveau souhaité</label>
                                        <select class="form-control" id="niveau_souhaite" required>
                                            <option value="">Choisir un niveau</option>
                                            <option value="maternelle">Maternelle</option>
                                            <option value="cp">CP</option>
                                            <option value="ce1">CE1</option>
                                            <option value="ce2">CE2</option>
                                            <option value="cm1">CM1</option>
                                            <option value="cm2">CM2</option>
                                            <option value="6eme">6ème</option>
                                            <option value="5eme">5ème</option>
                                            <option value="4eme">4ème</option>
                                            <option value="3eme">3ème</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="nom_parent" class="form-label">Nom du parent/tuteur</label>
                                        <input type="text" class="form-control" id="nom_parent" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="telephone" class="form-label">Téléphone</label>
                                        <input type="tel" class="form-control" id="telephone" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-end">
                                <div class="col-md-4">
                                    <div class="form-group mb-0">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email" required>
                                    </div>
                                </div>
                                <div class="col-md-8 text-end">
                                    <button type="submit" class="btn btn-inscription">
                                        <i class="fas fa-paper-plane me-2"></i>
                                        Envoyer la demande
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


        </div>
    </section>

@endsection

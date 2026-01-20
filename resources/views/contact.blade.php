@extends('layouts.internal')

@section('title', 'Contactez nous - DUBASS - Groupe Scolaire')
@section('page-subtitle', 'CONTACTEZ NOUS')

@push('styles')
    <style>
        .contact-section {
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

        .contact-image {
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

        .contact-info {
            background: white;
            border-radius: 15px;
            padding: 2.5rem;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            border: 2px solid var(--dubass-blue);
            margin-top: 2rem;
        }

        .contact-item {
            display: flex;
            align-items: center;
            margin-bottom: 1rem;
            padding: 0.7rem;
            background: #f8f9fa;
            border-radius: 10px;
            transition: all 0.3s ease;
        }

        .contact-item:hover {
            transform: translateX(5px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .contact-icon {
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

        .contact-details h5 {
            color: var(--dubass-blue);
            font-weight: 600;
            margin-bottom: 0.25rem;
            font-size: 0.9rem;
        }

        .contact-details p {
            color: #666;
            margin: 0;
            line-height: 1.4;
            font-size: 0.85rem;
        }

        .contact-form {
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

        .btn-contact {
            background-color: var(--dubass-orange);
            border-color: var(--dubass-orange);
            color: white;
            padding: 12px 30px;
            font-size: 1.1rem;
            font-weight: 600;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .btn-contact:hover {
            background-color: #a64a1f;
            border-color: #a64a1f;
            color: white;
            transform: translateY(-2px);
        }

        @media (max-width: 768px) {
            .contact-section h1 {
                font-size: 2rem;
            }

            .contact-info, .contact-form {
                padding: 2rem;
                margin-top: 1rem;
            }

            .contact-item {
                flex-direction: column;
                text-align: center;
            }

            .contact-icon {
                margin-right: 0;
                margin-bottom: 1rem;
            }
        }
    </style>
@endpush

@section('content')
    <!-- Section principale Contact -->
    <section class="contact-section">
        <div class="container h-100 d-flex flex-column">
            <div class="row">
                <div class="col-lg-7">
                    <!-- En-tête de section -->
                    <div class="">
                        <h1 class="main-title">
                            <span class="title-blue">Nous sommes là</span><br>
                            <span class="title-orange">pour vous accompagner</span>
                        </h1>
                    </div>
                    <div class="description-text">
                        <p>Notre équipe est à votre disposition pour répondre à toutes vos questions concernant l'éducation de votre enfant, nos programmes pédagogiques ou les modalités d'inscription.</p>

                        <p>N'hésitez pas à nous contacter par téléphone, email ou à venir nous rendre visite dans nos locaux. Nous serons ravis de vous accueillir.</p>
                    </div>
                    <!-- Informations de contact -->
                    <div class="contact-info">
                        <h3 class="mb-4" style="color: var(--dubass-blue);">Nos coordonnées</h3>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="contact-item">
                                    <div class="contact-icon">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <div class="contact-details">
                                        <h5>Adresse</h5>
                                        <p>25 BP 2309 Faya<br>En face de la pharmacie St Martin,<br>vers le nouveau camp</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="contact-item">
                                    <div class="contact-icon">
                                        <i class="fas fa-phone"></i>
                                    </div>
                                    <div class="contact-details">
                                        <h5>Téléphone</h5>
                                        <p>05 65 65 43 94<br>+225 25 22 01 87 52</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="contact-item">
                                    <div class="contact-icon">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <div class="contact-details">
                                        <h5>Email</h5>
                                        <p>istdubass@gmail.com</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="contact-item">
                                    <div class="contact-icon">
                                        <i class="fas fa-clock"></i>
                                    </div>
                                    <div class="contact-details">
                                        <h5>Horaires d'ouverture</h5>
                                        <p>Lundi - Vendredi: 7h30 - 17h30<br>Samedi: 8h00 - 12h00</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5">
                    <!-- Formulaire de contact -->
                    <div class="contact-form">
                        <h3 class="mb-4" style="color: var(--dubass-blue);">Envoyez-nous un message</h3>
                        <form>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nom" class="form-label">Nom</label>
                                        <input type="text" class="form-control" id="nom" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="prenom" class="form-label">Prénom</label>
                                        <input type="text" class="form-control" id="prenom" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email_contact" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email_contact" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="telephone_contact" class="form-label">Téléphone</label>
                                        <input type="tel" class="form-control" id="telephone_contact" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="sujet" class="form-label">Sujet</label>
                                <select class="form-control" id="sujet" required>
                                    <option value="">Choisir un sujet</option>
                                    <option value="inscription">Demande d'inscription</option>
                                    <option value="information">Demande d'information</option>
                                    <option value="rendez-vous">Prise de rendez-vous</option>
                                    <option value="autre">Autre</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="message" class="form-label">Message</label>
                                <textarea class="form-control" id="message" rows="5" required placeholder="Votre message..."></textarea>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-contact">
                                    <i class="fas fa-paper-plane me-2"></i>
                                    Envoyer le message
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Contenu principal -->
            <div class="row align-items-start flex-grow-1">
                <!-- Informations de contact (côté gauche) -->
                <div class="col-lg-6">



                </div>

                <!-- Formulaire de contact (côté droit) -->

            </div>

        </div>
    </section>

@endsection

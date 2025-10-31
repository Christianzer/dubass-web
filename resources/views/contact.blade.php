@extends('layouts.app')

@section('title', 'Contact et Inscription - Groupe Scolaire Dubass')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">Contactez-nous ou inscrivez votre enfant</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Accueil</a></li>
                    <li class="breadcrumb-item text-white" aria-current="page">Contact</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">Contactez-nous</h4>
                    <h1 class="text-dark mb-4 display-5">Nous sommes à votre écoute</h1>
                    <p class="text-dark mb-4">
                        N'hésitez pas à nous contacter pour toute demande d'information sur nos programmes, nos tarifs ou pour planifier une visite de notre établissement.
                    </p>
                    
                    <!-- Contact Form -->
                    <form>
                        <div class="row g-3">
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-primary" id="name" name="name" placeholder="Nom complet" required>
                                    <label for="name">Nom complet *</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control border-primary" id="email" name="email" placeholder="Email" required>
                                    <label for="email">Email *</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="tel" class="form-control border-primary" id="phone" name="phone" placeholder="Téléphone" required>
                                    <label for="phone">Téléphone *</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <select class="form-control border-primary" id="subject" name="subject" required>
                                        <option value="">Sélectionnez le motif</option>
                                        <option value="inscription">Demande d'inscription</option>
                                        <option value="information">Demande d'information</option>
                                        <option value="visite">Planifier une visite</option>
                                        <option value="autre">Autre</option>
                                    </select>
                                    <label for="subject">Motif de contact *</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control border-primary" placeholder="Message ou demande d'inscription" id="message" name="message" style="height: 120px" required></textarea>
                                    <label for="message">Message ou demande d'inscription *</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">
                                    <i class="fas fa-paper-plane me-2"></i>Envoyer
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.3s">
                    <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">Informations de contact</h4>
                    <h2 class="text-dark mb-4">Nos coordonnées</h2>
                    
                    <div class="row g-4">
                        <div class="col-12">
                            <div class="d-flex align-items-center">
                                <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                                    <i class="fas fa-map-marker-alt text-white fa-2x"></i>
                                </div>
                                <div class="ms-3">
                                    <h5 class="text-primary">Adresse</h5>
                                    <p class="mb-0">Cocody, Abidjan<br>Côte d'Ivoire</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex align-items-center">
                                <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                                    <i class="fas fa-phone-alt text-white fa-2x"></i>
                                </div>
                                <div class="ms-3">
                                    <h5 class="text-primary">Téléphone</h5>
                                    <p class="mb-0">+225 01 23 45 67 89<br>+225 01 23 45 67 90</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex align-items-center">
                                <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                                    <i class="fas fa-envelope text-white fa-2x"></i>
                                </div>
                                <div class="ms-3">
                                    <h5 class="text-primary">Email</h5>
                                    <p class="mb-0">contact@dubass.ci<br>info@dubass.ci</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex align-items-center">
                                <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                                    <i class="fas fa-clock text-white fa-2x"></i>
                                </div>
                                <div class="ms-3">
                                    <h5 class="text-primary">Horaires</h5>
                                    <p class="mb-0">Lundi - Vendredi: 7h00 - 17h00<br>Samedi: 8h00 - 12h00</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Social Links -->
                    <div class="mt-4">
                        <h5 class="text-primary mb-3">Suivez-nous</h5>
                        <div class="d-flex">
                            <a class="btn btn-primary btn-square me-3 rounded-circle" href="#"><i class="fab fa-facebook-f text-white"></i></a>
                            <a class="btn btn-primary btn-square me-3 rounded-circle" href="#"><i class="fab fa-instagram text-white"></i></a>
                            <a class="btn btn-primary btn-square rounded-circle" href="#"><i class="fab fa-whatsapp text-white"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

    <!-- Map Section Start -->
    <div class="container-fluid py-5 bg-light">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center wow fadeIn" data-wow-delay="0.1s">
                    <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">Localisation</h4>
                    <h2 class="text-dark mb-4 display-5">Trouvez-nous facilement</h2>
                    
                    <!-- Google Maps Placeholder -->
                    <div class="map-container border border-primary rounded" style="height: 400px; background-color: #f8f9fa;">
                        <div class="d-flex align-items-center justify-content-center h-100">
                            <div class="text-center">
                                <i class="fas fa-map-marked-alt fa-4x text-primary mb-3"></i>
                                <h4 class="text-primary">Carte Google Maps</h4>
                                <p class="text-muted">Cocody, Abidjan - Côte d'Ivoire</p>
                                <a href="https://maps.google.com" target="_blank" class="btn btn-primary">Voir sur Google Maps</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Map Section End -->

    <!-- Call to Action Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center wow fadeIn" data-wow-delay="0.1s">
                    <h2 class="text-primary mb-4">Le Groupe Scolaire Dubass reste à votre écoute pour toute demande d'information ou d'inscription.</h2>
                    <p class="text-dark mb-4 fs-5">
                        Notre équipe est disponible pour répondre à toutes vos questions et vous accompagner dans le processus d'inscription de votre enfant.
                    </p>
                    <div class="row g-4 mt-4">
                        <div class="col-md-4">
                            <a href="tel:+2250123456789" class="btn btn-primary btn-lg px-4 py-3 btn-border-radius w-100">
                                <i class="fas fa-phone me-2"></i>Appelez-nous
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="mailto:contact@dubass.ci" class="btn btn-outline-primary btn-lg px-4 py-3 btn-border-radius w-100">
                                <i class="fas fa-envelope me-2"></i>Écrivez-nous
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="{{ route('about') }}" class="btn btn-secondary btn-lg px-4 py-3 btn-border-radius w-100">
                                <i class="fas fa-info-circle me-2"></i>En savoir plus
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Call to Action End -->
@endsection
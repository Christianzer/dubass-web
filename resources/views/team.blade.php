@extends('layouts.app')

@section('title', 'Notre équipe - DUBASS École d\'Excellence et d\'Innovation')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">NOTRE ÉQUIPE DIRIGEANTE</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Accueil</a></li>
                    <li class="breadcrumb-item text-white" aria-current="page">Équipe</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Introduction Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center wow fadeIn" data-wow-delay="0.1s">
                    <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">Leadership</h4>
                    <h2 class="text-dark mb-4 display-5">Une équipe dynamique, passionnée et engagée</h2>
                    <p class="text-dark mb-5 fs-5">
                        Le groupe scolaire Dubass est un employeur de premier choix qui attire et délèse un personnel de qualité centré sur le suivi et l'épanouissement des élèves.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Introduction End -->

    <!-- Team Start -->
    <div class="container-fluid team py-5 bg-light">
        <div class="container py-5">
            <div class="row g-5 justify-content-center">
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeIn" data-wow-delay="0.1s">
                    <div class="team-item border border-primary img-border-radius overflow-hidden">
                        <img src="{{ asset('img/team-1.jpg') }}" class="img-fluid w-100" alt="Safoura FADIGA">
                        <div class="team-icon d-flex align-items-center justify-content-center">
                            <a class="share btn btn-primary btn-md-square text-white rounded-circle me-3" href=""><i class="fas fa-share-alt"></i></a>
                            <a class="share-link btn btn-primary btn-md-square text-white rounded-circle me-3" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="share-link btn btn-primary btn-md-square text-white rounded-circle me-3" href=""><i class="fab fa-linkedin-in"></i></a>
                            <a class="share-link btn btn-primary btn-md-square text-white rounded-circle" href=""><i class="fas fa-envelope"></i></a>
                        </div>
                        <div class="team-content text-center py-3">
                            <h4 class="text-primary">SAFOURA FADIGA</h4>
                            <p class="text-muted mb-2">Directrice Générale</p>
                            <small class="text-dark">Première Femme Ingénieur Informaticienne et Ingénieur Statisticien-Economiste</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeIn" data-wow-delay="0.3s">
                    <div class="team-item border border-primary img-border-radius overflow-hidden">
                        <img src="{{ asset('img/team-2.jpg') }}" class="img-fluid w-100" alt="Bernard KABLAN">
                        <div class="team-icon d-flex align-items-center justify-content-center">
                            <a class="share btn btn-primary btn-md-square text-white rounded-circle me-3" href=""><i class="fas fa-share-alt"></i></a>
                            <a class="share-link btn btn-primary btn-md-square text-white rounded-circle me-3" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="share-link btn btn-primary btn-md-square text-white rounded-circle me-3" href=""><i class="fab fa-linkedin-in"></i></a>
                            <a class="share-link btn btn-primary btn-md-square text-white rounded-circle" href=""><i class="fas fa-envelope"></i></a>
                        </div>
                        <div class="team-content text-center py-3">
                            <h4 class="text-primary">BERNARD KABLAN</h4>
                            <p class="text-muted mb-2">Primaire et secondaire</p>
                            <small class="text-dark">Directeur des cycles primaire et secondaire</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeIn" data-wow-delay="0.5s">
                    <div class="team-item border border-primary img-border-radius overflow-hidden">
                        <img src="{{ asset('img/team-3.jpg') }}" class="img-fluid w-100" alt="Anne AGNAMAN">
                        <div class="team-icon d-flex align-items-center justify-content-center">
                            <a class="share btn btn-primary btn-md-square text-white rounded-circle me-3" href=""><i class="fas fa-share-alt"></i></a>
                            <a class="share-link btn btn-primary btn-md-square text-white rounded-circle me-3" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="share-link btn btn-primary btn-md-square text-white rounded-circle me-3" href=""><i class="fab fa-linkedin-in"></i></a>
                            <a class="share-link btn btn-primary btn-md-square text-white rounded-circle" href=""><i class="fas fa-envelope"></i></a>
                        </div>
                        <div class="team-content text-center py-3">
                            <h4 class="text-primary">ANNE AGNAMAN</h4>
                            <p class="text-muted mb-2">PréScolaire</p>
                            <small class="text-dark">Directrice du cycle préscolaire</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeIn" data-wow-delay="0.7s">
                    <div class="team-item border border-primary img-border-radius overflow-hidden">
                        <img src="{{ asset('img/team-4.jpg') }}" class="img-fluid w-100" alt="Aboubacar YAYA KONE">
                        <div class="team-icon d-flex align-items-center justify-content-center">
                            <a class="share btn btn-primary btn-md-square text-white rounded-circle me-3" href=""><i class="fas fa-share-alt"></i></a>
                            <a class="share-link btn btn-primary btn-md-square text-white rounded-circle me-3" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="share-link btn btn-primary btn-md-square text-white rounded-circle me-3" href=""><i class="fab fa-linkedin-in"></i></a>
                            <a class="share-link btn btn-primary btn-md-square text-white rounded-circle" href=""><i class="fas fa-envelope"></i></a>
                        </div>
                        <div class="team-content text-center py-3">
                            <h4 class="text-primary">ABOUBACAR YAYA KONE</h4>
                            <p class="text-muted mb-2">Vie Scolaire</p>
                            <small class="text-dark">Directeur de la Vie Scolaire</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->

    <!-- Team Values Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">Notre Engagement</h4>
                    <h2 class="text-dark mb-4 display-5">Une équipe unie par des valeurs communes</h2>
                    <div class="row mb-4">
                        <div class="col-12">
                            <h6 class="mb-3"><i class="fas fa-check-circle me-2 text-primary"></i>Excellence pédagogique</h6>
                            <h6 class="mb-3"><i class="fas fa-check-circle me-2 text-primary"></i>Bienveillance éducative</h6>
                            <h6 class="mb-3"><i class="fas fa-check-circle me-2 text-secondary"></i>Innovation constante</h6>
                            <h6 class="mb-3"><i class="fas fa-check-circle me-2"></i>Collaboration active</h6>
                            <h6 class="mb-3"><i class="fas fa-check-circle me-2 text-primary"></i>Développement professionnel continu</h6>
                            <h6><i class="fas fa-check-circle me-2 text-secondary"></i>Écoute et accompagnement</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.3s">
                    <div class="video border">
                        <img src="{{ asset('img/about.jpg') }}" class="img-fluid w-100" alt="Équipe Dubass">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team Values End -->

    <!-- Team Mission Start -->
    <div class="container-fluid bg-light py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center wow fadeIn" data-wow-delay="0.1s">
                    <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">Notre Dévouement</h4>
                    <h2 class="text-dark mb-4 display-5">Notre équipe œuvre chaque jour avec passion pour garantir un enseignement d'excellence et un encadrement bienveillant.</h2>
                    <p class="text-dark mb-5 fs-5">
                        Chaque membre de notre équipe dirigeante apporte son expertise unique et sa passion pour l'éducation. Ensemble, nous formons un collectif soudé, déterminé à accompagner chaque élève vers la réussite et l'épanouissement personnel.
                    </p>
                    <div class="row g-4 mt-4">
                        <div class="col-md-6">
                            <a href="{{ route('contact') }}" class="btn btn-primary btn-lg px-5 py-3 btn-border-radius w-100">Nous rencontrer</a>
                        </div>
                        <div class="col-md-6">
                            <a href="{{ route('about') }}" class="btn btn-outline-primary btn-lg px-5 py-3 btn-border-radius w-100">En savoir plus sur l'école</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team Mission End -->

    <!-- Expertise Areas Start -->
    <div class="container-fluid py-5 methodology-section">
        <div class="container py-5">
            <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
                <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">Domaines d'Expertise</h4>
                <h1 class="mb-5 display-3">L'expertise de notre équipe</h1>
            </div>
            <div class="row g-5">
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeIn" data-wow-delay="0.1s">
                    <div class="text-center border-primary border bg-white service-item">
                        <div class="service-content d-flex align-items-center justify-content-center p-4">
                            <div class="service-content-inner">
                                <div class="p-4"><i class="fas fa-user-tie fa-6x text-primary"></i></div>
                                <h4 class="text-primary">Direction Générale</h4>
                                <p class="my-3">Leadership stratégique et vision globale pour l'établissement.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeIn" data-wow-delay="0.3s">
                    <div class="text-center border-primary border bg-white service-item">
                        <div class="service-content d-flex align-items-center justify-content-center p-4">
                            <div class="service-content-inner">
                                <div class="p-4"><i class="fas fa-child fa-6x text-primary"></i></div>
                                <h4 class="text-primary">Cycle Préscolaire</h4>
                                <p class="my-3">Expertise en développement de la petite enfance et éveil éducatif.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeIn" data-wow-delay="0.5s">
                    <div class="text-center border-primary border bg-white service-item">
                        <div class="service-content d-flex align-items-center justify-content-center p-4">
                            <div class="service-content-inner">
                                <div class="p-4"><i class="fas fa-graduation-cap fa-6x text-primary"></i></div>
                                <h4 class="text-primary">Cycles Primaire & Secondaire</h4>
                                <p class="my-3">Direction pédagogique et innovation éducative avancée.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeIn" data-wow-delay="0.7s">
                    <div class="text-center border-primary border bg-white service-item">
                        <div class="service-content d-flex align-items-center justify-content-center p-4">
                            <div class="service-content-inner">
                                <div class="p-4"><i class="fas fa-heart fa-6x text-primary"></i></div>
                                <h4 class="text-primary">Vie Scolaire</h4>
                                <p class="my-3">Accompagnement personnalisé et bien-être des élèves.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Expertise Areas End -->
@endsection
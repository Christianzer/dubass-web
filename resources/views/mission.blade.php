@extends('layouts.app')

@section('title', 'Mission et Valeurs - Groupe Scolaire Dubass')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">Notre mission, nos valeurs et nos objectifs</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Accueil</a></li>
                    <li class="breadcrumb-item text-white" aria-current="page">Mission & Valeurs</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Mission Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center wow fadeIn" data-wow-delay="0.1s">
                    <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">Mission</h4>
                    <h1 class="text-dark mb-4 display-5">Notre raison d'être</h1>
                    <div class="bg-light border border-primary rounded p-5">
                        <div class="position-relative">
                            <i class="fa fa-quote-left fa-3x text-primary position-absolute" style="top: -20px; left: 20px;"></i>
                            <p class="text-dark fs-4 px-5 py-3 mb-0">
                                Éduquer, inspirer et créer des leaders responsables, compétents et épanouis qui auront un impact positif sur la société.
                            </p>
                            <i class="fa fa-quote-right fa-3x text-primary position-absolute" style="bottom: -20px; right: 20px;"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mission End -->

    <!-- Values Start -->
    <div class="container-fluid bg-light py-5">
        <div class="container py-5">
            <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
                <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">Valeurs</h4>
                <h1 class="mb-5 display-3">Les valeurs du Groupe Scolaire Dubass</h1>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeIn" data-wow-delay="0.1s">
                    <div class="text-center border-primary border bg-white service-item h-100">
                        <div class="service-content d-flex align-items-center justify-content-center p-4">
                            <div class="service-content-inner">
                                <div class="p-4"><i class="fas fa-handshake fa-6x text-primary"></i></div>
                                <h4 class="text-primary">Respect</h4>
                                <p class="my-3">Respect mutuel entre tous les membres de la communauté éducative.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeIn" data-wow-delay="0.2s">
                    <div class="text-center border-primary border bg-white service-item h-100">
                        <div class="service-content d-flex align-items-center justify-content-center p-4">
                            <div class="service-content-inner">
                                <div class="p-4"><i class="fas fa-crosshairs fa-6x text-primary"></i></div>
                                <h4 class="text-primary">Rigueur</h4>
                                <p class="my-3">Excellence et précision dans toutes nos actions éducatives.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeIn" data-wow-delay="0.3s">
                    <div class="text-center border-primary border bg-white service-item h-100">
                        <div class="service-content d-flex align-items-center justify-content-center p-4">
                            <div class="service-content-inner">
                                <div class="p-4"><i class="fas fa-dove fa-6x text-primary"></i></div>
                                <h4 class="text-primary">Humilité</h4>
                                <p class="my-3">Modestie et ouverture d'esprit dans l'apprentissage continu.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeIn" data-wow-delay="0.4s">
                    <div class="text-center border-primary border bg-white service-item h-100">
                        <div class="service-content d-flex align-items-center justify-content-center p-4">
                            <div class="service-content-inner">
                                <div class="p-4"><i class="fas fa-palette fa-6x text-primary"></i></div>
                                <h4 class="text-primary">Créativité</h4>
                                <p class="my-3">Innovation et imagination pour stimuler l'apprentissage.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeIn" data-wow-delay="0.5s">
                    <div class="text-center border-primary border bg-white service-item h-100">
                        <div class="service-content d-flex align-items-center justify-content-center p-4">
                            <div class="service-content-inner">
                                <div class="p-4"><i class="fas fa-eye fa-6x text-primary"></i></div>
                                <h4 class="text-primary">Transparence</h4>
                                <p class="my-3">Communication claire et honnête avec tous nos partenaires.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeIn" data-wow-delay="0.6s">
                    <div class="text-center border-primary border bg-white service-item h-100">
                        <div class="service-content d-flex align-items-center justify-content-center p-4">
                            <div class="service-content-inner">
                                <div class="p-4"><i class="fas fa-share-alt fa-6x text-primary"></i></div>
                                <h4 class="text-primary">Partage</h4>
                                <p class="my-3">Échange de connaissances et d'expériences enrichissantes.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeIn" data-wow-delay="0.7s">
                    <div class="text-center border-primary border bg-white service-item h-100">
                        <div class="service-content d-flex align-items-center justify-content-center p-4">
                            <div class="service-content-inner">
                                <div class="p-4"><i class="fas fa-globe-africa fa-6x text-primary"></i></div>
                                <h4 class="text-primary">Diversité</h4>
                                <p class="my-3">Célébration de la richesse des différences culturelles et individuelles.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Values End -->

    <!-- Objectives Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 wow fadeIn" data-wow-delay="0.1s">
                    <div class="text-center mb-5">
                        <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">Objectifs</h4>
                        <h1 class="display-5 text-dark mb-4">Nos objectifs stratégiques</h1>
                        <p class="text-dark fs-5 mb-5">
                            Notre objectif principal est de fournir une éducation de haute qualité, en mettant l'accent sur l'apprentissage académique, le développement personnel et la réussite future.
                        </p>
                    </div>
                    
                    <div class="row g-5">
                        <div class="col-md-6 col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                            <div class="bg-light border border-primary rounded p-4 h-100">
                                <div class="d-flex align-items-center mb-3">
                                    <i class="fas fa-trophy fa-3x text-primary me-3"></i>
                                    <h4 class="text-primary mb-0">Promouvoir l'excellence académique</h4>
                                </div>
                                <p class="text-dark">Viser les plus hauts standards d'éducation pour préparer nos élèves aux défis futurs avec des résultats académiques exceptionnels.</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 wow fadeIn" data-wow-delay="0.3s">
                            <div class="bg-light border border-primary rounded p-4 h-100">
                                <div class="d-flex align-items-center mb-3">
                                    <i class="fas fa-search fa-3x text-primary me-3"></i>
                                    <h4 class="text-primary mb-0">Cultiver la curiosité et la créativité</h4>
                                </div>
                                <p class="text-dark">Développer l'esprit d'investigation et l'innovation chez nos élèves pour qu'ils deviennent des penseurs critiques et créatifs.</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                            <div class="bg-light border border-primary rounded p-4 h-100">
                                <div class="d-flex align-items-center mb-3">
                                    <i class="fas fa-users fa-3x text-primary me-3"></i>
                                    <h4 class="text-primary mb-0">Favoriser la diversité et l'inclusion</h4>
                                </div>
                                <p class="text-dark">Créer un environnement accueillant où chaque élève, quelles que soient ses origines, peut s'épanouir et réussir pleinement.</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 wow fadeIn" data-wow-delay="0.7s">
                            <div class="bg-light border border-primary rounded p-4 h-100">
                                <div class="d-flex align-items-center mb-3">
                                    <i class="fas fa-brain fa-3x text-primary me-3"></i>
                                    <h4 class="text-primary mb-0">Promouvoir l'apprentissage holistique</h4>
                                </div>
                                <p class="text-dark">Développer toutes les dimensions de la personnalité : intellectuelle, émotionnelle, sociale, physique et spirituelle.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Objectives End -->

    <!-- Call to Action Start -->
    <div class="container-fluid bg-primary py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center wow fadeIn" data-wow-delay="0.1s">
                    <h2 class="text-white mb-4">Rejoignez-nous dans notre mission éducative</h2>
                    <p class="text-white mb-4 fs-5">Découvrez comment nos valeurs et objectifs peuvent contribuer à l'épanouissement de votre enfant.</p>
                    <div class="row g-4 mt-4">
                        <div class="col-md-6">
                            <a href="{{ route('contact') }}" class="btn btn-light btn-lg px-5 py-3 btn-border-radius w-100">Inscription</a>
                        </div>
                        <div class="col-md-6">
                            <a href="{{ route('team') }}" class="btn btn-outline-light btn-lg px-5 py-3 btn-border-radius w-100">Rencontrer notre équipe</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Call to Action End -->
@endsection
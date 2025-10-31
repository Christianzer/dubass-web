@extends('layouts.app')

@section('title', 'À propos - Groupe Scolaire Dubass')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">À propos de nous</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Accueil</a></li>
                    <li class="breadcrumb-item text-white" aria-current="page">À propos</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- About Start -->
    <div class="container-fluid py-5 about">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="video border">
                        <img src="{{ asset('img/about.png') }}" class="img-fluid w-100" alt="Groupe Scolaire Dubass">
                    </div>
                </div>
                <div class="col-lg-7 wow fadeIn" data-wow-delay="0.3s">
                    <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">À propos de nous</h4>
                    <h1 class="text-dark mb-4 display-5">Notre Histoire</h1>
                    <p class="text-dark mb-4">
                        Le Groupe Scolaire Dubass a été créé en octobre 2014 à l'initiative de Mme Safoura FADIKA, première femme ingénieur informaticienne et ingénieur statisticien-économiste en Côte d'Ivoire, et du Professeur Kanvaly FADIGA, professeur titulaire en sciences de l'éducation. Ensemble, ils ont fondé une école reposant sur des valeurs solides et une conviction profonde dans le pouvoir de l'éducation.
                    </p>
                    <p class="text-dark mb-4">
                        Notre école est un établissement privé, laïc et mixte regroupant le préscolaire, le primaire et le secondaire, garantissant un suivi complet de l'élève tout au long de son parcours scolaire.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Features Start -->
    <div class="container-fluid bg-light py-5 methodology-section">
        <div class="container py-5">
            <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
                <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">Nos Atouts</h4>
                <h1 class="mb-5 display-3">Les atouts de notre établissement</h1>
            </div>
            <div class="row g-5">
                <div class="col-md-6 col-lg-6 col-xl-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="text-center border-primary border bg-white service-item">
                        <div class="service-content d-flex align-items-center justify-content-center p-4">
                            <div class="service-content-inner">
                                <div class="p-4"><i class="fas fa-door-open fa-6x text-primary"></i></div>
                                <h4 class="text-primary">Classes spacieuses et thématiques</h4>
                                <p class="my-3">Des espaces d'apprentissage adaptés et organisés par thème pour favoriser la concentration et l'engagement des élèves.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4 wow fadeIn" data-wow-delay="0.3s">
                    <div class="text-center border-primary border bg-white service-item">
                        <div class="service-content d-flex align-items-center justify-content-center p-4">
                            <div class="service-content-inner">
                                <div class="p-4"><i class="fas fa-wifi fa-6x text-primary"></i></div>
                                <h4 class="text-primary">Salle digitale avec Wi-Fi</h4>
                                <p class="my-3">Infrastructure moderne avec connexion internet haut débit pour l'apprentissage numérique et la recherche.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4 wow fadeIn" data-wow-delay="0.5s">
                    <div class="text-center border-primary border bg-white service-item">
                        <div class="service-content d-flex align-items-center justify-content-center p-4">
                            <div class="service-content-inner">
                                <div class="p-4"><i class="fas fa-book fa-6x text-primary"></i></div>
                                <h4 class="text-primary">Bibliothèque</h4>
                                <p class="my-3">Un espace de lecture et de recherche riche en ressources pédagogiques pour développer l'amour de la lecture.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="text-center border-primary border bg-white service-item">
                        <div class="service-content d-flex align-items-center justify-content-center p-4">
                            <div class="service-content-inner">
                                <div class="p-4"><i class="fas fa-utensils fa-6x text-primary"></i></div>
                                <h4 class="text-primary">Cantine aérée</h4>
                                <p class="my-3">Espace de restauration spacieux et bien ventilé proposant des repas équilibrés et savoureux.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4 wow fadeIn" data-wow-delay="0.3s">
                    <div class="text-center border-primary border bg-white service-item">
                        <div class="service-content d-flex align-items-center justify-content-center p-4">
                            <div class="service-content-inner">
                                <div class="p-4"><i class="fas fa-bed fa-6x text-primary"></i></div>
                                <h4 class="text-primary">Salle de repos et infirmerie équipée</h4>
                                <p class="my-3">Espaces dédiés au bien-être et aux soins médicaux avec du personnel qualifié.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4 wow fadeIn" data-wow-delay="0.5s">
                    <div class="text-center border-primary border bg-white service-item">
                        <div class="service-content d-flex align-items-center justify-content-center p-4">
                            <div class="service-content-inner">
                                <div class="p-4"><i class="fas fa-heart fa-6x text-primary"></i></div>
                                <h4 class="text-primary">Atmosphère familiale</h4>
                                <p class="my-3">Un environnement chaleureux et bienveillant où chaque enfant se sent à l'aise et en sécurité.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->

    <!-- Mission Statement Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center wow fadeIn" data-wow-delay="0.1s">
                    <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">Notre Conviction</h4>
                    <h2 class="text-dark mb-4 display-5">À Dubass, nous croyons en l'épanouissement de chaque enfant dans un environnement d'apprentissage inclusif et stimulant.</h2>
                    <div class="row g-4 mt-4">
                        <div class="col-md-6">
                            <a href="{{ route('programs') }}" class="btn btn-primary btn-lg px-5 py-3 btn-border-radius w-100">Découvrir nos programmes</a>
                        </div>
                        <div class="col-md-6">
                            <a href="{{ route('contact') }}" class="btn btn-outline-primary btn-lg px-5 py-3 btn-border-radius w-100">Nous contacter</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mission Statement End -->
@endsection

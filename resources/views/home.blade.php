@extends('layouts.app')

@section('title', 'Accueil - Groupe Scolaire Dubass')

@section('content')
    <!-- Hero Start -->
    <div class="container-fluid py-5 hero-header wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7 col-md-12">
                    <h1 class="mb-3 text-white">Groupe Scolaire Dubass</h1>
                    <h1 class="mb-5 display-1 text-white" style="color: white!important;">Nous procurons à vos enfants la meilleure éducation au meilleur prix</h1>
                    <p class="text-white mb-4 fs-5">Nous dispensons un enseignement de qualité basé sur des méthodes pédagogiques modernes et personnalisées.</p>
                    <a href="{{ route('contact') }}" class="btn btn-primary px-4 py-3 px-md-5 me-4 btn-border-radius">Inscription</a>
                    <a href="{{ route('about') }}" class="btn btn-primary px-4 py-3 px-md-5 btn-border-radius">En savoir plus</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->

    <!-- About Start -->
    <div class="container-fluid py-5 about bg-light">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="video border">
                        <img src="{{ asset('img/about.png') }}" class="img-fluid w-100" alt="À propos du Groupe Scolaire Dubass">
                        <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/SGnJPfUyU0o" data-bs-target="#videoModal">
                            <span></span>
                        </button>
                    </div>
                </div>
                <div class="col-lg-7 wow fadeIn" data-wow-delay="0.3s">
                    <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">Présentation</h4>
                    <h1 class="text-dark mb-4 display-5">Un cadre d'apprentissage exceptionnel pour vos enfants</h1>
                    <div class="row mb-4">
                        <div class="col-lg-6">
                            <h6 class="mb-3"><i class="fas fa-check-circle me-2 text-primary"></i>Enseignement de qualité</h6>
                            <h6 class="mb-3"><i class="fas fa-check-circle me-2 text-primary"></i>Encadrement optimal</h6>
                            <h6 class="mb-3"><i class="fas fa-check-circle me-2 text-secondary"></i>Atmosphère familiale</h6>
                        </div>
                        <div class="col-lg-6">
                            <h6 class="mb-3"><i class="fas fa-check-circle me-2"></i>Classes spacieuses thématiques</h6>
                            <h6 class="mb-3"><i class="fas fa-check-circle me-2 text-primary"></i>Cantine aérée</h6>
                            <h6><i class="fas fa-check-circle me-2 text-secondary"></i>Clubs</h6>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-12">
                            <h6 class="mb-3"><i class="fas fa-check-circle me-2 text-primary"></i>Activités extra-scolaires gratuites et payantes</h6>
                            <h6 class="mb-3"><i class="fas fa-check-circle me-2 text-secondary"></i>Suivi personnalisé</h6>
                        </div>
                    </div>
                    <a href="{{ route('about') }}" class="btn btn-primary px-5 py-3 btn-border-radius">Plus de détails</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Service Start -->
    <div class="container-fluid service py-5">
        <div class="container py-5">
            <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
                <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">Nos Atouts</h4>
                <h1 class="mb-5 display-3">Ce qui rend notre école unique</h1>
            </div>
            <div class="row g-5">
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeIn" data-wow-delay="0.1s">
                    <div class="text-center border-primary border bg-white service-item">
                        <div class="service-content d-flex align-items-center justify-content-center p-4">
                            <div class="service-content-inner">
                                <div class="p-4"><i class="fas fa-chalkboard-teacher fa-6x text-primary"></i></div>
                                <a href="#" class="h4">Enseignement de Qualité</a>
                                <p class="my-3">Méthodes pédagogiques modernes et personnalisées pour garantir la réussite de chaque élève.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeIn" data-wow-delay="0.3s">
                    <div class="text-center border-primary border bg-white service-item">
                        <div class="service-content d-flex align-items-center justify-content-center p-4">
                            <div class="service-content-inner">
                                <div class="p-4"><i class="fas fa-users fa-6x text-primary"></i></div>
                                <a href="#" class="h4">Encadrement Optimal</a>
                                <p class="my-3">Une équipe pédagogique expérimentée et dévouée pour accompagner chaque enfant.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeIn" data-wow-delay="0.5s">
                    <div class="text-center border-primary border bg-white service-item">
                        <div class="service-content d-flex align-items-center justify-content-center p-4">
                            <div class="service-content-inner">
                                <div class="p-4"><i class="fas fa-home fa-6x text-primary"></i></div>
                                <a href="#" class="h4">Atmosphère Familiale</a>
                                <p class="my-3">Un environnement chaleureux et bienveillant où chaque enfant se sent à l'aise.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeIn" data-wow-delay="0.7s">
                    <div class="text-center border-primary border bg-white service-item">
                        <div class="service-content d-flex align-items-center justify-content-center p-4">
                            <div class="service-content-inner">
                                <div class="p-4"><i class="fas fa-user-graduate fa-6x text-primary"></i></div>
                                <a href="#" class="h4">Suivi Personnalisé</a>
                                <p class="my-3">Un accompagnement individuel pour révéler le potentiel unique de chaque élève.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- Programs Start -->
    <div class="container-fluid program py-5">
        <div class="container py-5">
            <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
                <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">Nos Cycles</h4>
                <h1 class="mb-5 display-3">Du préscolaire au secondaire</h1>
            </div>
            <div class="row g-5 justify-content-center">
                <div class="col-md-6 col-lg-6 col-xl-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="program-item rounded">
                        <div class="program-img position-relative">
                            <div class="overflow-hidden img-border-radius">
                                <img src="{{ asset('gemini/prescolaire.png') }}" class="img-fluid w-100" alt="Préscolaire">
                            </div>
                        </div>
                        <div class="program-text bg-white px-4 pb-3">
                            <div class="program-text-inner">
                                <a href="#" class="h4">Préscolaire</a>
                                <p class="mt-3 mb-0">Éveil et développement des tout-petits dans un environnement ludique et sécurisé.</p>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between px-4 py-2 bg-primary rounded-bottom">
                            <small class="text-white"><i class="fas fa-child me-1"></i> 3-5 ans</small>
                            <small class="text-white"><i class="fas fa-clock me-1"></i> 7h-17h</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4 wow fadeIn" data-wow-delay="0.3s">
                    <div class="program-item rounded">
                        <div class="program-img position-relative">
                            <div class="overflow-hidden img-border-radius">
                                <img src="{{ asset('gemini/primaire.png') }}" class="img-fluid w-100" alt="Primaire">
                            </div>
                        </div>
                        <div class="program-text bg-white px-4 pb-3">
                            <div class="program-text-inner">
                                <a href="#" class="h4">Primaire</a>
                                <p class="mt-3 mb-0">Acquisition des fondamentaux avec une pédagogie active et participative.</p>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between px-4 py-2 bg-primary rounded-bottom">
                            <small class="text-white"><i class="fas fa-graduation-cap me-1"></i> CP-CM2</small>
                            <small class="text-white"><i class="fas fa-clock me-1"></i> 7h-17h</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4 wow fadeIn" data-wow-delay="0.5s">
                    <div class="program-item rounded">
                        <div class="program-img position-relative">
                            <div class="overflow-hidden img-border-radius">
                                <img src="{{ asset('gemini/secondaire.png') }}" class="img-fluid w-100" alt="Secondaire">
                            </div>
                        </div>
                        <div class="program-text bg-white px-4 pb-3">
                            <div class="program-text-inner">
                                <a href="#" class="h4">Secondaire</a>
                                <p class="mt-3 mb-0">Préparation aux examens avec excellence académique et développement personnel.</p>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between px-4 py-2 bg-primary rounded-bottom">
                            <small class="text-white"><i class="fas fa-medal me-1"></i> 6ème-Tle</small>
                            <small class="text-white"><i class="fas fa-clock me-1"></i> 7h-17h</small>
                        </div>
                    </div>
                </div>
                <div class="d-inline-block text-center wow fadeIn" data-wow-delay="0.1s">
                    <a href="{{ route('programs') }}" class="btn btn-primary px-5 py-3 text-white btn-border-radius">Voir tous nos programmes</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Program End -->

    <!-- Summary Section Start -->
    <div class="container-fluid py-5 bg-light">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center wow fadeIn" data-wow-delay="0.1s">
                    <h2 class="text-primary mb-4">Un cadre agréable, moderne et bienveillant pour la réussite et l'épanouissement de vos enfants.</h2>
                    <div class="row g-4 mt-4">
                        <div class="col-md-6">
                            <a href="{{ route('contact') }}" class="btn btn-primary btn-lg px-5 py-3 btn-border-radius w-100">Inscription</a>
                        </div>
                        <div class="col-md-6">
                            <a href="{{ route('about') }}" class="btn btn-outline-primary btn-lg px-5 py-3 btn-border-radius w-100">En savoir plus</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Summary Section End -->

    <!-- Modal Video -->
    <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Vidéo Groupe Scolaire Dubass</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                                allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

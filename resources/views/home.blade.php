@extends('layouts.app')

@section('title', 'Accueil - DUBASS École d\'Excellence et d\'Innovation')

@section('content')
    <!-- Hero Start -->
    <div class="container-fluid py-5" style="background-color: white;">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-7 col-md-12">
                    <div class="d-flex flex-column">
                        <p class="display-4 mb-2" style="color: #2B3D88;">Nous procurons à vos enfants</p>
                        <p class="h1 mb-4" style="color: #2B3D88;">La <span style="color: #CD7F32 !important;">meilleure</span> éducation au <span style="color: #FF0000 !important;">meilleur</span> prix</p>
                    </div>
                    <div>
                        <a href="{{ route('contact') }}" class="btn me-3 mb-2" style="background-color: #CD7F32; color: white; border: none; padding: 12px 30px; border-radius: 5px;">Inscription</a>
                        <a href="{{ route('about') }}" class="btn mb-2" style="background-color: white; color: #2B3D88; border: 2px solid #2B3D88; padding: 10px 30px; border-radius: 5px;">En savoir plus</a>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12">
                    <img src="{{ asset('gemini/herosection.png') }}" class="img-fluid" alt="Groupe Scolaire Dubass">
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
                    <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">Nos Piliers pour l'Excellence</h4>
                    <h1 class="text-dark mb-4 display-5">Les 3 Piliers DUBASS pour votre enfant</h1>
                    <div class="row mb-4">
                        <div class="col-lg-6">
                            <h6 class="mb-3"><i class="fas fa-graduation-cap me-2 text-primary"></i><strong>UN ENSEIGNEMENT DE QUALITÉ</strong></h6>
                            <p class="mb-3 text-muted">Méthodes pédagogiques modernes et personnalisées</p>
                            <h6 class="mb-3"><i class="fas fa-shield-alt me-2 text-primary"></i><strong>UN ENCADREMENT OPTIMAL</strong></h6>
                            <p class="mb-3 text-muted">Effectifs limités, approche individualisée</p>
                        </div>
                        <div class="col-lg-6">
                            <h6 class="mb-3"><i class="fas fa-heart me-2 text-secondary"></i><strong>ATMOSPHÈRE FAMILIALE</strong></h6>
                            <ul class="list-unstyled text-muted">
                                <li>• Classes spacieuses thématiques</li>
                                <li>• Cantine aérée</li>
                                <li>• Clubs & Activités extra-scolaires</li>
                                <li>• Suivi personnalisé</li>
                            </ul>
                        </div>
                    </div>
                    <a href="{{ route('about') }}" class="btn btn-primary px-5 py-3 btn-border-radius">Plus de détails</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

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

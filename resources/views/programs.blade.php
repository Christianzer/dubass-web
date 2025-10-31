@extends('layouts.app')

@section('title', 'Nos programmes - Groupe Scolaire Dubass')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">Nos programmes d'enseignement</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Accueil</a></li>
                    <li class="breadcrumb-item text-white" aria-current="page">Programmes</li>
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
                    <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">Notre Approche Pédagogique</h4>
                    <h2 class="text-dark mb-4 display-5">Un suivi complet de la petite section à la terminale</h2>
                    <p class="text-dark mb-4 fs-5">
                        Le Groupe Scolaire Dubass regroupe trois cycles : le préscolaire, le primaire et le secondaire. Nous assurons un suivi complet et cohérent pour chaque élève tout au long de sa scolarité.
                    </p>
                    <p class="text-dark mb-5">
                        Nos programmes suivent le curriculum du ministère de l'Éducation nationale de Côte d'Ivoire, enrichis par des méthodologies pédagogiques modernes et interactives. Nous intégrons les meilleures pratiques locales et internationales pour favoriser un apprentissage actif et participatif.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Introduction End -->

    <!-- Programs Start -->
    <div class="container-fluid program py-5 bg-light">
        <div class="container py-5">
            <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
                <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">Nos Cycles</h4>
                <h1 class="mb-5 display-3">Trois niveaux d'excellence</h1>
            </div>
            <div class="row g-5 justify-content-center">
                <div class="col-md-6 col-lg-6 col-xl-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="program-item rounded">
                        <div class="program-img position-relative">
                            <div class="overflow-hidden img-border-radius">
                                <img src="{{ asset('gemini/prescolaire.png') }}" class="img-fluid w-100" alt="Préscolaire">
                            </div>
                            <div class="px-4 py-2 bg-primary text-white program-rate">3-5 ans</div>
                        </div>
                        <div class="program-text bg-white px-4 pb-3">
                            <div class="program-text-inner">
                                <a href="#" class="h4">Préscolaire</a>
                                <p class="mt-3 mb-0">Éveil et développement des tout-petits dans un environnement ludique, sécurisé et stimulant. Apprentissage par le jeu et activités sensorielles.</p>
                            </div>
                        </div>
                        <div class="program-teacher d-flex align-items-center border-top border-primary bg-white px-4 py-3">
                            <img src="{{ asset('gemini/logo.png') }}" class="img-fluid rounded-circle p-2 border border-primary bg-white" alt="Logo Groupe Scolaire Dubass" style="width: 70px; height: 70px;">
                            <div class="ms-3">
                                <h6 class="mb-0 text-primary">Équipe Préscolaire</h6>
                                <small>Éducatrices spécialisées</small>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between px-4 py-2 bg-primary rounded-bottom">
                            <small class="text-white"><i class="fas fa-child me-1"></i> Petite/Moyenne/Grande Section</small>
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
                            <div class="px-4 py-2 bg-primary text-white program-rate">6-11 ans</div>
                        </div>
                        <div class="program-text bg-white px-4 pb-3">
                            <div class="program-text-inner">
                                <a href="#" class="h4">Primaire</a>
                                <p class="mt-3 mb-0">Acquisition des fondamentaux : lecture, écriture, calcul. Pédagogie active et participative pour développer la curiosité et l'autonomie.</p>
                            </div>
                        </div>
                        <div class="program-teacher d-flex align-items-center border-top border-primary bg-white px-4 py-3">
                            <img src="{{ asset('gemini/logo.png') }}" class="img-fluid rounded-circle p-2 border border-primary bg-white" alt="Logo Groupe Scolaire Dubass" style="width: 70px; height: 70px;">
                            <div class="ms-3">
                                <h6 class="mb-0 text-primary">Équipe Primaire</h6>
                                <small>Instituteurs qualifiés</small>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between px-4 py-2 bg-primary rounded-bottom">
                            <small class="text-white"><i class="fas fa-graduation-cap me-1"></i> CP au CM2</small>
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
                            <div class="px-4 py-2 bg-primary text-white program-rate">12-18 ans</div>
                        </div>
                        <div class="program-text bg-white px-4 pb-3">
                            <div class="program-text-inner">
                                <a href="#" class="h4">Secondaire</a>
                                <p class="mt-3 mb-0">Préparation aux examens officiels avec excellence académique. Développement de l'esprit critique et orientation professionnelle.</p>
                            </div>
                        </div>
                        <div class="program-teacher d-flex align-items-center border-top border-primary bg-white px-4 py-3">
                            <img src="{{ asset('gemini/logo.png') }}" class="img-fluid rounded-circle p-2 border border-primary bg-white" alt="Logo Groupe Scolaire Dubass" style="width: 70px; height: 70px;">
                            <div class="ms-3">
                                <h6 class="mb-0 text-primary">Équipe Secondaire</h6>
                                <small>Professeurs certifiés</small>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between px-4 py-2 bg-primary rounded-bottom">
                            <small class="text-white"><i class="fas fa-medal me-1"></i> 6ème à Terminale</small>
                            <small class="text-white"><i class="fas fa-clock me-1"></i> 7h-17h</small>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </div>
    <!-- Programs End -->

    <!-- Methodology Start -->
    <div class="container-fluid py-5 methodology-section">
        <div class="container py-5">
            <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
                <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">Notre Méthodologie</h4>
                <h1 class="mb-5 display-3">Une approche pédagogique innovante</h1>
            </div>
            <div class="row g-5 h-100">
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeIn" data-wow-delay="0.1s">
                    <div class="text-center border-primary border bg-white service-item">
                        <div class="service-content d-flex align-items-center justify-content-center p-4">
                            <div class="service-content-inner">
                                <div class="p-4"><i class="fas fa-lightbulb fa-6x text-primary"></i></div>
                                <h4 class="text-primary">Pédagogie internationale</h4>
                                <p class="my-3">Des méthodes axées sur la créativité, la participation et la curiosité intellectuelle.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeIn" data-wow-delay="0.3s">
                    <div class="text-center border-primary border bg-white service-item">
                        <div class="service-content d-flex align-items-center justify-content-center p-4">
                            <div class="service-content-inner">
                                <div class="p-4"><i class="fas fa-layer-group fa-6x text-primary"></i></div>
                                <h4 class="text-primary">Trois cycles d'enseignement</h4>
                                <p class="my-3">Préscolaire, primaire, secondaire pour un parcours éducatif complet et cohérent.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeIn" data-wow-delay="0.5s">
                    <div class="text-center border-primary border bg-white service-item">
                        <div class="service-content d-flex align-items-center justify-content-center p-4">
                            <div class="service-content-inner">
                                <div class="p-4"><i class="fas fa-brain fa-6x text-primary"></i></div>
                                <h4 class="text-primary">Développement des compétences</h4>
                                <p class="my-3">Renforcement des compétences sociales, émotionnelles et cognitives.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeIn" data-wow-delay="0.7s">
                    <div class="text-center border-primary border bg-white service-item">
                        <div class="service-content d-flex align-items-center justify-content-center p-4">
                            <div class="service-content-inner">
                                <div class="p-4"><i class="fas fa-running fa-6x text-primary"></i></div>
                                <h4 class="text-primary">Activités parascolaires</h4>
                                <p class="my-3">Clubs, sports, danse, arts et engagement communautaire pour un développement global.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Methodology End -->

    <!-- Call to Action Start -->
    <div class="container-fluid bg-primary py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center wow fadeIn" data-wow-delay="0.1s">
                    <h2 class="text-white mb-4">Nous proposons également des activités parascolaires variées : clubs, sports, danse, arts et engagement communautaire.</h2>
                    <p class="text-white mb-4 fs-5">Découvrez comment nos programmes peuvent contribuer à l'épanouissement de votre enfant.</p>
                    <div class="row g-4 mt-4">
                        <div class="col-md-6">
                            <a href="{{ route('contact') }}" class="btn btn-light btn-lg px-5 py-3 btn-border-radius w-100">Inscription</a>
                        </div>
                        <div class="col-md-6">
                            <a href="{{ route('about') }}" class="btn btn-outline-light btn-lg px-5 py-3 btn-border-radius w-100">En savoir plus</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Call to Action End -->
@endsection
@extends('layouts.app')

@section('title', 'Le mot des fondateurs - Groupe Scolaire Dubass')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">Le mot des fondateurs</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Accueil</a></li>
                    <li class="breadcrumb-item text-white" aria-current="page">Fondateurs</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Founders Message Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="border border-primary rounded p-4">
                        <img src="{{ asset('img/team-1.jpg') }}" class="img-fluid w-100 rounded" alt="Safoura et Kanvaly FADIGA">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.3s">
                    <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">Message des Fondateurs</h4>
                    <h1 class="text-dark mb-4 display-5">Chers parents, élèves et amis de notre école</h1>
                    <div class="position-relative">
                        <i class="fa fa-quote-left fa-3x text-primary position-absolute" style="top: -10px; left: -10px;"></i>
                        <div class="ps-5">
                            <p class="text-dark mb-4 fs-5">
                                C'est avec une grande fierté et une immense émotion que nous vous adressons ce mot en tant que fondateurs du Groupe Scolaire Dubass.
                            </p>
                            <p class="text-dark mb-4">
                                Il y a quelques années, nous avons rêvé de créer une école qui favoriserait l'excellence, l'inclusion et le développement harmonieux des élèves. Grâce à la confiance des parents et à l'engagement de notre équipe éducative, ce rêve est aujourd'hui une réalité.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Founders Message End -->

    <!-- Vision Section Start -->
    <div class="container-fluid bg-light py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 wow fadeIn" data-wow-delay="0.1s">
                    <div class="text-center mb-5">
                        <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">Notre Vision</h4>
                        <h2 class="display-5 text-dark">Les piliers de notre engagement</h2>
                    </div>
                    
                    <div class="row g-5">
                        <div class="col-md-4 text-center">
                            <div class="bg-white border border-primary rounded p-4 h-100">
                                <i class="fas fa-balance-scale fa-4x text-primary mb-4"></i>
                                <h4 class="text-primary mb-3">Égalité des chances</h4>
                                <p class="text-dark">Nous croyons que chaque enfant mérite les mêmes opportunités de réussir, peu importe son origine.</p>
                            </div>
                        </div>
                        <div class="col-md-4 text-center">
                            <div class="bg-white border border-primary rounded p-4 h-100">
                                <i class="fas fa-star fa-4x text-primary mb-4"></i>
                                <h4 class="text-primary mb-3">Respect des talents</h4>
                                <p class="text-dark">Chaque enfant possède des talents uniques que nous nous efforçons de découvrir et de cultiver.</p>
                            </div>
                        </div>
                        <div class="col-md-4 text-center">
                            <div class="bg-white border border-primary rounded p-4 h-100">
                                <i class="fas fa-trophy fa-4x text-primary mb-4"></i>
                                <h4 class="text-primary mb-3">Excellence académique</h4>
                                <p class="text-dark">Nous visons l'excellence dans tous les aspects de l'éducation pour préparer nos élèves à l'avenir.</p>
                            </div>
                        </div>
                    </div>

                    <div class="text-center mt-5 p-4 bg-white border border-primary rounded">
                        <div class="position-relative">
                            <i class="fa fa-quote-left fa-2x text-primary position-absolute" style="top: 0; left: 20px;"></i>
                            <div class="px-5">
                                <p class="text-dark mb-4 fs-5">
                                    Notre vision repose sur l'égalité des chances, le respect des talents de chaque enfant et l'excellence académique.
                                </p>
                                <p class="text-dark mb-4">
                                    Nous remercions les parents pour leur collaboration et les enseignants pour leur dévouement. Ensemble, nous construisons une communauté éducative solide, humaine et inspirante.
                                </p>
                            </div>
                            <i class="fa fa-quote-right fa-2x text-primary position-absolute" style="bottom: 0; right: 20px;"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Vision Section End -->

    <!-- Signature Section Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center wow fadeIn" data-wow-delay="0.1s">
                    <div class="border border-primary rounded p-5 bg-light">
                        <h4 class="text-primary mb-4">Avec toute notre gratitude et notre engagement,</h4>
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="d-flex align-items-center justify-content-center">
                                    <div class="text-center">
                                        <img src="{{ asset('img/team-1.jpg') }}" class="rounded-circle border border-primary p-2 mb-3" style="width: 100px; height: 100px;" alt="Safoura FADIGA">
                                        <h5 class="text-primary">Safoura FADIGA</h5>
                                        <p class="text-muted">Co-fondatrice</p>
                                        <small class="text-dark">Ingénieur informaticienne et statisticien-économiste</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex align-items-center justify-content-center">
                                    <div class="text-center">
                                        <img src="{{ asset('img/team-2.jpg') }}" class="rounded-circle border border-primary p-2 mb-3" style="width: 100px; height: 100px;" alt="Kanvaly FADIGA">
                                        <h5 class="text-primary">Kanvaly FADIGA</h5>
                                        <p class="text-muted">Co-fondateur</p>
                                        <small class="text-dark">Professeur titulaire en sciences de l'éducation</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4">
                            <h6 class="text-primary">Fondateurs du Groupe Scolaire Dubass</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Signature Section End -->
@endsection
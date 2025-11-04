@extends('layouts.app')

@section('title', 'Le mot des fondateurs - DUBASS École d\'Excellence et d\'Innovation')

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
                                "C'est avec une grande ferveur et une immense émotion que nous vous adressons ce mot en tant que fondateurs de notre école.
                            </p>
                            <p class="text-dark mb-4 fs-5">
                                Il y a quelques années de cela, lorsque nous avons eu l'idée de créer cette école, nous n'aurions jamais pu imaginer à quel point elle allait grandir et prospérer. Aujourd'hui, grâce à l'engagement de notre équipe éducative dévouée et à la confiance que vous, chers parents, nous accordez, nous avons pu réaliser notre rêve d'offrir une éducation de qualité dans un environnement inspirant.
                            </p>
                            <p class="text-dark mb-4 fs-5">
                                Notre école a été fondée sur des valeurs fortes et un engagement indéfectible envers chaque élève qui nous est confié. Nous croyons en l'égalité des chances, en encourageant chaque enfant à découvrir et développer ses talents uniques, tout en leur offrant une formation solide ancrée dans les normes académiques les plus élevées.
                            </p>
                            <p class="text-dark mb-4 fs-5">
                                Au fil des années, nous avons vu nos élèves grandir, s'épanouir et réussir dans de nombreux domaines. Leur curiosité innée, leur esprit critique et leur capacité à collaborer leur permettent de repousser les limites et d'explorer de nouveaux horizons.
                            </p>
                            <p class="text-dark mb-4 fs-5">
                                Mais notre succès ne serait pas possible sans vous, chers parents. Votre confiance et votre soutien inconditionnels sont essentiels pour le développement et l'épanouissement de vos enfants. Nous apprécions énormément votre collaboration et votre participation active dans notre communauté scolaire. Ensemble, nous formons une véritable famille éducative dont l'objectif ultime est de garantir le bien-être et l'épanouissement de chaque enfant.
                            </p>
                            <p class="text-dark mb-4 fs-5">
                                Je tiens également à exprimer ma gratitude envers notre équipe enseignante et tout le personnel de l'école. Leur dévouement, leur passion et leur expertise sont les piliers de notre école. Chaque jour, ils travaillent avec ardeur pour offrir un enseignement de qualité supérieure et assurer le bien-être de nos élèves.
                            </p>
                            <p class="text-dark mb-4 fs-5">
                                En tant que fondateurs, nous sommes profondément reconnaissants de l'opportunité de voir notre école grandir et prospérer, de voir nos élèves s'épanouir et atteindre leurs objectifs. Nous sommes fiers de la communauté dynamique et inclusive que nous avons créé ici et nous sommes honorés d'être à la tête de cette institution de savoir.
                            </p>
                            <p class="text-dark mb-4 fs-5">
                                En conclusion, nous souhaitons exprimer notre gratitude à tous ceux qui ont contribué au succès de notre école - les parents, le personnel, les élèves et nos partenaires. Ensemble, nous continuons à écrire chaque jour une histoire d'excellence et de réussite.
                            </p>
                            <p class="text-dark mb-4 fs-5">
                                Bienvenue à tous dans notre école, où l'apprentissage est une aventure enthousiasmante et où nous croyons en le potentiel illimité de chaque enfant."
                            </p>
                            <p class="text-dark mb-4">
                                <strong>Créé en Octobre 2014</strong> par <strong>Mme Safoura FADIKA</strong> (Première Femme Ingénieur Informaticienne, et Ingénieur Statisticien-Economiste) et le <strong>Professeur Kanvaly FADIGA</strong>.
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
                                    "Notre mission est d'éduquer, d'inspirer et de créer des leaders responsables, compétents et épanouis qui auront un impact positif sur la société en fournissant une éducation de qualité, inclusive et holistique à tous nos élèves."
                                </p>
                                <p class="text-dark mb-4">
                                    DUBASS est un établissement privé, laïc et mixte regroupant le <strong>préscolaire</strong>, le <strong>primaire</strong> et le <strong>secondaire</strong>, garantissant ainsi le suivi et l'accompagnement des élèves tout le long de leur cursus scolaire.
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
                        <h4 class="text-primary mb-4">Sincèrement,</h4>
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="d-flex align-items-center justify-content-center">
                                    <div class="text-center">
                                        <img src="{{ asset('img/team-1.jpg') }}" class="rounded-circle border border-primary p-2 mb-3" style="width: 100px; height: 100px;" alt="Safoura FADIGA">
                                        <h5 class="text-primary">Safoura FADIKA</h5>
                                        <p class="text-muted">Directrice Générale & Co-fondatrice</p>
                                        <small class="text-dark">Première Femme Ingénieur Informaticienne et Ingénieur Statisticien-Economiste</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex align-items-center justify-content-center">
                                    <div class="text-center">
                                        <img src="{{ asset('img/team-2.jpg') }}" class="rounded-circle border border-primary p-2 mb-3" style="width: 100px; height: 100px;" alt="Kanvaly FADIGA">
                                        <h5 class="text-primary">Professeur Kanvaly FADIGA</h5>
                                        <p class="text-muted">Co-fondateur</p>
                                        <small class="text-dark">Professeur Titulaire en Sciences de l'Éducation</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4">
                            <h6 class="text-primary">Safoura et Kanvaly Fadiga</h6>
                            <p class="text-muted small mt-2">Fondateurs de DUBASS - École d'Excellence et d'Innovation</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Signature Section End -->
@endsection
@extends('layouts.app')

@section('title', 'Connexion - Groupe Scolaire Dubass')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">Espace de connexion</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Accueil</a></li>
                    <li class="breadcrumb-item text-white" aria-current="page">Connexion</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Login Section Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="row g-5">
                        <!-- Parents Login -->
                        <div class="col-md-6 wow fadeIn" data-wow-delay="0.1s">
                            <div class="border border-primary rounded p-4 h-100">
                                <div class="text-center mb-4">
                                    <i class="fas fa-users fa-4x text-primary mb-3"></i>
                                    <h3 class="text-primary">Connexion Parents</h3>
                                    <p class="text-muted">Accédez au suivi scolaire de votre enfant</p>
                                </div>
                                
                                <form id="parentLoginForm">
                                    <div class="row g-3">
                                        <div class="col-12">
                                            <div class="form-floating">
                                                <input type="email" class="form-control border-primary" id="parentEmail" name="email" placeholder="Email" required>
                                                <label for="parentEmail">Email / Identifiant</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating">
                                                <input type="password" class="form-control border-primary" id="parentPassword" name="password" placeholder="Mot de passe" required>
                                                <label for="parentPassword">Mot de passe</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="rememberParent">
                                                <label class="form-check-label" for="rememberParent">
                                                    Se souvenir de moi
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-primary w-100 py-3" type="submit">
                                                <i class="fas fa-sign-in-alt me-2"></i>Se connecter
                                            </button>
                                        </div>
                                        <div class="col-12 text-center">
                                            <a href="#" class="text-primary">Mot de passe oublié ?</a>
                                        </div>
                                    </div>
                                </form>

                                <div class="mt-4 p-3 bg-light rounded">
                                    <h6 class="text-primary mb-2">Fonctionnalités parents :</h6>
                                    <ul class="list-unstyled mb-0">
                                        <li><i class="fas fa-check text-success me-2"></i>Suivi des notes</li>
                                        <li><i class="fas fa-check text-success me-2"></i>Cahier de texte</li>
                                        <li><i class="fas fa-check text-success me-2"></i>Absences et retards</li>
                                        <li><i class="fas fa-check text-success me-2"></i>Communication école-famille</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Teachers Login -->
                        <div class="col-md-6 wow fadeIn" data-wow-delay="0.3s">
                            <div class="border border-primary rounded p-4 h-100">
                                <div class="text-center mb-4">
                                    <i class="fas fa-chalkboard-teacher fa-4x text-primary mb-3"></i>
                                    <h3 class="text-primary">Connexion Enseignants</h3>
                                    <p class="text-muted">Accédez à votre espace pédagogique</p>
                                </div>
                                
                                <form id="teacherLoginForm">
                                    <div class="row g-3">
                                        <div class="col-12">
                                            <div class="form-floating">
                                                <input type="email" class="form-control border-primary" id="teacherEmail" name="email" placeholder="Email" required>
                                                <label for="teacherEmail">Email / Identifiant</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating">
                                                <input type="password" class="form-control border-primary" id="teacherPassword" name="password" placeholder="Mot de passe" required>
                                                <label for="teacherPassword">Mot de passe</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="rememberTeacher">
                                                <label class="form-check-label" for="rememberTeacher">
                                                    Se souvenir de moi
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-primary w-100 py-3" type="submit">
                                                <i class="fas fa-sign-in-alt me-2"></i>Se connecter
                                            </button>
                                        </div>
                                        <div class="col-12 text-center">
                                            <a href="#" class="text-primary">Mot de passe oublié ?</a>
                                        </div>
                                    </div>
                                </form>

                                <div class="mt-4 p-3 bg-light rounded">
                                    <h6 class="text-primary mb-2">Fonctionnalités enseignants :</h6>
                                    <ul class="list-unstyled mb-0">
                                        <li><i class="fas fa-check text-success me-2"></i>Gestion des notes</li>
                                        <li><i class="fas fa-check text-success me-2"></i>Planification des cours</li>
                                        <li><i class="fas fa-check text-success me-2"></i>Suivi des élèves</li>
                                        <li><i class="fas fa-check text-success me-2"></i>Communication</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Login Section End -->

    <!-- Help Section Start -->
    <div class="container-fluid bg-light py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center wow fadeIn" data-wow-delay="0.1s">
                    <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">Besoin d'aide ?</h4>
                    <h2 class="text-dark mb-4">Assistance technique</h2>
                    <p class="text-dark mb-4">
                        Si vous rencontrez des difficultés pour vous connecter, notre équipe technique est à votre disposition pour vous aider.
                    </p>
                    
                    <div class="row g-4">
                        <div class="col-md-4">
                            <div class="bg-white border border-primary rounded p-4 h-100">
                                <i class="fas fa-phone fa-3x text-primary mb-3"></i>
                                <h5 class="text-primary">Support téléphonique</h5>
                                <p class="mb-3">Lundi - Vendredi<br>8h00 - 17h00</p>
                                <a href="tel:+2250123456789" class="btn btn-primary">+225 01 23 45 67 89</a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="bg-white border border-primary rounded p-4 h-100">
                                <i class="fas fa-envelope fa-3x text-primary mb-3"></i>
                                <h5 class="text-primary">Support par email</h5>
                                <p class="mb-3">Réponse sous 24h<br>7j/7</p>
                                <a href="mailto:support@dubass.ci" class="btn btn-primary">support@dubass.ci</a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="bg-white border border-primary rounded p-4 h-100">
                                <i class="fas fa-question-circle fa-3x text-primary mb-3"></i>
                                <h5 class="text-primary">FAQ</h5>
                                <p class="mb-3">Réponses aux questions<br>fréquentes</p>
                                <a href="#" class="btn btn-primary">Consulter la FAQ</a>
                            </div>
                        </div>
                    </div>

                    <div class="mt-5 p-4 bg-white border border-primary rounded">
                        <h5 class="text-primary mb-3">Première connexion ?</h5>
                        <p class="text-dark mb-3">
                            Les identifiants de connexion sont communiqués lors de l'inscription. Si vous ne les avez pas reçus ou si vous les avez perdus, contactez le secrétariat de l'école.
                        </p>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <a href="{{ route('contact') }}" class="btn btn-outline-primary w-100">Contacter le secrétariat</a>
                            </div>
                            <div class="col-md-6">
                                <a href="tel:+2250123456789" class="btn btn-primary w-100">Appeler directement</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Help Section End -->

    <script>
        // Basic form handling (placeholder)
        document.getElementById('parentLoginForm').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Fonctionnalité de connexion parents à implémenter');
        });
        
        document.getElementById('teacherLoginForm').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Fonctionnalité de connexion enseignants à implémenter');
        });
    </script>
@endsection
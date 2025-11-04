<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>@yield('title', 'DUBASS - École d\'Excellence et d\'Innovation')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="DUBASS, école excellence, innovation, éducation qualité, formation leaders, Côte d'Ivoire, préscolaire, primaire, secondaire, Safoura FADIKA, Kanvaly FADIGA" name="keywords">
    <meta content="DUBASS - École d'Excellence et d'Innovation. Nous procurons à vos enfants la meilleure éducation au meilleur prix. Fondée en 2014 par Safoura FADIKA et Kanvaly FADIGA." name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@600;700&family=Montserrat:wght@200;400;600&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    
    <!-- Bootstrap Override with DUBASS Colors -->
    <link href="{{ asset('css/bootstrap-override.css') }}" rel="stylesheet">
    
    <!-- DUBASS Custom Styles (Final Override) -->
    <link href="{{ asset('css/ist-dubass.css') }}" rel="stylesheet">
    
    <!-- Icons Fix -->
    <link href="{{ asset('css/icons-fix.css') }}" rel="stylesheet">
    
    <!-- Service Cards Fix -->
    <link href="{{ asset('css/service-cards-fix.css') }}" rel="stylesheet">
    
    <!-- Blue Hover Force -->
    <link href="{{ asset('css/blue-hover-force.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar start -->
    <div class="container-fluid border-bottom bg-light wow fadeIn" data-wow-delay="0.1s">
        <div class="container topbar bg-primary d-none d-lg-block py-2" style="border-radius: 0 40px">
            <div class="d-flex justify-content-between">
                <div class="top-info ps-2">
                    <small class="me-3"><i class="fas fa-map-marker-alt me-2 text-secondary"></i> <a href="#" class="text-white">Abidjan, Côte d'Ivoire</a></small>
                    <small class="me-3"><i class="fas fa-envelope me-2 text-secondary"></i><a href="#" class="text-white">contact@dubass.ci</a></small>
                </div>
                <div class="top-link pe-2">
                    <a href="" class="btn btn-light btn-sm-square rounded-circle"><i class="fab fa-facebook-f text-secondary"></i></a>
                    <a href="" class="btn btn-light btn-sm-square rounded-circle"><i class="fab fa-instagram text-secondary"></i></a>
                    <a href="" class="btn btn-light btn-sm-square rounded-circle me-0"><i class="fab fa-whatsapp text-secondary"></i></a>
                </div>
            </div>
        </div>
        <div class="container px-0">
            <nav class="navbar navbar-light navbar-expand-xl py-3">
                <a href="{{ route('home') }}" class="navbar-brand d-flex align-items-center">
                    <img src="{{ asset('gemini/logo.png') }}" alt="Groupe Scolaire Dubass" class="logo-img me-2">
                    <h1 class="text-primary h3 mb-0">Groupe Scolaire<span class="text-secondary"> Dubass</span></h1>
                </a>
                <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars text-primary"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav mx-auto">
                        <a href="{{ route('home') }}" class="nav-item nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Accueil</a>
                        <a href="{{ route('about') }}" class="nav-item nav-link {{ request()->routeIs('about') ? 'active' : '' }}">À propos de nous</a>
                        <a href="{{ route('mission') }}" class="nav-item nav-link {{ request()->routeIs('mission') ? 'active' : '' }}">Nos objectifs</a>
                        <a href="{{ route('programs') }}" class="nav-item nav-link {{ request()->routeIs('programs') ? 'active' : '' }}">Nos programmes</a>
                        <a href="{{ route('team') }}" class="nav-item nav-link {{ request()->routeIs('team') ? 'active' : '' }}">Notre Équipe</a>
                        <a href="{{ route('contact') }}" class="nav-item nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">Contactez-nous</a>
                    </div>
                    <a href="{{ route('contact') }}" class="btn btn-secondary px-4 py-2 rounded-full font-semibold text-sm">Inscription</a>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->

    @yield('content')

    <!-- Footer Start -->
    <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="footer-item">
                        <div class="d-flex align-items-center mb-3">
                            <img src="{{ asset('gemini/logo.png') }}" alt="Groupe Scolaire Dubass" class="footer-logo me-2">
                            <h2 class="fw-bold mb-0"><span class="text-primary mb-0">Groupe Scolaire</span><span class="text-secondary"> Dubass</span></h2>
                        </div>
                        <p class="mb-4">Notre mission est d'éduquer, d'inspirer et de créer des leaders responsables, compétents et épanouis qui auront un impact positif sur la société en fournissant une éducation de qualité, inclusive et holistique à tous nos élèves.</p>
                        <div class="border border-primary p-3 rounded bg-light">
                            <h5 class="mb-3">Newsletter</h5>
                            <div class="position-relative mx-auto border border-primary rounded" style="max-width: 400px;">
                                <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Votre email">
                                <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2 text-white">S'abonner</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="footer-item">
                        <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">LIENS RAPIDES</h4>
                        <div class="d-flex flex-column align-items-start">
                            <a href="{{ route('home') }}" class="text-body mb-2">Accueil</a>
                            <a href="{{ route('about') }}" class="text-body mb-2">À propos de nous</a>
                            <a href="{{ route('mission') }}" class="text-body mb-2">Nos objectifs</a>
                            <a href="{{ route('programs') }}" class="text-body mb-2">Nos programmes</a>
                            <a href="{{ route('team') }}" class="text-body mb-2">Notre Équipe</a>
                            <a href="{{ route('contact') }}" class="text-body mb-2">Contactez-nous</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="footer-item">
                        <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">CONTACT</h4>
                        <div class="d-flex flex-column align-items-start">
                            <a href="" class="text-body mb-4"><i class="fa fa-map-marker-alt text-primary me-2"></i> Abidjan, Côte d'Ivoire</a>
                            <a href="tel:+2250123456789" class="text-start rounded-0 text-body mb-4"><i class="fa fa-phone-alt text-primary me-2"></i> +225 01 23 45 67 89</a>
                            <a href="mailto:contact@dubass.ci" class="text-start rounded-0 text-body mb-4"><i class="fas fa-envelope text-primary me-2"></i> contact@dubass.ci</a>
                            <a href="" class="text-start rounded-0 text-body mb-4"><i class="fa fa-clock text-primary me-2"></i> Lun-Ven: 7h-17h</a>
                            <div class="footer-icon d-flex">
                                <a class="btn btn-primary btn-sm-square me-3 rounded-circle text-white" href=""><i class="fab fa-facebook-f"></i></a>
                                <a href="#" class="btn btn-primary btn-sm-square me-3 rounded-circle text-white"><i class="fab fa-instagram"></i></a>
                                <a href="#" class="btn btn-primary btn-sm-square rounded-circle text-white"><i class="fab fa-whatsapp"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="footer-item">
                        <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">NOTRE GALERIE</h4>
                        <div class="row g-3">
                            <div class="col-4">
                                <div class="footer-galary-img rounded-circle border border-primary">
                                    <img src="{{ asset('img/galary-1.jpg') }}" class="img-fluid rounded-circle p-2" alt="">
                                </div>
                           </div>
                           <div class="col-4">
                                <div class="footer-galary-img rounded-circle border border-primary">
                                    <img src="{{ asset('img/galary-2.jpg') }}" class="img-fluid rounded-circle p-2" alt="">
                                </div>
                           </div>
                            <div class="col-4">
                                <div class="footer-galary-img rounded-circle border border-primary">
                                    <img src="{{ asset('img/galary-3.jpg') }}" class="img-fluid rounded-circle p-2" alt="">
                                </div>
                           </div>
                            <div class="col-4">
                                <div class="footer-galary-img rounded-circle border border-primary">
                                    <img src="{{ asset('img/galary-4.jpg') }}" class="img-fluid rounded-circle p-2" alt="">
                                </div>
                           </div>
                            <div class="col-4">
                                <div class="footer-galary-img rounded-circle border border-primary">
                                    <img src="{{ asset('img/galary-5.jpg') }}" class="img-fluid rounded-circle p-2" alt="">
                                </div>
                           </div>
                            <div class="col-4">
                                <div class="footer-galary-img rounded-circle border border-primary">
                                    <img src="{{ asset('img/galary-6.jpg') }}" class="img-fluid rounded-circle p-2" alt="">
                                </div>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Copyright Start -->
    <div class="container-fluid copyright bg-dark py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    <span class="text-light">DUBASS - École d'Excellence et d'Innovation – La meilleure éducation au meilleur prix.</span>
                </div>
                <div class="col-md-6 my-auto text-center text-md-end text-white">
                    <span class="text-light">© 2024 DUBASS – Tous droits réservés.</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary border-3 border-primary rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>   
    
    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/lightbox/js/lightbox.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
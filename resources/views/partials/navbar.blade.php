<!-- Navigation -->
<nav class="navbar navbar-light bg-white">
    <div class="container-fluid">
        <!-- Première ligne : Menu de navigation -->
        <div class="w-100 px-5">
            <ul class="navbar-nav d-flex flex-row justify-content-between w-100 px-0">
                <li class="nav-item">
                    <a class="nav-link" href="/about">À propos de nous</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/equipe-dirigeante">Notre équipe dirigeante</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/programs">Nos programmes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/inscription">Inscription</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact">Contactez nous</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/espace-parents">Espace parents</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/espace-enseignants">Espace enseignants</a>
                </li>
            </ul>
        </div>

        <!-- Deuxième ligne : Logo + triangles + connexion -->
        <div class="d-flex justify-content-between align-items-center w-100 px-0 mx-n3">
            <!-- Logo -->
            <div class="d-flex align-items-center">
                <img src="{{ asset('front/logo.png') }}" alt="DUBASS" height="100">
            </div>

            <!-- Triangles au centre -->
            <div class="triangles-container">
                <div class="triangle triangle-blue"></div>
                <div class="triangle triangle-orange"></div>
                <div class="triangle triangle-red"></div>
            </div>

            <!-- Bouton connexion -->
            <button class="btn btn-connexion">
                <i class="fas fa-user"></i>
                Connexion
            </button>
        </div>
    </div>
</nav>
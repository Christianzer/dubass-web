<!-- Navigation Mobile -->
<nav class="navbar-mobile">
    <div class="container-fluid">
        <!-- Header avec logo et hamburger -->
        <div class="mobile-header">
            <img src="{{ asset('front/logo.png') }}" alt="DUBASS" height="50">
            <button class="mobile-menu-toggle" id="mobileMenuToggle">
                <span class="hamburger-line"></span>
                <span class="hamburger-line"></span>
                <span class="hamburger-line"></span>
            </button>
        </div>

        <!-- Menu mobile collapsible -->
        <div class="mobile-menu-collapse" id="mobileMenuCollapse">
            <ul class="mobile-nav-list">
                <li class="mobile-nav-item">
                    <a class="mobile-nav-link" href="/about">À propos de nous</a>
                </li>
                <li class="mobile-nav-item">
                    <a class="mobile-nav-link" href="/equipe-dirigeante">Notre équipe dirigeante</a>
                </li>
                <li class="mobile-nav-item">
                    <a class="mobile-nav-link" href="/programs">Nos programmes</a>
                </li>
                <li class="mobile-nav-item">
                    <a class="mobile-nav-link" href="/valeurs">Nos valeurs</a>
                </li>
                <li class="mobile-nav-item">
                    <a class="mobile-nav-link" href="/objectifs">Nos objectifs</a>
                </li>
            </ul>
            <button class="mobile-btn-connexion">
                <i class="fas fa-user"></i>
                Connexion
            </button>
        </div>
    </div>
</nav>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const toggle = document.getElementById('mobileMenuToggle');
        const menu = document.getElementById('mobileMenuCollapse');
        
        toggle.addEventListener('click', function() {
            toggle.classList.toggle('active');
            menu.classList.toggle('active');
        });
    });
</script>
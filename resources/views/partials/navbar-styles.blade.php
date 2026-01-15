<!-- Navbar Styles -->
<style>
    /* Navbar Desktop - cachée sur mobile */
    .navbar {
        background: white !important;
        z-index: 1000;
    }

    @media (max-width: 768px) {
        .navbar {
            display: none;
        }
    }

    .navbar-nav .nav-link {
        color: #333 !important;
        font-weight: 500;
        transition: color 0.3s ease;
        font-size: 16px;
    }

    .navbar-nav .nav-link:hover {
        color: var(--dubass-blue) !important;
    }

    .btn-connexion {
        background-color: var(--dubass-blue);
        border-color: var(--dubass-blue);
        color: white;
        border-radius: 8px;
    }

    .btn-connexion:hover {
        background-color: #1e2a5f;
        border-color: #1e2a5f;
        color: white;
    }

    .triangle {
        width: 0;
        height: 0;
        border-top: 25px solid transparent;
        border-bottom: 25px solid transparent;
        border-right: 43px solid;
        display: inline-block;
    }

    .triangle-blue {
        border-right-color: var(--dubass-blue);
    }

    .triangle-orange {
        border-right-color: var(--dubass-orange);
    }

    .triangle-red {
        border-right-color: var(--dubass-red);
    }

    .triangles-container {
        display: flex;
        align-items: center;
        gap: 0;
    }
</style>
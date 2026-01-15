<!-- Mobile Navbar Styles -->
<style>
    /* Navbar Mobile - cachée par défaut sur desktop */
    .navbar-mobile {
        display: none;
        background: white;
        box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        position: relative;
        z-index: 1000;
    }

    .mobile-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 1rem;
    }

    .mobile-menu-toggle {
        background: var(--dubass-orange);
        border: none;
        padding: 0.5rem;
        border-radius: 8px;
        cursor: pointer;
        display: flex;
        flex-direction: column;
        justify-content: center;
        width: 40px;
        height: 40px;
        transition: all 0.3s ease;
    }

    .mobile-menu-toggle:focus {
        outline: none;
        box-shadow: 0 0 0 3px rgba(255, 140, 66, 0.3);
    }

    .hamburger-line {
        width: 20px;
        height: 2px;
        background: white;
        margin: 2px 0;
        transition: 0.3s;
        transform-origin: center;
    }

    /* Animation hamburger -> X */
    .mobile-menu-toggle.active .hamburger-line:nth-child(1) {
        transform: rotate(45deg) translate(5px, 5px);
    }

    .mobile-menu-toggle.active .hamburger-line:nth-child(2) {
        opacity: 0;
    }

    .mobile-menu-toggle.active .hamburger-line:nth-child(3) {
        transform: rotate(-45deg) translate(5px, -5px);
    }

    .mobile-menu-collapse {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.3s ease;
        background: white;
    }

    .mobile-menu-collapse.active {
        max-height: 500px;
    }

    .mobile-nav-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .mobile-nav-item {
        border-bottom: 1px solid #f0f0f0;
    }

    .mobile-nav-item:last-child {
        border-bottom: none;
    }

    .mobile-nav-link {
        display: block;
        padding: 1rem 1.5rem;
        color: #333;
        text-decoration: none;
        font-weight: 500;
        font-size: 16px;
        transition: all 0.3s ease;
    }

    .mobile-nav-link:hover {
        background: #f8f9fa;
        color: var(--dubass-blue);
        padding-left: 2rem;
        text-decoration: none;
    }

    .mobile-btn-connexion {
        background-color: var(--dubass-blue);
        border: none;
        color: white;
        padding: 1rem 1.5rem;
        margin: 1rem 1.5rem 1.5rem;
        border-radius: 8px;
        font-weight: 500;
        width: calc(100% - 3rem);
        transition: all 0.3s ease;
    }

    .mobile-btn-connexion:hover {
        background-color: #1e2a5f;
        transform: translateY(-1px);
    }

    /* Afficher seulement sur mobile */
    @media (max-width: 768px) {
        .navbar-mobile {
            display: block;
        }
    }
</style>
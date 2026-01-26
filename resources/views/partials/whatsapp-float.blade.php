{{-- Bouton flottant WhatsApp --}}
<a href="https://wa.me/2250565654394"
   target="_blank"
   rel="noopener noreferrer"
   class="whatsapp-float"
   aria-label="Nous contacter sur WhatsApp">
    <i class="fab fa-whatsapp"></i>
</a>

<style>
    .whatsapp-float {
        position: fixed;
        bottom: 25px;
        right: 25px;
        width: 60px;
        height: 60px;
        background-color: #25D366;
        color: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 32px;
        box-shadow: 0 4px 12px rgba(37, 211, 102, 0.4);
        z-index: 9999;
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .whatsapp-float:hover {
        background-color: #20bd5a;
        color: white;
        transform: scale(1.1);
        box-shadow: 0 6px 20px rgba(37, 211, 102, 0.5);
    }

    .whatsapp-float:active {
        transform: scale(0.95);
    }

    /* Animation pulse subtile */
    .whatsapp-float::before {
        content: '';
        position: absolute;
        width: 100%;
        height: 100%;
        border-radius: 50%;
        background-color: #25D366;
        z-index: -1;
        animation: whatsapp-pulse 2s ease-out infinite;
    }

    @keyframes whatsapp-pulse {
        0% {
            transform: scale(1);
            opacity: 0.5;
        }
        100% {
            transform: scale(1.5);
            opacity: 0;
        }
    }

    /* Responsive - plus petit sur mobile */
    @media (max-width: 768px) {
        .whatsapp-float {
            width: 50px;
            height: 50px;
            font-size: 26px;
            bottom: 20px;
            right: 20px;
        }
    }
</style>

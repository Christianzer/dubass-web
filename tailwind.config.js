/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
    "./storage/framework/views/*.php",
  ],
  theme: {
    extend: {
      colors: {
        // === PALETTE DUBASS STRICTE - UNIQUEMENT 4 COULEURS AUTORISÉES ===
        'dubass-primary': '#2B3D88',    // Bleu Marine (70%)
        'dubass-secondary': '#C25C26',  // Orange Terre Cuite (20%)
        'dubass-danger': '#FF0000',     // Rouge (5% - alertes uniquement)
        'dubass-white': '#FFFFFF',      // Blanc (5% - accents)
        
        // Mapping Tailwind avec UNIQUEMENT les couleurs DUBASS
        primary: {
          50: 'rgba(43, 61, 136, 0.05)',   // Bleu très léger
          100: 'rgba(43, 61, 136, 0.1)',   // Bleu léger
          200: 'rgba(43, 61, 136, 0.2)',   // Bleu clair
          300: 'rgba(43, 61, 136, 0.3)',   // Bleu moyen-clair
          400: 'rgba(43, 61, 136, 0.5)',   // Bleu moyen
          500: 'rgba(43, 61, 136, 0.7)',   // Bleu moyen-foncé
          600: '#2B3D88',                  // COULEUR PRINCIPALE - Bleu Marine
          700: '#1f2c66',                  // Bleu foncé (hover)
          800: '#192347',                  // Bleu très foncé
          900: '#141d2e',                  // Bleu ultra-foncé
        },
        secondary: {
          50: 'rgba(194, 92, 38, 0.05)',   // Orange très léger
          100: 'rgba(194, 92, 38, 0.1)',   // Orange léger
          200: 'rgba(194, 92, 38, 0.2)',   // Orange clair
          300: 'rgba(194, 92, 38, 0.3)',   // Orange moyen-clair
          400: 'rgba(194, 92, 38, 0.5)',   // Orange moyen
          500: 'rgba(194, 92, 38, 0.7)',   // Orange moyen-foncé
          600: '#C25C26',                  // COULEUR SECONDAIRE - Orange Terre Cuite
          700: '#a04920',                  // Orange foncé (hover)
          800: '#803b1a',                  // Orange très foncé
          900: '#663016',                  // Orange ultra-foncé
        },
        danger: {
          50: 'rgba(255, 0, 0, 0.05)',     // Rouge très léger
          100: 'rgba(255, 0, 0, 0.1)',     // Rouge léger
          200: 'rgba(255, 0, 0, 0.2)',     // Rouge clair
          300: 'rgba(255, 0, 0, 0.3)',     // Rouge moyen-clair
          400: 'rgba(255, 0, 0, 0.5)',     // Rouge moyen
          500: 'rgba(255, 0, 0, 0.7)',     // Rouge moyen-foncé
          600: '#FF0000',                  // COULEUR ALERTE - Rouge
          700: '#cc0000',                  // Rouge foncé (hover)
          800: '#990000',                  // Rouge très foncé
          900: '#660000',                  // Rouge ultra-foncé
        },
        white: '#FFFFFF',                  // COULEUR ACCENT - Blanc
        
        // REDIRECTION DE TOUTES LES AUTRES COULEURS VERS LA PALETTE DUBASS
        gray: {
          50: '#FFFFFF',    // Redirigé vers blanc
          100: '#FFFFFF',   // Redirigé vers blanc
          200: '#FFFFFF',   // Redirigé vers blanc
          300: '#2B3D88',   // Redirigé vers bleu marine
          400: '#2B3D88',   // Redirigé vers bleu marine
          500: '#2B3D88',   // Redirigé vers bleu marine
          600: '#2B3D88',   // Redirigé vers bleu marine
          700: '#2B3D88',   // Redirigé vers bleu marine
          800: '#2B3D88',   // Redirigé vers bleu marine
          900: '#2B3D88',   // Redirigé vers bleu marine
        },
        // TOUTES LES AUTRES COULEURS REDIRIGÉES
        blue: '#2B3D88',      // Redirigé vers bleu DUBASS
        green: '#2B3D88',     // Redirigé vers bleu DUBASS
        yellow: '#C25C26',    // Redirigé vers orange DUBASS
        orange: '#C25C26',    // Couleur orange DUBASS
        red: '#FF0000',       // Couleur rouge DUBASS
        purple: '#2B3D88',    // Redirigé vers bleu DUBASS
        pink: '#C25C26',      // Redirigé vers orange DUBASS
        indigo: '#2B3D88',    // Redirigé vers bleu DUBASS
        cyan: '#2B3D88',      // Redirigé vers bleu DUBASS
        teal: '#2B3D88',      // Redirigé vers bleu DUBASS
        emerald: '#2B3D88',   // Redirigé vers bleu DUBASS
        lime: '#C25C26',      // Redirigé vers orange DUBASS
        amber: '#C25C26',     // Redirigé vers orange DUBASS
        sky: '#2B3D88',       // Redirigé vers bleu DUBASS
        violet: '#2B3D88',    // Redirigé vers bleu DUBASS
        fuchsia: '#C25C26',   // Redirigé vers orange DUBASS
        rose: '#C25C26',      // Redirigé vers orange DUBASS
      },
      fontFamily: {
        'inter': ['Inter', 'sans-serif'],
        'sans': ['Inter', 'Poppins', 'Roboto', 'ui-sans-serif', 'system-ui'],
        'title': ['Inter', 'Poppins', 'sans-serif'],
        'body': ['Inter', 'Roboto', 'sans-serif'],
      },
    },
  },
  plugins: [],
}
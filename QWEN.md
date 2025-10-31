# Application Laravel : Dubass Front-End

## Aperçu du projet

Ceci est une application web Laravel nommée "dubass-front", construite à l'aide du framework Laravel 12. C'est une application web PHP moderne qui suit les modèles d'architecture et les conventions de Laravel. Le projet inclut à la fois des composants backend (Laravel) et frontend (Vite + Tailwind CSS), ainsi qu'un template HTML/CSS/JS pour une garderie nommé "BabyCare".

Technologies et fonctionnalités principales :
- Framework Laravel 12
- PHP 8.2+
- Vite pour l'empaquetage des ressources
- Tailwind CSS pour le style
- Architecture basée sur une base de données avec support MySQL
- Tests intégrés avec Pest PHP
- Capacités de traitement de files d'attente
- Support des fonctionnalités en temps réel
- Template HTML "BabyCare" inclus pour site web de garderie (Bootstrap 5, design responsive)

## Structure du projet

```
dubass-front/
├── app/                    # Code source de l'application
│   ├── Http/              # Contrôleurs HTTP, middleware, etc.
│   ├── Models/            # Modèles Eloquent
│   └── Providers/         # Fournisseurs de services
├── bootstrap/             # Fichiers d'amorçage du framework
├── resources/             # Ressources frontend et vues
│   ├── css/              # Fichiers CSS
│   ├── js/               # Fichiers JavaScript
│   └── views/            # Modèles Blade
├── routes/                # Routes de l'application
├── database/              # Migrations, seeds, factories
├── tests/                 # Fichiers de test
├── template/              # Template HTML pour site web de garderie "BabyCare"
├── composer.json          # Dépendances PHP
├── package.json           # Dépendances Node.js
├── vite.config.js         # Configuration de build Vite
└── .env                   # Configuration d'environnement
```

## Construction et exécution

### Installation initiale
```bash
# Installer les dépendances PHP
composer install

# Installer les dépendances Node.js
npm install

# Copier le fichier d'environnement
cp .env.example .env

# Générer la clé de l'application
php artisan key:generate

# Exécuter les migrations de base de données
php artisan migrate

# Compiler les ressources frontend
npm run build
```

### Commandes de développement
```bash
# Exécuter tous les processus de développement simultanément (serveur, file d'attente, vite)
composer run dev

# Ou exécuter des services individuels :
# Démarrer le serveur de développement Laravel
php artisan serve

# Observer et compiler les ressources frontend
npm run dev

# Traiter les jobs en file d'attente
php artisan queue:listen --tries=1
```

### Tests
```bash
# Exécuter tous les tests
composer run test

# Ou exécuter les tests directement
php artisan test
```

### Script d'installation alternatif
Utiliser le script d'installation fourni pour une installation complète :
```bash
composer run setup
```

## Configuration de la base de données

L'application utilise MySQL comme base de données par défaut, mais peut être configurée pour utiliser d'autres backends de base de données. Par défaut, le nom de la base de données est `dubass_front`.

## Pipeline des ressources frontend

- **Outil de build** : Vite
- **Framework CSS** : Tailwind CSS 4.0+
- **Points d'entrée principaux** : `resources/css/app.css` et `resources/js/app.js`

Les ressources frontend sont compilées à l'aide de Vite et du plugin Laravel Vite, ce qui permet des fonctionnalités comme le Hot Module Replacement (HMR) pendant le développement.

## Conventions de développement

- **Normes de codage** : Suit les standards PSR-12 avec les conventions Laravel
- **Tests** : Utilise Pest PHP pour les tests, en suivant les pratiques de test Laravel
- **Formatage de code** : Laravel Pint est inclus pour le formatage automatique du code
- **Injection de dépendances** : Utilise le conteneur de service de Laravel pour l'injection de dépendances
- **Configuration d'environnement** : Utilise des fichiers .env pour la configuration spécifique à l'environnement

## Configuration clé

L'application est configurée via des variables d'environnement définies dans le fichier `.env`. La configuration clé inclut :
- Paramètres de connexion à la base de données
- Configuration du cache et des sessions
- Réglages de messagerie
- Configuration de la file d'attente
- Disques de stockage de fichiers
- Paramètres Redis et Memcached

## Outils et fonctionnalités spéciaux

- Laravel Boost est configuré pour une expérience de développement améliorée
- Laravel Sail peut être utilisé pour un développement basé sur Docker
- Package Collision pour une meilleure détection des erreurs pendant le développement
- Pail pour la fonctionnalité de visualiseur de logs Laravel

## Commandes Artisan Laravel

Quelques commandes utiles pour le développement :
- `php artisan make:model` - Créer de nouveaux modèles Eloquent
- `php artisan make:controller` - Créer de nouveaux contrôleurs HTTP
- `php artisan migrate` - Exécuter les migrations de base de données
- `php artisan db:seed` - Peupler la base de données
- `php artisan serve` - Démarrer le serveur de développement
- `php artisan test` - Exécuter les tests

## Variables d'environnement

Le projet utilise une configuration d'environnement standard Laravel avec les variables suivantes :
- `APP_NAME` - Nom de l'application
- `APP_ENV` - Environnement (local, production, etc.)
- `APP_KEY` - Clé de chiffrement pour l'application
- `DB_*` - Paramètres de connexion à la base de données
- `CACHE_*` - Configuration du stockage de cache
- `SESSION_*` - Configuration de session
- `QUEUE_*` - Configuration de la file d'attente
- `MAIL_*` - Configuration de messagerie
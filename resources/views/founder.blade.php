@extends('layouts.internal')

@section('title', 'Mot du Fondateur - DUBASS - Groupe Scolaire')
@section('page-subtitle', 'LE MOT DES FONDATEURS')

@push('styles')
    <style>
        .founder-section {
            background: #FFFFFF;
            border-left: 2px solid #D0D0D0;
            border-right: 2px solid #D0D0D0;
            position: relative;
            background-image: url("{{ asset('front/professeur.png') }}");
            background-repeat: no-repeat;
            background-position: bottom right;
            background-size: 275px;
        }

        .founder-container {
            max-width: 1400px;
            margin: 0 auto;
            display: flex;
        }

        /* Section Gauche - Texte 65-70% */
        .text-section {
            position: relative;
        }

        /* En-tête MOT DES FONDATEURS */
        .founder-header {
            position: relative;
            padding-top: 35px;
            padding-left: 35px;
        }

        .founder-header::before {
            content: '';
            position: absolute;
            left: 23px;
            top: 35px;
            width: 4px;
            height: 20px;
            background: var(--dubass-blue);
            border-radius: 2px;
        }

        .founder-label {
            font-size: 12px;
            font-weight: 300;
            color: var(--dubass-blue);
            text-transform: uppercase;
            letter-spacing: 4px;
            margin-left: 15px;
        }

        /* Éléments Décoratifs - Points */
        .decorative-dots {
            position: absolute;
            top: 35px;
            right: 45px;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-template-rows: repeat(3, 1fr);
            gap: 12px;
        }

        .dot {
            width: 5px;
            height: 5px;
            background: #AAAAAA;
            border-radius: 50%;
            opacity: 0.65;
        }

        /* Texte Principal */
        .letter-content {

        }

        .greeting {
            font-size: 15px;
            font-weight: 400;
            color: #1A1A1A;
            line-height: 1.3;
            margin-bottom: 15px;
        }

        .letter-paragraph {
            font-size: 14px;
            font-weight: 400;
            color: #1A1A1A;
            line-height: 1.3;
            text-align: justify;
            margin-bottom: 8px;
        }

        .signature-section {
            margin-top: 15px;
            padding-bottom: 35px;
        }

        .signature-closing {
            font-size: 14px;
            color: #1A1A1A;
            margin-bottom: 10px;
        }

        .signature-names {
            font-size: 14px;
            font-weight: 600;
            color: #000000;
            margin-top: 10px;
        }

        /* Section Droite - Photos 30-35% */
        .photos-section {
            width: 30%;
            padding: 35px;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            align-items: center;
        }

        .founders-photos {
            display: flex;
            gap: 15px;
            margin-bottom: 40px;
        }

        .founder-photo {
            width: 45%;
            height: 270px;
            object-fit: cover;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            border-radius: 3px;
        }

        /* Responsive Design */
        @media (max-width: 1200px) {
            .founder-container {
                max-width: 100%;
                padding: 0 1rem;
            }

            .text-section {
                width: 100%;
            }

            .photos-section {
                width: 35%;
                padding: 25px;
            }

            .letter-content {

            }

            .founder-header {
                padding-left: 25px;
            }

            .founder-header::before {
                left: 13px;
            }
        }

        @media (max-width: 768px) {
            .founder-section {
                border-left: none;
                border-right: none;
                min-height: auto;
            }

            .founder-container {
                flex-direction: column;
            }

            .text-section,
            .photos-section {
                width: 100%;
            }

            .letter-content {

            }

            .founder-header {
                padding-left: 20px;
                padding-top: 25px;
            }

            .founder-header::before {
                left: 8px;
                top: 25px;
            }

            .decorative-dots {
                display: none;
            }

            .letter-paragraph {
                font-size: 13px;
            }

            .founders-photos {
                flex-direction: column;
                gap: 20px;
                align-items: center;
            }

            .founder-photo {
                width: 250px;
                height: 300px;
            }

            .photos-section {
                padding: 20px;
                justify-content: center;
            }
        }
    </style>
@endpush

@section('content')
    <section class="founder-section">
        <div class="founder-container">
            <!-- Section Gauche - Texte -->
            <div class="text-section">
                <!-- Contenu de la lettre -->
                <div class="letter-content">
                    <p class="greeting">Chers parents, élèves et amis de notre école,</p>

                    <p class="letter-paragraph">
                        C'est avec une grande fierté et une immense émotion que nous vous adressons ce mot en tant que fondateurs de notre école. Depuis la création de DUBASS en octobre 2014, nous avons eu le privilège de voir grandir une communauté éducative exceptionnelle qui dépasse nos espérances les plus ambitieuses.
                    </p>

                    <p class="letter-paragraph">
                        Il y a quelques années de cela, lorsque nous avons eu l'idée de créer cette école, nous étions animés par une vision simple mais profonde : offrir à chaque enfant les outils nécessaires pour construire un avenir brillant et contribuer positivement à notre société. Cette vision demeure aujourd'hui le cœur battant de notre institution.
                    </p>

                    <p class="letter-paragraph">
                        Notre école a été fondée sur des valeurs fortes et un engagement indéfectible envers l'excellence académique, l'innovation pédagogique et le développement holistique de chaque élève. En tant que première femme Ingénieur Informaticienne et Ingénieur Statisticien-Économiste en Côte d'Ivoire, j'ai voulu transmettre cette passion pour l'excellence et l'innovation à travers notre approche éducative.
                    </p>

                    <p class="letter-paragraph">
                        Au fil des années, nous avons vu nos élèves grandir, apprendre, découvrir leurs talents et développer leur personnalité unique. Chaque sourire, chaque réussite, chaque moment de fierté partagé avec nos élèves renforce notre conviction que l'éducation est véritablement la clé qui ouvre toutes les portes de l'avenir.
                    </p>

                    <p class="letter-paragraph">
                        Mais notre succès ne serait pas possible sans vous, chers parents, qui nous faites confiance et qui partagez notre vision. Votre soutien constant et votre engagement aux côtés de notre équipe pédagogique créent cet environnement unique où chaque enfant peut s'épanouir pleinement.
                    </p>

                    <p class="letter-paragraph">
                        Je tiens également à exprimer ma gratitude envers notre équipe enseignante dévouée, dont l'expertise et la passion font de DUBASS un lieu d'apprentissage stimulant et bienveillant. Leur commitment quotidien envers nos élèves illustre parfaitement nos valeurs de respect, d'humilité, de rigueur et de créativité.
                    </p>

                    <p class="letter-paragraph">
                        En tant que fondateurs, nous sommes profondément reconnaissants de pouvoir contribuer à la formation des citoyens de demain. Chaque jour, nous travaillons avec détermination pour maintenir les plus hauts standards de qualité et continuer à innover pour répondre aux défis éducatifs de notre époque.
                    </p>

                    <p class="letter-paragraph">
                        En conclusion, nous souhaitions exprimer notre gratitude envers toute la communauté DUBASS - élèves, parents, enseignants et staff administratif - qui fait de notre école cette famille unie et dynamique. Ensemble, nous construisons l'avenir de la Côte d'Ivoire en formant les leaders responsables et épanouis de demain.
                    </p>

                    <p class="letter-paragraph">
                        Bienvenue à tous dans notre école, et merci de faire partie de cette belle aventure humaine et éducative.
                    </p>

                    <div class="signature-section">
                        <p class="signature-closing">Sincèrement,</p>
                        <p class="signature-names">Safoura et Kanvaly Fadiga</p>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection

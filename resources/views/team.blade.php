@extends('layouts.internal')

@section('title', 'Notre Équipe Dirigeante - DUBASS')
@section('page-subtitle', 'NOTRE ÉQUIPE DIRIGEANTE')

@push('styles')
    <style>
        .team-page {
            font-family: 'Inter', sans-serif;
            background-color: #FFFFFF;
        }

        .team-container {
            margin: 0 auto;
        }

        /* Header Section */
        .team-header {
            text-align: center;
            margin-bottom: 60px;
        }

        .team-title {
            font-size: 44px;
            font-weight: 700;
            color: #003D82;
            margin: 20px 0;
            line-height: 1.2;
        }

        .team-description {
            font-size: 18px;
            font-weight: 400;
            color: #000000;
            line-height: 1.6;
            margin: 30px auto 60px auto;
            max-width: 800px;
        }

        /* Grid Layout */
        .team-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 40px;
            margin-top: 60px;
        }

        /* Team Card */
        .team-card {
            display: flex;
            flex-direction: column;
            align-items: center;
            position: relative;
        }

        .team-image {
            width: 180px;
            height: 180px;
            background-color: #003D82;
            border-radius: 50%;
            margin-bottom: -30px;
            position: relative;
            z-index: 2;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .team-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 50%;
        }

        .team-image-placeholder {
            color: white;
            font-size: 60px;
        }

        .team-info {
            background-color: #C85A31;
            padding: 40px 20px 20px 20px;
            border-radius: 15px;
            position: relative;
            z-index: 1;
            text-align: center;
            width: 220px;
        }

        .team-name {
            color: white;
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 5px;
        }

        .team-position {
            color: white;
            font-size: 14px;
            font-weight: 400;
            opacity: 0.95;
            margin: 0;
        }

        /* Responsive - Tablet */
        @media (max-width: 1199px) and (min-width: 768px) {
            .team-page {
                padding: 50px 30px;
            }

            .team-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 30px;
                justify-items: center;
            }

            .team-title {
                font-size: 36px;
            }

            .team-description {
                font-size: 16px;
            }
        }

        /* Responsive - Mobile */
        @media (max-width: 767px) {
            .team-page {
                padding: 40px 20px;
            }

            .team-header {
                margin-bottom: 40px;
            }

            .team-title {
                font-size: 28px;
                margin: 15px 0;
            }

            .team-description {
                font-size: 16px;
                margin: 20px auto 40px auto;
            }

            .team-grid {
                grid-template-columns: 1fr;
                gap: 20px;
                margin-top: 40px;
                justify-items: center;
            }

            .team-card {
                margin-bottom: 20px;
            }

            .team-image {
                width: 160px;
                height: 160px;
                margin-bottom: -25px;
            }

            .team-info {
                padding: 35px 20px 20px 20px;
                width: 200px;
            }

            .team-name {
                font-size: 14px;
            }

            .team-position {
                font-size: 13px;
            }

            .team-image-placeholder {
                font-size: 50px;
            }
        }
    </style>
@endpush

@section('content')
<div class="team-page">
    <div class="team-container">
        <!-- Header Section -->
        <div class="team-header">
            <h1 class="team-title">Une équipe dynamique, passionnée et engagée</h1>
            <p class="team-description">
                Le groupe scolaire Dubass est un employeur de premier choix qui attire et fidélise un personnel de qualité centré sur le suivi et l'épanouissement des élèves.
            </p>
        </div>

        <!-- Team Grid -->
        <div class="team-grid">
            <!-- Team Member 1 -->
            <div class="team-card">
                <div class="team-image">
                    <i class="fas fa-user team-image-placeholder"></i>
                    <!-- <img src="{{ asset('front/team/safoura-fadiga.jpg') }}" alt="SAFOURA FADIGA"> -->
                </div>
                <div class="team-info">
                    <h3 class="team-name">SAFOURA FADIGA</h3>
                    <p class="team-position">Directrice Générale</p>
                </div>
            </div>

            <!-- Team Member 2 -->
            <div class="team-card">
                <div class="team-image">
                    <i class="fas fa-user team-image-placeholder"></i>
                    <!-- <img src="{{ asset('front/team/bernard-kablan.jpg') }}" alt="BERNARD KABLAN"> -->
                </div>
                <div class="team-info">
                    <h3 class="team-name">BERNARD KABLAN</h3>
                    <p class="team-position">Primaire et secondaire</p>
                </div>
            </div>

            <!-- Team Member 3 -->
            <div class="team-card">
                <div class="team-image">
                    <i class="fas fa-user team-image-placeholder"></i>
                    <!-- <img src="{{ asset('front/team/anne-agnaman.jpg') }}" alt="ANNE AGNAMAN"> -->
                </div>
                <div class="team-info">
                    <h3 class="team-name">ANNE AGNAMAN</h3>
                    <p class="team-position">Préscolaire</p>
                </div>
            </div>

            <!-- Team Member 4 -->
            <div class="team-card">
                <div class="team-image">
                    <i class="fas fa-user team-image-placeholder"></i>
                    <!-- <img src="{{ asset('front/team/bakayoko-abdoulaye.jpg') }}" alt="BAKAYOKO ABDOULAYE"> -->
                </div>
                <div class="team-info">
                    <h3 class="team-name">BAKAYOKO ABDOULAYE</h3>
                    <p class="team-position">Vie scolaire</p>
                </div>
            </div>
        </div>
    </div>


</div>
@endsection

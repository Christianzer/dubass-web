<!doctype html>
<html lang="fr" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mardi Gras 2026 - DUBASS - Groupe Scolaire</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700;800&family=Nunito:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            box-sizing: border-box;
        }

        .font-display { font-family: 'Playfair Display', serif; }
        .font-body { font-family: 'Nunito', sans-serif; }

        .card-hover {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .card-hover:hover {
            transform: translateY(-4px);
            box-shadow: 0 20px 40px rgba(43, 61, 136, 0.2);
        }

        .accordion-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s ease-out;
        }

        .accordion-content.open {
            max-height: 3000px;
        }

        .rotate-icon {
            transition: transform 0.3s ease;
        }

        .rotate-icon.open {
            transform: rotate(180deg);
        }

        .section-badge {
            animation: pulse-soft 2s infinite;
        }

        @keyframes pulse-soft {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.8; }
        }

        .pattern-overlay {
            background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.05'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        }

        .class-card {
            border-left: 4px solid #c25c26;
        }

        .scroll-indicator {
            animation: bounce 2s infinite;
        }

        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% { transform: translateY(0); }
            40% { transform: translateY(-10px); }
            60% { transform: translateY(-5px); }
        }
    </style>
</head>
<body class="h-full font-body bg-gray-100">
    <div id="app-container" class="h-full w-full overflow-auto">
        <!-- Header Section -->
        <header class="relative overflow-hidden bg-[#2b3d88] bg-gradient-to-br from-[#2b3d88] via-[#1e2d66] to-[#2b3d88] pattern-overlay">
            <div class="absolute top-0 left-0 w-full h-full opacity-10">
                <div class="absolute top-10 left-10 w-20 h-20 rounded-full bg-white"></div>
                <div class="absolute top-20 right-20 w-32 h-32 rounded-full bg-[#c25c26]"></div>
                <div class="absolute bottom-10 left-1/3 w-16 h-16 rounded-full bg-red-500"></div>
            </div>
            <div class="relative z-10 px-4 py-8 md:py-12 text-center">
                <div class="flex justify-center gap-2 mb-4">
                    <span class="text-3xl">🎭</span>
                    <span class="text-3xl">🎉</span>
                    <span class="text-3xl">🌍</span>
                </div>
                <h1 class="font-display text-3xl md:text-5xl font-bold mb-3 drop-shadow-lg text-white">Fête du Mardi Gras 2026</h1>
                <p class="text-lg md:text-xl font-medium mb-4 text-white/90">Groupe Scolaire DUBASS</p>
                <div class="inline-flex items-center gap-2 bg-white/20 backdrop-blur-sm px-4 py-2 rounded-full">
                    <span class="text-2xl">👗</span>
                    <span class="font-semibold text-white">Brassage culturel des pays africains</span>
                    <span class="text-2xl">👔</span>
                </div>
                <div class="mt-6 scroll-indicator">
                    <svg class="w-6 h-6 mx-auto text-white/70" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                    </svg>
                </div>
            </div>
        </header>

        <!-- Main Content -->
        <main class="max-w-4xl mx-auto px-4 py-8">
            <!-- Info Banner -->
            <div class="bg-gradient-to-r from-[#c25c26]/10 to-[#2b3d88]/10 border border-[#c25c26]/30 rounded-2xl p-4 mb-8 flex items-start gap-3">
                <span class="text-2xl flex-shrink-0">📋</span>
                <div>
                    <p class="text-[#2b3d88] font-semibold mb-1">Information importante</p>
                    <p class="text-gray-600 text-sm">Veuillez consulter les tenues spécifiques à chaque classe. Les modèles sont généralement au choix des parents, sauf instructions contraires.</p>
                </div>
            </div>

            <!-- Sections -->
            <div class="space-y-6">
                <!-- MATERNELLE Section -->
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden card-hover">
                    <button onclick="toggleAccordion('maternelle')" class="w-full px-6 py-5 flex items-center justify-between bg-gradient-to-r from-[#2b3d88] to-[#3a4f9e] text-white focus:outline-none">
                        <div class="flex items-center gap-4">
                            <span class="section-badge bg-white/20 p-3 rounded-xl text-2xl">🎨</span>
                            <div class="text-left">
                                <h2 class="font-display text-xl md:text-2xl font-bold">MATERNELLE</h2>
                                <p class="text-white/80 text-sm">TPS, PS, MS, GS</p>
                            </div>
                        </div>
                        <svg id="icon-maternelle" class="w-6 h-6 rotate-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div id="content-maternelle" class="accordion-content">
                        <div class="p-4 md:p-6 space-y-4 bg-gray-50">
                            <!-- TPS/PS Maîtresse Blandine -->
                            <div class="class-card bg-white rounded-xl p-4 shadow-sm">
                                <div class="flex flex-wrap items-center gap-2 mb-3">
                                    <span class="bg-[#c25c26] text-white text-xs font-bold px-3 py-1 rounded-full uppercase">TPS / PS</span>
                                    <span class="text-gray-500 text-sm font-medium">Classe de Maîtresse Blandine</span>
                                </div>
                                <div class="flex items-center gap-2 mb-3">
                                    <span class="text-xl">🇨🇮</span>
                                    <span class="font-semibold text-[#2b3d88]">Côte d'Ivoire</span>
                                </div>
                                <div class="grid md:grid-cols-2 gap-3">
                                    <div class="bg-pink-50 rounded-lg p-3 border border-pink-100">
                                        <p class="font-bold text-pink-700 mb-1">👧 Filles</p>
                                        <p class="text-gray-700 text-sm">Tenue traditionnelle BÉTÉ de l'Ouest avec chaussures traditionnelles et pagne « Allons à Gagnoa ». Modèle au choix.</p>
                                    </div>
                                    <div class="bg-blue-50 rounded-lg p-3 border border-blue-100">
                                        <p class="font-bold text-blue-700 mb-1">👦 Garçons</p>
                                        <p class="text-gray-700 text-sm">Tenue traditionnelle BÉTÉ de l'Ouest avec chaussures traditionnelles et pagne « Allons à Gagnoa ». Modèle au choix.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- PS Maîtresse Joëlle -->
                            <div class="class-card bg-white rounded-xl p-4 shadow-sm">
                                <div class="flex flex-wrap items-center gap-2 mb-3">
                                    <span class="bg-[#c25c26] text-white text-xs font-bold px-3 py-1 rounded-full uppercase">PS</span>
                                    <span class="text-gray-500 text-sm font-medium">Classe de Maîtresse Joëlle</span>
                                </div>
                                <div class="flex items-center gap-2 mb-3">
                                    <span class="text-xl">🇸🇳</span>
                                    <span class="font-semibold text-[#2b3d88]">Sénégal</span>
                                </div>
                                <div class="grid md:grid-cols-2 gap-3">
                                    <div class="bg-pink-50 rounded-lg p-3 border border-pink-100">
                                        <p class="font-bold text-pink-700 mb-1">👧 Filles</p>
                                        <p class="text-gray-700 text-sm">Tunique sénégalaise avec foulard sur la tête (couleur au choix du parent) et chaussures au choix.</p>
                                    </div>
                                    <div class="bg-blue-50 rounded-lg p-3 border border-blue-100">
                                        <p class="font-bold text-blue-700 mb-1">👦 Garçons</p>
                                        <p class="text-gray-700 text-sm">Tunique sénégalaise avec pantalon (couleur au choix du parent) et chaussures au choix.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- MS Maîtresse Koné -->
                            <div class="class-card bg-white rounded-xl p-4 shadow-sm">
                                <div class="flex flex-wrap items-center gap-2 mb-3">
                                    <span class="bg-[#c25c26] text-white text-xs font-bold px-3 py-1 rounded-full uppercase">MS</span>
                                    <span class="text-gray-500 text-sm font-medium">Classe de Maîtresse Koné</span>
                                </div>
                                <div class="flex items-center gap-2 mb-3">
                                    <span class="text-xl">🇳🇬</span>
                                    <span class="font-semibold text-[#2b3d88]">Nigéria</span>
                                </div>
                                <div class="grid md:grid-cols-2 gap-3">
                                    <div class="bg-pink-50 rounded-lg p-3 border border-pink-100">
                                        <p class="font-bold text-pink-700 mb-1">👧 Filles</p>
                                        <p class="text-gray-700 text-sm">Tenue Yoruba avec foulard, accessoires blancs et chaussures traditionnelles (couleur au choix).</p>
                                    </div>
                                    <div class="bg-blue-50 rounded-lg p-3 border border-blue-100">
                                        <p class="font-bold text-blue-700 mb-1">👦 Garçons</p>
                                        <p class="text-gray-700 text-sm">Tenue Yoruba avec pantalon, chapeau, canne et accessoires blancs, accompagnés de chaussures traditionnelles.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- MS/GS Maîtresse Marina -->
                            <div class="class-card bg-white rounded-xl p-4 shadow-sm">
                                <div class="flex flex-wrap items-center gap-2 mb-3">
                                    <span class="bg-[#c25c26] text-white text-xs font-bold px-3 py-1 rounded-full uppercase">MS / GS</span>
                                    <span class="text-gray-500 text-sm font-medium">Classe de Maîtresse Marina</span>
                                </div>
                                <div class="flex items-center gap-2 mb-3">
                                    <span class="text-xl">🇹🇬</span>
                                    <span class="font-semibold text-[#2b3d88]">Togo</span>
                                </div>
                                <div class="grid md:grid-cols-2 gap-3">
                                    <div class="bg-pink-50 rounded-lg p-3 border border-pink-100">
                                        <p class="font-bold text-pink-700 mb-1">👧 Filles</p>
                                        <p class="text-gray-700 text-sm">Robe en dentelle blanche à manches longues (au genou), foulard (Guélé) avec bande assortie à la taille (couleur au choix) et ballerines noires.</p>
                                    </div>
                                    <div class="bg-blue-50 rounded-lg p-3 border border-blue-100">
                                        <p class="font-bold text-blue-700 mb-1">👦 Garçons</p>
                                        <p class="text-gray-700 text-sm">Tunique et pantalon en dentelle blanche, chapeau togolais et chaussures noires.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- GS Maîtresse Anne -->
                            <div class="class-card bg-white rounded-xl p-4 shadow-sm">
                                <div class="flex flex-wrap items-center gap-2 mb-3">
                                    <span class="bg-[#c25c26] text-white text-xs font-bold px-3 py-1 rounded-full uppercase">GS</span>
                                    <span class="text-gray-500 text-sm font-medium">Classe de Maîtresse Anne</span>
                                </div>
                                <div class="flex items-center gap-2 mb-3">
                                    <span class="text-xl">🇲🇱</span>
                                    <span class="font-semibold text-[#2b3d88]">Mali</span>
                                </div>
                                <div class="grid md:grid-cols-2 gap-3">
                                    <div class="bg-pink-50 rounded-lg p-3 border border-pink-100">
                                        <p class="font-bold text-pink-700 mb-1">👧 Filles</p>
                                        <p class="text-gray-700 text-sm">Boubou modèle « Makeba » de couleur bleue, coiffure traditionnelle malienne et ballerines noires.</p>
                                    </div>
                                    <div class="bg-blue-50 rounded-lg p-3 border border-blue-100">
                                        <p class="font-bold text-blue-700 mb-1">👦 Garçons</p>
                                        <p class="text-gray-700 text-sm">Boubou et pantalon de couleur bleue avec chaussures noires.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- PRIMAIRE Section -->
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden card-hover">
                    <button onclick="toggleAccordion('primaire')" class="w-full px-6 py-5 flex items-center justify-between bg-gradient-to-r from-[#c25c26] to-[#d97b4a] text-white focus:outline-none">
                        <div class="flex items-center gap-4">
                            <span class="section-badge bg-white/20 p-3 rounded-xl text-2xl">📚</span>
                            <div class="text-left">
                                <h2 class="font-display text-xl md:text-2xl font-bold">PRIMAIRE</h2>
                                <p class="text-white/80 text-sm">CP1 à CM2</p>
                            </div>
                        </div>
                        <svg id="icon-primaire" class="w-6 h-6 rotate-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div id="content-primaire" class="accordion-content">
                        <div class="p-4 md:p-6 space-y-4 bg-gray-50">
                            <!-- CP1 A -->
                            <div class="class-card bg-white rounded-xl p-4 shadow-sm">
                                <div class="flex flex-wrap items-center gap-2 mb-3">
                                    <span class="bg-[#2b3d88] text-white text-xs font-bold px-3 py-1 rounded-full">CP1 A</span>
                                    <span class="text-xl">🇨🇮</span>
                                    <span class="font-semibold text-[#2b3d88]">Côte d'Ivoire (Akan)</span>
                                </div>
                                <div class="grid md:grid-cols-2 gap-3">
                                    <div class="bg-pink-50 rounded-lg p-3">
                                        <p class="font-bold text-pink-700 mb-1">👧 Filles</p>
                                        <p class="text-gray-700 text-sm">Pagne Baoulé et haut blanc. Chaussures traditionnelles.</p>
                                    </div>
                                    <div class="bg-blue-50 rounded-lg p-3">
                                        <p class="font-bold text-blue-700 mb-1">👦 Garçons</p>
                                        <p class="text-gray-700 text-sm">Culotte en pagne et haut blanc. Chaussures traditionnelles.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- CP1 B -->
                            <div class="class-card bg-white rounded-xl p-4 shadow-sm">
                                <div class="flex flex-wrap items-center gap-2 mb-3">
                                    <span class="bg-[#2b3d88] text-white text-xs font-bold px-3 py-1 rounded-full">CP1 B</span>
                                    <span class="text-xl">🇨🇮</span>
                                    <span class="font-semibold text-[#2b3d88]">Côte d'Ivoire (Sénoufo)</span>
                                </div>
                                <p class="text-gray-700 text-sm bg-gray-100 rounded-lg p-3 italic">Tenue traditionnelle Sénoufo pour filles et garçons.</p>
                            </div>

                            <!-- CP2 A -->
                            <div class="class-card bg-white rounded-xl p-4 shadow-sm">
                                <div class="flex flex-wrap items-center gap-2 mb-3">
                                    <span class="bg-[#2b3d88] text-white text-xs font-bold px-3 py-1 rounded-full">CP2 A</span>
                                    <span class="text-xl">🇳🇬</span>
                                    <span class="font-semibold text-[#2b3d88]">Nigéria</span>
                                </div>
                                <div class="grid md:grid-cols-2 gap-3">
                                    <div class="bg-pink-50 rounded-lg p-3">
                                        <p class="font-bold text-pink-700 mb-1">👧 Filles</p>
                                        <p class="text-gray-700 text-sm">Robe avec coiffe sur la tête.</p>
                                    </div>
                                    <div class="bg-blue-50 rounded-lg p-3">
                                        <p class="font-bold text-blue-700 mb-1">👦 Garçons</p>
                                        <p class="text-gray-700 text-sm">Ensemble tunique avec chapeau et canne.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- CP2 B -->
                            <div class="class-card bg-white rounded-xl p-4 shadow-sm">
                                <div class="flex flex-wrap items-center gap-2 mb-3">
                                    <span class="bg-[#2b3d88] text-white text-xs font-bold px-3 py-1 rounded-full">CP2 B</span>
                                    <span class="text-xl">🇨🇮</span>
                                    <span class="font-semibold text-[#2b3d88]">Côte d'Ivoire (Baoulé)</span>
                                </div>
                                <p class="text-gray-700 text-sm bg-gray-100 rounded-lg p-3 italic">Tenue Baoulé traditionnelle pour filles et garçons.</p>
                            </div>

                            <!-- CE1 A -->
                            <div class="class-card bg-white rounded-xl p-4 shadow-sm">
                                <div class="flex flex-wrap items-center gap-2 mb-3">
                                    <span class="bg-[#2b3d88] text-white text-xs font-bold px-3 py-1 rounded-full">CE1 A</span>
                                    <span class="text-xl">🇨🇮</span>
                                    <span class="font-semibold text-[#2b3d88]">Côte d'Ivoire (Guéré)</span>
                                </div>
                                <div class="grid md:grid-cols-2 gap-3">
                                    <div class="bg-pink-50 rounded-lg p-3">
                                        <p class="font-bold text-pink-700 mb-1">👧 Filles</p>
                                        <p class="text-gray-700 text-sm">Tenue Guéré avec colliers en cauris. Chaussures traditionnelles Guéré.</p>
                                    </div>
                                    <div class="bg-blue-50 rounded-lg p-3">
                                        <p class="font-bold text-blue-700 mb-1">👦 Garçons</p>
                                        <p class="text-gray-700 text-sm">Boubou Guéré avec chapeau. Chaussures traditionnelles Guéré.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- CE1 B -->
                            <div class="class-card bg-white rounded-xl p-4 shadow-sm">
                                <div class="flex flex-wrap items-center gap-2 mb-3">
                                    <span class="bg-[#2b3d88] text-white text-xs font-bold px-3 py-1 rounded-full">CE1 B</span>
                                    <span class="text-xl">🇨🇲</span>
                                    <span class="font-semibold text-[#2b3d88]">Cameroun</span>
                                </div>
                                <div class="grid md:grid-cols-2 gap-3">
                                    <div class="bg-pink-50 rounded-lg p-3">
                                        <p class="font-bold text-pink-700 mb-1">👧 Filles</p>
                                        <p class="text-gray-700 text-sm">Tenue camerounaise.</p>
                                    </div>
                                    <div class="bg-blue-50 rounded-lg p-3">
                                        <p class="font-bold text-blue-700 mb-1">👦 Garçons</p>
                                        <p class="text-gray-700 text-sm">Tenue Danchiki (boubou des chefs).</p>
                                    </div>
                                </div>
                            </div>

                            <!-- CE2 A & B -->
                            <div class="class-card bg-white rounded-xl p-4 shadow-sm">
                                <div class="flex flex-wrap items-center gap-2 mb-3">
                                    <span class="bg-[#2b3d88] text-white text-xs font-bold px-3 py-1 rounded-full uppercase">CE2 A & CE2 B</span>
                                    <span class="text-xl">🇸🇳</span>
                                    <span class="font-semibold text-[#2b3d88]">Sénégal</span>
                                </div>
                                <p class="text-gray-700 text-sm bg-gray-100 rounded-lg p-3 border-l-2 border-[#2b3d88]">Modèle de robe africaine pour les filles et modèle homme pour les garçons, au choix des parents.</p>
                            </div>

                            <!-- CM1 -->
                            <div class="class-card bg-white rounded-xl p-4 shadow-sm">
                                <div class="flex flex-wrap items-center gap-2 mb-3">
                                    <span class="bg-[#2b3d88] text-white text-xs font-bold px-3 py-1 rounded-full uppercase">CM1</span>
                                    <span class="text-xl">🇹🇬</span>
                                    <span class="text-xl">🇳🇬</span>
                                    <span class="font-semibold text-[#2b3d88]">Togo / Nigéria</span>
                                </div>
                                <div class="space-y-3">
                                    <div class="bg-orange-50 rounded-lg p-3 border border-orange-100">
                                        <p class="font-bold text-[#c25c26] mb-1">🇹🇬 Togo</p>
                                        <p class="text-gray-700 text-sm">Robe togolaise pour les filles et tenue homme togolaise pour les garçons.</p>
                                    </div>
                                    <div class="bg-green-50 rounded-lg p-3 border border-green-100">
                                        <p class="font-bold text-green-700 mb-1">🇳🇬 Nigéria (Yoruba)</p>
                                        <div class="grid md:grid-cols-2 gap-2 mt-2">
                                            <p class="text-gray-700 text-sm"><span class="font-bold">Filles:</span> Robe Isiazu rouge.</p>
                                            <p class="text-gray-700 text-sm"><span class="font-bold">Garçons:</span> Tenue avec chapeau et canne.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- CM2 -->
                            <div class="class-card bg-white rounded-xl p-4 shadow-sm">
                                <div class="flex flex-wrap items-center gap-2 mb-3">
                                    <span class="bg-[#2b3d88] text-white text-xs font-bold px-3 py-1 rounded-full uppercase">CM2</span>
                                    <span class="text-xl">🇬🇭</span>
                                    <span class="font-semibold text-[#2b3d88]">Ghana</span>
                                </div>
                                <div class="grid md:grid-cols-2 gap-3">
                                    <div class="bg-pink-50 rounded-lg p-3">
                                        <p class="font-bold text-pink-700 mb-1">👧 Filles</p>
                                        <p class="text-gray-700 text-sm">Pagne coloré (rouge et jaune) avec foulard.</p>
                                    </div>
                                    <div class="bg-blue-50 rounded-lg p-3">
                                        <p class="font-bold text-blue-700 mb-1">👦 Garçons</p>
                                        <p class="text-gray-700 text-sm">Habillé en roi avec une canne.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- SECONDAIRE Section -->
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden card-hover">
                    <button onclick="toggleAccordion('secondaire')" class="w-full px-6 py-5 flex items-center justify-between bg-gradient-to-r from-red-600 to-red-500 text-white focus:outline-none">
                        <div class="flex items-center gap-4">
                            <span class="section-badge bg-white/20 p-3 rounded-xl text-2xl">🎓</span>
                            <div class="text-left">
                                <h2 class="font-display text-xl md:text-2xl font-bold">SECONDAIRE</h2>
                                <p class="text-white/80 text-sm">6ème à 4ème</p>
                            </div>
                        </div>
                        <svg id="icon-secondaire" class="w-6 h-6 rotate-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div id="content-secondaire" class="accordion-content">
                        <div class="p-4 md:p-6 space-y-3 bg-gray-50">
                            <!-- 6ème 1 -->
                            <div class="class-card bg-white rounded-xl p-4 shadow-sm border-l-red-600">
                                <div class="flex items-center gap-2 mb-2">
                                    <span class="bg-red-600 text-white text-xs font-bold px-3 py-1 rounded-full">6ème 1</span>
                                    <span class="text-xl">🇲🇦</span>
                                    <span class="font-bold text-[#2b3d88]">Maroc</span>
                                </div>
                                <p class="text-gray-700 text-sm">Tenue marocaine pour filles et garçons.</p>
                            </div>
                            <!-- 6ème 2 -->
                            <div class="class-card bg-white rounded-xl p-4 shadow-sm border-l-red-600">
                                <div class="flex items-center gap-2 mb-2">
                                    <span class="bg-red-600 text-white text-xs font-bold px-3 py-1 rounded-full">6ème 2</span>
                                    <span class="text-xl">🇨🇮</span>
                                    <span class="font-bold text-[#2b3d88]">Côte d'Ivoire</span>
                                </div>
                                <p class="text-gray-700 text-sm">Tenue ivoirienne pour filles et garçons.</p>
                            </div>
                            <!-- 5ème 1 -->
                            <div class="class-card bg-white rounded-xl p-4 shadow-sm border-l-red-600">
                                <div class="flex items-center gap-2 mb-2">
                                    <span class="bg-red-600 text-white text-xs font-bold px-3 py-1 rounded-full">5ème 1</span>
                                    <span class="text-xl">🇲🇦</span>
                                    <span class="font-bold text-[#2b3d88]">Maroc</span>
                                </div>
                                <p class="text-gray-700 text-sm">Tenue marocaine pour filles et garçons.</p>
                            </div>
                            <!-- 5ème 2 & 4ème -->
                            <div class="class-card bg-white rounded-xl p-4 shadow-sm border-l-red-600">
                                <div class="flex items-center gap-2 mb-2">
                                    <span class="bg-red-600 text-white text-xs font-bold px-3 py-1 rounded-full">5ème 2 & 4ème</span>
                                    <span class="font-bold text-[#2b3d88]">Tenue Akan</span>
                                </div>
                                <p class="text-gray-700 text-sm">Tenue Akan traditionnelle pour filles et garçons.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <footer class="mt-12 text-center">
                <div class="bg-gradient-to-r from-[#2b3d88]/5 via-[#c25c26]/5 to-red-500/5 rounded-2xl p-6 border border-gray-200">
                    <div class="flex justify-center gap-4 mb-4">
                        <span class="text-3xl">🎭</span>
                        <span class="text-3xl">🌍</span>
                        <span class="text-3xl">✨</span>
                    </div>
                    <p class="text-[#2b3d88] font-bold text-lg mb-2">Vive le brassage culturel africain !</p>
                    <p class="text-gray-600 text-sm">Pour toute précision complémentaire, n'hésitez pas à vous rapprocher de l'administration.</p>
                </div>
                <p class="text-gray-400 text-xs mt-6 uppercase tracking-widest font-bold">© 2026 - Groupe Scolaire DUBASS</p>
            </footer>
        </main>
    </div>

    <script>
        function toggleAccordion(section) {
            const content = document.getElementById(`content-${section}`);
            const icon = document.getElementById(`icon-${section}`);

            const isOpen = content.classList.contains('open');

            // Fermer tous les autres accordéons
            document.querySelectorAll('.accordion-content').forEach(c => c.classList.remove('open'));
            document.querySelectorAll('.rotate-icon').forEach(i => i.classList.remove('open'));

            if (!isOpen) {
                content.classList.add('open');
                icon.classList.add('open');
            }
        }
    </script>
</body>
</html>

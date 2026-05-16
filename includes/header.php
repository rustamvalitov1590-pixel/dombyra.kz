<!DOCTYPE html>
<html lang="ru" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title><?php echo isset($pageTitle) ? $pageTitle : 'Купить казахскую домбру ручной работы | Мастерская dombyra.kz'; ?></title>
    <meta name="description"
        content="<?php echo isset($pageDescription) ? $pageDescription : 'Dombyra.kz — это традиции и современный дизайн. Оригинальные домбры ручной работы от мастеров с 1998 года. Доставка по РК, курс Айым Эрнст и сертификат подлинности.'; ?>">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&family=Outfit:wght@100..900&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            gold: '#C5A377',    // Мягкое золото
                            goldLight: '#E2D1B9',
                            cream: '#FAF9F6',   // Воздушный фон
                            dark: '#3A3530',    // Мягкий коричневый
                            clay: '#8C7B6C',    // Цвет дерева
                            accent: '#F3F0E9',  // Вторичный фон
                            white: '#FFFFFF'
                        }
                    },
                    fontFamily: {
                        sans: ['Outfit', 'sans-serif'],
                        serif: ['Lora', 'serif'],
                    },
                    borderRadius: {
                        '4xl': '2.5rem',
                        '5xl': '3.5rem',
                    }
                }
            }
        }
    </script>
    <style>
        :root {
            --glass-bg: rgba(255, 255, 255, 0.92);
            --glass-border: rgba(160, 120, 70, 0.15);
            --soft-gradient: linear-gradient(135deg, #FAF9F6 0%, #F3F0E9 100%);
            --gold-gradient: linear-gradient(135deg, #C5A377 0%, #A6875A 100%);
        }

        body {
            font-family: 'Outfit', sans-serif;
            background-color: #FAF9F6;
            color: #3A3530;
            -webkit-tap-highlight-color: transparent;
        }

        .glass-card {
            background: var(--glass-bg);
            backdrop-filter: blur(25px);
            -webkit-backdrop-filter: blur(25px);
            border: 1px solid var(--glass-border);
            box-shadow: 0 4px 24px rgba(100, 70, 20, 0.10), 0 1px 4px rgba(100,70,20,0.06);
        }

        .card-shadow {
            box-shadow: 0 25px 60px rgba(0, 71, 171, 0.03);
        }

        /* Cinema Hero Effect */
        @keyframes kenBurns {
            0% { transform: scale(1); }
            100% { transform: scale(1.1); }
        }
        .cinema-bg {
            animation: kenBurns 20s linear infinite alternate;
        }

        /* Infinite Marquee */
        .marquee-wrapper {
            background: #C5A377;
            padding: 18px 0;
            overflow: hidden;
            position: relative;
            z-index: 20;
            width: 100%;
            display: flex;
            border-top: 1px solid rgba(255,255,255,0.1);
            border-bottom: 1px solid rgba(255,255,255,0.1);
        }
        .marquee-content {
            display: flex;
            width: max-content;
            animation: marquee 60s linear infinite;
            will-change: transform;
        }
        .marquee-track {
            display: flex;
            flex-shrink: 0;
        }
        .marquee-track span {
            font-family: 'Outfit', sans-serif;
            font-weight: 800;
            font-size: 14px;
            letter-spacing: 0.15em;
            color: #FFFFFF;
            padding: 0 40px;
            text-transform: uppercase;
            white-space: nowrap;
            display: flex;
            align-items: center;
        }
        @keyframes marquee {
            0% { transform: translateX(0); }
            100% { transform: translateX(-50%); }
        }

        /* Modal / Popup Styles */
        .modal-overlay {
            position: fixed;
            inset: 0;
            background: rgba(58, 53, 48, 0.4);
            backdrop-filter: blur(15px);
            z-index: 200;
            display: none;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.5s ease;
        }
        .modal-overlay.active {
            display: flex;
            opacity: 1;
        }
        .modal-content {
            transform: scale(0.9);
            transition: transform 0.5s cubic-bezier(0.34, 1.56, 0.64, 1);
        }
        .modal-overlay.active .modal-content {
            transform: scale(1);
        }

        /* Quiz Styles */
        .quiz-step {
            display: none;
        }
        .quiz-step.active {
            display: block;
        }
        .quiz-option {
            cursor: pointer;
            border: 2px solid transparent;
            transition: all 0.3s ease;
        }
        .quiz-option:hover {
            border-color: #C5A377;
            background: rgba(197, 163, 119, 0.05);
        }
        .quiz-option.selected {
            border-color: #C5A377;
            background: rgba(197, 163, 119, 0.1);
        }

        /* Parallax Story */
        .parallax-layer {
            transition: transform 0.2s ease-out;
        }

        .glass-cobalt {
            background: rgba(197, 163, 119, 0.05);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(197, 163, 119, 0.2);
            color: #3A3530;
        }

        .floating-shape {
            position: absolute;
            filter: blur(100px);
            z-index: -1;
            opacity: 0.35;
            pointer-events: none;
            border-radius: 50%;
        }


        .header-glass {
            background: rgba(255, 255, 255, 0.65);
            backdrop-filter: blur(30px);
            -webkit-backdrop-filter: blur(30px);
            border: 1px solid rgba(255, 255, 255, 0.45);
            box-shadow: 0 12px 50px rgba(0, 0, 0, 0.02);
        }

        .sticky-footer {
            position: fixed;
            bottom: 25px;
            left: 25px;
            right: 25px;
            background: rgba(10, 10, 15, 0.82);
            backdrop-filter: blur(30px);
            -webkit-backdrop-filter: blur(30px);
            border: 1px solid rgba(255, 255, 255, 0.08);
            display: flex;
            justify-content: space-around;
            align-items: center;
            padding: 12px 10px;
            border-radius: 40px;
            box-shadow: 0 25px 60px rgba(0, 0, 0, 0.25);
            z-index: 100;
            padding-bottom: calc(12px + env(safe-area-inset-bottom, 0px));
            transition: all 0.6s cubic-bezier(0.4, 0, 0.2, 1);
            transform: translateY(150%);
        }

        .sticky-footer.visible {
            transform: translateY(0);
        }

        .nav-tab {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 4px;
            color: rgba(255, 255, 255, 0.45);
            text-decoration: none;
            transition: all 0.3s ease;
            flex: 1;
        }

        .nav-tab.active {
            color: #C5A377;
        }

        .nav-tab-icon {
            width: 22px;
            height: 22px;
        }

        .nav-tab-label {
            font-size: 9px;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 0.12em;
        }

        .nav-tab-main {
            background: #C5A377;
            color: #fff !important;
            padding: 10px 20px;
            border-radius: 28px;
            flex: 1.4;
            flex-direction: row;
            gap: 6px;
            box-shadow: 0 10px 20px rgba(197, 163, 119, 0.2);
        }

        .btn-gold {
            background: var(--gold-gradient);
            color: white;
            box-shadow: 0 15px 30px rgba(197, 163, 119, 0.15);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .btn-gold:hover {
            transform: translateY(-4px);
            box-shadow: 0 20px 40px rgba(197, 163, 119, 0.2);
        }

        .faq-answer {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.6s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .faq-item.active .faq-answer {
            max-height: 800px;
        }

        .faq-item.active .faq-icon {
            transform: rotate(180deg);
        }

        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }
        .animate-float {
            animation: float 4s ease-in-out infinite;
        }

        .animate-delivery {
            stroke-dasharray: 100;
            stroke-dashoffset: 100;
            animation: delivery-dash 3s ease-in-out infinite;
        }

        @keyframes delivery-dash {
            to { stroke-dashoffset: 0; }
        }
    </style>
</head>

<body class="font-sans antialiased pb-28 md:pb-0">
    <!-- Floating Background Shapes -->
    <div class="floating-shape bg-brand-gold/10 w-96 h-96 top-[-10%] left-[-10%]"></div>
    <div class="floating-shape bg-brand-clay/5 w-[500px] h-[500px] top-[40%] right-[-15%]"></div>
    <div class="floating-shape bg-brand-gold/10 w-80 h-80 bottom-[-5%] left-[20%]"></div>


    <!-- Header -->
    <header class="fixed w-full top-0 z-50 px-4 transition-all duration-300" id="mainHeader">
        <div class="container mx-auto max-w-7xl px-1 md:px-10">
            <div class="header-glass rounded-3xl px-6 md:px-10 h-16 md:h-20 flex items-center justify-between transition-all duration-300"
                id="headerInner">
                <a href="index.php" class="flex flex-col items-start leading-none group flex-shrink-0" id="logoLink">
                    <span class="text-xl md:text-2xl font-black tracking-tighter text-brand-dark">DOMBYRA.KZ</span>
                    <span class="text-[8px] md:text-[10px] font-medium tracking-[0.3em] text-brand-dark/60 uppercase -mt-1 group-hover:text-brand-gold transition-colors">by Aiym ERNST</span>
                </a>

                <nav class="hidden xl:flex items-center gap-x-4 2xl:gap-x-8 font-black text-brand-dark">
                    <a href="index.php" class="text-[11px] uppercase tracking-widest <?php echo ($currentPage == 'index') ? 'text-brand-gold' : 'hover:text-brand-gold'; ?> transition-colors">Главная</a>
                    <a href="catalog.php" class="text-[11px] uppercase tracking-widest <?php echo ($currentPage == 'catalog') ? 'text-brand-gold' : 'hover:text-brand-gold'; ?> transition-colors">Каталог</a>
                    <a href="articles.php" class="text-[11px] uppercase tracking-widest <?php echo ($currentPage == 'articles') ? 'text-brand-gold' : 'hover:text-brand-gold'; ?> transition-colors">Статьи</a>
                    <a href="about.php" class="text-[11px] uppercase tracking-widest <?php echo ($currentPage == 'about') ? 'text-brand-gold' : 'hover:text-brand-gold'; ?> transition-colors">О нас</a>
                    <a href="contacts.php" class="text-[11px] uppercase tracking-widest <?php echo ($currentPage == 'contacts') ? 'text-brand-gold' : 'hover:text-brand-gold'; ?> transition-colors">Контакты</a>
                    <a href="certificate.php" class="text-[11px] uppercase tracking-widest <?php echo ($currentPage == 'certificate') ? 'text-brand-gold' : 'hover:text-brand-gold'; ?> transition-colors">Сертификат</a>
                </nav>

                <div class="flex items-center gap-x-3 2xl:gap-x-5">
                    <!-- Socials -->
                    <div class="hidden lg:flex items-center gap-2.5 text-brand-dark/40 border-r border-brand-dark/10 pr-4">
                        <a href="https://www.instagram.com/dombyra.kz/" target="_blank" class="hover:text-brand-gold transition-colors transform hover:scale-110">
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                        </a>
                        <a href="https://wa.me/77755226901" target="_blank" class="hover:text-brand-gold transition-colors transform hover:scale-110">
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
                        </a>
                    </div>

                    <!-- Language Dropdown -->
                    <div class="hidden lg:block relative group ml-2">
                        <button class="flex items-center gap-1.5 text-[11px] font-black uppercase tracking-widest text-brand-dark group-hover:text-brand-gold transition-colors py-2">
                            RU
                            <svg class="w-3 h-3 transition-transform duration-300 group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="absolute left-1/2 -translate-x-1/2 top-full pt-1 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50">
                            <div class="w-20 bg-white/95 backdrop-blur-xl rounded-xl shadow-2xl border border-brand-dark/5 overflow-hidden py-1">
                                <a href="#" class="block px-4 py-2 text-[10px] font-black uppercase tracking-widest text-brand-dark/60 hover:text-brand-gold hover:bg-brand-gold/5 transition-colors">KZ</a>
                                <a href="#" class="block px-4 py-2 text-[10px] font-black uppercase tracking-widest text-brand-dark/60 hover:text-brand-gold hover:bg-brand-gold/5 transition-colors">EN</a>
                            </div>
                        </div>
                    </div>

                    <div class="hidden lg:block border-l border-brand-dark/10 h-6 ml-2"></div>

                    <a href="tel:+77755226901"
                        class="hidden md:block text-[12px] 2xl:text-[14px] font-black uppercase tracking-widest text-brand-dark hover:text-brand-gold transition-colors whitespace-nowrap">+7 (775) 522 69 01</a>
                    
                    <button
                        class="w-12 h-12 flex items-center justify-center bg-brand-gold rounded-full text-white xl:hidden transition-transform active:scale-90"
                        id="mobileMenuBtn">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16m-7 6h7" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </header>

    <!-- Mobile Menu -->
    <div id="mobileMenu"
        class="fixed inset-0 z-[60] bg-brand-cream transform translate-x-full transition-transform duration-300 md:hidden">
        <div class="p-8 flex justify-between items-center border-b border-brand-gold/10">
            <div class="flex items-center gap-4 text-[10px] font-black uppercase tracking-widest">
                <a href="#" class="text-brand-dark/40 hover:text-brand-dark transition-colors">KZ</a>
                <span class="opacity-20">|</span>
                <a href="#" class="text-brand-dark transition-colors">RU</a>
                <span class="opacity-20">|</span>
                <a href="#" class="text-brand-dark/40 hover:text-brand-dark transition-colors">EN</a>
            </div>
            <button id="closeMenuBtn" class="w-12 h-12 bg-brand-gold rounded-full flex items-center justify-center text-white">
                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
        <nav class="flex flex-col p-8 space-y-8 text-3xl font-light uppercase text-brand-dark font-serif">
            <a href="index.php" class="menu-link hover:text-brand-gold transition-colors">Главная</a>
            <a href="catalog.php" class="menu-link hover:text-brand-gold transition-colors">Каталог</a>
            <a href="articles.php" class="menu-link hover:text-brand-gold transition-colors">Статьи</a>
            <a href="about.php" class="menu-link hover:text-brand-gold transition-colors">О нас</a>
            <a href="contacts.php" class="menu-link hover:text-brand-gold transition-colors">Контакты</a>
            <a href="certificate.php" class="menu-link hover:text-brand-gold transition-colors">Сертификат</a>
        </nav>
    </div>

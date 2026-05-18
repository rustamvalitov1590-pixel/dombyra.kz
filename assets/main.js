const headerHTML = `
    <div class="container mx-auto max-w-7xl px-1 md:px-10">
        <div class="header-glass rounded-3xl px-6 md:px-10 h-16 md:h-20 flex items-center justify-between transition-all duration-300" id="headerInner">
            <a href="index.html" class="flex items-center gap-3 group flex-shrink-0" id="logoLink">
                <!-- Master stamp logo -->
                <div class="w-9 h-9 rounded-full border border-brand-gold/30 flex items-center justify-center text-brand-gold bg-brand-gold/5 group-hover:scale-105 group-hover:border-brand-gold transition-all duration-300">
                    <svg class="w-6 h-6 fill-none stroke-current" viewBox="0 0 100 100">
                        <circle cx="50" cy="50" r="45" stroke-width="1.5" stroke-dasharray="3 3"/>
                        <circle cx="50" cy="50" r="35" stroke-width="1"/>
                        <path d="M50 15V85M15 50H85" stroke-width="1.5" stroke-linecap="round"/>
                        <path d="M28 28C38 38 62 38 72 28M28 72C38 62 62 62 72 72" stroke-width="1.5" stroke-linecap="round"/>
                        <path d="M28 28C38 38 38 62 28 72M72 28C62 38 62 62 72 72" stroke-width="1.5" stroke-linecap="round"/>
                        <circle cx="50" cy="50" r="6" fill="currentColor"/>
                    </svg>
                </div>
                <div class="flex flex-col items-start leading-none">
                    <span class="text-xl md:text-2xl font-black tracking-tighter text-brand-dark transition-colors group-hover:text-brand-gold">DOMBYRA.KZ</span>
                    <span class="text-[8px] md:text-[10px] font-medium tracking-[0.3em] text-brand-dark/60 uppercase -mt-1 group-hover:text-brand-gold/80 transition-colors">by Aiym ERNST</span>
                </div>
            </a>

            <nav class="hidden xl:flex items-center gap-x-4 2xl:gap-x-8 font-black text-brand-dark">
                <a href="index.html" class="nav-link text-[11px] uppercase tracking-widest hover:text-brand-gold transition-colors" data-page="index">Главная</a>
                <a href="catalog.html" class="nav-link text-[11px] uppercase tracking-widest hover:text-brand-gold transition-colors" data-page="catalog">Каталог</a>
                <a href="articles.html" class="nav-link text-[11px] uppercase tracking-widest hover:text-brand-gold transition-colors" data-page="articles">Статьи</a>
                <a href="about.html" class="nav-link text-[11px] uppercase tracking-widest hover:text-brand-gold transition-colors" data-page="about">О нас</a>
                <a href="contacts.html" class="nav-link text-[11px] uppercase tracking-widest hover:text-brand-gold transition-colors" data-page="contacts">Контакты</a>
                <a href="certificate.html" class="nav-link text-[11px] uppercase tracking-widest hover:text-brand-gold transition-colors" data-page="certificate">Сертификат</a>
            </nav>

            <div class="flex items-center gap-x-3 2xl:gap-x-5">
                <!-- Language Switcher (Desktop) -->
                <div class="hidden lg:block relative group ml-2">
                    <button class="flex items-center gap-1.5 text-[11px] font-black uppercase tracking-widest text-brand-dark group-hover:text-brand-gold transition-colors py-2" id="currentLang">
                        RU
                        <svg class="w-3 h-3 transition-transform duration-300 group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="absolute left-1/2 -translate-x-1/2 top-full pt-1 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50">
                        <div class="w-16 bg-white/95 backdrop-blur-xl rounded-xl shadow-2xl border border-brand-dark/5 overflow-hidden py-1">
                            <a href="#" class="block px-4 py-2 text-[10px] font-black uppercase tracking-widest text-brand-dark/60 hover:text-brand-gold hover:bg-brand-gold/5 transition-colors" data-lang="KZ">KZ</a>
                            <a href="#" class="block px-4 py-2 text-[10px] font-black uppercase tracking-widest text-brand-dark/60 hover:text-brand-gold hover:bg-brand-gold/5 transition-colors" data-lang="RU">RU</a>
                            <a href="#" class="block px-4 py-2 text-[10px] font-black uppercase tracking-widest text-brand-dark/60 hover:text-brand-gold hover:bg-brand-gold/5 transition-colors" data-lang="EN">EN</a>
                        </div>
                    </div>
                </div>

                <div class="hidden lg:block border-l border-brand-dark/10 h-6 ml-2"></div>

                <a href="tel:87755226901" class="hidden md:block text-[12px] 2xl:text-[14px] font-black uppercase tracking-widest text-brand-dark hover:text-brand-gold transition-colors whitespace-nowrap">+7 (775) 522 69 01</a>
                
                <button class="w-12 h-12 flex items-center justify-center bg-brand-gold rounded-full text-white xl:hidden transition-transform active:scale-90" id="mobileMenuBtn">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
`;

const footerHTML = `
    <div class="container mx-auto px-6 max-w-7xl md:px-10 mx-auto relative z-10">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-20 mb-20">
            <div class="col-span-1 lg:col-span-1">
                <a href="index.html" class="flex items-center gap-3 group mb-10" id="footerLogoLink">
                    <!-- Master stamp logo (footer variant) -->
                    <div class="w-9 h-9 rounded-full border border-white/20 flex items-center justify-center text-brand-gold bg-white/5 group-hover:scale-105 group-hover:border-brand-gold transition-all duration-300">
                        <svg class="w-6 h-6 fill-none stroke-current" viewBox="0 0 100 100">
                            <circle cx="50" cy="50" r="45" stroke-width="1.5" stroke-dasharray="3 3"/>
                            <circle cx="50" cy="50" r="35" stroke-width="1"/>
                            <path d="M50 15V85M15 50H85" stroke-width="1.5" stroke-linecap="round"/>
                            <path d="M28 28C38 38 62 38 72 28M28 72C38 62 62 62 72 72" stroke-width="1.5" stroke-linecap="round"/>
                            <path d="M28 28C38 38 38 62 28 72M72 28C62 38 62 62 72 72" stroke-width="1.5" stroke-linecap="round"/>
                            <circle cx="50" cy="50" r="6" fill="currentColor"/>
                        </svg>
                    </div>
                    <div class="flex flex-col items-start leading-none">
                        <span class="text-xl md:text-2xl font-black tracking-tighter text-white transition-colors group-hover:text-brand-gold">DOMBYRA.KZ</span>
                        <span class="text-[8px] md:text-[10px] font-medium tracking-[0.3em] text-white/40 uppercase -mt-1 group-hover:text-brand-gold/80 transition-colors">by Aiym ERNST</span>
                    </div>
                </a>
                <p class="text-white/40 font-medium text-sm leading-relaxed">Объединяем традиции и современные технологии. Dombyra.kz — это стандарт качества с 2015 года.</p>
            </div>
            <div>
                <h4 class="font-bold uppercase tracking-widest text-[10px] text-brand-gold mb-10">Навигация</h4>
                <ul class="space-y-6 text-[11px] font-bold uppercase tracking-[0.2em]">
                    <li><a href="index.html" class="hover:text-brand-gold transition-colors">Главная</a></li>
                    <li><a href="catalog.html" class="hover:text-brand-gold transition-colors">Каталог</a></li>
                    <li><a href="articles.html" class="hover:text-brand-gold transition-colors">Статьи</a></li>
                    <li><a href="about.html" class="hover:text-brand-gold transition-colors">О нас</a></li>
                    <li><a href="contacts.html" class="hover:text-brand-gold transition-colors">Контакты</a></li>
                    <li><a href="certificate.html" class="hover:text-brand-gold transition-colors">Сертификат</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-bold uppercase tracking-widest text-[10px] text-brand-gold mb-10">Контакты</h4>
                <div class="space-y-6">
                    <div class="flex flex-col gap-1">
                        <span class="text-white/30 text-[9px] uppercase font-bold tracking-widest">Телефон</span>
                        <a href="tel:87755226901" class="text-[16px] font-bold hover:text-brand-gold transition-colors">+7 (775) 522 69 01</a>
                    </div>
                    <div class="flex flex-col gap-1">
                        <span class="text-white/30 text-[9px] uppercase font-bold tracking-widest">Адрес</span>
                        <p class="text-white/40 text-sm">Алматы, пр. Абая 52/2</p>
                    </div>
                </div>
            </div>
            <div>
                <h4 class="font-bold uppercase tracking-widest text-[10px] text-brand-gold mb-10">Соцсети</h4>
                <div class="flex gap-6">
                    <a href="https://www.instagram.com/dombyra.kz/" target="_blank" class="w-14 h-14 glass-card rounded-2xl flex items-center justify-center hover:bg-brand-gold hover:text-white transition-all duration-500 border-white/10" style="color: #8C7B6C;">
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" /></svg>
                    </a>
                    <a href="https://www.youtube.com/@DombyraAiymErnst" target="_blank" class="w-14 h-14 glass-card rounded-2xl flex items-center justify-center hover:bg-brand-gold hover:text-white transition-all duration-500 border-white/10" style="color: #8C7B6C;">
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="pt-12 border-t border-white/5 text-center text-[9px] font-black uppercase tracking-[0.3em] opacity-40">
            &copy; 2026 Dombyra.kz. Проект Айым Эрнст. Все права защищены.
        </div>
    </div>
`;

const mobileMenuHTML = `
    <div class="p-8 flex justify-between items-center border-b border-brand-gold/10">
        <div class="flex items-center gap-4 text-[10px] font-black uppercase tracking-widest" id="mobileLangSwitcher">
            <a href="#" class="text-brand-dark transition-colors" data-lang="KZ">KZ</a>
            <span class="opacity-20">|</span>
            <a href="#" class="text-brand-dark/40 hover:text-brand-dark transition-colors" data-lang="RU">RU</a>
            <span class="opacity-20">|</span>
            <a href="#" class="text-brand-dark/40 hover:text-brand-dark transition-colors" data-lang="EN">EN</a>
        </div>
        <button id="closeMenuBtn" class="w-12 h-12 bg-brand-gold rounded-full flex items-center justify-center text-white">
            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>
    <nav class="flex flex-col p-8 space-y-6 text-3xl font-light uppercase text-brand-dark font-serif">
        <a href="index.html" class="menu-link hover:text-brand-gold transition-colors">Главная</a>
        <a href="catalog.html" class="menu-link hover:text-brand-gold transition-colors">Каталог</a>
        <a href="articles.html" class="menu-link hover:text-brand-gold transition-colors">Статьи</a>
        <a href="about.html" class="menu-link hover:text-brand-gold transition-colors">О нас</a>
        <a href="contacts.html" class="menu-link hover:text-brand-gold transition-colors">Контакты</a>
        <a href="certificate.html" class="menu-link hover:text-brand-gold transition-colors">Сертификат</a>
    </nav>

    <!-- Gold divider in mobile menu -->
    <div class="px-8 my-2">
        <div class="w-full h-px bg-brand-gold/20"></div>
    </div>

    <!-- Mobile Menu Contact & Social Info -->
    <div class="p-8 pt-4 space-y-6">
        <!-- Phone & WhatsApp -->
        <div class="space-y-3">
            <span class="text-brand-clay/60 text-[9px] uppercase font-bold tracking-widest block">Связаться с нами</span>
            <a href="tel:87755226901" class="text-xl font-bold text-brand-dark hover:text-brand-gold transition-colors block">+7 (775) 522 69 01</a>
            <a href="https://wa.me/77755226901" target="_blank" class="inline-flex items-center justify-center gap-2 bg-brand-gold text-white px-5 py-3 rounded-2xl text-[10px] font-black uppercase tracking-widest hover:bg-brand-dark transition-all shadow-[0_5px_15px_rgba(197,163,119,0.2)] active:scale-95 w-full sm:w-auto">
                <svg class="w-4 h-4 fill-none stroke-current" stroke-width="2.5" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z" />
                </svg>
                Написать в WhatsApp
            </a>
        </div>

        <!-- Social Media Icons (Instagram, YouTube) -->
        <div class="space-y-3">
            <span class="text-brand-clay/60 text-[9px] uppercase font-bold tracking-widest block">Наши медиа каналы</span>
            <div class="flex gap-4">
                <a href="https://www.instagram.com/dombyra.kz/" target="_blank" class="w-10 h-10 rounded-xl bg-brand-gold/10 border border-brand-gold/20 flex items-center justify-center text-brand-gold hover:bg-brand-gold hover:text-white transition-all duration-300">
                    <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" /></svg>
                </a>
                <a href="https://www.youtube.com/@DombyraAiymErnst" target="_blank" class="w-10 h-10 rounded-xl bg-brand-gold/10 border border-brand-gold/20 flex items-center justify-center text-brand-gold hover:bg-brand-gold hover:text-white transition-all duration-300">
                    <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                </a>
            </div>
        </div>

        <!-- Mini Philosophy Text -->
        <p class="text-[9px] font-bold uppercase tracking-widest text-brand-clay/70 leading-relaxed border-l border-brand-gold/30 pl-4 py-1">
            Объединяем традиции и современные технологии. Создаем шедевры ручной работы для будущих поколений.
        </p>
    </div>
`;

document.addEventListener('DOMContentLoaded', () => {
    const header = document.getElementById('mainHeader');
    const footer = document.getElementById('mainFooter');
    const mobileMenu = document.getElementById('mobileMenu');

    if (header) {
        header.innerHTML = headerHTML;
        console.log('Header injected');
    }
    if (footer) {
        footer.innerHTML = footerHTML;
        console.log('Footer injected');
    }
    if (mobileMenu) {
        mobileMenu.innerHTML = mobileMenuHTML;
        mobileMenu.classList.add('overflow-y-auto');
        console.log('Mobile menu injected');
    }

    // Highlight active page
    const currentPage = window.location.pathname.split('/').pop() || 'index.html';
    document.querySelectorAll('.nav-link').forEach(link => {
        if (link.getAttribute('href') === currentPage || (currentPage === 'index.html' && link.getAttribute('data-page') === 'index')) {
            link.classList.add('text-brand-gold');
            link.classList.remove('text-brand-dark');
        }
    });

    // Mobile Menu Logic
    const mobileMenuBtn = document.getElementById('mobileMenuBtn');
    const closeMenuBtn = document.getElementById('closeMenuBtn');
    const menuLinks = document.querySelectorAll('.menu-link');

    function toggleMenu() {
        if (!mobileMenu) return;
        mobileMenu.classList.toggle('translate-x-full');
        document.body.style.overflow = mobileMenu.classList.contains('translate-x-full') ? '' : 'hidden';
    }

    if (mobileMenuBtn) mobileMenuBtn.addEventListener('click', toggleMenu);
    if (closeMenuBtn) closeMenuBtn.addEventListener('click', toggleMenu);
    menuLinks.forEach(link => link.addEventListener('click', toggleMenu));

    // Mobile Language Switcher
    const mobileLangLinks = document.querySelectorAll('#mobileLangSwitcher a');
    mobileLangLinks.forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault();
            mobileLangLinks.forEach(l => {
                l.classList.remove('text-brand-dark');
                l.classList.add('text-brand-dark/40');
            });
            link.classList.remove('text-brand-dark/40');
            link.classList.add('text-brand-dark');
            console.log('Mobile Language changed to:', link.getAttribute('data-lang'));
        });
    });

    // Desktop Language switcher logic
    const langLinks = document.querySelectorAll('.group a[data-lang]');
    const currentLang = document.getElementById('currentLang');
    
    // Initial state: hide the link that matches the default 'RU'
    if (currentLang) {
        const initialLang = currentLang.innerText.trim();
        langLinks.forEach(l => {
            if (l.getAttribute('data-lang') === initialLang) {
                l.classList.add('hidden');
            }
        });
    }

    langLinks.forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault();
            const lang = link.getAttribute('data-lang');
            if (currentLang) {
                currentLang.childNodes[0].textContent = lang + ' ';
                
                // Show all links first
                langLinks.forEach(l => l.classList.remove('hidden'));
                // Hide the one that was just selected
                link.classList.add('hidden');
            }
            console.log('Desktop Language changed to:', lang);
        });
    });

    // Scroll Behavior
    window.addEventListener('scroll', () => {
        const headerInner = document.getElementById('headerInner');
        if (window.scrollY > 50) {
            headerInner?.classList.add('h-14');
            headerInner?.classList.remove('h-16', 'md:h-20');
        } else {
            headerInner?.classList.remove('h-14');
            headerInner?.classList.add('h-16', 'md:h-20');
        }
    });

    // Scroll to Top Button Injection (Site-wide, Left Aligned)
    const scrollTopBtn = document.createElement('button');
    scrollTopBtn.id = 'scrollTopBtn';
    scrollTopBtn.className = 'hidden md:flex fixed left-6 bottom-6 md:left-8 md:bottom-8 z-50 w-12 h-12 md:w-14 md:h-14 rounded-full bg-brand-gold text-white flex items-center justify-center shadow-[0_10px_30px_rgba(197,163,119,0.3)] border border-brand-gold/20 cursor-pointer opacity-0 translate-y-10 pointer-events-none transition-all duration-500 hover:bg-brand-dark hover:text-brand-gold hover:shadow-[0_15px_30px_rgba(0,0,0,0.4)] group';
    scrollTopBtn.innerHTML = `
        <svg class="w-5 h-5 md:w-6 md:h-6 transform group-hover:-translate-y-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M5 10l7-7m0 0l7 7m-7-7v18" />
        </svg>
    `;
    document.body.appendChild(scrollTopBtn);

    window.addEventListener('scroll', () => {
        if (window.scrollY > 300) {
            scrollTopBtn.classList.remove('opacity-0', 'translate-y-10', 'pointer-events-none');
            scrollTopBtn.classList.add('opacity-100', 'translate-y-0');
        } else {
            scrollTopBtn.classList.add('opacity-0', 'translate-y-10', 'pointer-events-none');
            scrollTopBtn.classList.remove('opacity-100', 'translate-y-0');
        }
    });

    scrollTopBtn.addEventListener('click', () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });

    // WhatsApp Floating Button Injection (Site-wide, Right Aligned)
    const waFloatBtn = document.createElement('button');
    waFloatBtn.id = 'waFloatBtn';
    waFloatBtn.className = 'flex fixed right-6 bottom-6 md:right-8 md:bottom-8 z-50 w-14 h-14 md:w-16 md:h-16 rounded-full bg-brand-gold text-white items-center justify-center shadow-[0_10px_30px_rgba(197,163,119,0.3)] border border-brand-gold/20 cursor-pointer hover:scale-110 hover:shadow-[0_15px_35px_rgba(197,163,119,0.5)] transition-all duration-300 group focus:outline-none';
    
    // Inject Custom CSS for Pulse Effect
    const styleEl = document.createElement('style');
    styleEl.innerHTML = `
        @keyframes waPulse {
            0% { box-shadow: 0 0 0 0 rgba(197, 163, 119, 0.5); }
            70% { box-shadow: 0 0 0 15px rgba(197, 163, 119, 0); }
            100% { box-shadow: 0 0 0 0 rgba(197, 163, 119, 0); }
        }
        #waFloatBtn {
            animation: waPulse 2s infinite;
        }
    `;
    document.head.appendChild(styleEl);

    waFloatBtn.innerHTML = `
        <svg class="w-8 h-8 md:w-9 md:h-9 text-white group-hover:rotate-12 transition-transform duration-300" viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
            <!-- Pegs -->
            <path d="M26 8h6M32 11h6" stroke="currentColor" stroke-width="2" />
            <circle cx="25" cy="8" r="1.5" fill="currentColor" />
            <circle cx="39" cy="11" r="1.5" fill="currentColor" />

            <!-- Headstock (Tapered triangular top) -->
            <path d="M30 4h4l-1.5 8h-1z" fill="currentColor" />

            <!-- Long thin neck -->
            <line x1="32" y1="12" x2="32" y2="42" stroke="currentColor" stroke-width="2.5" />

            <!-- Frets (Small elegant horizontal lines) -->
            <line x1="30" y1="18" x2="34" y2="18" stroke="currentColor" stroke-width="1" />
            <line x1="30" y1="24" x2="34" y2="24" stroke="currentColor" stroke-width="1" />
            <line x1="30" y1="30" x2="34" y2="30" stroke="currentColor" stroke-width="1" />
            <line x1="30" y1="36" x2="34" y2="36" stroke="currentColor" stroke-width="1" />

            <!-- Elongated Kazakh Dombyra Body (Elegant teardrop shape) -->
            <path d="M32 42c-1.5 0-8 6-8 11.5c0 4.5 3.5 6.5 8 6.5s8-2 8-6.5c0-5.5-6.5-11.5-8-11.5z" fill="currentColor" fill-opacity="0.2" stroke="currentColor" stroke-width="2.5" />

            <!-- Sound hole -->
            <circle cx="32" cy="50" r="1.5" fill="currentColor" stroke="none" />

            <!-- Strings -->
            <line x1="31.2" y1="12" x2="31.2" y2="55" stroke="currentColor" stroke-width="0.75" opacity="0.9" />
            <line x1="32.8" y1="12" x2="32.8" y2="55" stroke="currentColor" stroke-width="0.75" opacity="0.9" />

            <!-- Bridge -->
            <path d="M29 55h6" stroke="currentColor" stroke-width="2" />
        </svg>
    `;
    document.body.appendChild(waFloatBtn);

    // Create the Popup Menu (Site-wide, right aligned, above floating button)
    const waFloatMenu = document.createElement('div');
    waFloatMenu.id = 'waFloatMenu';
    waFloatMenu.className = 'fixed right-6 bottom-24 md:right-8 md:bottom-28 z-50 w-72 sm:w-80 glass-card rounded-[2rem] border border-brand-gold/20 shadow-2xl p-5 translate-y-4 opacity-0 pointer-events-none transition-all duration-300 bg-white/95 backdrop-blur-xl overflow-hidden bg-ornament-watermark';
    
    waFloatMenu.innerHTML = `
        <div class="relative z-10">
            <!-- Header with mini Kazakh Shanyrak emblem -->
            <div class="flex items-center gap-3 pb-4 mb-4 border-b border-brand-gold/15">
                <div class="w-8 h-8 rounded-full border border-brand-gold/30 flex items-center justify-center text-brand-gold bg-brand-gold/5">
                    <svg class="w-5 h-5 fill-none stroke-current" viewBox="0 0 100 100">
                        <circle cx="50" cy="50" r="45" stroke-width="1.5" stroke-dasharray="3 3"/>
                        <circle cx="50" cy="50" r="35" stroke-width="1"/>
                        <path d="M50 15V85M15 50H85" stroke-width="1.5"/>
                        <circle cx="50" cy="50" r="5" fill="currentColor"/>
                    </svg>
                </div>
                <div>
                    <h4 class="text-xs font-bold uppercase tracking-widest text-brand-dark">Консультация</h4>
                    <p class="text-[8px] uppercase tracking-widest text-brand-clay font-bold leading-none mt-0.5">Выберите тему обращения</p>
                </div>
            </div>
            <!-- Menu items list -->
            <div class="space-y-2">
                <a href="https://wa.me/77755226901?text=Здравствуйте!%20Я%20хочу%20заказать%20домбру%20ручной%20работы" target="_blank" class="wa-item flex items-center gap-3 p-3 rounded-xl hover:bg-brand-gold/5 border border-transparent hover:border-brand-gold/20 transition-all group">
                    <span class="w-8 h-8 rounded-xl bg-brand-gold/10 flex items-center justify-center text-brand-gold group-hover:bg-brand-gold group-hover:text-white transition-all text-xs font-bold">🛠️</span>
                    <span class="text-xs font-bold text-brand-dark leading-tight">Хочу заказать домбру</span>
                </a>
                <a href="https://wa.me/77755226901?text=Здравствуйте!%20У%20меня%20есть%20вопрос%20по%20поводу%20инструментов" target="_blank" class="wa-item flex items-center gap-3 p-3 rounded-xl hover:bg-brand-gold/5 border border-transparent hover:border-brand-gold/20 transition-all group">
                    <span class="w-8 h-8 rounded-xl bg-brand-gold/10 flex items-center justify-center text-brand-gold group-hover:bg-brand-gold group-hover:text-white transition-all text-xs font-bold">❓</span>
                    <span class="text-xs font-bold text-brand-dark leading-tight">Задать вопрос мастеру</span>
                </a>
                <a href="https://wa.me/77755226901?text=Здравствуйте!%20Хочу%20узнать%20статус%20своего%20заказа" target="_blank" class="wa-item flex items-center gap-3 p-3 rounded-xl hover:bg-brand-gold/5 border border-transparent hover:border-brand-gold/20 transition-all group">
                    <span class="w-8 h-8 rounded-xl bg-brand-gold/10 flex items-center justify-center text-brand-gold group-hover:bg-brand-gold group-hover:text-white transition-all text-xs font-bold">📦</span>
                    <span class="text-xs font-bold text-brand-dark leading-tight">Узнать статус заказа</span>
                </a>
                <a href="https://wa.me/77755226901?text=Здравствуйте!%20Я%20хочу%20записаться%20на%20персональный%20визит%20в%20шоурум" target="_blank" class="wa-item flex items-center gap-3 p-3 rounded-xl hover:bg-brand-gold/5 border border-transparent hover:border-brand-gold/20 transition-all group">
                    <span class="w-8 h-8 rounded-xl bg-brand-gold/10 flex items-center justify-center text-brand-gold group-hover:bg-brand-gold group-hover:text-white transition-all text-xs font-bold">🏛️</span>
                    <span class="text-xs font-bold text-brand-dark leading-tight">Записаться в шоурум</span>
                </a>
            </div>
        </div>
    `;
    document.body.appendChild(waFloatMenu);

    // Toggle menu
    waFloatBtn.addEventListener('click', (e) => {
        e.stopPropagation();
        const isOpen = !waFloatMenu.classList.contains('opacity-0');
        if (isOpen) {
            waFloatMenu.classList.add('opacity-0', 'translate-y-4', 'pointer-events-none');
        } else {
            waFloatMenu.classList.remove('opacity-0', 'translate-y-4', 'pointer-events-none');
        }
    });

    // Close on click outside
    document.addEventListener('click', (e) => {
        if (!waFloatMenu.contains(e.target) && e.target !== waFloatBtn && !waFloatBtn.contains(e.target)) {
            waFloatMenu.classList.add('opacity-0', 'translate-y-4', 'pointer-events-none');
        }
    });

    // Close on selecting any item
    waFloatMenu.querySelectorAll('.wa-item').forEach(item => {
        item.addEventListener('click', () => {
            waFloatMenu.classList.add('opacity-0', 'translate-y-4', 'pointer-events-none');
        });
    });

    // Dynamic Breadcrumbs Injection (All pages except main page)
    const path = window.location.pathname;
    const filename = path.split('/').pop().split('?')[0].split('#')[0] || 'index.html';
    
    if (filename !== 'index.html' && filename !== 'index.php' && filename !== 'guide.html' && filename !== 'guide.php' && filename !== '') {
        const pageNames = {
            'about.html': 'О нас',
            'about.php': 'О нас',
            'catalog.html': 'Каталог',
            'catalog.php': 'Каталог',
            'articles.html': 'Статьи',
            'articles.php': 'Статьи',
            'contacts.html': 'Контакты',
            'contacts.php': 'Контакты',
            'certificate.html': 'Сертификат',
            'certificate.php': 'Сертификат',
            'guide.html': 'Руководство',
            'guide.php': 'Руководство',
            'privacy.php': 'Политика конфиденциальности',
            'offer.php': 'Публичная оферта'
        };
        const currentPageTitle = pageNames[filename] || (document.title ? document.title.split('|')[0].trim() : 'Страница');
        const homeUrl = filename.endsWith('.php') ? 'index.php' : 'index.html';

        const breadcrumbsHTML = `
            <nav class="flex items-center gap-2 text-[10px] font-bold uppercase tracking-widest text-brand-clay/60 mb-8 px-6 md:px-10">
                <a href="${homeUrl}" class="hover:text-brand-gold transition-colors">Главная</a>
                <span class="text-brand-clay/30">/</span>
                <span class="text-brand-dark">${currentPageTitle}</span>
            </nav>
        `;

        const mainContainer = document.querySelector('main .container');
        if (mainContainer) {
            const div = document.createElement('div');
            div.innerHTML = breadcrumbsHTML;
            mainContainer.insertBefore(div.firstElementChild, mainContainer.firstChild);
        }
    }
});

function openModal(id) {
    const modal = document.getElementById(id);
    if (modal) {
        modal.classList.add('active');
        document.body.style.overflow = 'hidden';
    }
}

function closeModal(id) {
    const modal = document.getElementById(id);
    if (modal) {
        modal.classList.remove('active');
        document.body.style.overflow = '';
    }
}

function nextStep(step) {
    document.querySelectorAll('.quiz-step').forEach(s => s.classList.remove('active'));
    document.getElementById('step' + step).classList.add('active');
}

window.openModal = openModal;
window.closeModal = closeModal;
window.nextStep = nextStep;

function toggleFaq(btn) {
    const content = btn.parentElement.querySelector('.faq-answer');
    const icon = btn.querySelector('.faq-icon');
    
    const isOpen = !content.classList.contains('hidden');
    
    // Close all
    document.querySelectorAll('.faq-answer').forEach(el => el.classList.add('hidden'));
    document.querySelectorAll('.faq-icon').forEach(el => el.classList.remove('rotate-180'));
    
    if (!isOpen) {
        content.classList.remove('hidden');
        icon.classList.add('rotate-180');
    }
}

function checkCertificate() {
    const input = document.getElementById('certInput');
    if (!input || !input.value.trim()) {
        if (input) {
            input.classList.add('border-red-400');
            setTimeout(() => input.classList.remove('border-red-400'), 2000);
        }
        return;
    }
    const val = input.value.trim();
    window.location.href = `certificate.html?cert=${encodeURIComponent(val)}`;
}

window.toggleFaq = toggleFaq;
window.checkCertificate = checkCertificate;

function scrollReviews(direction) {
    const slider = document.getElementById('reviewsSlider');
    if (slider) {
        const scrollAmount = window.innerWidth < 768 ? window.innerWidth * 0.85 : 640;
        slider.scrollBy({
            left: direction * scrollAmount,
            behavior: 'smooth'
        });
    }
}
window.scrollReviews = scrollReviews;

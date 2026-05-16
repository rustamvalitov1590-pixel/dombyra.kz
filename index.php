<?php 
    $currentPage = 'index';
    $pageTitle = 'Купить казахскую домбру ручной работы | Мастерская dombyra.kz';
    include 'includes/header.php'; 
?>

    <!-- Hero Section -->
    <section class="relative min-h-[90vh] flex items-center pt-20 overflow-hidden">
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-brand-dark/20 z-10"></div>
            <img src="./assets/hero_bg.jpg" class="w-full h-full object-cover cinema-bg" alt="Workshop">
        </div>

        <div class="container mx-auto max-w-7xl px-4 md:px-10 relative z-20">
            <div class="max-w-3xl">
                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/10 backdrop-blur-md border border-white/20 mb-8 animate-float">
                    <span class="w-2 h-2 rounded-full bg-brand-gold animate-pulse"></span>
                    <span class="text-[10px] font-black uppercase tracking-widest text-white">Мастерская с 1998 года</span>
                </div>
                <h1 class="text-6xl md:text-8xl lg:text-[10rem] font-light uppercase tracking-tighter text-white leading-[0.85] mb-12 font-serif">
                    Душа <br> <span class="text-brand-gold italic">Степи</span>
                </h1>
                <p class="text-xl md:text-2xl text-white/80 font-medium max-w-xl leading-relaxed mb-12">
                    Создаем инструменты, которые передают историю. Домбры ручной работы для тех, кто ценит истинное звучание и безупречную эстетику.
                </p>
                <div class="flex flex-col sm:flex-row gap-6">
                    <a href="catalog.php" class="btn-gold px-12 py-6 rounded-2xl text-[12px] font-black uppercase tracking-[0.2em] text-center">Выбрать инструмент</a>
                    <a href="about.php" class="px-12 py-6 rounded-2xl bg-white/5 backdrop-blur-md border border-white/20 text-white text-[12px] font-black uppercase tracking-[0.2em] hover:bg-white/10 transition-all text-center">Наша история</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Infinite Marquee -->
    <div class="marquee-wrapper">
        <div class="marquee-content">
            <div class="marquee-track">
                <span>HANDMADE QUALITY</span>
                <span>•</span>
                <span>ҚАЗАҚСТАНДА ЖАСАЛҒАН</span>
                <span>•</span>
                <span>PROFESSIONAL SOUND</span>
                <span>•</span>
                <span>БІРЕГЕЙ ДИЗАЙН</span>
                <span>•</span>
                <span>EXPRESS DELIVERY WORLDWIDE</span>
                <span>•</span>
            </div>
            <div class="marquee-track">
                <span>HANDMADE QUALITY</span>
                <span>•</span>
                <span>ҚАЗАҚСТАНДА ЖАСАЛҒАН</span>
                <span>•</span>
                <span>PROFESSIONAL SOUND</span>
                <span>•</span>
                <span>БІРЕГЕЙ ДИЗАЙН</span>
                <span>•</span>
                <span>EXPRESS DELIVERY WORLDWIDE</span>
                <span>•</span>
            </div>
        </div>
    </div>

    <!-- Values / Features -->
    <section class="py-32 px-4 relative overflow-hidden">
        <div class="container mx-auto max-w-7xl px-4 md:px-10">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="glass-card p-10 rounded-5xl border-brand-gold/10 group hover:border-brand-gold/30 transition-all duration-500">
                    <div class="w-16 h-16 rounded-3xl bg-brand-gold/10 flex items-center justify-center text-brand-gold mb-8 group-hover:scale-110 transition-transform">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/></svg>
                    </div>
                    <h3 class="text-2xl font-bold uppercase text-brand-dark mb-4">Акустика</h3>
                    <p class="text-brand-clay font-medium leading-relaxed">Многолетняя выдержка древесины и особая форма корпуса обеспечивают глубокий, бархатистый тембр.</p>
                </div>
                <div class="glass-card p-10 rounded-5xl border-brand-gold/10 group hover:border-brand-gold/30 transition-all duration-500 md:translate-y-12">
                    <div class="w-16 h-16 rounded-3xl bg-brand-gold/10 flex items-center justify-center text-brand-gold mb-8 group-hover:scale-110 transition-transform">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg>
                    </div>
                    <h3 class="text-2xl font-bold uppercase text-brand-dark mb-4">Традиции</h3>
                    <p class="text-brand-clay font-medium leading-relaxed">Мы сохраняем каноны изготовления, передаваемые из поколения в поколение нашими мастерами.</p>
                </div>
                <div class="glass-card p-10 rounded-5xl border-brand-gold/10 group hover:border-brand-gold/30 transition-all duration-500">
                    <div class="w-16 h-16 rounded-3xl bg-brand-gold/10 flex items-center justify-center text-brand-gold mb-8 group-hover:scale-110 transition-transform">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                    </div>
                    <h3 class="text-2xl font-bold uppercase text-brand-dark mb-4">Гарантия</h3>
                    <p class="text-brand-clay font-medium leading-relaxed">Пожизненное обслуживание и сертификат подлинности для каждого созданного нами инструмента.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Master's Story Section (Horizontal Scroll/Parallax style) -->
    <section class="py-32 px-4 bg-brand-accent/30 overflow-hidden relative">
        <div class="container mx-auto max-w-7xl px-4 md:px-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-20 items-center">
                <div class="relative">
                    <div class="absolute -top-20 -left-20 w-64 h-64 border-2 border-brand-gold/20 rounded-full animate-spin-slow"></div>
                    <div class="relative z-10 rounded-4xl overflow-hidden shadow-2xl">
                        <img src="./assets/master_portrait.jpg" class="w-full h-auto transform hover:scale-105 transition-transform duration-1000" alt="Master">
                    </div>
                </div>
                <div>
                    <span class="text-[10px] font-black uppercase tracking-[0.4em] text-brand-gold mb-6 block">Основатель мастерской</span>
                    <h2 class="text-4xl md:text-6xl font-light uppercase text-brand-dark leading-tight mb-8 font-serif">
                        Магия звука в <br><span class="text-brand-gold italic">каждом срезе</span>
                    </h2>
                    <p class="text-lg text-brand-clay font-medium leading-relaxed mb-10">
                        «Домбра — это не просто инструмент, это живое существо. Моя задача — услышать его голос еще в куске неотесанного дерева и помочь ему зазвучать».
                    </p>
                    <div class="flex items-center gap-6">
                        <div class="flex flex-col">
                            <span class="text-xl font-bold text-brand-dark">Айым Эрнст</span>
                            <span class="text-[9px] uppercase tracking-widest text-brand-gold font-black">Главный мастер</span>
                        </div>
                        <img src="./assets/signature.png" class="h-16 opacity-30 grayscale" alt="Signature">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Best Sellers / Catalog Preview -->
    <section class="py-32 px-4">
        <div class="container mx-auto max-w-7xl px-4 md:px-10">
            <div class="flex flex-col md:flex-row justify-between items-end mb-20 gap-8">
                <div>
                    <h2 class="text-4xl md:text-6xl font-light uppercase text-brand-dark mb-4 font-serif">Бестселлеры</h2>
                    <p class="text-brand-clay font-medium tracking-wide">Инструменты, заслужившие признание профессионалов</p>
                </div>
                <a href="catalog.php" class="group flex items-center gap-4 text-[10px] font-black uppercase tracking-widest text-brand-gold">
                    Смотреть весь каталог
                    <span class="w-10 h-10 rounded-full border border-brand-gold flex items-center justify-center group-hover:bg-brand-gold group-hover:text-white transition-all">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </span>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Product 1 -->
                <div class="glass-card p-6 rounded-4xl group transition-all duration-500 hover:shadow-2xl">
                    <div class="aspect-[3/4] rounded-3xl overflow-hidden bg-white mb-8 relative border border-brand-gold/5">
                        <img src="img/professional.webp" class="w-full h-full object-contain p-4 group-hover:scale-110 transition-transform duration-700" alt="Professional">
                    </div>
                    <div class="px-2">
                        <div class="flex justify-between items-center mb-2">
                            <h3 class="text-xl font-bold text-brand-dark uppercase">Профессиональная</h3>
                            <span class="text-brand-gold font-bold">185 000 ₸</span>
                        </div>
                        <p class="text-[12px] text-brand-clay font-medium mb-8">Идеальный баланс веса и звука для концертных выступлений.</p>
                        <a href="https://wa.me/77755226901" class="btn-gold block w-full py-4 rounded-2xl text-center text-[10px] font-black uppercase tracking-widest">Заказать</a>
                    </div>
                </div>
                <!-- Product 2 -->
                <div class="glass-card p-6 rounded-4xl group transition-all duration-500 hover:shadow-2xl translate-y-8">
                    <div class="aspect-[3/4] rounded-3xl overflow-hidden bg-white mb-8 relative border border-brand-gold/5">
                        <img src="img/elite.webp" class="w-full h-full object-contain p-4 group-hover:scale-110 transition-transform duration-700" alt="Elite">
                    </div>
                    <div class="px-2">
                        <div class="flex justify-between items-center mb-2">
                            <h3 class="text-xl font-bold text-brand-dark uppercase">Элитная</h3>
                            <span class="text-brand-gold font-bold">245 000 ₸</span>
                        </div>
                        <p class="text-[12px] text-brand-clay font-medium mb-8">Инкрустация костью и премиальные породы дерева.</p>
                        <a href="https://wa.me/77755226901" class="btn-gold block w-full py-4 rounded-2xl text-center text-[10px] font-black uppercase tracking-widest">Заказать</a>
                    </div>
                </div>
                <!-- Product 3 -->
                <div class="glass-card p-6 rounded-4xl group transition-all duration-500 hover:shadow-2xl">
                    <div class="aspect-[3/4] rounded-3xl overflow-hidden bg-white mb-8 relative border border-brand-gold/5">
                        <img src="img/student.webp" class="w-full h-full object-contain p-4 group-hover:scale-110 transition-transform duration-700" alt="Student">
                    </div>
                    <div class="px-2">
                        <div class="flex justify-between items-center mb-2">
                            <h3 class="text-xl font-bold text-brand-dark uppercase">Ученическая</h3>
                            <span class="text-brand-gold font-bold">125 000 ₸</span>
                        </div>
                        <p class="text-[12px] text-brand-clay font-medium mb-8">Надежный старт для обучения юных талантов.</p>
                        <a href="https://wa.me/77755226901" class="btn-gold block w-full py-4 rounded-2xl text-center text-[10px] font-black uppercase tracking-widest">Заказать</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Interactive Configurator Section -->
    <section class="py-32 px-4 bg-brand-dark text-white relative overflow-hidden" id="constructor">
        <div class="floating-shape bg-brand-gold/20 w-[600px] h-[600px] top-[-20%] left-[-10%] opacity-20"></div>
        <div class="container mx-auto max-w-7xl px-4 md:px-10 relative z-10">
            <div class="text-center mb-20">
                <h2 class="text-4xl md:text-7xl font-light uppercase mb-6 font-serif">Ваш <span class="text-brand-gold italic">уникальный</span> инструмент</h2>
                <p class="text-white/60 max-w-2xl mx-auto text-lg">Соберите домбру своей мечты в нашем интерактивном конструкторе. Мы учтем каждое ваше пожелание.</p>
            </div>
            
            <div class="glass-card bg-white/5 border-white/10 rounded-[3rem] p-4 md:p-12">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
                    <!-- Configurator UI -->
                    <div class="space-y-10">
                        <!-- Option 1 -->
                        <div>
                            <label class="text-[10px] font-black uppercase tracking-[0.3em] text-brand-gold mb-6 block">Тип корпуса</label>
                            <div class="grid grid-cols-2 gap-4">
                                <button class="quiz-option p-6 rounded-2xl border-white/10 bg-white/5 text-left selected">
                                    <span class="block font-bold mb-1 uppercase">Плоский</span>
                                    <span class="text-[10px] opacity-40 uppercase tracking-widest">Классика</span>
                                </button>
                                <button class="quiz-option p-6 rounded-2xl border-white/10 bg-white/5 text-left">
                                    <span class="block font-bold mb-1 uppercase">Выпуклый</span>
                                    <span class="text-[10px] opacity-40 uppercase tracking-widest">Объемный звук</span>
                                </button>
                            </div>
                        </div>
                        <!-- Option 2 -->
                        <div>
                            <label class="text-[10px] font-black uppercase tracking-[0.3em] text-brand-gold mb-6 block">Древесина</label>
                            <div class="grid grid-cols-2 gap-4">
                                <button class="quiz-option p-6 rounded-2xl border-white/10 bg-white/5 text-left">
                                    <span class="block font-bold mb-1 uppercase">Береза</span>
                                    <span class="text-[10px] opacity-40 uppercase tracking-widest">Традиция</span>
                                </button>
                                <button class="quiz-option p-6 rounded-2xl border-white/10 bg-white/5 text-left">
                                    <span class="block font-bold mb-1 uppercase">Клен</span>
                                    <span class="text-[10px] opacity-40 uppercase tracking-widest">Чистота</span>
                                </button>
                            </div>
                        </div>
                        <!-- Option 3 -->
                        <div>
                            <label class="text-[10px] font-black uppercase tracking-[0.3em] text-brand-gold mb-6 block">Гравировка</label>
                            <div class="flex gap-4">
                                <input type="text" placeholder="Ваше имя или узор..." class="w-full bg-white/5 border border-white/10 rounded-2xl px-6 py-4 text-white focus:outline-none focus:border-brand-gold/50 transition-all">
                            </div>
                        </div>

                        <button onclick="openModal('quizModal')" class="btn-gold w-full py-6 rounded-2xl text-[12px] font-black uppercase tracking-widest mt-4">Получить расчет стоимости</button>
                    </div>

                    <!-- Configurator Preview -->
                    <div class="relative bg-brand-cream/5 rounded-[2.5rem] flex items-center justify-center p-8 border border-white/5 overflow-hidden group">
                        <div class="absolute inset-0 bg-gradient-to-br from-brand-gold/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-700"></div>
                        <img src="img/elite.webp" class="h-full max-h-[600px] object-contain drop-shadow-[0_35px_35px_rgba(0,0,0,0.5)] transition-transform duration-700 group-hover:scale-105" alt="Preview">
                        <div class="absolute bottom-10 left-10 right-10">
                            <div class="flex justify-between items-end border-t border-white/10 pt-6">
                                <div>
                                    <span class="text-[9px] uppercase tracking-[0.3em] text-white/40 block mb-1">Оценочная стоимость</span>
                                    <span class="text-3xl font-bold text-brand-gold tracking-tight">от 185 000 ₸</span>
                                </div>
                                <span class="text-[9px] uppercase tracking-[0.3em] text-white/40">Срок: 14-21 день</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Reviews Section -->
    <section class="py-32 px-4 relative">
        <div class="container mx-auto max-w-7xl px-4 md:px-10">
            <div class="text-center mb-24">
                <h2 class="text-4xl md:text-6xl font-light uppercase text-brand-dark mb-4 font-serif">Голоса <span class="text-brand-gold italic">Мастерства</span></h2>
                <p class="text-brand-clay font-medium">Почему нам доверяют музыканты со всего мира</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Review 1 -->
                <div class="glass-card p-10 rounded-4xl flex flex-col justify-between h-full border-brand-gold/5">
                    <div>
                        <div class="flex text-brand-gold mb-6">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        </div>
                        <p class="text-brand-dark font-medium text-lg leading-relaxed mb-8 italic">
                            «Звучание домбры от dombyra.kz поражает своей чистотой и глубиной. Это инструмент, который вдохновляет на новые свершения в творчестве».
                        </p>
                    </div>
                    <div class="flex items-center gap-4 border-t border-brand-gold/10 pt-8 mt-auto">
                        <div class="w-12 h-12 rounded-full bg-brand-gold/10 flex items-center justify-center font-black text-brand-gold">АС</div>
                        <div>
                            <div class="font-bold text-brand-dark uppercase text-sm">Арман С.</div>
                            <div class="text-[9px] uppercase tracking-widest text-brand-clay font-black">Профессиональный кюйши</div>
                        </div>
                    </div>
                </div>
                <!-- Review 2 -->
                <div class="glass-card p-10 rounded-4xl flex flex-col justify-between h-full border-brand-gold/5 md:translate-y-8">
                    <div>
                        <div class="flex text-brand-gold mb-6">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        </div>
                        <p class="text-brand-dark font-medium text-lg leading-relaxed mb-8 italic">
                            «Великолепное исполнение и внимание к деталям. Домбра не только прекрасно звучит, но и является настоящим произведением искусства».
                        </p>
                    </div>
                    <div class="flex items-center gap-4 border-t border-brand-gold/10 pt-8 mt-auto">
                        <div class="w-12 h-12 rounded-full bg-brand-gold/10 flex items-center justify-center font-black text-brand-gold">БЖ</div>
                        <div>
                            <div class="font-bold text-brand-dark uppercase text-sm">Бахытгуль Ж.</div>
                            <div class="text-[9px] uppercase tracking-widest text-brand-clay font-black">Преподаватель музыки</div>
                        </div>
                    </div>
                </div>
                <!-- Review 3 -->
                <div class="glass-card p-10 rounded-4xl flex flex-col justify-between h-full border-brand-gold/5">
                    <div>
                        <div class="flex text-brand-gold mb-6">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        </div>
                        <p class="text-brand-dark font-medium text-lg leading-relaxed mb-8 italic">
                            «Заказывали домбру в подарок. Именинник в восторге! Звук и качество сборки на высшем уровне. Спасибо мастерам!»
                        </p>
                    </div>
                    <div class="flex items-center gap-4 border-t border-brand-gold/10 pt-8 mt-auto">
                        <div class="w-12 h-12 rounded-full bg-brand-gold/10 flex items-center justify-center font-black text-brand-gold">МА</div>
                        <div>
                            <div class="font-bold text-brand-dark uppercase text-sm">Мурат А.</div>
                            <div class="text-[9px] uppercase tracking-widest text-brand-clay font-black">Любитель музыки</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section (Refactored to be within container) -->
    <section class="py-32 px-4 bg-brand-accent/30">
        <div class="container mx-auto max-w-7xl px-4 md:px-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-20">
                <div>
                    <h2 class="text-4xl md:text-6xl font-light uppercase text-brand-dark mb-8 font-serif">Частые <br><span class="text-brand-gold italic">вопросы</span></h2>
                    <p class="text-lg text-brand-clay font-medium leading-relaxed mb-12">
                        Мы подготовили ответы на самые популярные вопросы, чтобы вам было проще сделать выбор.
                    </p>
                    <a href="tel:+77755226901" class="inline-flex items-center gap-4 text-[10px] font-black uppercase tracking-widest text-brand-gold group">
                        Остались вопросы? Позвоните нам
                        <span class="w-10 h-10 rounded-full border border-brand-gold flex items-center justify-center group-hover:bg-brand-gold group-hover:text-white transition-all">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                        </span>
                    </a>
                </div>
                <div class="space-y-4">
                    <!-- FAQ Items -->
                    <div class="glass-card rounded-3xl overflow-hidden border-brand-gold/10">
                        <button onclick="toggleFaq(this)" class="w-full p-8 flex justify-between items-center text-left group">
                            <span class="text-lg font-bold text-brand-dark uppercase">Какая гарантия на инструменты?</span>
                            <svg class="w-6 h-6 text-brand-gold transition-transform duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                        </button>
                        <div class="faq-content hidden p-8 pt-0 text-brand-clay font-medium border-t border-brand-gold/5">
                            На все наши инструменты предоставляется пожизненная сервисная гарантия. Мы бесплатно устраним любые возникшие со временем дефекты, связанные с изготовлением.
                        </div>
                    </div>
                    <div class="glass-card rounded-3xl overflow-hidden border-brand-gold/10">
                        <button onclick="toggleFaq(this)" class="w-full p-8 flex justify-between items-center text-left group">
                            <span class="text-lg font-bold text-brand-dark uppercase">Как осуществляется доставка?</span>
                            <svg class="w-6 h-6 text-brand-gold transition-transform duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                        </button>
                        <div class="faq-content hidden p-8 pt-0 text-brand-clay font-medium border-t border-brand-gold/5">
                            Мы доставляем инструменты по всему Казахстану и миру. По РК доставка осуществляется курьерской службой до двери в течение 2-5 рабочих дней. Все грузы застрахованы.
                        </div>
                    </div>
                    <div class="glass-card rounded-3xl overflow-hidden border-brand-gold/10">
                        <button onclick="toggleFaq(this)" class="w-full p-8 flex justify-between items-center text-left group">
                            <span class="text-lg font-bold text-brand-dark uppercase">Можно ли заказать индивидуальный дизайн?</span>
                            <svg class="w-6 h-6 text-brand-gold transition-transform duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                        </button>
                        <div class="faq-content hidden p-8 pt-0 text-brand-clay font-medium border-t border-brand-gold/5">
                            Да, мы специализируемся на индивидуальных заказах. Вы можете выбрать породу дерева, форму корпуса, узоры и нанести именную гравировку.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="py-32 px-4 relative overflow-hidden">
        <div class="container mx-auto max-w-7xl px-4 md:px-10">
            <div class="text-center mb-24">
                <h2 class="text-4xl md:text-6xl font-light uppercase text-brand-dark mb-4 font-serif">География <br><span class="text-brand-gold italic">Звучания</span></h2>
                <p class="text-brand-clay font-medium">Доставляем традиции в любой уголок Казахстана и мира</p>
            </div>
            
            <?php include 'includes/kazakhstan_map.php'; ?>

            <!-- Logistic Info Cards -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-2 md:gap-3 mt-12 relative z-10">
                <div class="glass-card p-4 rounded-2xl text-center hover:border-brand-gold/30 transition-all flex flex-col items-center">
                    <svg class="w-6 h-6 text-brand-clay mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" /></svg>
                    <div class="text-xl md:text-2xl font-bold text-brand-gold mb-0.5">24ч</div>
                    <div class="text-[7px] uppercase font-bold tracking-widest text-brand-clay leading-tight">Отгрузка<br>со склада</div>
                </div>
                <div class="glass-card p-4 rounded-2xl text-center hover:border-brand-gold/30 transition-all flex flex-col items-center">
                    <svg class="w-6 h-6 text-brand-clay mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                    <div class="text-xl md:text-2xl font-bold text-brand-gold mb-0.5">0₸</div>
                    <div class="text-[7px] uppercase font-bold tracking-widest text-brand-clay leading-tight">Доставка<br>по Казахстану</div>
                </div>
                <div class="glass-card p-4 rounded-2xl text-center hover:border-brand-gold/30 transition-all flex flex-col items-center">
                    <svg class="w-6 h-6 text-brand-clay mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" /></svg>
                    <div class="text-xl md:text-2xl font-bold text-brand-gold mb-0.5">100%</div>
                    <div class="text-[7px] uppercase font-bold tracking-widest text-brand-clay leading-tight">Страховка<br>груза</div>
                </div>
                <div class="glass-card p-4 rounded-2xl text-center hover:border-brand-gold/30 transition-all flex flex-col items-center">
                    <svg class="w-6 h-6 text-brand-clay mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" /></svg>
                    <div class="text-xl md:text-2xl font-bold text-brand-gold mb-0.5">Air</div>
                    <div class="text-[7px] uppercase font-bold tracking-widest text-brand-clay leading-tight">Авиадоставка<br>по Миру</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Quiz Modal -->
    <div id="quizModal" class="modal-overlay">
        <div class="modal-content w-full max-w-2xl bg-brand-cream rounded-[3rem] p-10 md:p-16 relative mx-4">
            <button onclick="closeModal('quizModal')" class="absolute top-8 right-8 text-brand-dark opacity-40 hover:opacity-100 transition-opacity">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
            </button>
            
            <div class="text-center mb-10">
                <h3 class="text-3xl font-light uppercase text-brand-dark mb-4 font-serif">Получить <span class="text-brand-gold italic">расчет</span></h3>
                <p class="text-brand-clay">Оставьте ваши контакты, и мы свяжемся с вами для уточнения деталей и расчета стоимости.</p>
            </div>

            <form action="https://formspree.io/f/xvoldovq" method="POST" class="space-y-6">
                <div>
                    <label class="text-[10px] font-black uppercase tracking-widest text-brand-gold mb-3 block">Ваше имя</label>
                    <input type="text" name="name" required class="w-full bg-brand-accent/50 border border-brand-gold/10 rounded-2xl px-6 py-4 focus:outline-none focus:border-brand-gold transition-all" placeholder="Александр">
                </div>
                <div>
                    <label class="text-[10px] font-black uppercase tracking-widest text-brand-gold mb-3 block">Телефон / WhatsApp</label>
                    <input type="tel" name="phone" required class="w-full bg-brand-accent/50 border border-brand-gold/10 rounded-2xl px-6 py-4 focus:outline-none focus:border-brand-gold transition-all" placeholder="+7 (___) ___ __ __">
                </div>
                <button type="submit" class="btn-gold w-full py-6 rounded-2xl text-[12px] font-black uppercase tracking-widest mt-4">Отправить заявку</button>
                <p class="text-[9px] text-center text-brand-clay/60 uppercase tracking-widest">Нажимая кнопку, вы соглашаетесь с политикой конфиденциальности</p>
            </form>
        </div>
    </div>

<?php include 'includes/footer.php'; ?>

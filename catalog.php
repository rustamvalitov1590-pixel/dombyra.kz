<?php 
    $currentPage = 'catalog';
    $pageTitle = 'Каталог домбр | dombyra.kz - Выберите свой инструмент';
    include 'includes/header.php'; 
?>

    <!-- Page Header -->
    <section class="pt-40 pb-20 px-4 bg-brand-accent/30 relative overflow-hidden">
        <div class="floating-shape bg-brand-gold/10 w-96 h-96 top-[-10%] right-[-10%]"></div>
        <div class="container mx-auto max-w-7xl px-4 md:px-10 relative z-10">
            <h1 class="text-5xl md:text-8xl font-light uppercase tracking-tighter text-brand-dark leading-none mb-8 font-serif">
                Каталог <br> <span class="text-brand-gold italic">инструментов</span>
            </h1>
            <p class="text-xl text-brand-clay max-w-xl font-medium leading-relaxed">
                От ученических моделей до эксклюзивных концертных инструментов. Каждая домбра проходит строгий контроль качества.
            </p>
        </div>
    </section>

    <!-- Filters & Products -->
    <section class="py-24 px-4">
        <div class="container mx-auto max-w-7xl px-4 md:px-10">
            <!-- Filter Bar -->
            <div class="flex flex-wrap gap-4 mb-20 border-b border-brand-gold/10 pb-8">
                <button class="filter-btn active text-[10px] font-black uppercase tracking-[0.2em] px-8 py-3 rounded-full border border-brand-gold bg-brand-gold text-white transition-all">Все</button>
                <button class="filter-btn text-[10px] font-black uppercase tracking-[0.2em] px-8 py-3 rounded-full border border-brand-gold/20 hover:border-brand-gold transition-all">Ученические</button>
                <button class="filter-btn text-[10px] font-black uppercase tracking-[0.2em] px-8 py-3 rounded-full border border-brand-gold/20 hover:border-brand-gold transition-all">Профессиональные</button>
                <button class="filter-btn text-[10px] font-black uppercase tracking-[0.2em] px-8 py-3 rounded-full border border-brand-gold/20 hover:border-brand-gold transition-all">Элитные</button>
                <button class="filter-btn text-[10px] font-black uppercase tracking-[0.2em] px-8 py-3 rounded-full border border-brand-gold/20 hover:border-brand-gold transition-all">Сувенирные</button>
            </div>

            <!-- Product Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                <!-- Профессиональная -->
                <div class="product-card group relative">
                    <div class="glass-card p-6 rounded-4xl transition-all duration-500 hover:shadow-2xl hover:border-brand-gold/30">
                        <div class="aspect-[3/4] bg-white rounded-3xl mb-8 flex items-center justify-center p-4 overflow-hidden relative border border-brand-gold/5">
                            <span class="absolute top-4 left-4 bg-brand-gold text-white text-[10px] font-black px-4 py-1.5 rounded-full uppercase tracking-widest z-10 shadow-lg">Bestseller</span>
                            <img src="img/professional.webp" class="product-img h-full object-contain transition-transform duration-700 ease-out" alt="Professional">
                        </div>
                        <div class="px-2">
                            <div class="flex justify-between items-start mb-2">
                                <h3 class="text-2xl font-bold uppercase text-brand-dark group-hover:text-brand-gold transition-colors">Профессиональная</h3>
                                <span class="text-brand-gold font-bold text-xl">185 000 ₸</span>
                            </div>
                            <p class="text-brand-clay mb-8 text-sm font-medium leading-relaxed">Инструмент высокого класса для концертных выступлений. Глубокое и насыщенное звучание.</p>
                            <a href="https://wa.me/77755226901" class="btn-gold block w-full py-4 rounded-2xl text-center text-[11px] font-black uppercase tracking-widest">Заказать через WhatsApp</a>
                        </div>
                    </div>
                </div>

                <!-- Элитная -->
                <div class="product-card group relative">
                    <div class="glass-card p-6 rounded-4xl transition-all duration-500 hover:shadow-2xl hover:border-brand-gold/30">
                        <div class="aspect-[3/4] bg-white rounded-3xl mb-8 flex items-center justify-center p-4 overflow-hidden relative border border-brand-gold/5">
                            <img src="img/elite.webp" class="product-img h-full object-contain transition-transform duration-700 ease-out" alt="Elite">
                        </div>
                        <div class="px-2">
                            <div class="flex justify-between items-start mb-2">
                                <h3 class="text-2xl font-bold uppercase text-brand-dark group-hover:text-brand-gold transition-colors">Элитная модель</h3>
                                <span class="text-brand-gold font-bold text-xl">245 000 ₸</span>
                            </div>
                            <p class="text-brand-clay mb-8 text-sm font-medium leading-relaxed">Премиальные материалы и инкрустация. Шедевр музыкального и прикладного искусства.</p>
                            <a href="https://wa.me/77755226901" class="btn-gold block w-full py-4 rounded-2xl text-center text-[11px] font-black uppercase tracking-widest">Заказать через WhatsApp</a>
                        </div>
                    </div>
                </div>

                <!-- Ученическая -->
                <div class="product-card group relative">
                    <div class="glass-card p-6 rounded-4xl transition-all duration-500 hover:shadow-2xl hover:border-brand-gold/30">
                        <div class="aspect-[3/4] bg-white rounded-3xl mb-8 flex items-center justify-center p-4 overflow-hidden relative border border-brand-gold/5">
                            <img src="img/student.webp" class="product-img h-full object-contain transition-transform duration-700 ease-out" alt="Student">
                        </div>
                        <div class="px-2">
                            <div class="flex justify-between items-start mb-2">
                                <h3 class="text-2xl font-bold uppercase text-brand-dark group-hover:text-brand-gold transition-colors">Ученическая</h3>
                                <span class="text-brand-gold font-bold text-xl">125 000 ₸</span>
                            </div>
                            <p class="text-brand-clay mb-8 text-sm font-medium leading-relaxed">Надежная и легкая домбра для первых шагов в мире музыки. Правильная постановка звука.</p>
                            <a href="https://wa.me/77755226901" class="btn-gold block w-full py-4 rounded-2xl text-center text-[11px] font-black uppercase tracking-widest">Заказать через WhatsApp</a>
                        </div>
                    </div>
                </div>

                <!-- Аққу (Лебедь) -->
                <div class="product-card group relative">
                    <div class="glass-card p-6 rounded-4xl transition-all duration-500 hover:shadow-2xl hover:border-brand-gold/30">
                        <div class="aspect-[3/4] bg-white rounded-3xl mb-8 flex items-center justify-center p-4 overflow-hidden relative border border-brand-gold/5">
                            <img src="img/akku.webp" class="product-img h-full object-contain transition-transform duration-700 ease-out" alt="Аққу">
                        </div>
                        <div class="px-2">
                            <div class="flex justify-between items-start mb-2">
                                <h3 class="text-2xl font-bold uppercase text-brand-dark group-hover:text-brand-gold transition-colors">Аққу (Лебедь)</h3>
                                <span class="text-brand-gold font-bold text-xl">185 000 ₸</span>
                            </div>
                            <p class="text-brand-clay mb-8 text-sm font-medium leading-relaxed">Характерная модель с детальной инкрустацией. Яркие визуальные акценты традиционного мастерства.</p>
                            <a href="https://wa.me/77755226901" class="btn-gold block w-full py-4 rounded-2xl text-center text-[11px] font-black uppercase tracking-widest">Заказать через WhatsApp</a>
                        </div>
                    </div>
                </div>

                <!-- Тырна (Журавль) -->
                <div class="product-card group relative">
                    <div class="glass-card p-6 rounded-4xl transition-all duration-500 hover:shadow-2xl hover:border-brand-gold/30">
                        <div class="aspect-[3/4] bg-white rounded-3xl mb-8 flex items-center justify-center p-4 overflow-hidden relative border border-brand-gold/5">
                            <img src="img/tyrna.webp" class="product-img h-full object-contain transition-transform duration-700 ease-out" alt="Тырна">
                        </div>
                        <div class="px-2">
                            <div class="flex justify-between items-start mb-2">
                                <h3 class="text-2xl font-bold uppercase text-brand-dark group-hover:text-brand-gold transition-colors">Тырна (Журавль)</h3>
                                <span class="text-brand-gold font-bold text-xl">165 000 ₸</span>
                            </div>
                            <p class="text-brand-clay mb-8 text-sm font-medium leading-relaxed">Символ верности и долголетия. Изящный рисунок журавлей подчеркивает уникальность звучания.</p>
                            <a href="https://wa.me/77755226901" class="btn-gold block w-full py-4 rounded-2xl text-center text-[11px] font-black uppercase tracking-widest">Заказать через WhatsApp</a>
                        </div>
                    </div>
                </div>

                <!-- Имя, Инициалы (Personal) -->
                <div class="product-card group relative">
                    <div class="glass-card p-6 rounded-4xl transition-all duration-500 hover:shadow-2xl hover:border-brand-gold/30 border-brand-gold/10">
                        <div class="aspect-[3/4] bg-white rounded-3xl mb-8 flex items-center justify-center p-4 overflow-hidden relative border border-brand-gold/5">
                            <span class="absolute top-4 left-4 bg-brand-dark text-brand-gold text-[10px] font-black px-4 py-1.5 rounded-full uppercase tracking-widest z-10 shadow-lg">ИНДИВИДУАЛЬНО</span>
                            <img src="img/personal.webp" class="product-img h-full object-contain transition-transform duration-700 ease-out" alt="Индивидуальная модель">
                        </div>
                        <div class="px-2">
                            <div class="flex justify-between items-start mb-2">
                                <h3 class="text-2xl font-bold uppercase text-brand-dark group-hover:text-brand-gold transition-colors">Имя, Инициалы</h3>
                                <span class="text-brand-gold font-bold text-xl">от 180 000 ₸</span>
                            </div>
                            <p class="text-brand-clay mb-8 text-sm font-medium leading-relaxed">Личный инструмент с нанесением вашего имени или инициалов. Идеальный подарок со смыслом.</p>
                            <a href="https://wa.me/77755226901" class="btn-gold block w-full py-4 rounded-2xl text-center text-[11px] font-black uppercase tracking-widest">Заказать персонализацию</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    
    <!-- Custom CTA -->
    <section class="py-24 px-4 bg-brand-dark text-white overflow-hidden relative">
        <div class="floating-shape bg-brand-gold/20 w-96 h-96 top-0 right-0"></div>
        <div class="container mx-auto max-w-5xl px-4 md:px-10 text-center relative z-10">
            <h2 class="text-4xl md:text-7xl font-light uppercase tracking-tight mb-8 font-serif">
                Не нашли <span class="text-brand-gold italic">свой идеал?</span>
            </h2>
            <p class="text-white/60 text-lg mb-12 max-w-2xl mx-auto">
                Создайте инструмент своей мечты в нашем интерактивном конструкторе или закажите полностью индивидуальный дизайн.
            </p>
            <div class="flex flex-col md:flex-row justify-center gap-6">
                <a href="index.php#constructor" class="btn-gold px-12 py-5 rounded-2xl text-[12px] font-black uppercase tracking-widest">Открыть конструктор</a>
                <a href="contacts.php" class="px-12 py-5 rounded-2xl border border-white/20 hover:bg-white/10 transition-all text-[12px] font-black uppercase tracking-widest">Консультация мастера</a>
            </div>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>

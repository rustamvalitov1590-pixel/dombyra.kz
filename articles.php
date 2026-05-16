<?php 
    $currentPage = 'articles';
    $pageTitle = 'Статьи о домбре | dombyra.kz - Полезные материалы';
    include 'includes/header.php'; 
?>

    <!-- Page Header -->
    <section class="pt-40 pb-20 px-4 bg-brand-accent/30 relative overflow-hidden">
        <div class="floating-shape bg-brand-gold/10 w-96 h-96 top-[-10%] right-[-10%]"></div>
        <div class="container mx-auto max-w-7xl px-4 md:px-10 relative z-10">
            <h1 class="text-5xl md:text-8xl font-light uppercase tracking-tighter text-brand-dark leading-none mb-8 font-serif">
                Мир <br> <span class="text-brand-gold italic">домбры</span>
            </h1>
            <p class="text-xl text-brand-clay max-w-xl font-medium leading-relaxed">
                Полезные материалы об искусстве создания инструментов, истории казахской музыки и советах по уходу.
            </p>
        </div>
    </section>

    <!-- Articles Grid -->
    <section class="py-24 px-4 relative">
        <div class="container mx-auto max-w-7xl px-1 md:px-10">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                <!-- Article 1: Как выбрать домбру -->
                <div class="glass-card rounded-4xl overflow-hidden group hover:-translate-y-2 transition-all duration-500">
                    <div class="h-64 overflow-hidden relative">
                        <img src="img/bastau.webp" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700 opacity-80" alt="Guide">
                        <div class="absolute top-4 left-4 bg-brand-gold text-white text-[9px] font-bold px-3 py-1 rounded-full uppercase tracking-widest">Советы</div>
                    </div>
                    <div class="p-10">
                        <h4 class="text-2xl font-bold text-brand-dark mb-4 leading-tight group-hover:text-brand-gold transition-colors">Как выбрать домбру</h4>
                        <p class="text-sm text-brand-clay mb-8 leading-relaxed">Полное руководство по выбору инструмента в зависимости от ваших целей, бюджета и уровня подготовки. Разбираем основные нюансы.</p>
                        <a href="guide.php" class="text-[10px] font-black uppercase tracking-widest text-brand-gold border-b border-brand-gold/20 pb-1 hover:border-brand-gold transition-all">Читать полностью →</a>
                    </div>
                </div>

                <!-- Article 2: Домбра для ребенка -->
                <div class="glass-card rounded-4xl overflow-hidden group hover:-translate-y-2 transition-all duration-500">
                    <div class="h-64 overflow-hidden relative">
                        <img src="img/adal.webp" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700 opacity-80" alt="Learning">
                        <div class="absolute top-4 left-4 bg-brand-gold text-white text-[9px] font-bold px-3 py-1 rounded-full uppercase tracking-widest">Обучение</div>
                    </div>
                    <div class="p-10">
                        <h4 class="text-2xl font-bold text-brand-dark mb-4 leading-tight group-hover:text-brand-gold transition-colors">Домбра для ребенка</h4>
                        <p class="text-sm text-brand-clay mb-8 leading-relaxed">Рекомендации для родителей: с какого возраста начинать обучение, как выбрать подходящий размер и не отбить желание у юного музыканта.</p>
                        <span class="text-[10px] font-black uppercase tracking-widest text-brand-clay/50">Скоро появится</span>
                    </div>
                </div>

                <!-- Article 3: Размер домбры -->
                <div class="glass-card rounded-4xl overflow-hidden group hover:-translate-y-2 transition-all duration-500">
                    <div class="h-64 overflow-hidden relative">
                        <img src="img/arnau.webp" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700 opacity-80" alt="Technique">
                        <div class="absolute top-4 left-4 bg-brand-gold text-white text-[9px] font-bold px-3 py-1 rounded-full uppercase tracking-widest">Техника</div>
                    </div>
                    <div class="p-10">
                        <h4 class="text-2xl font-bold text-brand-dark mb-4 leading-tight group-hover:text-brand-gold transition-colors">Размер домбры</h4>
                        <p class="text-sm text-brand-clay mb-8 leading-relaxed">Разбираем, как измеряется размер домбры, на что он влияет и как подобрать инструмент под свои физические параметры.</p>
                        <span class="text-[10px] font-black uppercase tracking-widest text-brand-clay/50">Скоро появится</span>
                    </div>
                </div>

                <!-- Article 4 -->
                <div class="glass-card rounded-4xl overflow-hidden group hover:-translate-y-2 transition-all duration-500">
                    <div class="h-64 overflow-hidden relative">
                        <img src="img/aibar.webp" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700 opacity-80" alt="Materials">
                        <div class="absolute top-4 left-4 bg-brand-gold text-white text-[9px] font-bold px-3 py-1 rounded-full uppercase tracking-widest">Материалы</div>
                    </div>
                    <div class="p-10">
                        <h4 class="text-2xl font-bold text-brand-dark mb-4 leading-tight group-hover:text-brand-gold transition-colors">Секреты выбора дерева</h4>
                        <p class="text-sm text-brand-clay mb-8 leading-relaxed">Клен, береза или ель? Узнайте, как различные породы дерева влияют на акустику, долговечность и характер звучания вашей домбры.</p>
                        <span class="text-[10px] font-black uppercase tracking-widest text-brand-clay/50">Скоро появится</span>
                    </div>
                </div>

                <!-- Article 5 -->
                <div class="glass-card rounded-4xl overflow-hidden group hover:-translate-y-2 transition-all duration-500">
                    <div class="h-64 overflow-hidden relative">
                        <img src="img/shabandoz.webp" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700 opacity-80" alt="Market">
                        <div class="absolute top-4 left-4 bg-brand-gold text-white text-[9px] font-bold px-3 py-1 rounded-full uppercase tracking-widest">Рынок</div>
                    </div>
                    <div class="p-10">
                        <h4 class="text-2xl font-bold text-brand-dark mb-4 leading-tight group-hover:text-brand-gold transition-colors">Где купить домбру</h4>
                        <p class="text-sm text-brand-clay mb-8 leading-relaxed">Магазин, базар или частная мастерская? Разбираем плюсы и минусы каждого варианта и даем советы по проверке качества.</p>
                        <span class="text-[10px] font-black uppercase tracking-widest text-brand-clay/50">Скоро появится</span>
                    </div>
                </div>

                <!-- Article 6 -->
                <div class="glass-card rounded-4xl overflow-hidden group hover:-translate-y-2 transition-all duration-500">
                    <div class="h-64 overflow-hidden relative">
                        <img src="img/personal.webp" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700 opacity-80" alt="Analysis">
                        <div class="absolute top-4 left-4 bg-brand-gold text-white text-[9px] font-bold px-3 py-1 rounded-full uppercase tracking-widest">Анализ</div>
                    </div>
                    <div class="p-10">
                        <h4 class="text-2xl font-bold text-brand-dark mb-4 leading-tight group-hover:text-brand-gold transition-colors">50к VS 500к тенге</h4>
                        <p class="text-sm text-brand-clay mb-8 leading-relaxed">В чем реальная разница между бюджетными и премиальными инструментами? Стоит ли переплачивать новичку за профессиональный звук.</p>
                        <span class="text-[10px] font-black uppercase tracking-widest text-brand-clay/50">Скоро появится</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>

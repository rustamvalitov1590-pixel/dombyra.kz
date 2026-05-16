<?php 
    $currentPage = 'about';
    $pageTitle = 'О мастерской | dombyra.kz - Традиции и Мастерство';
    include 'includes/header.php'; 
?>

    <!-- Page Header -->
    <section class="pt-40 pb-20 px-4 bg-brand-accent/30 relative overflow-hidden">
        <div class="floating-shape bg-brand-gold/10 w-96 h-96 top-[-10%] right-[-10%]"></div>
        <div class="container mx-auto max-w-7xl px-4 md:px-10 relative z-10">
            <h1 class="text-5xl md:text-8xl font-light uppercase tracking-tighter text-brand-dark leading-none mb-8 font-serif">
                О нашей <br> <span class="text-brand-gold italic">мастерской</span>
            </h1>
            <p class="text-xl text-brand-clay max-w-xl font-medium leading-relaxed">
                История dombyra.kz началась с мечты возродить истинное звучание национального инструмента.
            </p>
        </div>
    </section>

    <!-- Content -->
    <section class="py-24 px-4">
        <div class="container mx-auto max-w-7xl px-4 md:px-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-20 items-center">
                <div class="relative">
                    <div class="aspect-square rounded-full border border-brand-gold/30 absolute -inset-10 animate-spin-slow"></div>
                    <img src="./assets/workshop_process.jpg" class="relative z-10 rounded-full w-full max-w-md mx-auto shadow-2xl border-4 border-white" alt="Workshop Process">
                </div>
                <div>
                    <h2 class="text-4xl md:text-6xl font-light uppercase tracking-tight mb-8 text-brand-dark font-serif">Мастерство, <br><span class="text-brand-gold italic">пронесенное через века</span></h2>
                    <p class="text-lg text-brand-clay leading-relaxed mb-10 font-medium">Наша мастерская — это не просто производство. Это место, где встречаются традиции предков и современные технологии. Мы используем секреты старых мастеров, чтобы каждый инструмент звучал так, как он звучал в степи сотни лет назад.</p>
                    <div class="grid grid-cols-2 gap-8">
                        <div><div class="text-4xl font-bold text-brand-gold mb-2">15+</div><div class="text-[10px] font-black uppercase tracking-widest opacity-50">Лет опыта</div></div>
                        <div><div class="text-4xl font-bold text-brand-gold mb-2">7000+</div><div class="text-[10px] font-black uppercase tracking-widest opacity-50">Инструментов</div></div>
                    </div>
                </div>
            </div>

            <div class="mt-32 glass-card rounded-5xl p-10 md:p-20 border border-brand-gold/10">
                <div class="max-w-3xl mx-auto text-center">
                    <h3 class="text-3xl md:text-5xl font-light uppercase text-brand-dark mb-10">Наша <span class="text-brand-gold italic">философия</span></h3>
                    <p class="text-brand-clay text-lg leading-relaxed mb-8">Мы верим, что домбра — это не просто музыкальный инструмент, а хранитель культурного кода. Именно поэтому мы уделяем внимание каждой детали: от выбора древесины, которая сохнет годами, до филигранной резьвы узоров.</p>
                    <p class="text-brand-clay text-lg leading-relaxed">Наш проект «Айым Эрнст» направлен на популяризацию национального искусства среди молодежи и сохранение аутентичного звучания для будущих поколений.</p>
                </div>
            </div>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>

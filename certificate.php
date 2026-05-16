<?php 
    $currentPage = 'certificate';
    $pageTitle = 'Проверка сертификата | dombyra.kz - Мастерская в Алматы';
    include 'includes/header.php'; 
?>

    <!-- Page Header -->
    <section class="pt-40 pb-20 px-4 bg-brand-accent/30 relative overflow-hidden">
        <div class="floating-shape bg-brand-gold/10 w-96 h-96 top-[-10%] right-[-10%]"></div>
        <div class="container mx-auto max-w-7xl px-4 md:px-10 relative z-10">
            <h1 class="text-5xl md:text-8xl font-light uppercase tracking-tighter text-brand-dark leading-none mb-8 font-serif">
                Проверка <br> <span class="text-brand-gold italic">сертификата</span>
            </h1>
            <p class="text-xl text-brand-clay max-w-xl font-medium leading-relaxed">
                Проверьте подлинность вашей домбры по серийному номеру сертификата.
            </p>
        </div>
    </section>

    <!-- Certificate Verification -->
    <section class="py-24 px-4">
        <div class="container mx-auto max-w-7xl px-1 md:px-10">
            <div class="glass-card rounded-5xl overflow-hidden shadow-xl border border-brand-gold/10">
                <div class="grid grid-cols-1 lg:grid-cols-2">
                    <div class="p-10 md:p-20 flex flex-col justify-center">
                        <div class="inline-flex items-center gap-3 px-4 py-2 rounded-full bg-brand-gold/5 border border-brand-gold/10 mb-8 w-fit">
                            <span class="text-[10px] font-bold uppercase tracking-[0.2em] text-brand-gold">Гарантия качества</span>
                        </div>
                        <h2 class="text-4xl md:text-6xl font-light mb-10 uppercase tracking-tight text-brand-dark leading-tight">Проверьте <br> <span class="text-brand-gold font-bold">сертификат</span></h2>
                        <p class="text-lg text-brand-clay font-medium mb-12">Введите серийный номер вашего инструмента, чтобы подтвердить его подлинность.</p>
                        <form class="space-y-4" id="certForm">
                            <input type="text" name="cert_number" placeholder="Номер сертификата (напр. DOM-2024-001)" class="w-full px-8 py-5 rounded-2xl border-2 border-brand-gold/20 focus:border-brand-gold outline-none transition-all text-brand-dark font-bold">
                            <button type="submit" class="w-full py-5 bg-brand-gold text-white rounded-2xl font-bold uppercase tracking-widest hover:shadow-xl transition-all">Проверить</button>
                        </form>
                        <div id="certResult" class="mt-8 p-6 rounded-2xl hidden"></div>
                    </div>
                    <div class="bg-brand-accent/30 relative overflow-hidden block min-h-[300px] lg:min-h-0">
                        <img src="./assets/certificate.png" class="absolute inset-0 w-full h-full object-contain p-10 drop-shadow-2xl" alt="Certificate">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.getElementById('certForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const resultDiv = document.getElementById('certResult');
            const certNum = this.querySelector('input').value;
            
            resultDiv.classList.remove('hidden', 'bg-green-100', 'text-green-800', 'bg-red-100', 'text-red-800');
            
            if(certNum.trim() === '') {
                resultDiv.innerHTML = 'Пожалуйста, введите номер сертификата.';
                resultDiv.classList.add('bg-red-100', 'text-red-800', 'block');
                return;
            }
            
            // Mock validation logic
            resultDiv.innerHTML = 'Сертификат <b>' + certNum + '</b> успешно подтвержден. Инструмент подлинный.';
            resultDiv.classList.add('bg-green-100', 'text-green-800', 'block');
        });
    </script>

<?php include 'includes/footer.php'; ?>

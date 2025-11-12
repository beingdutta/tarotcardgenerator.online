<?php include __DIR__ . '/navigation/header.php'; ?>

<div class="text-center prose prose-invert prose-p:text-gray-300 prose-headings:text-amber-200 prose-headings:font-serif max-w-4xl mx-auto">

    <!-- COMING SOON HERO -->
    <section class="flex flex-col items-center justify-center py-16 min-h-[60vh]">
        <h1 class="text-4xl md:text-5xl text-amber-200 font-serif mb-8 animate-pulse">Coming Soon!</h1>
        <p class="text-lg text-gray-300 mb-12">A new feature is being crafted and will be revealed soon.</p>
        <div id="countdown" class="flex gap-4 md:gap-8 text-cyan-300 font-sans">
            <div class="flex flex-col items-center p-4 bg-black/20 rounded-lg border border-amber-200/10 min-w-[80px]">
                <span id="days" class="text-3xl md:text-4xl font-bold">00</span>
                <span class="text-xs md:text-sm text-amber-200/70 tracking-widest">Days</span>
            </div>
            <div class="flex flex-col items-center p-4 bg-black/20 rounded-lg border border-amber-200/10 min-w-[80px]">
                <span id="hours" class="text-3xl md:text-4xl font-bold">00</span>
                <span class="text-xs md:text-sm text-amber-200/70 tracking-widest">Hours</span>
            </div>
            <div class="flex flex-col items-center p-4 bg-black/20 rounded-lg border border-amber-200/10 min-w-[80px]">
                <span id="minutes" class="text-3xl md:text-4xl font-bold">00</span>
                <span class="text-xs md:text-sm text-amber-200/70 tracking-widest">Minutes</span>
            </div>
            <div class="flex flex-col items-center p-4 bg-black/20 rounded-lg border border-amber-200/10 min-w-[80px]">
                <span id="seconds" class="text-3xl md:text-4xl font-bold">00</span>
                <span class="text-xs md:text-sm text-amber-200/70 tracking-widest">Seconds</span>
            </div>
        </div>
        <h3 class="text-2xl text-amber-200/80 font-serif mt-12">Thanks for your patience!</h3>
    </section>
</div>

<!-- COUNTDOWN JS -->
<script>
    // Set the launch date to 7 days from now
    const launchDate = new Date();
    launchDate.setDate(launchDate.getDate() + 7);
    function updateCountdown() {
        const now = new Date();
        const diff = launchDate - now;
        if (diff <= 0) {
            clearInterval(timerInterval);
            document.getElementById('countdown').innerHTML = '<p class="text-2xl text-green-400">We are LIVE! 🎉</p>';
            return;
        }
        const days = Math.floor(diff / (1000 * 60 * 60 * 24));
        const hours = Math.floor((diff / (1000 * 60 * 60)) % 24);
        const minutes = Math.floor((diff / (1000 * 60)) % 60);
        const seconds = Math.floor((diff / 1000) % 60);

        document.getElementById('days').textContent = String(days).padStart(2, '0');
        document.getElementById('hours').textContent = String(hours).padStart(2, '0');
        document.getElementById('minutes').textContent = String(minutes).padStart(2, '0');
        document.getElementById('seconds').textContent = String(seconds).padStart(2, '0');
    }
    updateCountdown();
    const timerInterval = setInterval(updateCountdown, 1000);
</script>

<?php include __DIR__ . '/navigation/footer.php'; ?>

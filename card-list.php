<?php include __DIR__ . '/navigation/header.php'; ?>

<div class="text-center mb-12">
    <h2 class="font-serif text-3xl md:text-4xl text-amber-200">Tarot Card List</h2>
    <p class="text-gray-400 max-w-2xl mx-auto mt-2">Explore the meanings of all 78 cards in the tarot deck. Click on any card to learn more about its symbolism and interpretation.</p>
</div>

<div class="max-w-5xl mx-auto">
    <div id="card-grid" class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-4 md:gap-5">
        <!-- Card items will be dynamically injected here by JavaScript -->
        <!-- A simple loading state -->
        <p class="text-gray-400 col-span-full text-center">Loading cards...</p>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const grid = document.getElementById('card-grid');

    fetch('tarot-details.json')
        .then(response => response.json())
        .then(data => {
            grid.innerHTML = ''; // Clear loading message
            const cards = data.cards;
            cards.forEach(card => {
                const cardCell = document.createElement('a');
                // Although a dedicated page for each card isn't built yet, this sets up the link structure.
                cardCell.href = `card-details.php?card=${encodeURIComponent(card.name.toLowerCase().replace(/ /g, '-'))}`;
                cardCell.className = 'group bg-black/20 border border-amber-200/10 rounded-lg overflow-hidden text-center transition-all duration-300 hover:border-amber-200/40 hover:shadow-lg hover:shadow-amber-200/10';

                cardCell.innerHTML = `
                    <img src="/assets/cards/${card.img}" 
                         alt="${card.name}" 
                         class="w-full h-auto object-cover aspect-[2/3.5] bg-gray-900"
                         loading="lazy"
                         width="200" height="340">
                    <div class="p-2 sm:p-3">
                        <h3 class="text-sm font-semibold text-cyan-300 group-hover:text-amber-200 truncate">${card.name}</h3>
                        <p class="text-xs text-gray-400 font-serif tracking-wider">${card.arcana}</p>
                    </div>
                `;
                grid.appendChild(cardCell);
            });
        })
        .catch(error => {
            console.error('Error fetching tarot card data:', error);
            grid.innerHTML = '<p class="text-red-400 col-span-full text-center">Could not load card data. Please try again later.</p>';
        });
});
</script>

<?php include __DIR__ . '/navigation/footer.php'; ?>
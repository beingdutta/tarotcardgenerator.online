<?php
$pageTitle = 'Free 3 Card Tarot Reading | Past, Present, Future Spread';
$pageDescription = 'Get a free 3 card tarot reading for insight into your past, present, and future. This classic spread provides instant interpretations to understand your life\'s path.';
$pageKeywords = '3 tarot card generator, three card tarot spread, tarot card generator, random tarot card generator, free tarot reading, tarot card generator reading';
$ogImage = 'https://tarotcardgenerator.online/assets/og-three-card.jpg';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> <link rel="icon" href="/assets/icons/scorpio-32.png" type="image/x-icon"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- SEO Meta Tags -->
    <title><?php echo htmlspecialchars($pageTitle); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($pageDescription); ?>">
    <meta name="keywords" content="<?php echo htmlspecialchars($pageKeywords); ?>">

    <!-- Open Graph / Facebook Meta Tags -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://tarotcardgenerator.online<?php echo htmlspecialchars($_SERVER['REQUEST_URI']); ?>">
    <meta property="og:title" content="<?php echo htmlspecialchars($pageTitle); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($pageDescription); ?>">
    <meta property="og:image" content="<?php echo htmlspecialchars($ogImage); ?>">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo htmlspecialchars($pageTitle); ?>">
    <meta name="twitter:description" content="<?php echo htmlspecialchars($pageDescription); ?>">
    <meta name="twitter:image" content="<?php echo htmlspecialchars($ogImage); ?>">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=EB+Garamond:ital,wght@0,400;0,700;1,400&family=Inter:wght@400;500;700&display=swap" rel="stylesheet">

    <style>
        body { font-family: 'Inter', sans-serif; color: #E0E0E0; }
        .font-serif { font-family: 'EB Garamond', serif; }
        .font-script { font-family: 'Dancing Script', cursive; }
    </style>
</head>
<body class="bg-black">
    <?php include __DIR__ . '/navigation/header.php'; ?>
    <main class="container mx-auto px-4 py-8 md:py-12">
        <!-- This container will hold both the initial state and the final reading -->
        <div id="three-card-container">

            <!-- Initial State: Two-Column Layout -->
            <div id="initial-view">
                <div class="lg:-translate-x-24">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-2 md:gap-4 items-start">
                        <!-- Left Column: Card Display -->
                        <div id="left-column" class="flex flex-col items-center md:items-end md:pr-12">
                            <h2 id="card-name-heading" class="font-serif text-xl md:text-2xl text-amber-200 mb-6 w-full max-w-[15rem] text-center">Three Card Spread</h2>
                            
                            <!-- Overlapping Card Backs -->
                            <div id="deck-container" class="relative cursor-pointer w-[15rem] h-[26rem] group">
                                <img src="/assets/backface/tree.png" alt="Tarot Card Back" class="absolute top-0 left-0 w-full h-auto rounded-lg border-2 border-amber-200/30 shadow-lg transition-transform duration-300 group-hover:-translate-x-4 group-hover:-rotate-3">
                                <img src="/assets/backface/tree.png" alt="Tarot Card Back" class="absolute top-0 left-0 w-full h-auto rounded-lg border-2 border-amber-200/30 shadow-lg transition-transform duration-300">
                                <img src="/assets/backface/tree.png" alt="Tarot Card Back" class="absolute top-0 left-0 w-full h-auto rounded-lg border-2 border-amber-200/30 shadow-lg transition-transform duration-300 group-hover:translate-x-4 group-hover:rotate-3">
                            </div>

                            <!-- Prompt Text -->
                            <p id="draw-prompt" class="mt-4 text-gray-300 font-sans">Tap the Deck to Draw Your Spread</p>
                        </div>

                        <!-- Right Column: Reading Content -->
                        <div id="right-column" class="mt-8 md:mt-0 md:pt-12">
                            <div class="prose prose-invert prose-p:text-gray-300 prose-headings:text-amber-200 prose-headings:font-serif max-w-none">
                                <h3 class="text-2xl">Past, Present, and Future.</h3>
                                <p>Take a deep breath and center yourself. Focus on a question or situation as you prepare to draw three cards representing the flow of energy in your life.</p>
                                
                                <h4 class="text-xl text-amber-200 font-serif mt-6">Instructions:</h4>
                                <ul class="list-none p-0 mt-2 space-y-3">
                                    <li class="flex items-start">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3 text-amber-200/50 flex-shrink-0 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                                        <span class="text-amber-200">The first card reveals the <strong>Past</strong> influences on your situation.</span>
                                    </li>
                                    <li class="flex items-start">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3 text-amber-200/50 flex-shrink-0 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                                        <span class="text-amber-200">The second card illuminates your <strong>Present</strong> circumstances and challenges.</span>
                                    </li>
                                     <li class="flex items-start">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3 text-amber-200/50 flex-shrink-0 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                                        <span class="text-amber-200">The third card offers insight into the potential <strong>Future</strong> outcome.</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Revealed State: Cards and Readings -->
            <div id="reading-container" class="hidden">
                <!-- JS will populate this section -->
            </div>

        </div>

        <!-- Page-specific JavaScript -->
        <style>
            .loader {
                border: 4px solid rgba(255, 255, 255, 0.2);
                border-left-color: #f8c96d; /* --accent color */
                border-radius: 50%;
                width: 50px;
                height: 50px;
                animation: spin 1s linear infinite;
            }
            .scroll-indicator {
                position: fixed;
                bottom: 1.5rem;
                left: 50%;
                transform: translateX(-50%);
                z-index: 50;
                opacity: 0;
                transition: opacity 0.5s ease-in;
                animation: bounce 2s infinite;
                filter: drop-shadow(0 0 4px rgba(248, 201, 109, 0.4)) drop-shadow(0 0 12px rgba(248, 201, 109, 0.4)) drop-shadow(0 0 24px rgba(248, 201, 109, 0.3));
            }
            @keyframes bounce { 0%, 20%, 50%, 80%, 100% { transform: translate(-50%, 0); } 40% { transform: translate(-50%, -15px); } 60% { transform: translate(-50%, -7px); } }
            .scroll-indicator.visible { opacity: 1; }
            @keyframes spin { to { transform: rotate(360deg); } }
        </style>
        <script>
        document.addEventListener('DOMContentLoaded', function () {
            const deckContainer = document.getElementById('deck-container');
            const initialView = document.getElementById('initial-view');
            const readingContainer = document.getElementById('reading-container');
            let tarotData = [];
            let isCardDrawn = false;

            // Fetch Tarot card data from JSON file
            fetch('tarot-details.json')
                .then(response => response.json())
                .then(data => {
                    tarotData = data.cards;
                })
                .catch(error => {
                    console.error('Error fetching tarot data:', error);
                    readingContainer.innerHTML = '<p>Sorry, the spirits are resting. Please try again later.</p>';
                });

            function drawCardSpread() {
                if (tarotData.length === 0 || isCardDrawn) return;
                isCardDrawn = true;

                // Hide initial view and show loader
                initialView.style.display = 'none';
                readingContainer.classList.remove('hidden');
                readingContainer.innerHTML = `
                    <div class="flex flex-col items-center justify-center h-full min-h-[60vh]">
                        <div class="loader"></div>
                        <p id="celestial-message" class="mt-4 text-amber-200 font-serif text-lg"></p>
                    </div>
                `;

                const messages = ["Consulting the cosmos...", "Reading the threads of fate...", "Channeling past, present, and future...", "The cards are aligning..."];
                let messageIndex = 0;
                const messageElement = document.getElementById('celestial-message');
                
                const messageInterval = setInterval(() => {
                    messageElement.textContent = messages[messageIndex % messages.length];
                    messageIndex++;
                }, 750);

                setTimeout(() => {
                    clearInterval(messageInterval);
                    renderReading();
                }, 3000);
            }

            function renderReading() {
                // Get 3 unique random cards
                const shuffled = [...tarotData].sort(() => 0.5 - Math.random());
                const drawnCards = shuffled.slice(0, 3);
                const positions = ['Past', 'Present', 'Future'];
                const focusTemplates = [
                    (n, k) => `You have dealt with these ${n} notions in the past: ${k}.`,
                    (n, k) => `You are currently dealing with these ${n} notions: ${k}.`,
                    (n, k) => `You will be dealing with these ${n} notions in the future: ${k}.`
                ];
                const fortuneTemplates = ["Past Fortune", "Present Fortune", "Future Fortune"];
                const questionTemplates = [
                    "Question you might have asked before to universe",
                    "Question you might ask now to universe",
                    "Question you might ask in the future to universe"
                ];

                let readingHTML = '';

                drawnCards.forEach((card, index) => {
                    const isReversed = Math.random() > 0.5;
                    const interpretation = (isReversed ? card.meanings.shadow : card.meanings.light).join('. ');
                    const fortune = card.fortune_telling.join('. ');
                    const capitalizedKeywords = card.keywords.map(kw => kw.charAt(0).toUpperCase() + kw.slice(1));
                    const focusText = focusTemplates[index](card.keywords.length, capitalizedKeywords.join(', '));

                    // Add a separator between card sections
                    if (index > 0) {
                        readingHTML += '<hr class="my-12 border-amber-200/20">';
                    }

                    // Two-column layout for each card
                    readingHTML += `
                        <div id="position-${positions[index].toLowerCase()}"><h2 class="text-3xl md:text-4xl font-serif text-amber-200 text-center mb-6">${positions[index]}</h2></div>
                        <div class="lg:-translate-x-24">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-2 md:gap-4 items-start">
                                <!-- Left Column -->
                                <div class="flex flex-col items-center md:items-end md:pr-12">
                                    <h3 class="font-serif text-xl md:text-2xl text-amber-200 mb-6 w-full max-w-[15rem] text-center">${card.name}</h3>
                                    <img src="/assets/cards/${card.img}" alt="${card.name}" class="max-w-[15rem] h-auto rounded-lg border-2 border-amber-200/30 shadow-lg" style="${isReversed ? 'transform: rotate(180deg);' : ''}">
                                </div>
                                <!-- Right Column -->
                                <div class="mt-8 md:mt-0">
                                    <div class="prose prose-invert prose-p:text-gray-300 prose-headings:text-amber-200 max-w-none">
                                        <p class="font-sans text-amber-200 text-lg mb-4"><strong>${focusText}</strong></p>
                                        ${card.arcana ? `<p class="font-sans text-white mb-2"><strong>Arcana:</strong> ${card.arcana}</p>` : ''}
                                        <p class="font-sans text-white mb-2"><strong>Orientation:</strong> ${isReversed ? 'Reversed' : 'Upright'}</p>
                                        ${card['Numerology'] ? `<p class="font-sans text-white mb-2"><strong>Numerology:</strong> ${card['Numerology']}</p>` : ''}
                                        ${card['Archetype'] ? `<p class="font-sans text-white mb-2"><strong>Archetype:</strong> ${card['Archetype']}</p>` : ''}
                                        ${card['Elemental'] ? `<p class="font-sans text-white mb-4"><strong>Elemental:</strong> ${card['Elemental']}</p>` : ''}
                                        <ul class="list-none p-0 mt-6">
                                            <li class="mb-4">
                                                <strong class="text-amber-200 font-serif">Interpretation:</strong>
                                                <p>${interpretation}</p>
                                            </li>
                                            <li class="mb-4">
                                                <strong class="text-amber-200 font-serif">${fortuneTemplates[index]}:</strong>
                                                <p>${fortune}</p>
                                            </li>
                                            ${card["Questions to Ask"] && card["Questions to Ask"].length > 0 ? `
                                            <li class="mb-4">
                                                <strong class="text-amber-200 font-serif">${questionTemplates[index]}:</strong>
                                                <ul class="list-none p-0 mt-2 space-y-2">
                                                    ${card["Questions to Ask"] ? card["Questions to Ask"].map(q => `
                                                        <li class="flex items-start">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-amber-200/50 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z" /></svg>
                                                            <span>${q}</span>
                                                        </li>
                                                    `).join('') : '<li>N/A</li>'}
                                                </ul>
                                            </li>
                                            ` : ''}
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    `;
                });

                // Add the scroll indicator
                readingHTML += `
                    <div id="scroll-indicator" class="scroll-indicator flex flex-col items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-amber-200 opacity-50" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-amber-200 opacity-75 -mt-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-amber-200 -mt-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                        </svg>
                    </div>
                `;

                readingContainer.innerHTML = readingHTML;

                // Logic for the scroll indicator
                const scrollIndicator = document.getElementById('scroll-indicator');
                const futureSection = document.getElementById('position-future');
                setTimeout(() => scrollIndicator.classList.add('visible'), 100); // Fade in

                const observer = new IntersectionObserver((entries) => {
                    if (entries[0].isIntersecting) {
                        scrollIndicator.classList.remove('visible');
                        observer.disconnect();
                    }
                }, { threshold: 0.1 });

                if (futureSection) {
                    observer.observe(futureSection);
                }
            }

            deckContainer.addEventListener('click', drawCardSpread);
        });
        </script>
    </main>
    <?php include __DIR__ . '/navigation/footer.php'; ?>
    <script src="/assets/js/app.js"></script>
</body>
</html>

<?php
$pageTitle = 'Daily Tarot Card Generator | Free Random Tarot Reading';
$pageDescription = 'Get your free daily tarot reading with our random tarot card generator. This one-card tarot generator offers instant insight and interpretation for today\'s guidance.';
$pageKeywords = 'daily tarot reading, one card tarot, free tarot reading, tarot card generator, random tarot card generator, online tarot reading';
$ogImage = 'https://tarotcardgenerator.online/assets/og-daily.jpg';
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
        <div class="lg:-translate-x-24"> <!-- This new wrapper shifts the content left on large screens -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-2 md:gap-4 items-start">
                <!-- Left Column: Card Display -->
                <div id="left-column" class="flex flex-col items-center md:items-end md:pr-12">
                    <h2 id="card-name-heading" class="font-serif text-xl md:text-2xl text-amber-200 mb-6 w-full max-w-[15rem] text-center">Daily Tarot</h2>
                    
                    <!-- Card Image -->
                    <img id="tarot-card-image" src="/assets/backface/tree.png" alt="Tarot Card Back" class="cursor-pointer max-w-[15rem] h-auto rounded-lg border-2 border-amber-200/30 shadow-lg shadow-amber-200/5 transition-all duration-300 hover:shadow-amber-200/20 hover:border-amber-200/60">

                    <!-- Prompt Text -->
                    <p id="draw-prompt" class="mt-4 text-gray-300 font-sans">Tap the Deck to Draw a Card</p>
                </div>

                <!-- Right Column: Reading Content -->
                <div id="right-column" class="mt-8 md:mt-0 md:pt-12">
                    <div class="prose prose-invert prose-p:text-gray-300 prose-headings:text-amber-200 prose-headings:font-serif max-w-none">
                        <h3 class="text-2xl">Draw your card for the day.</h3>
                        <p>Take a deep breath and center yourself. Focus your energy on the day ahead and prepare to receive the wisdom the cards hold for you.</p>
                        
                        <h4 class="text-xl text-amber-200 font-serif mt-6">Instructions:</h4>
                        <ul class="list-none p-0 mt-2 space-y-3">
                            <li class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3 text-amber-200/50 flex-shrink-0 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                                <span class="text-amber-200">Focus your energy on the card and think about your intentions for the day.</span>
                            </li>
                            <li class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3 text-amber-200/50 flex-shrink-0 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                                <span class="text-amber-200">You can only draw one card per day. This reading is your unique message for the next 24 hours.</span>
                            </li>
                            <li class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3 text-amber-200/50 flex-shrink-0 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                                <span class="text-amber-200">When you are ready, tap the card to reveal its message. Trust the wisdom that comes through.</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Message area for the 24-hour timer -->
            <div id="timer-message" class="text-center mt-8"></div>
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
            @keyframes spin { to { transform: rotate(360deg); } }
        </style>
        <script>
        document.addEventListener('DOMContentLoaded', function () {
            const leftColumn = document.getElementById('left-column');
            const rightColumn = document.getElementById('right-column');
            const cardImage = document.getElementById('tarot-card-image');
            const cardNameHeading = document.getElementById('card-name-heading');
            const drawPrompt = document.getElementById('draw-prompt');
            let tarotData = [];
            let isCardDrawn = false;

            // --- Cookie Helper Functions ---
            function setCookie(name, value, days) {
                let expires = "";
                if (days) {
                    const date = new Date();
                    date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
                    expires = "; expires=" + date.toUTCString();
                }
                document.cookie = name + "=" + (value || "")  + expires + "; path=/";
            }

            function getCookie(name) {
                const nameEQ = name + "=";
                const ca = document.cookie.split(';');
                for(let i = 0; i < ca.length; i++) {
                    let c = ca[i];
                    while (c.charAt(0) == ' ') c = c.substring(1, c.length);
                    if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
                }
                return null;
            }

            // --- Check for existing draw on page load ---
            const isLocalhost = window.location.hostname === 'localhost' || window.location.hostname === '127.0.0.1';

            if (!isLocalhost) {
                const lastDrawTimestamp = getCookie("dailyDrawTimestamp");
                if (lastDrawTimestamp) {
                    const now = new Date().getTime();
                    const timeRemaining = lastDrawTimestamp - now;
                    if (timeRemaining > 0) {
                        isCardDrawn = true; // Disable new draws
                        cardImage.style.cursor = 'not-allowed';
                        drawPrompt.textContent = 'Your card for the day has been drawn.';
                        document.getElementById('timer-message').innerHTML = `
                            <div class="max-w-md mx-auto bg-cyan-900/30 border border-cyan-700 rounded-lg p-4 flex items-center justify-center space-x-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-cyan-300 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                                <p class="text-amber-200 text-lg">You can draw another card after 24 hours.</p>
                            </div>
                        `;
                    }
                }
            }

            // Fetch Tarot card data from JSON file
            fetch('tarot-details.json')
                .then(response => response.json())
                .then(data => {
                    tarotData = data.cards;
                })
                .catch(error => {
                    console.error('Error fetching tarot data:', error);
                    rightColumn.innerHTML = '<p>Sorry, the spirits are resting. Please try again later.</p>';
                });

            function drawCard() {
                if (tarotData.length === 0 || isCardDrawn) return;
                isCardDrawn = true; // Prevent re-drawing
                drawPrompt.style.display = 'none'; // Hide prompt immediately

                // Remove top padding from the right column for the loading and result states
                rightColumn.classList.remove('md:pt-12');

                // --- Start Loading Sequence ---
                rightColumn.innerHTML = `
                    <div class="flex flex-col items-center justify-center h-full min-h-[300px]">
                        <div class="loader"></div>
                        <p id="celestial-message" class="mt-4 text-amber-200 font-serif text-lg"></p>
                    </div>
                `;

                const messages = [
                    "Consulting the cosmos...",
                    "Reading the starlight...",
                    "Channeling cosmic energy...",
                    "The cards are shifting...",
                    "Unveiling your destiny...",
                    "A message is forming..."
                ];
                let messageIndex = 0;
                const messageElement = document.getElementById('celestial-message');
                
                const messageInterval = setInterval(() => {
                    messageElement.textContent = messages[messageIndex % messages.length];
                    messageIndex++;
                }, 500);

                setTimeout(() => {
                    if (!isLocalhost) {
                        // Set a cookie with a 24-hour expiration
                        const expirationDate = new Date();
                        expirationDate.setTime(expirationDate.getTime() + (24 * 60 * 60 * 1000));
                        setCookie("dailyDrawTimestamp", expirationDate.getTime(), 1);
                    }

                    clearInterval(messageInterval);

                // 2. Pick a random card
                const card = tarotData[Math.floor(Math.random() * tarotData.length)];
                const isReversed = Math.random() > 0.5;
                const interpretation = (isReversed ? card.meanings.shadow : card.meanings.light).join('. ');
                const fortune = card.fortune_telling.join('. ');

                // --- Update Left Column ---
                cardNameHeading.textContent = card.name;
                cardImage.src = `/assets/cards/${card.img}`;
                cardImage.alt = `${card.name} Tarot Card`;        

                if (isReversed) {
                    cardImage.style.transform = 'rotate(180deg)';
                } else {
                    cardImage.style.transform = 'none';
                }

                // --- Update Right Column ---
                // The previous readingTitle is now broken down into individual, clearly labeled fields.
                
                const capitalizedKeywords = card.keywords.map(kw => kw.charAt(0).toUpperCase() + kw.slice(1));
                const focusText = `You should focus on ${card.keywords.length} words: ${capitalizedKeywords.join(', ')}.`;

                rightColumn.innerHTML = `
                    <div class="prose prose-invert prose-p:text-gray-300 prose-headings:text-amber-200 max-w-none">
                        <p class="font-sans text-amber-200 text-lg mb-4"><strong>${focusText}</strong></p>
                        <p class="font-sans text-white mb-2"><strong>Arcana:</strong> ${card.arcana}</p>
                        <p class="font-sans text-white mb-2"><strong>Orientation:</strong> ${isReversed ? 'Reversed' : 'Upright'}</p>
                        <p class="font-sans text-white mb-2"><strong>Numerology:</strong> ${card['Numerology'] || 'N/A'}</p>
                        <p class="font-sans text-white mb-2"><strong>Archetype:</strong> ${card['Archetype'] || 'N/A'}</p>
                        <p class="font-sans text-white mb-4"><strong>Elemental:</strong> ${card['Elemental'] || 'N/A'}</p>
                        
                        <ul class="list-none p-0 mt-6">
                            <li class="mb-4">
                                <strong class="text-amber-200 font-serif">Interpretation:</strong>
                                <p>${interpretation}</p>
                            </li>
                            <li class="mb-4">
                                <strong class="text-amber-200 font-serif">Today's Fortune:</strong>
                                <p>${fortune}</p>
                            </li>
                            <li class="mb-4">
                                <strong class="text-amber-200 font-serif">Question to ask to universe:</strong>
                                <ul class="list-none p-0 mt-2 space-y-2">
                                    ${card["Questions to Ask"] ? card["Questions to Ask"].map(q => `
                                        <li class="flex items-start">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-amber-200/50 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z" /></svg>
                                            <span>${q}</span>
                                        </li>
                                    `).join('') : '<li>N/A</li>'}
                                </ul>
                            </li>
                        </ul>
                    </div>
                    ${!isLocalhost ? `
                        <div class="max-w-md mx-auto mt-8 bg-cyan-900/30 border border-cyan-700 rounded-lg p-4 flex items-center justify-center space-x-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-cyan-300 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                            <p class="text-amber-200 text-lg">You can draw another card after 24 hours.</p>
                        </div>
                    ` : ''}
                `;
                }, 3000); // 3-second delay
            }

            cardImage.addEventListener('click', drawCard);
        });
        </script>
    </main>
    <?php include __DIR__ . '/navigation/footer.php'; ?>
    <script src="/assets/js/app.js"></script>
</body>
</html>

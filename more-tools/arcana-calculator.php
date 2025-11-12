<?php
$pageTitle = 'Free Arcana Calculator | Calculate Your Major Arcana Birth Cards';
$pageDescription = 'Use our free arcana calculator to discover your destiny matrix. This arcane calculator uses your date of birth to calculate your major arcana birth cards and Life Path Number.';
$pageKeywords = 'arcana calculator, arcana number calculator, arcana calculator free, calculate arcana, birth arcana calculator, how to calculate arcana, major arcana calculator, arcane calculator, calculate my arcana, arcana calculator destiny matrix';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="/assets/icons/scorpio-32.png" type="image/x-icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- SEO Meta Tags -->
    <title><?php echo htmlspecialchars($pageTitle); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($pageDescription); ?>">
    <meta name="keywords" content="<?php echo htmlspecialchars($pageKeywords); ?>">

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
        .loader {
            border: 4px solid rgba(255, 255, 255, 0.2);
            border-left-color: #D2B48C; /* A golden color */
            border-radius: 50%;
            width: 50px;
            height: 50px;
            animation: spin 1s linear infinite;
        }
        @keyframes spin { to { transform: rotate(360deg); } }
    </style>
</head>
<body class="bg-black">
    <?php include __DIR__ . '/../navigation/header.php'; ?>
    <main class="container mx-auto px-4 py-8 md:py-12">
        <div class="text-center mb-12">
            <h1 class="font-serif text-4xl md:text-5xl text-amber-200">Arcana Calculator</h1>
            <p class="text-gray-400 max-w-2xl mx-auto mt-4">Use our free arcana calculator to uncover the Major Arcana cards that influence your life's journey through the power of numerology.</p>
        </div>

        <!-- Calculator Section -->
        <div id="calculator-section" class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center max-w-4xl mx-auto mb-16">
            <!-- Left Column (Form) -->
            <div class="bg-black/20 border border-amber-200/10 rounded-lg p-8">
                <form id="calculator-form">
                    <h2 class="font-serif text-2xl text-cyan-300 mb-6 text-center">Calculate My Arcana</h2>
                    <div class="grid grid-cols-3 gap-4">
                        <input type="text" id="month" placeholder="MM" class="w-full p-3 text-center bg-white text-black rounded-md focus:outline-none focus:ring-2 focus:ring-amber-400">
                        <input type="text" id="day" placeholder="DD" class="w-full p-3 text-center bg-white text-black rounded-md focus:outline-none focus:ring-2 focus:ring-amber-400">
                        <input type="text" id="year" placeholder="YYYY" class="w-full p-3 text-center bg-white text-black rounded-md focus:outline-none focus:ring-2 focus:ring-amber-400">
                    </div>
                    <p id="error-message" class="text-red-400 text-sm mt-4 text-center hidden">Please enter a valid date.</p>
                    <button type="button" id="calculate-btn" class="w-full mt-6 bg-amber-400 text-black font-bold py-3 px-6 rounded-lg hover:bg-amber-500 transition-colors duration-300">Find your Tarot Cards</button>
                </form>
            </div>

            <!-- Right Column (Image) -->
            <div class="hidden md:flex items-center justify-center p-4">
                <img src="/assets/more-tools/arcana-calculator.jpg" alt="Mystical numerology chart" class="rounded-lg shadow-lg shadow-amber-200/10 opacity-70 aspect-square object-cover max-h-[350px]">
            </div>
        </div>

        <!-- Introductory Text -->
        <div class="prose prose-invert prose-p:text-gray-300 prose-headings:text-amber-200 prose-headings:font-serif max-w-3xl mx-auto">
            <h2 class="text-amber-200">What is a Birth Arcana Calculator?</h2>
            <p>A birth arcana calculator provides a free tarot reading by date of birth. This arcane calculator uses numerology to decode the mystical energies embedded in your birthdate, sometimes known as your destiny matrix. By reducing your birth numbers to their core digits, our arcana number calculator reveals your Life Path Number—a key indicator of your life's purpose. From this, we also calculate your Major Arcana birth cards, two archetypes that guide your journey.</p>

            <h2 class="text-amber-200">What Data You Need for This Calculator</h2>
            <p>To calculate arcana influences, you only need your date of birth. Please enter the month, day, and full four-digit year into the fields above. Your data is processed instantly in your browser and is not stored, ensuring your privacy.</p>
        </div>

        <!-- Loading Section -->
        <div id="loading-container" class="hidden text-center my-16">
             <div class="flex flex-col items-center justify-center h-full min-h-[300px]">
                <div class="loader"></div>
                <p id="loading-message" class="mt-4 text-amber-200 font-serif text-lg"></p>
            </div>
        </div>

        <!-- Results Section -->
        <div id="results-container" class="hidden mt-16 max-w-4xl mx-auto">
            <!-- JS will inject results here -->
        </div>

        <!-- FAQ Section -->
        <div class="prose prose-invert prose-p:text-gray-300 prose-headings:text-amber-200 prose-headings:font-serif max-w-3xl mx-auto mt-16">
            <h2 class="text-center">Frequently Asked Questions</h2>
            <details class="faq-item bg-black/20 border border-amber-200/10 rounded-lg p-4 mt-4" open>
                <summary class="text-amber-200 font-semibold cursor-pointer">What are Tarot Birth Cards?</summary>
                <p class="mt-2">Tarot Birth Cards are two Major Arcana cards that are mathematically linked to your birth date. They represent core aspects of your personality, life lessons, and the overarching archetypal energies that guide your journey through life.</p>
            </details>
            <details class="faq-item bg-black/20 border border-amber-200/10 rounded-lg p-4 mt-4">
                <summary class="text-amber-200 font-semibold cursor-pointer">What is a Life Path Number?</summary>
                <p class="mt-2">Your Life Path Number is the single most important number in your numerology chart. Derived from the sum of your birth date digits, it reveals your life's purpose, including your primary strengths, challenges, and the lessons you are here to learn.</p>
            </details>
            <details class="faq-item bg-black/20 border border-amber-200/10 rounded-lg p-4 mt-4">
                <summary class="text-amber-200 font-semibold cursor-pointer">How to calculate your arcana?</summary>
                <p class="mt-2">To calculate your arcana, we sum the digits of your month, day, and year of birth. This sum is then reduced to a number between 1 and 22 to find your first birth card. A second reduction to a single digit (or a master number) reveals your second card and your Life Path Number. Our major arcana calculator handles all the specific rules, such as for The Fool (22) and paired cards.</p>
            </details>
            <details class="faq-item bg-black/20 border border-amber-200/10 rounded-lg p-4 mt-4">
                <summary class="text-amber-200 font-semibold cursor-pointer">Is there an arcana compatibility calculator?</summary>
                <p class="mt-2">While this tool focuses on your individual birth arcana, an arcana compatibility calculator is a wonderful idea for a future tool! Understanding how your birth cards interact with a partner's can offer deep insights into relationship dynamics. Stay tuned!</p>
            </details>
        </div>

    </main>
    <?php include __DIR__ . '/../navigation/footer.php'; ?>

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "FAQPage",
      "mainEntity": [{
        "@type": "Question",
        "name": "What are Tarot Birth Cards?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Tarot Birth Cards are two Major Arcana cards that are mathematically linked to your birth date. They represent core aspects of your personality, life lessons, and the overarching archetypal energies that guide your journey through life."
        }
      },{
        "@type": "Question",
        "name": "What is a Life Path Number?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Your Life Path Number is the single most important number in your numerology chart. Derived from the sum of your birth date digits, it reveals your life's purpose, including your primary strengths, challenges, and the lessons you are here to learn."
        }
      },{
        "@type": "Question",
        "name": "How are the cards calculated?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "To calculate your arcana, we sum the digits of your month, day, and year of birth. This sum is then reduced to a number between 1 and 22 to find your first birth card. A second reduction to a single digit (or a master number) reveals your second card and your Life Path Number. Our major arcana calculator handles all the specific rules, such as for The Fool (22) and paired cards."
        }
      }]
    }
    </script>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // --- Data Storage ---
        const tarotCards = {
            1: { name: 'The Magician', imageURL: '/assets/cards/m01.jpg', interpretation: 'Manifestation, resourcefulness, power, inspired action.' },
            2: { name: 'The High Priestess', imageURL: '/assets/cards/m02.jpg', interpretation: 'Intuition, sacred knowledge, divine feminine, the subconscious mind.' },
            3: { name: 'The Empress', imageURL: '/assets/cards/m03.jpg', interpretation: 'Femininity, beauty, nature, nurturing, abundance.' },
            4: { name: 'The Emperor', imageURL: '/assets/cards/m04.jpg', interpretation: 'Authority, establishment, structure, a father figure.' },
            5: { name: 'The Hierophant', imageURL: '/assets/cards/m05.jpg', interpretation: 'Spiritual wisdom, religious beliefs, conformity, tradition.' },
            6: { name: 'The Lovers', imageURL: '/assets/cards/m06.jpg', interpretation: 'Love, harmony, relationships, values alignment, choices.' },
            7: { name: 'The Chariot', imageURL: '/assets/cards/m07.jpg', interpretation: 'Control, willpower, success, action, determination.' },
            8: { name: 'Strength', imageURL: '/assets/cards/m08.jpg', interpretation: 'Strength, courage, patience, control, compassion.' },
            9: { name: 'The Hermit', imageURL: '/assets/cards/m09.jpg', interpretation: 'Soul-searching, introspection, being alone, inner guidance.' },
            10: { name: 'Wheel of Fortune', imageURL: '/assets/cards/m10.jpg', interpretation: 'Good luck, karma, life cycles, destiny, a turning point.' },
            11: { name: 'Justice', imageURL: '/assets/cards/m11.jpg', interpretation: 'Justice, fairness, truth, cause and effect, law.' },
            12: { name: 'The Hanged Man', imageURL: '/assets/cards/m12.jpg', interpretation: 'Pause, surrender, letting go, new perspectives.' },
            13: { name: 'Death', imageURL: '/assets/cards/m13.jpg', interpretation: 'Endings, change, transformation, transition.' },
            14: { name: 'Temperance', imageURL: '/assets/cards/m14.jpg', interpretation: 'Balance, moderation, patience, purpose.' },
            15: { name: 'The Devil', imageURL: '/assets/cards/m15.jpg', interpretation: 'Shadow self, attachment, addiction, restriction, sexuality.' },
            16: { name: 'The Tower', imageURL: '/assets/cards/m16.jpg', interpretation: 'Sudden change, upheaval, chaos, revelation, awakening.' },
            17: { name: 'The Star', imageURL: '/assets/cards/m17.jpg', interpretation: 'Hope, faith, purpose, renewal, spirituality.' },
            18: { name: 'The Moon', imageURL: '/assets/cards/m18.jpg', interpretation: 'Illusion, fear, anxiety, subconscious, intuition.' },
            19: { name: 'The Sun', imageURL: '/assets/cards/m19.jpg', interpretation: 'Positivity, fun, warmth, success, vitality.' },
            20: { name: 'Judgement', imageURL: '/assets/cards/m20.jpg', interpretation: 'Judgement, rebirth, inner calling, absolution.' },
            21: { name: 'The World', imageURL: '/assets/cards/m21.jpg', interpretation: 'Completion, integration, accomplishment, travel.' },
            22: { name: 'The Fool', imageURL: '/assets/cards/m00.jpg', interpretation: 'Beginnings, innocence, spontaneity, a free spirit.' }
        };

        const lifePathInterps = {
            1: { title: 'The Leader', imageURL: 'https://images.unsplash.com/photo-1598550463214-4b5b980d3c6d?q=80&w=1887', text: 'You are a natural leader, independent and driven. Your path is one of innovation and pioneering new ideas.' },
            2: { title: 'The Diplomat', imageURL: 'https://images.unsplash.com/photo-1600880292210-fdb0e60525d8?q=80&w=1887', text: 'You are intuitive and cooperative. Your path is about creating harmony, balance, and meaningful partnerships.' },
            3: { title: 'The Communicator', imageURL: 'https://images.unsplash.com/photo-1522202176988-66273c2fd55f?q=80&w=2071', text: 'You are creative and expressive. Your path involves inspiring others through your words, art, and joyful spirit.' },
            4: { title: 'The Builder', imageURL: 'https://images.unsplash.com/photo-1581094482453-9f8d32052253?q=80&w=1887', text: 'You are practical and disciplined. Your path is about creating lasting structures, stability, and security.' },
            5: { title: 'The Adventurer', imageURL: 'https://images.unsplash.com/photo-1501555088652-021faa106b9b?q=80&w=2073', text: 'You are a freedom-seeker and adaptable. Your path is one of change, exploration, and experiencing life to the fullest.' },
            6: { title: 'The Nurturer', imageURL: 'https://images.unsplash.com/photo-1582213782179-e0d53f98f2ca?q=80&w=2070', text: 'You are responsible and compassionate. Your path is about community, service, and creating a loving environment.' },
            7: { title: 'The Seeker', imageURL: 'https://images.unsplash.com/photo-1508669232496-b56de5859fee?q=80&w=1887', text: 'You are analytical and spiritual. Your path involves seeking truth, knowledge, and inner wisdom.' },
            8: { title: 'The Powerhouse', imageURL: 'https://images.unsplash.com/photo-1556742502-ec7c0e9f34b1?q=80&w=1887', text: 'You are ambitious and authoritative. Your path is about mastering the material world and achieving success.' },
            9: { title: 'The Humanitarian', imageURL: 'https://images.unsplash.com/photo-1469571486292-0ba58a35542b?q=80&w=2070', text: 'You are compassionate and wise. Your path is about selfless service, creativity, and inspiring others.' },
            11: { title: 'The Visionary', imageURL: 'https://images.unsplash.com/photo-1531592739399-ff5d892b5358?q=80&w=1887', text: 'As a Master Number, you are highly intuitive and inspirational. Your path is to uplift humanity through your unique vision.' },
            22: { title: 'The Master Builder', imageURL: 'https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?q=80&w=2070', text: 'As a Master Number, you can turn dreams into reality. Your path is to build something of lasting value for the world.' },
            33: { title: 'The Master Teacher', imageURL: 'https://images.unsplash.com/photo-1531545514256-b1400bc00f31?q=80&w=1974', text: 'As a Master Number, you are a source of healing and compassion. Your path is to guide and uplift others with profound wisdom.' }
        };

        const calculateBtn = document.getElementById('calculate-btn');
        const errorMsg = document.getElementById('error-message');
        const resultsContainer = document.getElementById('results-container');
        const calculatorSection = document.getElementById('calculator-section');
        const loadingContainer = document.getElementById('loading-container');

        // --- Helper Function ---
        function sumDigits(str) {
            return str.split('').reduce((sum, digit) => sum + parseInt(digit, 10), 0);
        }

        calculateBtn.addEventListener('click', function() {
            // --- Get & Validate Input ---
            const month = document.getElementById('month').value.trim();
            const day = document.getElementById('day').value.trim();
            const year = document.getElementById('year').value.trim();

            if (!month || !day || !year || isNaN(month) || isNaN(day) || isNaN(year) || year.length !== 4) {
                errorMsg.textContent = 'Please enter a valid date (MM, DD, YYYY).';
                errorMsg.classList.remove('hidden');
                return;
            }
            errorMsg.classList.add('hidden');

            // --- Start Loading Sequence ---
            calculatorSection.classList.add('hidden');
            loadingContainer.classList.remove('hidden');

            const messages = [
                "Consulting the cosmos...",
                "Aligning the stars...",
                "Calculating your numerology...",
                "Decoding your birth cards...",
                "Unveiling your archetype..."
            ];
            let messageIndex = 0;
            const messageElement = document.getElementById('loading-message');
            
            const messageInterval = setInterval(() => {
                messageElement.textContent = messages[messageIndex % messages.length];
                messageIndex++;
            }, 1000);

            setTimeout(() => {
                clearInterval(messageInterval);
                loadingContainer.classList.add('hidden');

                // --- Calculate Life Path Number ---
                const fullDateStr = month + day + year;
                const lifePathNumber = sumDigits(fullDateStr);

                // --- Calculate Tarot Birth Cards ---
                let finalDigit = lifePathNumber;
                while (finalDigit > 9 && finalDigit !== 11 && finalDigit !== 22 && finalDigit !== 33) {
                    finalDigit = sumDigits(String(finalDigit));
                }

                let card1Num = finalDigit;
                if (card1Num > 22) {
                    card1Num = sumDigits(String(card1Num));
                }

                let card2Num = sumDigits(String(card1Num));

                if (card1Num === card2Num) {
                    card2Num += 9;
                }

                if (card1Num === 22) {
                    card2Num = 4;
                }

                // Use 22 for The Fool if the number is 22
                if (card1Num === 22) {
                    card1Num = 22;
                } else if (card1Num === 0) { // Should not happen with this logic, but as a fallback
                    card1Num = 22;
                }

                // --- Display Results ---
                const lifePathData = lifePathInterps[finalDigit];
                const card1Data = tarotCards[card1Num];
                const card2Data = tarotCards[card2Num];

                let resultsHTML = `
                    <div class="text-center mb-12">
                        <h2 class="font-serif text-3xl md:text-4xl text-amber-200">Your Mystic Blueprint</h2>
                    </div>
                `;

                // Life Path Number Result
                if (lifePathData) {
                    resultsHTML += `
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-center mb-12 bg-black/20 p-6 rounded-lg border border-amber-200/10">
                            <img src="${lifePathData.imageURL}" alt="${lifePathData.title}" class="rounded-lg w-full h-48 object-cover">
                            <div class="md:col-span-2">
                                <h3 class="font-serif text-2xl text-cyan-300">Life Path ${finalDigit}: ${lifePathData.title}</h3>
                                <p class="text-gray-300 mt-2">${lifePathData.text}</p>
                            </div>
                        </div>
                    `;
                }

                // Tarot Birth Cards Result
                resultsHTML += `
                    <div class="text-center mb-8">
                        <h3 class="font-serif text-3xl text-amber-200">Your Tarot Birth Cards</h3>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                `;

                if (card1Data) {
                    resultsHTML += `
                        <div class="bg-black/20 border border-amber-200/10 rounded-lg p-6 flex flex-col items-center">
                            <h4 class="font-serif text-2xl text-cyan-300 mb-4">${card1Data.name}</h4>
                            <img src="${card1Data.imageURL}" alt="${card1Data.name}" class="w-40 rounded-md shadow-lg">
                            <p class="text-gray-300 italic mt-4 text-center">${card1Data.interpretation}</p>
                        </div>
                    `;
                }

                if (card2Data) {
                    resultsHTML += `
                        <div class="bg-black/20 border border-amber-200/10 rounded-lg p-6 flex flex-col items-center">
                            <h4 class="font-serif text-2xl text-cyan-300 mb-4">${card2Data.name}</h4>
                            <img src="${card2Data.imageURL}" alt="${card2Data.name}" class="w-40 rounded-md shadow-lg">
                            <p class="text-gray-300 italic mt-4 text-center">${card2Data.interpretation}</p>
                        </div>
                    `;
                }

                resultsHTML += `</div>`;
                
                resultsHTML += `
                    <div class="text-center mt-12">
                        <button type="button" id="reset-btn" class="bg-cyan-700 text-white font-bold py-3 px-8 rounded-lg hover:bg-cyan-600 transition-colors duration-300">Calculate for another date</button>
                    </div>
                `;

                resultsContainer.innerHTML = resultsHTML;
                resultsContainer.classList.remove('hidden');

                // Scroll to results
                resultsContainer.scrollIntoView({ behavior: 'smooth' });

                // Add event listener for the new reset button
                document.getElementById('reset-btn').addEventListener('click', function() {
                    resultsContainer.classList.add('hidden');
                    calculatorSection.classList.remove('hidden');
                    calculatorSection.scrollIntoView({ behavior: 'smooth' });
                });
            }, 5000); // 5-second delay
        });
    });
    </script>

</body>
</html>
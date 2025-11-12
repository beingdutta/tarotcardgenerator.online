<?php
$pageTitle = 'How It Works | Daily Tarot Card Generator';
$pageDescription = 'Learn how our intuitive browser-based tarot card generator works, from asking a question to saving and sharing your readings.';
$pageKeywords = 'how tarot works, tarot generator, tarot reading process, online tarot';
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
    <?php include __DIR__ . '/../navigation/header.php'; ?>
    <main class="container mx-auto px-4 py-8 md:py-12">
        <div class="prose prose-invert prose-p:text-gray-300 prose-headings:text-amber-200 prose-headings:font-serif max-w-3xl mx-auto">
            <div class="text-center mb-12 prose-headings:text-amber-200">
                <h1 class="text-4xl md:text-5xl">How It Works</h1>
                <p class="text-lg text-gray-400">An intuitive browser-based tarot card reading experience.</p>
            </div>

            <h2 class="text-amber-200">1. Ask Your Question</h2>
            <p>Begin by entering a question that reflects what’s on your mind. This question helps center the reading and is saved temporarily for the current session only.</p>

            <h2 class="text-amber-200">2. Draw a Card</h2>
            <p>Click the <strong>Draw My Card</strong> button. Our system randomly selects a card from the full tarot deck, revealing it with an immersive animation. Cards may appear upright or reversed, each influencing their meanings.</p>

            <h2 class="text-amber-200">3. Interpret the Reading</h2>
            <p>After drawing, the card’s name, orientation, arcana type, symbolic meaning, fortune-telling messages, and keywords are displayed in a dedicated interpretation panel. This content is styled for readability and spiritual reflection.</p>

            <h2 class="text-amber-200">4. Save Your Readings</h2>
            <p>Each reading is saved in your browser’s local storage. The app stores up to 10 recent readings per session so you can reflect on your journey. Data is not sent or stored on our servers.</p>

            <h2 class="text-amber-200">5. View and Share History</h2>
            <p>Tap the history icon in the header to access your reading history. You can review previous questions, cards, meanings, and timestamps. Share individual readings directly or download a report summarizing your last three readings.</p>

            <h2 class="text-amber-200">6. Privacy First</h2>
            <p>All readings and questions stay on your device. No data is transmitted or stored externally. You may clear your entire reading history at any time from the History panel.</p>

            <p>Mystic Tarot is designed for gentle spiritual insight, journaling, and reflective guidance. Explore with curiosity, not dependency.</p>

            <p class="text-center text-lg mt-8"><strong>Daily Tarot Draw</strong><br>Discover the ancient wisdom of tarot to illuminate your path and guide your journey through life’s mysteries.</p>
        </div>
    </main>
    <?php include __DIR__ . '/../navigation/footer.php'; ?>
</body>
</html>

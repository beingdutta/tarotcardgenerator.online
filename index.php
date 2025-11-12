<?php
$pageTitle = 'Tarot Card Generator | Free Random Tarot Card Readings';
$pageDescription = 'The web\'s premier tarot card generator. Get instant answers with our random tarot card generator, offering free tarot readings for love, career, and daily insight.';
$pageKeywords = 'tarot card generator, random tarot card generator, generate tarot card, free tarot reading, online tarot reading, tarot reading';
$ogImage = 'https://tarotcardgenerator.online/assets/og-image.jpg';
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
        <!-- Navigation Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <!-- Daily Tarot Card -->
            <a href="daily-tarot.php" class="group block bg-black border border-amber-200/20 rounded-lg overflow-hidden hover:shadow-lg hover:shadow-amber-200/10 transition-shadow duration-300">
                <img src="./assets/thumbnails/daily.png" alt="Daily Tarot" class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-105">
                <div class="p-6">
                    <h2 class="text-cyan-300 group-hover:text-amber-200 text-lg font-medium">Daily Tarot</h2>
                    <p class="font-serif text-amber-200 text-sm tracking-widest mt-1">YOUR CARD FOR TODAY</p>
                    <p class="text-gray-400 text-sm mt-3">Get a single card reading for quick insight into the energies of your day.</p>
                </div>
            </a>

            <!-- Love Tarot Card -->
            <a href="love-tarot.php" class="group block bg-black border border-amber-200/20 rounded-lg overflow-hidden hover:shadow-lg hover:shadow-amber-200/10 transition-shadow duration-300">
                <img src="./assets/thumbnails/love.png" alt="Love Tarot" class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-105">
                <div class="p-6">
                    <h2 class="text-cyan-300 group-hover:text-amber-200 text-lg font-medium">Love Tarot</h2>
                    <p class="font-serif text-amber-200 text-sm tracking-widest mt-1">MATTERS OF THE HEART</p>
                    <p class="text-gray-400 text-sm mt-3">Gain insight into your romantic life and relationships.</p>
                </div>
            </a>

            <!-- Health Tarot Card -->
            <a href="health-tarot.php" class="group block bg-black border border-amber-200/20 rounded-lg overflow-hidden hover:shadow-lg hover:shadow-amber-200/10 transition-shadow duration-300">
                <img src="./assets/thumbnails/health.png" alt="Health Tarot" class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-105">
                <div class="p-6">
                    <h2 class="text-cyan-300 group-hover:text-amber-200 text-lg font-medium">Health Tarot</h2>
                    <p class="font-serif text-amber-200 text-sm tracking-widest mt-1">INSIGHTS FOR WELL-BEING</p>
                    <p class="text-gray-400 text-sm mt-3">Explore guidance related to your physical and mental wellness.</p>
                </div>
            </a>

            <!-- Career Tarot Card -->
            <a href="career-tarot.php" class="group block bg-black border border-amber-200/20 rounded-lg overflow-hidden hover:shadow-lg hover:shadow-amber-200/10 transition-shadow duration-300">
                <img src="./assets/thumbnails/career.png" alt="Career Tarot" class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-105">
                <div class="p-6">
                    <h2 class="text-cyan-300 group-hover:text-amber-200 text-lg font-medium">Career Tarot</h2>
                    <p class="font-serif text-amber-200 text-sm tracking-widest mt-1">PROFESSIONAL GUIDANCE</p>
                    <p class="text-gray-400 text-sm mt-3">Find clarity on your professional path, ambitions, and work life.</p>
                </div>
            </a>

            <!-- Three Card Tarot Card -->
            <a href="three-card-tarot.php" class="group block bg-black border border-amber-200/20 rounded-lg overflow-hidden hover:shadow-lg hover:shadow-amber-200/10 transition-shadow duration-300">
                <img src="./assets/thumbnails/three-card.png" alt="Three Card Tarot" class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-105">
                <div class="p-6">
                    <h2 class="text-cyan-300 group-hover:text-amber-200 text-lg font-medium">Three Card Spread</h2>
                    <p class="font-serif text-amber-200 text-sm tracking-widest mt-1">PAST, PRESENT, FUTURE</p>
                    <p class="text-gray-400 text-sm mt-3">A classic spread to understand the flow of events in your life.</p>
                </div>
            </a>

            <!-- AI Tarot Card (Coming Soon) -->
            <a href="coming-soon.php" class="group block bg-black border border-amber-200/20 rounded-lg overflow-hidden hover:shadow-lg hover:shadow-amber-200/10 transition-shadow duration-300">
                <img src="./assets/thumbnails/ai.png" alt="AI Tarot" class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-105">
                <div class="p-6">
                    <h2 class="text-cyan-300 group-hover:text-amber-200 text-lg font-medium">AI Tarot Chat</h2>
                    <p class="font-serif text-amber-200 text-sm tracking-widest mt-1">COMING SOON</p>
                    <p class="text-gray-400 text-sm mt-3">Chat with an AI to explore the cards and your questions in depth.</p>
                </div>
            </a>

        </div>
    </main>
    <?php include __DIR__ . '/navigation/footer.php'; ?>
    <script src="/assets/js/app.js"></script>
</body>
</html>

<?php
$pageTitle = 'Mystic Tools | A Collection of Divination & Insight Tools';
$pageDescription = 'Explore our collection of mystic tools, including a Zodiac Calculator, Numerology Calculator, Moon Phase Calendar, and more to gain deeper insight.';
$pageKeywords = 'mystic tools, divination tools, zodiac calculator, numerology calculator, moon phase calendar';
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
    </style>
</head>
<body class="bg-black">
    <?php include __DIR__ . '/../navigation/header.php'; ?>
    <main class="container mx-auto px-4 py-8 md:py-12">
        <div class="text-center mb-12">
            <h1 class="font-serif text-4xl md:text-5xl text-amber-200">Collection of Mystic Tools</h1>
            <p class="text-gray-400 max-w-2xl mx-auto mt-4">Explore our curated collection of divination and insight tools designed to illuminate your path and deepen your self-awareness.</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 max-w-5xl mx-auto">
            <!-- Dummy Tool 1: Zodiac Calculator -->
            <div class="bg-black/20 border border-amber-200/10 rounded-lg p-6 text-center hover:border-amber-200/40 transition-all duration-300">
                <h2 class="font-serif text-2xl text-cyan-300">Zodiac Calculator</h2>
                <p class="text-gray-400 mt-2">Discover your zodiac sign and explore its core traits and characteristics. (Coming Soon)</p>
            </div>

            <!-- Dummy Tool 2: Numerology Calculator -->
            <a href="/more-tools/arcana-calculator.php" class="block bg-black/20 border border-amber-200/10 rounded-lg p-6 text-center hover:border-amber-200/40 transition-all duration-300">
                <h2 class="font-serif text-2xl text-cyan-300">Arcana Calculator</h2>
                <p class="text-gray-400 mt-2">Calculate your Life Path Number and Tarot Birth Cards to uncover your life's purpose.</p>
            </a>

            <!-- Dummy Tool 3: Moon Phase Calendar -->
            <div class="bg-black/20 border border-amber-200/10 rounded-lg p-6 text-center hover:border-amber-200/40 transition-all duration-300">
                <h2 class="font-serif text-2xl text-cyan-300">Moon Phase Calendar</h2>
                <p class="text-gray-400 mt-2">Track the lunar cycle and learn how each phase influences your energy and emotions. (Coming Soon)</p>
            </div>

            <!-- Dummy Tool 4: Crystal Guide -->
            <div class="bg-black/20 border border-amber-200/10 rounded-lg p-6 text-center hover:border-amber-200/40 transition-all duration-300">
                <h2 class="font-serif text-2xl text-cyan-300">Crystal Guide</h2>
                <p class="text-gray-400 mt-2">An interactive guide to the meanings and properties of different healing crystals. (Coming Soon)</p>
            </div>

            <!-- Dummy Tool 5: Dream Interpretation -->
            <div class="bg-black/20 border border-amber-200/10 rounded-lg p-6 text-center hover:border-amber-200/40 transition-all duration-300">
                <h2 class="font-serif text-2xl text-cyan-300">Dream Interpretation</h2>
                <p class="text-gray-400 mt-2">A dictionary to help you decode the symbols and messages in your dreams. (Coming Soon)</p>
            </div>
        </div>
    </main>
    <?php include __DIR__ . '/../navigation/footer.php'; ?>
</body>
</html>
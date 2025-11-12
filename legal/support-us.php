<?php
$pageTitle = 'Support Us | Daily Tarot Card Generator';
$pageDescription = 'Learn how you can support the mission of our free tarot card generator website. Your contribution helps us grow and improve.';
$pageKeywords = 'support us, donate, tarot card generator, contribute';
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
        <div class="prose prose-invert prose-p:text-gray-300 prose-headings:text-amber-200 prose-headings:font-serif max-w-3xl mx-auto">
            <div class="text-center mb-12 prose-headings:text-amber-200">
                <h1 class="text-4xl md:text-5xl">Support Us</h1>
                <p class="text-lg text-gray-400">We’re building a magical way for you to support our mission.</p>
            </div>

            <h2 class="text-amber-200">Coming Soon</h2>
            <p>Soon, you’ll be able to directly contribute to the platform — supporting the growth of tarot spreads, the accuracy of interpretations, and deeper symbolic AI guidance. Every bit helps us keep this project running and evolving.</p>
            <p>Thank you for believing in the magic. Until then, continue to explore and reflect with our free tarot card generator online anytime.</p>

            <p class="text-center text-lg mt-8"><strong>tarotcardgenerator.online</strong><br>Discover the ancient wisdom of tarot to illuminate your path and guide your journey through life’s mysteries.</p>
        </div>
    </main>
    <?php include __DIR__ . '/../navigation/footer.php'; ?>
</body>
</html>

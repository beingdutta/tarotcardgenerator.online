<?php
$pageTitle = 'Testimonials | Daily Tarot Card Generator';
$pageDescription = 'See what users are saying about our free tarot card generator. Read testimonials about our accurate readings and insightful interpretations.';
$pageKeywords = 'tarot testimonials, tarot card generator reviews, user feedback';
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
                <h1 class="text-4xl md:text-5xl">Testimonials</h1>
                <p class="text-lg text-gray-400">What Our Users Say</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 not-prose">
                <div class="bg-black/20 border border-amber-200/10 rounded-lg p-6">
                    <p class="italic text-gray-300">“The most intuitive tarot card generator I’ve ever used. The reversals and meanings feel so personal. I’m amazed!”</p>
                    <p class="mt-4 font-semibold text-amber-200">- Lena M.</p>
                </div>
                <div class="bg-black/20 border border-amber-200/10 rounded-lg p-6">
                    <p class="italic text-gray-300">“I love using this random tarot card generator every morning—it’s my daily moment of clarity and magic.”</p>
                    <p class="mt-4 font-semibold text-amber-200">- Carlos T.</p>
                </div>
                <div class="bg-black/20 border border-amber-200/10 rounded-lg p-6">
                    <p class="italic text-gray-300">“This site helped me reconnect with tarot. It’s the best AI tarot card generator I’ve found—no fluff, just deep insight.”</p>
                    <p class="mt-4 font-semibold text-amber-200">- Ravi N.</p>
                </div>
                <div class="bg-black/20 border border-amber-200/10 rounded-lg p-6">
                    <p class="italic text-gray-300">“The tarot card generator with meaning made everything easy to understand, even for a beginner like me. Thank you!”</p>
                    <p class="mt-4 font-semibold text-amber-200">- Jasmine A.</p>
                </div>
            </div>
            <p class="text-center mt-8">Want to share your experience? <a href="/legal/contact-us.php" class="text-amber-200 hover:underline">Reach out here</a>.</p>
        </div>
    </main>
    <?php include __DIR__ . '/../navigation/footer.php'; ?>
</body>
</html>

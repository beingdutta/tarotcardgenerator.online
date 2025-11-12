<?php
$pageTitle = 'About Us | Daily Tarot Card Generator';
$pageDescription = 'Learn about the mission and story behind our free tarot card generator website.';
$pageKeywords = 'about us, tarot card generator, mystic tarot';
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
                <h1 class="text-4xl md:text-5xl">About Us</h1>
                <p class="text-lg text-gray-400">Our story, mission, and the magic behind Daily Tarot Draw.</p>
            </div>

            <h2 class="text-amber-200">Our Origins</h2>
            <p>
            Daily Tarot Draw is born from a fusion of passion — blending deep spiritual curiosity with the powers of modern technology.
            </p>

            <h2 class="text-amber-200">Who We Are</h2>
            <p>
            We’re a team of intuitive developers and professional tarot readers who’ve come together to craft something truly magical. Each card meaning and interpretation is aligned with traditional symbolism, offering a genuine reading experience.
            </p>

            <h2 class="text-amber-200">Our Mission</h2>
            <p>
            We aim to make tarot accessible and powerful through a platform that respects mystic traditions. Whether you’re new to tarot or a seasoned reader, our platform adapts to your curiosity.
            </p>

            <h2 class="text-amber-200">What Sets Us Apart</h2>
            <p>
            Unlike random card pickers, we embed spiritual logic and clear interpretations to make each reading resonate personally and intuitively.
            </p>

            <h2 class="text-amber-200">Our Belief</h2>
            <p>
            We believe that technology can be soulful — and Daily Tarot Draw is a living testament to that harmony of logic and intuition.
            </p>
        </div>
    </main>
    <?php include __DIR__ . '/../navigation/footer.php'; ?>
</body>
</html>

<?php
$pageTitle = 'Cookie Policy | Daily Tarot Card Generator';
$pageDescription = 'Our Cookie Policy explains how we use cookies and similar technologies on our free tarot card generator website to improve your experience.';
$pageKeywords = 'cookie policy, tarot card generator, website cookies';
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
                <h1 class="text-4xl md:text-5xl">Cookie Policy</h1>
                <p class="text-lg text-gray-400">How we use cookies to enhance your experience.</p>
            </div>

            <h2 class="text-amber-200">What Are Cookies?</h2>
            <p>Cookies are small text files stored on your device when you visit a website. They help us remember your preferences and understand how you use our site.</p>

            <h2 class="text-amber-200">How We Use Cookies</h2>
            <p>We use cookies for the following purposes:</p>
            <ul>
                <li><strong>Functionality:</strong> To remember your settings and preferences, such as your daily draw history, which is stored locally in your browser.</li>
                <li><strong>Analytics:</strong> To understand how our visitors use the site, which helps us improve performance and user experience. We use simple, privacy-friendly analytics.</li>
            </ul>

            <h2 class="text-amber-200">Your Choices</h2>
            <p>You can control and manage cookies in your browser settings. Please note that disabling cookies may affect the functionality of this site, particularly features that rely on local storage like the daily draw timer.</p>

            <h2 class="text-amber-200">Third-Party Cookies</h2>
            <p>We do not use third-party cookies for advertising or tracking purposes. Our goal is to provide a clean, private experience.</p>

            <h2 class="text-amber-200">Changes to This Policy</h2>
            <p>We may update this Cookie Policy from time to time. Any changes will be posted on this page.</p>
        </div>
    </main>
    <?php include __DIR__ . '/../navigation/footer.php'; ?>
</body>
</html>
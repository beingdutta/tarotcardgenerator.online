<?php
// Set default SEO values
$pageTitle = isset($pageTitle) ? $pageTitle : 'Free Tarot Card Generator | Daily Readings & Interpretations';
$pageDescription = isset($pageDescription) ? $pageDescription : 'Use our free tarot card generator for instant readings on love, career, and health. Get your random daily tarot card, yes/no answers, and 3-card spreads.';
$pageKeywords = isset($pageKeywords) ? $pageKeywords : 'tarot card generator, random tarot card generator, free tarot reading, daily tarot, tarot card generator reading, tarot card interpretation generator';
$ogImage = isset($ogImage) ? $ogImage : 'https://tarotcardgenerator.online/assets/og-image.jpg'; // Default OG image
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
        /* Custom font families for Tailwind */
        body { font-family: 'Inter', sans-serif; color: #E0E0E0; }
        .font-serif { font-family: 'EB Garamond', serif; }
        .font-script { font-family: 'Dancing Script', cursive; }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
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

            if (getCookie("lastVisit")) {
                const welcomeMessage = document.getElementById('welcome-back-message');
                if (welcomeMessage) {
                    welcomeMessage.textContent = "Welcome back, seeker of wisdom.";
                    welcomeMessage.style.display = 'block';
                }
            }
            setCookie("lastVisit", new Date().toISOString(), 365);
        });
    </script>
</head>
<body class="bg-black">

    <!-- Container for the welcome message -->
    <div id="welcome-back-message" class="text-center py-2 bg-black text-amber-200 text-sm" style="display: none;"></div>

    <header class="py-4 border-b border-amber-200/20">
        <div class="container mx-auto px-4">
            <!-- Desktop Navigation -->
            <nav class="hidden md:flex justify-center items-center space-x-8 text-sm tracking-wider">
                <a href="/index.php" class="text-cyan-300 hover:text-amber-200 transition-colors">Home</a>
                <a href="/daily-tarot.php" class="text-cyan-300 hover:text-amber-200 transition-colors">Daily Tarot</a>
                <a href="/card-list.php" class="text-cyan-300 hover:text-amber-200 transition-colors">Card List</a>
                <a href="/coming-soon.php" class="text-cyan-300 hover:text-amber-200 transition-colors">Yes or No</a>
                <a href="/coming-soon.php" class="text-cyan-300 hover:text-amber-200 transition-colors">AI Tarot</a>
                <a href="/legal/privacy-policy.php" class="text-cyan-300 hover:text-amber-200 transition-colors">Privacy</a>
                <a href="/legal/terms-and-conditions.php" class="text-cyan-300 hover:text-amber-200 transition-colors">Terms</a>
                <a href="/legal/contact-us.php" class="text-cyan-300 hover:text-amber-200 transition-colors">Contact Us</a>
                <a href="/legal/about-us.php" class="text-cyan-300 hover:text-amber-200 transition-colors">About Us</a>
            </nav>

            <!-- Logo -->
            <div class="text-center my-6">
                <a href="/" class="inline-flex flex-col items-center">
                    <div class="flex items-center space-x-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-amber-200" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1"><path stroke-linecap="round" stroke-linejoin="round" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" /></svg>
                        <h1 class="font-script text-4xl text-amber-200">daily tarot card generator</h1>
                    </div>
                    <p class="text-gray-400 text-sm mt-1 tracking-widest">Trusted by Seekers for Daily Cosmic Insight</p>
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <div class="md:hidden flex justify-end absolute top-4 right-4">
                <button id="mobile-menu-button" class="p-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" /></svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-black/95 absolute top-0 left-0 w-full h-screen z-50">
            <div class="flex justify-end p-4">
                 <button id="mobile-menu-close-button" class="p-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>
                </button>
            </div>
            <nav class="flex flex-col items-center justify-center h-full space-y-8 text-xl">
                <a href="/index.php" class="text-cyan-300 hover:text-amber-200 transition-colors">Home</a>
                <a href="/daily-tarot.php" class="text-cyan-300 hover:text-amber-200 transition-colors">Daily Tarot</a>
                <a href="/card-list.php" class="text-cyan-300 hover:text-amber-200 transition-colors">Card List</a>
                <a href="/coming-soon.php" class="text-cyan-300 hover:text-amber-200 transition-colors">Yes or No</a>
                <a href="/coming-soon.php" class="text-cyan-300 hover:text-amber-200 transition-colors">AI Tarot</a>
                <a href="/legal/privacy-policy.php" class="text-cyan-300 hover:text-amber-200 transition-colors">Privacy</a>
                <a href="/legal/terms-and-conditions.php" class="text-cyan-300 hover:text-amber-200 transition-colors">Terms</a>
                <a href="/legal/contact-us.php" class="text-cyan-300 hover:text-amber-200 transition-colors">Contact Us</a>
                <a href="/legal/about-us.php" class="text-cyan-300 hover:text-amber-200 transition-colors">About Us</a>
            </nav>
        </div>
    </header>

    <main class="container mx-auto px-4 py-8 md:py-12">
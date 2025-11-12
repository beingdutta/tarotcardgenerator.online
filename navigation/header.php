<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> <link rel="icon" href="/assets/icons/scorpio-32.png" type="image/x-icon"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daily Tarot Draw</title>

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
</head>
<body class="bg-black">

    <header class="py-4 border-b border-amber-200/20">
        <div class="container mx-auto px-4">
            <!-- Desktop Navigation -->
            <nav class="hidden md:flex justify-center items-center space-x-8 text-sm tracking-wider">
                <a href="/index.php" class="text-cyan-300 hover:text-amber-200 transition-colors">Home</a>
                <a href="/daily-tarot.php" class="text-cyan-300 hover:text-amber-200 transition-colors">Daily Tarot</a>
                <a href="/card-list.php" class="text-cyan-300 hover:text-amber-200 transition-colors">Card List</a>
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
                        <h1 class="font-script text-4xl text-amber-200">Daily Tarot Draw</h1>
                    </div>
                    <p class="text-gray-400 text-sm mt-1 tracking-widest">Positive Daily Messages Through Tarot</p>
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
                <a href="/coming-soon.php" class="text-cyan-300 hover:text-amber-200 transition-colors">AI Tarot</a>
                <a href="/legal/privacy-policy.php" class="text-cyan-300 hover:text-amber-200 transition-colors">Privacy</a>
                <a href="/legal/terms-and-conditions.php" class="text-cyan-300 hover:text-amber-200 transition-colors">Terms</a>
                <a href="/legal/contact-us.php" class="text-cyan-300 hover:text-amber-200 transition-colors">Contact Us</a>
                <a href="/legal/about-us.php" class="text-cyan-300 hover:text-amber-200 transition-colors">About Us</a>
            </nav>
        </div>
    </header>

    <main class="container mx-auto px-4 py-8 md:py-12">
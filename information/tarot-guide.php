<?php
$pageTitle = 'Basic Tarot Guide | Daily Tarot Card Generator';
$pageDescription = 'A beginner\'s guide to tarot, explaining the structure of the deck, how to read cards, and how to use our free tarot generator for insight.';
$pageKeywords = 'tarot guide, learn tarot, how to read tarot, tarot basics';
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
                <h1 class="text-4xl md:text-5xl">Basic Tarot Guide</h1>
                <p class="text-lg text-gray-400">Welcome to the world of tarot—a mystical tool for self-reflection, guidance, and insight.</p>
            </div>

            <p>Whether you're using a free tarot card generator or shuffling a physical deck, the magic lies in interpretation. This guide introduces foundational tarot knowledge and helps you start reading today.</p>

            <h2 class="text-amber-200">1. What Is Tarot?</h2>
            <p>Tarot is a symbolic system of 78 cards—divided into Major and Minor Arcana—used to gain insight into past, present, and future. Each card reflects a universal theme or energy that mirrors life’s patterns.</p>

            <h2 class="text-amber-200">2. The Structure of a Tarot Deck</h2>
            <ul>
              <li><strong>22 Major Arcana:</strong> Life’s spiritual milestones (e.g., The Fool, The Tower).</li>
              <li><strong>56 Minor Arcana:</strong> Day-to-day events, divided into Cups, Pentacles, Swords, and Wands.</li>
            </ul>

            <h2 class="text-amber-200">3. How to Read Tarot</h2>
            <p>Start with a question. Then draw cards—physically or with a tarot generator. Try these spreads:</p>
            <ul>
              <li><strong>1 Card:</strong> Quick daily insight.</li>
              <li><strong>3 Cards:</strong> Past – Present – Future or Situation – Action – Outcome.</li>
              <li><strong>Celtic Cross:</strong> A complex 10-card spread for deep questions.</li>
            </ul>

            <h2 class="text-amber-200">4. Understanding Card Meanings</h2>
            <p>Each card meaning shifts with context and placement. Reversed cards suggest internal conflict or blocked energy. Our online generator includes upright and reversed meanings.</p>

            <h2 class="text-amber-200">5. Practice with Intuition</h2>
            <p>Tarot isn’t about prediction—it’s about intuition. Use our generator to reflect, meditate, and explore meanings. Let symbols spark self-awareness.</p>

            <h2 class="text-amber-200">6. Ready to Begin?</h2>
            <p><a href="/" class="text-amber-200 hover:underline">Try your first free tarot draw now</a>. Ask your question, and the cards will offer their whisper of wisdom—on love, career, or life’s deeper mysteries.</p>

            <p class="text-center text-lg mt-8"><strong>Daily Tarot Draw</strong><br>Discover your path with the best tarot card generator online. Let ancient archetypes and modern technology come together to reveal your story.</p>
        </div>
    </main>
    <?php include __DIR__ . '/../navigation/footer.php'; ?>
</body>
</html>

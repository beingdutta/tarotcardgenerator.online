<?php
$pageTitle = 'FAQ - Tarot Card Generator';
$pageDescription = 'Find answers to frequently asked questions about our free tarot card generator, including how to perform a reading, how card interpretations work, and more.';
$pageKeywords = 'tarot faq, how to read tarot, tarot card generator help, free tarot reading questions';

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
    <script type="application/ld+json">
    {
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [{
    "@type": "Question",
    "name": "What is Tarot?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Tarot is a deck of 78 cards featuring symbolic imagery used for divination, self-reflection, and creative insight. It includes 22 Major Arcana and 56 Minor Arcana cards organized into four suits."
    }
  },{
    "@type": "Question",
    "name": "How do I perform a tarot reading?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Select your spread, focus on your question, and click “Draw Cards.” Your cards will shuffle automatically and display with interpretations."
    }
  },{
    "@type": "Question",
    "name": "Do I need an account?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "No. Mystic Tarot offers unlimited free readings without signup. Just visit the site and start your session."
    }
  },{
    "@type": "Question",
    "name": "Is Mystic Tarot free?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Completely free. Enjoy unlimited access to all spreads and readings at no cost."
    }
  },{
    "@type": "Question",
    "name": "Who wrote the card interpretations?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Our interpretations are crafted by experienced tarot practitioners and refined by AI to provide clear, insightful guidance."
    }
  }]
}
    </script>
</head>
<body class="bg-black">
    <?php include __DIR__ . '/../navigation/header.php'; ?>
    <main class="container mx-auto px-4 py-8 md:py-12">
        <div class="prose prose-invert prose-p:text-gray-300 prose-headings:text-amber-200 prose-headings:font-serif max-w-3xl mx-auto">
            <div class="text-center mb-12 prose-headings:text-amber-200">
                <h1 class="text-4xl md:text-5xl">Frequently Asked Questions</h1>
                <p class="text-lg text-gray-400">Everything you need to know about Mystic Tarot.</p>
            </div>

            <details class="faq-item" open>
                <summary class="text-amber-200">What is Tarot?</summary>
                <p>Tarot is a deck of 78 cards featuring symbolic imagery used for divination, self-reflection, and creative insight. It includes 22 Major Arcana and 56 Minor Arcana cards organized into four suits.</p>
            </details>
            <details class="faq-item"><summary class="text-amber-200">How do I perform a tarot reading?</summary><p>Select your spread, focus on your question, and click “Draw Cards.” Your cards will shuffle automatically and display with interpretations.</p></details>
            <details class="faq-item"><summary class="text-amber-200">Do I need an account?</summary><p>No. Mystic Tarot offers unlimited free readings without signup. Just visit the site and start your session.</p></details>
            <details class="faq-item"><summary class="text-amber-200">Can I save or share my readings?</summary><p>Yes—you can copy a sharable link or download a snapshot of your reading once the cards are revealed.</p></details>
            <details class="faq-item"><summary class="text-amber-200">Is Mystic Tarot free?</summary><p>Completely free. Enjoy unlimited access to all spreads and readings at no cost.</p></details>
            <details class="faq-item"><summary class="text-amber-200">Who wrote the card interpretations?</summary><p>Our interpretations are crafted by experienced tarot practitioners and refined by AI to provide clear, insightful guidance.</p></details>
            <details class="faq-item"><summary class="text-amber-200">I’m new and nervous—what should I expect?</summary><p>Approach the reading with an open mind. There’s no need for prior knowledge or spiritual beliefs—just ask your question and explore the insights.</p></details>
            <details class="faq-item"><summary class="text-amber-200">What if I have other questions?</summary><p>Contact our support team any time via <a href="/legal/contact-us.php">Contact Us</a>.</p></details>
        </div>
    </main>
    <?php include __DIR__ . '/../navigation/footer.php'; ?>
</body>
</html>

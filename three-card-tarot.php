<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>3 Card Tarot Reading Free | Past, Present, Future Spread</title>
    <link rel="canonical" href="https://tarotcardgenerator.online/three-card-tarot.php" />

    <!-- SEO META -->
    <meta name="description" content="Get a free 3 card tarot reading with our online generator. Explore the past, present, and future spread for deep insights. An alternative to the Celtic Cross tarot.">
    <meta name="keywords" content="3 tarot card generator, three card tarot, tarot card generator reading, free tarot reading, past present future tarot, online tarot reading, celtic cross tarot, tarot card interpretation generator">

    <!-- Facebook -->
    <meta property="og:type"        content="website">
    <meta property="og:url"         content="https://tarotcardgenerator.online/three-card-tarot.php">
    <meta property="og:title"       content="3 Card Tarot Reading Free | Past, Present, Future Spread">
    <meta property="og:description" content="Get a free 3 card tarot reading with our online generator. Explore the past, present, and future spread for deep insights.">
    <meta property="og:image"       content="https://tarotcardgenerator.online/assets/og-image.jpg">

    <!-- Twitter -->
    <meta name="twitter:card"        content="summary_large_image">
    <meta name="twitter:url"         content="https://tarotcardgenerator.online/three-card-tarot.php">
    <meta name="twitter:title"       content="3 Card Tarot Reading Free | Past, Present, Future Spread">
    <meta name="twitter:description" content="Get a free 3 card tarot reading with our online generator. Explore the past, present, and future spread for deep insights.">
    <meta name="twitter:image"       content="https://tarotcardgenerator.online/assets/og-image.jpg">

    <link rel="icon" href="/assets/icons/site-icon-32.png" type="image/x-icon" />

    <!-- Font Awesome & Fonts -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;700&family=Cormorant+Garamond:wght@300;400;600&display=swap"
        rel="stylesheet" />

    <!-- Your tarot-page CSS (unchanged) -->
    <link rel="stylesheet" href="/styles/three-card-tarot.css" />

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-QSWHND4TS3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-QSWHND4TS3');
    </script>
</head>

<body>
    <!-- BACKGROUND (untouched) -->
    <canvas id="star"></canvas>
    <div class="sweep"></div>

    <!-- HEADER (exactly from homepage) -->
    <header class="site-header">
    <a href="/" class="logo">Tarot Card Generator</a>
    <div class="header-controls">
        <div class="lang-select-wrapper">
        <select class="lang-select" aria-label="Select Language">
            <option value="en">English</option>
            <option value="es">Español</option>
            <option value="de">Deutsch</option>
            <option value="fr">Français</option>
        </select>
        </div>
        <button class="mute-btn" aria-label="Toggle Sound"><i class="fas fa-volume-mute"></i></button>
        <button class="menu-btn" aria-label="Menu"><i class="fas fa-ellipsis-v"></i></button>
    </div>
    </header>

    <!-- HERO (three-card spread) -->
    <section class="hero">
        <div id="fanWrap">
            <div id="fan"></div>
            <p id="prompt-before">Focus on Your Question for this 3 Card Tarot Reading</p>
            <!-- updated prompt -->
            <p id="prompt">Select the First Card for Your Past</p>
            <p id="prompt-after">Let the UNIVERSE Guide YOU</p>
        </div>

        <!-- Draw-all button for mobile-only -->
        <button id="draw-all" class="draw-all">Draw 3 Cards</button>

        <!-- three result sections, hidden until the 3rd pick -->
        <div id="result">
            <!-- 1) “Your Reading” header -->
            <div class="reading-header">
                <h2>
                    <i class="fas fa-clone"></i>
                    Your 3 Card Tarot Reading
                </h2>
            </div>

            <!-- 2) The three pick slots -->
            <div class="result-section" id="past">
                <div class="position-label">The Past</div>
                <div class="view"></div><div class="info"></div>
            </div>
            <div class="result-section" id="present">
                <div class="position-label">The Present</div>
                <div class="view"></div><div class="info"></div>
            </div>
            <div class="result-section" id="future">
                <div class="position-label">The Future</div>
                <div class="view"></div><div class="info"></div>
            </div>

            <!-- 3) Draw Again button -->
            <div class="draw-again">
                <button id="again">New 3 Card Reading</button>
            </div>

            <!-- 4) Psychic CTA, now INSIDE the result -->
        </div>
    </section>

    <div class="psychic-help">
        <div class="psychic-help__inner">
            <h2>
                <i class="fa-solid fa-moon-stars"></i>
                Get Advice from Gifted Psychics
            </h2>
            <p>
                Feeling lost or stuck? Searching for your soulmate or clarity in life?<br>
                Receive the guidance you need from gifted psychics, spiritual advisors, and tarot experts.
            </p>
            <p class="psychic-help__price">✨ COMING SOON !! ✨</p>
            <a href="/sponsored.php" class="psychic-help__btn">GET YOUR READING NOW!</a>
        </div>
    </div>

    <!-- DIVIDER & SEO (homepage style + content) -->
    <hr class="section-divider" />

    <!-- COLLAPSIBLE FAQ SECTION -->
    <section class="faq-section">
      <h2>Frequently Asked Questions</h2>

      <details class="faq-item">
        <summary>What is a 3 card tarot reading?</summary>
        <div class="faq-content">
          <p>A 3 card tarot reading is a popular spread that provides a quick overview of a situation. Our 3 tarot card generator uses the Past, Present, and Future positions to give you a clear narrative for your tarot card reading.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Is this different from a Celtic Cross tarot spread?</summary>
        <div class="faq-content">
          <p>Yes. While the Celtic Cross tarot is a more complex 10-card spread, the three-card tarot reading offers a more focused and immediate insight. It's excellent for specific questions and daily guidance.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>How does the tarot card interpretation generator work for this spread?</summary>
        <div class="faq-content">
          <p>Our tarot card interpretation generator provides meanings for each of the three cards based on its position (Past, Present, or Future). This gives you a tailored tarot card generator reading that tells a story.</p>
        </div>
      </details>

      <details class="faq-item">
        <summary>Do I need to sign up or download anything?</summary>
        <div class="faq-content">
          <p>No. This free tarot reading is available online without any registration. You can use our 3 tarot card generator as many times as you like.</p>
        </div>
      </details>
    </section>

    <!-- FOOTER (exactly from homepage) -->
    <footer class="site-footer">
    <div class="footer-brand">
        <h2>Mystic Tarot</h2>
        <p>Discover the ancient wisdom of tarot to illuminate your path and guide your journey through life’s mysteries.</p>
    </div>
    <div class="footer-links">
        <div class="footer-col">
        <h4>Information</h4>
        <a href="/legal/about-us.php">About Us</a>
        <a href="/information/how-it-works.php">How It Works</a>
        <a href="/information/tarot-guide.php">Tarot Guide</a>
        <a href="/information/testimonials.php">Testimonials</a>
        </div>
        <div class="footer-col">
        <h4>Legal</h4>
        <a href="/legal/terms-and-conditions.php">Terms &amp; Conditions</a>
        <a href="/legal/privacy-policy.php">Privacy Policy</a>
        <a href="/legal/disclaimer.php">Disclaimer</a>
        <a href="/legal/cookie-policy.php">Cookie Policy</a>
        </div>
        <div class="footer-col">
        <h4>Support</h4>
        <a href="/legal/contact-us.php">Contact Us</a>
        <a href="/information/faq.php">FAQs</a>
        <a href="/legal/support-us.php">Support Us</a>
        <a href="/legal/feedback.php">Feedback</a>
        </div>
        <div class="footer-col">
        <h4>Connect</h4>
        <a href="#"><i class="fab fa-facebook-f"></i> Facebook</a>
        <a href="#"><i class="fab fa-instagram"></i> Instagram</a>
        <a href="#"><i class="fab fa-twitter"></i> Twitter</a>
        <a href="#"><i class="fab fa-pinterest"></i> Pinterest</a>
        </div>
    </div>
    <div class="footer-bottom">
        <p>© 2025 Mystic Tarot. All rights reserved.</p>
    </div>
    </footer>

    <!-- Your tarot JS (unchanged) -->
    <script src="/scripts/three-card-tarot.js"></script>
</body>
</html>

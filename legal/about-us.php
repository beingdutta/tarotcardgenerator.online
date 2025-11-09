<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>About Us | Mystic Tarot</title>
  <meta name="description" content="Learn about Mystic Tarot’s origins, mission, and team behind the magic.">
  <meta name="keywords" content="Mystic Tarot, about us, tarot team, mission">

  <!-- Facebook -->
  <meta property="og:type"        content="website">
  <meta property="og:url"         content="https://tarotcardgenerator.online/legal/about-us.php">
  <meta property="og:title"       content="About Us | Mystic Tarot">
  <meta property="og:description" content="Learn about Mystic Tarot’s origins, mission, and team behind the magic.">
  <meta property="og:image"       content="https://tarotcardgenerator.online/assets/og-image.jpg">

  <!-- Twitter -->
  <meta name="twitter:card"        content="summary_large_image">
  <meta name="twitter:url"         content="https://tarotcardgenerator.online/legal/about-us.php">
  <meta name="twitter:title"       content="About Us | Mystic Tarot">
  <meta name="twitter:description" content="Learn about Mystic Tarot’s origins, mission, and team behind the magic.">
  <meta name="twitter:image"       content="https://tarotcardgenerator.online/assets/og-image.jpg">

  <link rel="icon" href="/assets/icons/site-icon-32.png" type="image/x-icon" />

  <!-- Font Awesome -->
  <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-…" crossorigin="anonymous"
        referrerpolicy="no-referrer">
  <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;700&family=Cormorant+Garamond:wght@300;400;600&display=swap"
        rel="stylesheet" />

  <link rel="stylesheet" href="/styles/index.css">

  <!-- Centered, Readable About Us Styles -->
  <style>
    .about-content {
      max-width: 700px;
      margin: 2rem auto 4rem;
      padding: 0 1rem;
      font-size: 1.125rem;
      line-height: 1.7;
      color: #ffffff;
    }
    .about-content h2 {
      font-size: 1.75rem;
      margin-top: 2.5rem;
      margin-bottom: 1rem;
    }
    .about-content p {
      margin: 1rem 0;
    }
    .footer-tagline {
      margin-top: 2.5rem;
      font-size: 1.25rem;
      font-weight: 600;
      text-align: center;
    }
    @media (max-width: 480px) {
      .about-content {
        font-size: 1rem;
        margin: 1.5rem auto 3rem;
      }
      .about-content h2 {
        font-size: 1.5rem;
        margin-top: 2rem;
      }
    }
  </style>
</head>

<body>

  <!-- starfield & spotlight -->
  <canvas id="starfield"></canvas>
  <div class="spotlight"></div>

  <!-- HEADER -->
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

  <main>
    <!-- HERO -->
    <section class="hero" style="padding:3rem 1rem 0rem">
      <h1 class="hero-title">About Us</h1>
      <p class="hero-subtitle">Our story, mission, and the magic behind Mystic Tarot.</p>
    </section>

    <!-- ABOUT CONTENT -->
    <section class="about-content">
      <h2>Our Origins</h2>
      <p>
        Mystic Tarot is born from a fusion of passion — blending deep spiritual curiosity with the powers of modern technology.
      </p>

      <h2>Who We Are</h2>
      <p>
        We’re a team of intuitive developers and professional tarot readers who’ve come together to craft something truly magical. Each card meaning and interpretation is aligned with traditional symbolism, offering a genuine reading experience.
      </p>

      <h2>Our Mission</h2>
      <p>
        We aim to make tarot accessible and powerful through an AI-driven platform that respects mystic traditions. Whether you’re new to tarot or a seasoned reader, our platform adapts to your curiosity.
      </p>

      <h2>What Sets Us Apart</h2>
      <p>
        Unlike random card pickers, we embed spiritual logic, reversal support, and zodiac interpretations to make each reading resonate personally and intuitively.
      </p>

      <h2>Our Belief</h2>
      <p>
        We believe that technology can be soulful — and Mystic Tarot is a living testament to that harmony of logic and intuition.
      </p>

      <p class="footer-tagline"><strong>Mystic Tarot</strong></p>
    </section>
  </main>

  <!-- FOOTER -->
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

  <!-- JavaScript: Starfield Animation -->
  <script src="/scripts/index.js"></script>
</body>

</html>

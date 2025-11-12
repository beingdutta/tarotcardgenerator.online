<?php
$pageTitle = 'Privacy Policy | Daily Tarot Card Generator';
$pageDescription = 'Our Privacy Policy describes how we collect, use, and share information when you visit our free tarot card generator website.';
$pageKeywords = 'privacy policy, tarot card generator, data privacy';
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
                <h1 class="text-4xl md:text-5xl">Privacy Policy</h1>
                <p class="text-lg text-gray-400">Your privacy is important to us.</p>
            </div>
            
            <p>
              This Privacy Policy describes how Mystic Tarot ("we", "us", or "our") collects, uses, and shares information when you visit or use our website.
            </p>

            <h2 class="text-amber-200">Information We Collect</h2>
            <p>
              We may collect personal information that you provide directly to us, such as your name and email address when you subscribe to our newsletter or contact us.
            </p>
            <p>
              We automatically collect usage data, including your IP address, browser type, and operating system, to analyze site performance.
            </p>
            <p>
              We use cookies and similar tracking technologies to enhance your experience.
            </p>

            <h2 class="text-amber-200">How We Use Information</h2>
            <p>
              We use the information to provide and improve our services, personalize content, and communicate with you.
            </p>

            <h2 class="text-amber-200">Cookies and Tracking Technologies</h2>
            <p>
              Cookies are small data files stored on your device that help us remember your preferences and track usage.
            </p>
            <p>
              You can disable cookies through your browser settings, but this may affect site functionality.
            </p>

            <h2 class="text-amber-200">Third-Party Services</h2>
            <p>
              We may share information with third-party service providers who help us operate the website and perform analytics.
            </p>
            <p>
              These third parties are restricted from using your information except to provide services to us.
            </p>

            <h2 class="text-amber-200">Data Security</h2>
            <p>
              We implement reasonable security measures to protect your information from unauthorized access and disclosure.
            </p>

            <h2 class="text-amber-200">Children’s Privacy</h2>
            <p>
              Our website is not intended for children under 13 and we do not knowingly collect their personal information.
            </p>

            <h2 class="text-amber-200">Your Rights</h2>
            <p>
              You may review, update, or delete your personal information by contacting us.
            </p>

            <h2 class="text-amber-200">Changes to This Policy</h2>
            <p>
              We may update this Privacy Policy from time to time, and we will post the revised date at the top of this page.
            </p>

            <h2 class="text-amber-200">Contact Us</h2>
            <p>
              If you have any questions about this Privacy Policy, please contact us at 
              <a href="mailto:privacy@your-domain.com">privacy@your-domain.com</a>.
            </p>
        </div>
    </main>
    <?php include __DIR__ . '/../navigation/footer.php'; ?>
</body>
</html>

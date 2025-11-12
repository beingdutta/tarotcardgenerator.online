<?php
$pageTitle = 'Terms & Conditions | Daily Tarot Card Generator';
$pageDescription = 'Read the Terms and Conditions for using our free tarot card generator website.';
$pageKeywords = 'terms and conditions, tarot card generator, terms of use';
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
                <h1 class="text-4xl md:text-5xl">Terms &amp; Conditions</h1>
                <p class="text-lg text-gray-400">Please read these terms carefully before using our site.</p>
            </div>

            <h2 class="text-amber-200">1. Acceptance of Terms</h2>
            <p>
              By accessing or using Mystic Tarot’s website, you agree to be bound by these Terms &amp; Conditions and all applicable laws and regulations. If you do not agree, you must not use our site.
            </p>

            <h2 class="text-amber-200">2. Use of the Site</h2>
            <ul>
              <li>You may use our tarot card generator for personal, non-commercial purposes only.</li>
              <li>You agree not to reproduce, duplicate, copy, sell, resell, or exploit any portion of the site without our express written permission.</li>
              <li>You must not transmit any harmful code or otherwise interfere with the proper working of the site.</li>
            </ul>

            <h2 class="text-amber-200">3. Intellectual Property</h2>
            <p>
              All content on this site, including text, images, graphics, logos, and software, is the property of Mystic Tarot or its licensors and is protected by copyright, trademark, and other intellectual property laws.
            </p>

            <h2 class="text-amber-200">4. User Conduct</h2>
            <p>
              You agree to use the site in a lawful manner and not to engage in any conduct that may harm the site, its users, or third parties.
            </p>

            <h2 class="text-amber-200">5. Termination</h2>
            <p>
              We reserve the right to terminate or suspend your access to the site, without notice, for any violation of these terms or for any other reason.
            </p>

            <h2 class="text-amber-200">6. Disclaimer of Warranties</h2>
            <p>
              The site and its content are provided “as is” and “as available” without warranty of any kind. We disclaim all warranties, express or implied, including but not limited to merchantability, fitness for a particular purpose, and non-infringement.
            </p>

            <h2 class="text-amber-200">7. Limitation of Liability</h2>
            <p>
              Mystic Tarot and its affiliates will not be liable for any direct, indirect, incidental, special, or consequential damages arising from your use of the site or reliance on any content.
            </p>

            <h2 class="text-amber-200">8. Governing Law</h2>
            <p>
              These terms shall be governed by and construed in accordance with the laws of your jurisdiction, without regard to conflict of law principles.
            </p>

            <h2 class="text-amber-200">9. Changes to Terms</h2>
            <p>
              We may modify these Terms &amp; Conditions at any time. Changes become effective upon posting, and your continued use of the site constitutes acceptance of the revised terms.
            </p>

            <h2 class="text-amber-200">10. Contact Us</h2>
            <p>
              If you have any questions about these Terms &amp; Conditions, please contact us at 
              <a href="mailto:legal@your-domain.com">legal@your-domain.com</a>.
            </p>
        </div>
    </main>
    <?php include __DIR__ . '/../navigation/footer.php'; ?>
</body>
</html>

<?php
$pageTitle = 'Disclaimer | Daily Tarot Card Generator';
$pageDescription = 'Read our disclaimer regarding the use of our free tarot card generator. Information is for entertainment purposes only.';
$pageKeywords = 'disclaimer, tarot card generator, entertainment purposes';
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
                <h1 class="text-4xl md:text-5xl">Disclaimer</h1>
                <p class="text-lg text-gray-400">Please read this carefully.</p>
            </div>

            <h2 class="text-amber-200">General Information</h2>
            <p>The content on Mystic Tarot's website is provided for informational and entertainment purposes only. By using this site, you agree that the information and readings you receive are not a substitute for professional advice.</p>

            <h2 class="text-amber-200">No Professional Advice</h2>
            <p>Tarot readings and interpretations offered here do not constitute legal, financial, medical, or psychological advice. You should consult a qualified professional for guidance in those areas.</p>

            <h2 class="text-amber-200">Accuracy of Content</h2>
            <p>We strive to present accurate and up-to-date information, but we make no warranties or representations regarding the completeness, reliability, or accuracy of the content on this site.</p>

            <h2 class="text-amber-200">Limitation of Liability</h2>
            <p>Mystic Tarot and its affiliates will not be liable for any direct, indirect, incidental, consequential, or punitive damages arising out of your access to, or use of, the site or its content.</p>

            <h2 class="text-amber-200">External Links</h2>
            <p>Our site may contain links to external websites. We are not responsible for the content, policies, or practices of any third-party sites. Visiting those sites is at your own risk.</p>

            <h2 class="text-amber-200">Use at Your Own Risk</h2>
            <p>You assume full responsibility for how you choose to use the information obtained from Mystic Tarot. All readings and suggestions are provided “as is” and should be used at your discretion.</p>

            <h2 class="text-amber-200">Changes to This Disclaimer</h2>
            <p>We reserve the right to update or modify this disclaimer at any time. Changes will take effect upon posting. Your continued use of the site constitutes acceptance of any revisions.</p>

            <h2 class="text-amber-200">Contact Us</h2>
            <p>If you have questions about this disclaimer, please contact us at <a href="mailto:legal@your-domain.com">legal@your-domain.com</a>.</p>
        </div>
    </main>
    <?php include __DIR__ . '/../navigation/footer.php'; ?>
</body>
</html>

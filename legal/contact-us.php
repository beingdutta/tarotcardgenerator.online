<?php
$pageTitle = 'Contact Us | Daily Tarot Card Generator';
$pageDescription = 'Contact us for support, inquiries, or feedback about our free tarot card generator.';
$pageKeywords = 'contact us, tarot card support, tarot generator feedback';
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
                <h1 class="text-4xl md:text-5xl">Contact Us</h1>
                <p class="text-lg text-gray-400">We value your trust and your journey.</p>
            </div>

            <p>If you encounter any issues, questions, or concerns while using tarotcardgenerator.online, please don’t hesitate to contact us.</p>

            <h2 class="text-amber-200">Support &amp; Inquiries</h2>
            <p>For feedback, technical issues, or clarifications about card meanings or the experience, please contact our support team. We’re always open to improving your experience.</p>

            <h2 class="text-amber-200">Dispute Resolution</h2>
            <p>If you believe your tarot reading was misleading or technically flawed, feel free to let us know with full details. We’ll investigate and provide a thoughtful response.</p>

            <h2 class="text-amber-200">Email Us</h2>
            <p>
                You can reach us directly at:<br>
                <a href="mailto:admins@tarotcardgenerator.com">admins@tarotcardgenerator.com</a>
            </p>

            <p>We typically respond within 48 hours. Thank you for using tarotcardgenerator.online as your guide through symbolic wisdom.</p>

            <p class="text-center text-lg mt-8"><strong>tarotcardgenerator.online</strong><br>Discover the ancient wisdom of tarot to illuminate your path and guide your journey through life’s mysteries.</p>
        </div>
    </main>
    <?php include __DIR__ . '/../navigation/footer.php'; ?>
</body>
</html>

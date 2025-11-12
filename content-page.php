<?php include __DIR__ . '/navigation/header.php'; ?>

<!-- Using Tailwind's 'prose' classes for beautiful typography defaults -->
<div class="prose prose-invert prose-p:text-gray-300 prose-headings:text-amber-200 prose-headings:font-serif max-w-4xl mx-auto">

    <!-- Layout Option 1: 2-Column Layout -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-start">
        <div class="md:col-span-1">
            <h2 class="text-3xl md:text-4xl">The Power of Each Card</h2>
            <p>
                Understanding a tarot reading involves more than just the card's general meaning. It's a reflection of your energy at this moment. Here’s how to interpret the different layers of a card's message.
            </p>
            <ol>
                <li>
                    <strong>Your Current Feelings:</strong> This aspect reflects your immediate emotional state. Are you feeling hopeful, anxious, or confused? The card mirrors this back to you.
                </li>
                <li>
                    <strong>Your Immediate Desires:</strong> This points to what you consciously or unconsciously want right now. It could be a desire for clarity, connection, or change.
                </li>
                <li>
                    <strong>The Path Forward:</strong> The card offers guidance on a potential path. It is not a fixed future but a suggestion of which energies to embrace or be wary of.
                </li>
            </ol>
        </div>
        <div class="md:col-span-1">
            <img src="https://placehold.co/600x400/1a1a1a/d4b48c?text=Mystical+Image" alt="Three fanned out tarot cards" class="rounded-lg shadow-lg w-full">
        </div>
    </div>

    <hr class="my-12 border-amber-200/20">

    <!-- Layout Option 2: 1-Column Layout -->
    <div class="max-w-3xl mx-auto">
        <h2 class="text-3xl md:text-4xl">A Single Column for Focus</h2>
        <p>This layout is perfect for long-form articles, "About Us" pages, or any content that requires focused reading without visual distractions. The centered, narrower column helps guide the reader's eye down the page, making it comfortable to read extensive text.</p>
        <p>You can include subheadings, lists, and blockquotes to structure your content effectively while maintaining a clean and elegant presentation.</p>
    </div>

</div>

<?php include __DIR__ . '/navigation/footer.php'; ?>
document.addEventListener('DOMContentLoaded', function () {
    // --- Mobile Menu Toggle ---
    const menuButton = document.getElementById('mobile-menu-button');
    const closeMenuButton = document.getElementById('mobile-menu-close-button');
    const mobileMenu = document.getElementById('mobile-menu');

    if (menuButton && mobileMenu && closeMenuButton) {
        menuButton.addEventListener('click', () => {
            mobileMenu.classList.remove('hidden');
        });

        closeMenuButton.addEventListener('click', () => {
            mobileMenu.classList.add('hidden');
        });
    }

    // --- Footer Accordion Toggle ---
    const accordionToggles = document.querySelectorAll('.footer-accordion-toggle');

    accordionToggles.forEach(toggle => {
        toggle.addEventListener('click', (event) => {
            event.preventDefault();
            const submenu = toggle.nextElementSibling;
            const arrow = toggle.querySelector('svg');
            
            submenu.classList.toggle('hidden');
            arrow.classList.toggle('rotate-180');
        });
    });
});
import './bootstrap';
import { initAllAnimations } from './animations.js';

// Contact Form handler (page-specific)
document.addEventListener('DOMContentLoaded', () => {
    // Initialize all reusable animations
    initAllAnimations();

    // Contact form handling (specific to home page, could be moved to a form handler module)
    const contactForm = document.getElementById('contactForm');
    if (contactForm) {
        contactForm.addEventListener('submit', (e) => {
            e.preventDefault();
            alert('Message sent! (This is a demo - no actual email is sent)');
            e.target.reset();
        });
    }
});

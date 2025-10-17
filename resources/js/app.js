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

// Copy-to-clipboard handler for share link buttons
document.addEventListener('click', (e) => {
    const el = e.target.closest('.js-copy-link');
    if (!el) return;
    e.preventDefault();

    const url = el.dataset.url || window.location.href;

    // helper to show temporary UI state
    function showCopied(node) {
        node.setAttribute('data-copied', 'true');
        node.setAttribute('aria-label', 'Link copied');
        setTimeout(() => {
            node.removeAttribute('data-copied');
            node.setAttribute('aria-label', 'Copy link');
        }, 1800);
    }

    // Try navigator.clipboard first
    if (navigator.clipboard && navigator.clipboard.writeText) {
        navigator.clipboard.writeText(url).then(() => {
            showCopied(el);
            // optional: announce for screen readers
            const live = document.getElementById('share-aria-live');
            if (live) live.textContent = 'Link copied to clipboard';
        }).catch(() => {
            // fallback
            fallbackCopy(url, el);
        });
    } else {
        fallbackCopy(url, el);
    }

    function fallbackCopy(text, node) {
        const textarea = document.createElement('textarea');
        textarea.value = text;
        textarea.style.position = 'absolute';
        textarea.style.left = '-9999px';
        document.body.appendChild(textarea);
        textarea.select();
        try {
            document.execCommand('copy');
            showCopied(node);
            const live = document.getElementById('share-aria-live');
            if (live) live.textContent = 'Link copied to clipboard';
        } catch (err) {
            console.error('Copy failed', err);
        }
        document.body.removeChild(textarea);
    }
});

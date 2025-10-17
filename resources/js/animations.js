/* ===== REUSABLE ANIMATION JAVASCRIPT ===== */
/* Use these functions across any page for consistent behavior */

/**
 * Initialize marquee animation with requestAnimationFrame
 * @param {string} selector - CSS selector for marquee track (default: '.marquee-track')
 * @param {Object} options - Configuration options
 */
export function initMarquee(selector = '.marquee-track', options = {}) {
    const defaults = {
        speed: 80, // pixels per second
        direction: 1, // 1 = left-to-right, -1 = right-to-left
        pauseOnHover: true,
        reverseOnHover: true
    };

    const config = { ...defaults, ...options };

    const track = document.querySelector(selector);
    if (!track) return null;

    const wrapper = track.closest('.marquee-wrapper');
    let speed = config.speed;
    let direction = config.direction;
    let paused = false;

    const trackWidth = () => track.scrollWidth / 2;
    let pos = -trackWidth() * 0.3;

    // Disable CSS animation in favor of JS control
    track.style.animation = 'none';

    let lastTime = null;

    function step(timestamp) {
        if (paused) {
            lastTime = timestamp;
            requestAnimationFrame(step);
            return;
        }

        if (!lastTime) lastTime = timestamp;
        const dt = (timestamp - lastTime) / 1000;
        lastTime = timestamp;

        const move = direction * speed * dt;
        pos += move;

        const w = trackWidth();

        // Wrap seamlessly
        if (pos <= -w) pos += w;
        if (pos > 0) pos -= w;

        track.style.transform = `translateX(${pos}px)`;
        requestAnimationFrame(step);
    }

    // Set up hover interactions if enabled
    if (config.pauseOnHover && wrapper) {
        let hoverDebounce = null;

        wrapper.addEventListener('mouseenter', () => {
            paused = true;
            clearTimeout(hoverDebounce);
        });

        wrapper.addEventListener('mouseleave', () => {
            if (config.reverseOnHover) {
                direction = -direction;
            }
            clearTimeout(hoverDebounce);
            hoverDebounce = setTimeout(() => {
                paused = false;
                lastTime = null;
            }, 60);
        });
    }

    // Handle resize
    let resizeTimer = null;
    window.addEventListener('resize', () => {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(() => {
            const w = trackWidth();
            if (pos <= -w) pos = ((pos % -w) + -w) % -w;
            if (pos > 0) pos = pos % -w;
        }, 120);
    });

    // Start animation
    requestAnimationFrame(step);

    // Return control object
    return {
        pause: () => { paused = true; },
        resume: () => { paused = false; lastTime = null; },
        setSpeed: (newSpeed) => { speed = newSpeed; },
        setDirection: (newDirection) => { direction = newDirection; },
        destroy: () => {
            track.style.animation = '';
            track.style.transform = '';
        }
    };
}

/**
 * Initialize typewriter animation
 * @param {string} selector - CSS selector for typewriter element
 * @param {Array} phrases - Array of phrases to cycle through
 * @param {Object} options - Configuration options
 */
export function initTypewriter(selector, phrases, options = {}) {
    const defaults = {
        typeSpeed: 90,
        deleteSpeed: 45,
        pauseAfter: 1200,
        loop: true
    };

    const config = { ...defaults, ...options };
    const el = document.querySelector(selector);
    if (!el || !phrases.length) return null;

    let phraseIndex = 0;
    let charIndex = 0;
    let deleting = false;

    function tick() {
        const current = phrases[phraseIndex];

        if (!deleting) {
            charIndex++;
            el.textContent = current.slice(0, charIndex) || '\u00A0';

            if (charIndex >= current.length) {
                deleting = true;
                setTimeout(tick, config.pauseAfter);
                return;
            }
            setTimeout(tick, config.typeSpeed);
        } else {
            charIndex--;
            el.textContent = current.slice(0, charIndex) || '\u00A0';

            if (charIndex <= 0) {
                deleting = false;
                phraseIndex = (phraseIndex + 1) % phrases.length;
                setTimeout(tick, 200);
                return;
            }
            setTimeout(tick, config.deleteSpeed);
        }
    }

    // Start after a brief delay
    setTimeout(tick, 400);

    // Return control object
    return {
        stop: () => clearTimeout(),
        restart: () => {
            phraseIndex = 0;
            charIndex = 0;
            deleting = false;
            setTimeout(tick, 400);
        }
    };
}

/**
 * Initialize smooth scroll for anchor links
 * @param {string} selector - CSS selector for anchor links (default: 'a[href^="#"]')
 * @param {Object} options - Scroll behavior options
 */
export function initSmoothScroll(selector = 'a[href^="#"]', options = {}) {
    const defaults = {
        behavior: 'smooth',
        block: 'start'
    };

    const config = { ...defaults, ...options };

    document.querySelectorAll(selector).forEach((anchor) => {
        anchor.addEventListener('click', function (e) {
            const href = this.getAttribute('href');
            if (!href || href === '#') return;

            const target = document.querySelector(href);
            if (!target) return;

            e.preventDefault();
            target.scrollIntoView(config);
        });
    });
}

/**
 * Auto-initialize all animations when DOM is ready
 * This function can be called from any page to set up standard animations
 */
export function initAllAnimations() {
    // Initialize marquee if present
    if (document.querySelector('.marquee-track')) {
        initMarquee();
    }

    // Initialize typewriter if present
    const typerEl = document.querySelector('#subtitle-typer');
    if (typerEl) {
        initTypewriter('#subtitle-typer', ['Laravel Developer', 'App Dev', 'Software Engineer']);
    }

    // Initialize smooth scroll
    initSmoothScroll();
}

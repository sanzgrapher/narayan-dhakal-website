<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Animation Demo Page</title>

    <!-- Include your app assets -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
</head>

<body class="bg-gray-100 text-gray-800 p-8">
    <div class="max-w-4xl mx-auto">
        <h1 class="text-3xl font-bold mb-8">Reusable Animation Demo</h1>

        <!-- Example 1: Icon Pills with jump-rotate animation -->
        <section class="mb-8">
            <h2 class="text-2xl font-bold mb-4">Icon Pills</h2>
            <div class="flex flex-wrap gap-3">
                <span class="icon-pill bg-red-200 text-red-800">
                    <i class="fab fa-laravel"></i>Laravel
                </span>
                <span class="icon-pill bg-green-200 text-green-800">
                    <i class="fab fa-vuejs"></i>Vue.js
                </span>
                <span class="icon-pill bg-blue-200 text-blue-800">
                    <i class="fab fa-php"></i>PHP
                </span>
            </div>
        </section>

        <!-- Example 2: Tech Icons with enhanced animations -->
        <section class="mb-8">
            <h2 class="text-2xl font-bold mb-4">Tech Icons</h2>
            <div class="flex flex-wrap gap-4">
                <div class="tech-icon text-center">
                    <button class="icon-pill bg-red-100 hover:bg-red-200 p-4 flex flex-col items-center">
                        <i class="fab fa-laravel text-4xl text-red-500 mb-2"></i>
                        <span>Laravel</span>
                    </button>
                </div>
                <div class="tech-icon text-center">
                    <button class="icon-pill bg-green-100 hover:bg-green-200 p-4 flex flex-col items-center">
                        <i class="fab fa-react text-4xl text-green-500 mb-2"></i>
                        <span>React</span>
                    </button>
                </div>
            </div>
        </section>

        <!-- Example 3: Marquee with different content -->
        <section class="mb-8">
            <h2 class="text-2xl font-bold mb-4">Custom Marquee</h2>
            <div class="marquee-wrapper bg-white rounded-lg border p-4">
                <div class="marquee-fade left"></div>
                <div class="marquee-fade right"></div>
                <div class="marquee-track">
                    <!-- Original content -->
                    <div class="marquee-item">
                        <span class="icon-pill bg-purple-200 text-purple-800">
                            <i class="fas fa-star"></i>Feature 1
                        </span>
                    </div>
                    <div class="marquee-item">
                        <span class="icon-pill bg-yellow-200 text-yellow-800">
                            <i class="fas fa-rocket"></i>Feature 2
                        </span>
                    </div>
                    <div class="marquee-item">
                        <span class="icon-pill bg-cyan-200 text-cyan-800">
                            <i class="fas fa-shield"></i>Feature 3
                        </span>
                    </div>
                    <!-- Duplicate for seamless loop -->
                    <div class="marquee-item">
                        <span class="icon-pill bg-purple-200 text-purple-800">
                            <i class="fas fa-star"></i>Feature 1
                        </span>
                    </div>
                    <div class="marquee-item">
                        <span class="icon-pill bg-yellow-200 text-yellow-800">
                            <i class="fas fa-rocket"></i>Feature 2
                        </span>
                    </div>
                    <div class="marquee-item">
                        <span class="icon-pill bg-cyan-200 text-cyan-800">
                            <i class="fas fa-shield"></i>Feature 3
                        </span>
                    </div>
                </div>
            </div>
        </section>

        <!-- Example 4: Card animations -->
        <section class="mb-8">
            <h2 class="text-2xl font-bold mb-4">Animated Cards</h2>
            <div class="grid md:grid-cols-2 gap-4">
                <div class="project-card bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-lg font-bold mb-2">Project Card</h3>
                    <p class="text-gray-600 mb-4">This card has hover animations.</p>
                    <a href="#" class="animate-icon-on-hover inline-flex items-center text-blue-600">
                        View More <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
                <div class="article-card bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-lg font-bold mb-2">Article Card</h3>
                    <p class="text-gray-600 mb-4">This card also animates on hover.</p>
                    <a href="#" class="animate-icon-on-hover inline-flex items-center text-green-600">
                        Read More <i class="fas fa-external-link-alt ml-2"></i>
                    </a>
                </div>
            </div>
        </section>

        <!-- Example 5: Custom typewriter -->
        <section class="mb-8">
            <h2 class="text-2xl font-bold mb-4">Custom Typewriter</h2>
            <p class="text-xl">
                I am a <span id="custom-typer" class="text-blue-600 font-bold">Designer</span>
            </p>
        </section>
    </div>

    <script type="module">
        import {
            initMarquee,
            initTypewriter,
            initSmoothScroll
        } from '/resources/js/animations.js';

        document.addEventListener('DOMContentLoaded', () => {
            // Initialize marquee with custom settings
            initMarquee('.marquee-track', {
                speed: 60,
                direction: 1,
                pauseOnHover: true,
                reverseOnHover: true
            });

            // Initialize custom typewriter
            initTypewriter('#custom-typer', [
                'Designer',
                'Developer',
                'Creator',
                'Problem Solver'
            ], {
                typeSpeed: 80,
                deleteSpeed: 50,
                pauseAfter: 1500
            });

            // Initialize smooth scroll
            initSmoothScroll();
        });
    </script>
</body>

</html>

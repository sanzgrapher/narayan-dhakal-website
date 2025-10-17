<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
           @else
        <!-- Fallback for when Vite assets are not built -->
        {{-- include fallback.blade.php --}}
        @include('fallback');

        @endif
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <!-- custom styles moved to resources/css/app.css -->
</head>

<body class="bg-gray-100 text-gray-800">
    <div class="max-w-4xl mx-auto px-6 py-12">
        <!-- Profile Section -->
        <section class="mb-16">
            <div class="flex flex-col md:flex-row items-center md:items-start gap-8 p-8" role="region"
                aria-label="Profile">
                <img src="https://ui-avatars.com/api/?name=John+Doe&size=160&background=ef4444&color=fff" alt="Profile"
                    class="w-40 h-40 rounded-full border-4 border-red-500" />
                <div class="flex-1 text-center md:text-left">
                    <h1 class="text-4xl font-bold mb-2">John Doe</h1>
                    <p class="text-xl text-red-500 mb-3">
                        <span id="subtitle-typer" aria-live="polite">Laravel Developer</span>
                    </p>
                    <p class="text-gray-700 mb-4">
                        5+ years building robust web applications with Laravel, Vue.js,
                        and modern PHP
                    </p>
                    <div class="flex flex-wrap gap-3 justify-center md:justify-start">
                        <span tabindex="0"
                            class="icon-pill inline-flex items-center px-3 py-1 bg-red-200 text-red-800 rounded-full text-sm">
                            <i class="fab fa-laravel mr-2"></i>Laravel
                        </span>
                        <span tabindex="0"
                            class="icon-pill inline-flex items-center px-3 py-1 bg-green-200 text-green-800 rounded-full text-sm">
                            <i class="fab fa-vuejs mr-2"></i>Vue.js
                        </span>
                        <span tabindex="0"
                            class="icon-pill inline-flex items-center px-3 py-1 bg-blue-200 text-blue-800 rounded-full text-sm">
                            <i class="fab fa-php mr-2"></i>PHP
                        </span>
                        <span tabindex="0"
                            class="icon-pill inline-flex items-center px-3 py-1 bg-purple-200 text-purple-800 rounded-full text-sm">
                            <i class="fas fa-database mr-2"></i>MySQL
                        </span>
                    </div>
                </div>
            </div>
        </section>

        <!-- Tools & Technologies -->
        <section class="mb-16">
            <h2 class="text-3xl font-bold mb-6">Tools & Technologies</h2>
            <div class="overflow-hidden" role="region" aria-label="Tools and Technologies">
                <!-- Marquee: left -> right, duplicated track for seamless looping -->
                <div class="marquee-wrapper" aria-hidden="false">
                    <!-- fade overlays to smooth the edges -->
                    <div class="marquee-fade left" aria-hidden="true"></div>
                    <div class="marquee-fade right" aria-hidden="true"></div>
                    <div class="marquee-track" tabindex="0">
                        <!-- original track -->
                        <div class="marquee-item tech-icon text-center">
                            <button aria-label="Laravel"
                                class="icon-pill inline-flex flex-col items-center bg-transparent p-2">
                                <i class="fab fa-laravel text-5xl text-red-500 mb-2"></i>
                                <span class="text-sm font-medium">Laravel</span>
                            </button>
                        </div>
                        <div class="marquee-item tech-icon text-center">
                            <button aria-label="Vue.js"
                                class="icon-pill inline-flex flex-col items-center bg-transparent p-2">
                                <i class="fab fa-vuejs text-5xl text-green-500 mb-2"></i>
                                <span class="text-sm font-medium">Vue.js</span>
                            </button>
                        </div>
                        <div class="marquee-item tech-icon text-center">
                            <button aria-label="PHP"
                                class="icon-pill inline-flex flex-col items-center bg-transparent p-2">
                                <i class="fab fa-php text-5xl text-indigo-500 mb-2"></i>
                                <span class="text-sm font-medium">PHP</span>
                            </button>
                        </div>
                        <div class="marquee-item tech-icon text-center">
                            <button aria-label="MySQL"
                                class="icon-pill inline-flex flex-col items-center bg-transparent p-2">
                                <i class="fas fa-database text-5xl text-blue-500 mb-2"></i>
                                <span class="text-sm font-medium">MySQL</span>
                            </button>
                        </div>
                        <div class="marquee-item tech-icon text-center">
                            <button aria-label="JavaScript"
                                class="icon-pill inline-flex flex-col items-center bg-transparent p-2">
                                <i class="fab fa-js text-5xl text-yellow-500 mb-2"></i>
                                <span class="text-sm font-medium">JavaScript</span>
                            </button>
                        </div>
                        <div class="marquee-item tech-icon text-center">
                            <button aria-label="Git"
                                class="icon-pill inline-flex flex-col items-center bg-transparent p-2">
                                <i class="fab fa-git-alt text-5xl text-orange-500 mb-2"></i>
                                <span class="text-sm font-medium">Git</span>
                            </button>
                        </div>
                        <div class="marquee-item tech-icon text-center">
                            <button aria-label="Docker"
                                class="icon-pill inline-flex flex-col items-center bg-transparent p-2">
                                <i class="fab fa-docker text-5xl text-blue-400 mb-2"></i>
                                <span class="text-sm font-medium">Docker</span>
                            </button>
                        </div>
                        <div class="marquee-item tech-icon text-center">
                            <button aria-label="AWS"
                                class="icon-pill inline-flex flex-col items-center bg-transparent p-2">
                                <i class="fab fa-aws text-5xl text-orange-400 mb-2"></i>
                                <span class="text-sm font-medium">AWS</span>
                            </button>
                        </div>
                        <div class="marquee-item tech-icon text-center">
                            <button aria-label="Tailwind"
                                class="icon-pill inline-flex flex-col items-center bg-transparent p-2">
                                <i class="fas fa-wind text-5xl text-cyan-500 mb-2"></i>
                                <span class="text-sm font-medium">Tailwind</span>
                            </button>
                        </div>
                        <div class="marquee-item tech-icon text-center">
                            <button aria-label="Bootstrap"
                                class="icon-pill inline-flex flex-col items-center bg-transparent p-2">
                                <i class="fab fa-bootstrap text-5xl text-purple-500 mb-2"></i>
                                <span class="text-sm font-medium">Bootstrap</span>
                            </button>
                        </div>
                        <div class="marquee-item tech-icon text-center">
                            <button aria-label="Redis"
                                class="icon-pill inline-flex flex-col items-center bg-transparent p-2">
                                <i class="fas fa-server text-5xl text-gray-500 mb-2"></i>
                                <span class="text-sm font-medium">Redis</span>
                            </button>
                        </div>
                        <div class="marquee-item tech-icon text-center">
                            <button aria-label="Node.js"
                                class="icon-pill inline-flex flex-col items-center bg-transparent p-2">
                                <i class="fab fa-node text-5xl text-green-600 mb-2"></i>
                                <span class="text-sm font-medium">Node.js</span>
                            </button>
                        </div>
                        <!-- duplicate track for seamless looping -->
                        <div class="marquee-item tech-icon text-center">
                            <button aria-label="Laravel"
                                class="icon-pill inline-flex flex-col items-center bg-transparent p-2">
                                <i class="fab fa-laravel text-5xl text-red-500 mb-2"></i>
                                <span class="text-sm font-medium">Laravel</span>
                            </button>
                        </div>
                        <div class="marquee-item tech-icon text-center">
                            <button aria-label="Vue.js"
                                class="icon-pill inline-flex flex-col items-center bg-transparent p-2">
                                <i class="fab fa-vuejs text-5xl text-green-500 mb-2"></i>
                                <span class="text-sm font-medium">Vue.js</span>
                            </button>
                        </div>
                        <div class="marquee-item tech-icon text-center">
                            <button aria-label="PHP"
                                class="icon-pill inline-flex flex-col items-center bg-transparent p-2">
                                <i class="fab fa-php text-5xl text-indigo-500 mb-2"></i>
                                <span class="text-sm font-medium">PHP</span>
                            </button>
                        </div>
                        <div class="marquee-item tech-icon text-center">
                            <button aria-label="MySQL"
                                class="icon-pill inline-flex flex-col items-center bg-transparent p-2">
                                <i class="fas fa-database text-5xl text-blue-500 mb-2"></i>
                                <span class="text-sm font-medium">MySQL</span>
                            </button>
                        </div>
                        <div class="marquee-item tech-icon text-center">
                            <button aria-label="JavaScript"
                                class="icon-pill inline-flex flex-col items-center bg-transparent p-2">
                                <i class="fab fa-js text-5xl text-yellow-500 mb-2"></i>
                                <span class="text-sm font-medium">JavaScript</span>
                            </button>
                        </div>
                        <div class="marquee-item tech-icon text-center">
                            <button aria-label="Git"
                                class="icon-pill inline-flex flex-col items-center bg-transparent p-2">
                                <i class="fab fa-git-alt text-5xl text-orange-500 mb-2"></i>
                                <span class="text-sm font-medium">Git</span>
                            </button>
                        </div>
                        <div class="marquee-item tech-icon text-center">
                            <button aria-label="Docker"
                                class="icon-pill inline-flex flex-col items-center bg-transparent p-2">
                                <i class="fab fa-docker text-5xl text-blue-400 mb-2"></i>
                                <span class="text-sm font-medium">Docker</span>
                            </button>
                        </div>
                        <div class="marquee-item tech-icon text-center">
                            <button aria-label="AWS"
                                class="icon-pill inline-flex flex-col items-center bg-transparent p-2">
                                <i class="fab fa-aws text-5xl text-orange-400 mb-2"></i>
                                <span class="text-sm font-medium">AWS</span>
                            </button>
                        </div>
                        <div class="marquee-item tech-icon text-center">
                            <button aria-label="Tailwind"
                                class="icon-pill inline-flex flex-col items-center bg-transparent p-2">
                                <i class="fas fa-wind text-5xl text-cyan-500 mb-2"></i>
                                <span class="text-sm font-medium">Tailwind</span>
                            </button>
                        </div>
                        <div class="marquee-item tech-icon text-center">
                            <button aria-label="Bootstrap"
                                class="icon-pill inline-flex flex-col items-center bg-transparent p-2">
                                <i class="fab fa-bootstrap text-5xl text-purple-500 mb-2"></i>
                                <span class="text-sm font-medium">Bootstrap</span>
                            </button>
                        </div>
                        <div class="marquee-item tech-icon text-center">
                            <button aria-label="Redis"
                                class="icon-pill inline-flex flex-col items-center bg-transparent p-2">
                                <i class="fas fa-server text-5xl text-gray-500 mb-2"></i>
                                <span class="text-sm font-medium">Redis</span>
                            </button>
                        </div>
                        <div class="marquee-item tech-icon text-center">
                            <button aria-label="Node.js"
                                class="icon-pill inline-flex flex-col items-center bg-transparent p-2">
                                <i class="fab fa-node text-5xl text-green-600 mb-2"></i>
                                <span class="text-sm font-medium">Node.js</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Experience -->
        <section class="mb-16">
            <h2 class="text-3xl font-bold mb-6">Experience</h2>
            <div class="space-y-6">
                <div class="bg-gray-50 p-6 rounded-lg shadow-md border-l-4 border-red-500">
                    <div class="flex justify-between items-start mb-2">
                        <div>
                            <h3 class="text-xl font-bold">Mid-Level Laravel Developer</h3>
                            <p class="text-red-500 font-medium">Tech Solutions Inc.</p>
                        </div>
                        <span class="text-sm text-gray-600">2022 - Present</span>
                    </div>
                    <p class="text-gray-700 mb-3">
                        Developed and maintained enterprise-level applications, led API
                        development, and mentored junior developers
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <span tabindex="0" class="icon-pill px-2 py-1 bg-gray-200 rounded text-xs">Laravel</span>
                        <span tabindex="0" class="icon-pill px-2 py-1 bg-gray-200 rounded text-xs">Vue.js</span>
                        <span tabindex="0" class="icon-pill px-2 py-1 bg-gray-200 rounded text-xs">REST API</span>
                        <span tabindex="0" class="icon-pill px-2 py-1 bg-gray-200 rounded text-xs">MySQL</span>
                    </div>
                </div>

                <div class="bg-gray-50 p-6 rounded-lg shadow-md border-l-4 border-blue-500">
                    <div class="flex justify-between items-start mb-2">
                        <div>
                            <h3 class="text-xl font-bold">Junior Laravel Developer</h3>
                            <p class="text-blue-500 font-medium">
                                Digital Innovations Ltd.
                            </p>
                        </div>
                        <span class="text-sm text-gray-600">2020 - 2022</span>
                    </div>
                    <p class="text-gray-700 mb-3">
                        Built custom CMS solutions, implemented payment gateways, and
                        optimized database queries
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <span tabindex="0" class="icon-pill px-2 py-1 bg-gray-200 rounded text-xs">Laravel</span>
                        <span tabindex="0" class="icon-pill px-2 py-1 bg-gray-200 rounded text-xs">PHP</span>
                        <span tabindex="0" class="icon-pill px-2 py-1 bg-gray-200 rounded text-xs">jQuery</span>
                        <span tabindex="0" class="icon-pill px-2 py-1 bg-gray-200 rounded text-xs">Bootstrap</span>
                    </div>
                </div>

                <div class="bg-gray-50 p-6 rounded-lg shadow-md border-l-4 border-green-500">
                    <div class="flex justify-between items-start mb-2">
                        <div>
                            <h3 class="text-xl font-bold">Laravel Development Intern</h3>
                            <p class="text-green-500 font-medium">StartupHub</p>
                        </div>
                        <span class="text-sm text-gray-600">2019 - 2020</span>
                    </div>
                    <p class="text-gray-700 mb-3">
                        Assisted in developing web applications, wrote unit tests, and
                        participated in code reviews
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <span tabindex="0" class="icon-pill px-2 py-1 bg-gray-200 rounded text-xs">Laravel</span>
                        <span tabindex="0" class="icon-pill px-2 py-1 bg-gray-200 rounded text-xs">Git</span>
                        <span tabindex="0" class="icon-pill px-2 py-1 bg-gray-200 rounded text-xs">PHPUnit</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- Projects -->
        <section class="mb-16">
            <h2 class="text-3xl font-bold mb-6">Featured Projects</h2>
            <div class="grid md:grid-cols-2 gap-6">
                <div class="project-card bg-gray-50 p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-bold mb-2">E-Commerce Platform</h3>
                    <p class="text-gray-700 mb-4">
                        Full-featured online store with payment integration, inventory
                        management, and admin dashboard
                    </p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="px-2 py-1 bg-red-200 text-red-800 rounded text-xs">Laravel</span>
                        <span class="px-2 py-1 bg-green-200 text-green-800 rounded text-xs">Vue.js</span>
                        <span class="px-2 py-1 bg-blue-200 text-blue-800 rounded text-xs">Stripe</span>
                    </div>
                    <a href="#"
                        class="inline-flex items-center text-red-600 hover:text-red-700 animate-icon-on-hover">
                        View Project <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>

                <div class="project-card bg-gray-50 p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-bold mb-2">Task Management System</h3>
                    <p class="text-gray-700 mb-4">
                        Collaborative project management tool with real-time updates and
                        team collaboration features
                    </p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="px-2 py-1 bg-red-200 text-red-800 rounded text-xs">Laravel</span>
                        <span class="px-2 py-1 bg-purple-200 text-purple-800 rounded text-xs">WebSockets</span>
                        <span class="px-2 py-1 bg-orange-200 text-orange-800 rounded text-xs">Redis</span>
                    </div>
                    <a href="#"
                        class="inline-flex items-center text-red-600 hover:text-red-700 animate-icon-on-hover">
                        View Project <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>

                <div class="project-card bg-gray-50 p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-bold mb-2">RESTful API Service</h3>
                    <p class="text-gray-700 mb-4">
                        Scalable API with JWT authentication, rate limiting, and
                        comprehensive documentation
                    </p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="px-2 py-1 bg-red-200 text-red-800 rounded text-xs">Laravel</span>
                        <span class="px-2 py-1 bg-blue-200 text-blue-800 rounded text-xs">JWT</span>
                        <span class="px-2 py-1 bg-gray-200 text-gray-800 rounded text-xs">Swagger</span>
                    </div>
                    <a href="#"
                        class="inline-flex items-center text-red-600 hover:text-red-700 animate-icon-on-hover">
                        View Project <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>

                <div class="project-card bg-gray-50 p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-bold mb-2">CMS for Bloggers</h3>
                    <p class="text-gray-700 mb-4">
                        Content management system with SEO optimization, media library,
                        and multi-author support
                    </p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="px-2 py-1 bg-red-200 text-red-800 rounded text-xs">Laravel</span>
                        <span class="px-2 py-1 bg-cyan-200 text-cyan-800 rounded text-xs">Tailwind</span>
                        <span class="px-2 py-1 bg-yellow-200 text-yellow-800 rounded text-xs">AWS S3</span>
                    </div>
                    <a href="#" class="inline-flex items-center text-red-600 hover:text-red-700">
                        View Project <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>
        </section>

        <!-- Articles & Guides -->
        <section class="mb-16">
            <h2 class="text-3xl font-bold mb-6">Articles & Guides</h2>
            <div class="space-y-4">
                <div class="article-card bg-gray-50 p-6 rounded-lg shadow-md">
                    <h3 class="text-lg font-bold mb-2">
                        Building Scalable Laravel Applications
                    </h3>
                    <p class="text-gray-700 mb-3">
                        Best practices for structuring large-scale Laravel projects with
                        clean architecture patterns
                    </p>
                    <a href="#" class="text-red-600 hover:text-red-700 text-sm font-medium">Read More →</a>
                </div>

                <div class="article-card bg-gray-50 p-6 rounded-lg shadow-md">
                    <h3 class="text-lg font-bold mb-2">
                        Laravel Queue Optimization Techniques
                    </h3>
                    <p class="text-gray-700 mb-3">
                        Deep dive into optimizing queue workers and handling background
                        jobs efficiently
                    </p>
                    <a href="#" class="text-red-600 hover:text-red-700 text-sm font-medium">Read More →</a>
                </div>

                <div class="article-card bg-gray-50 p-6 rounded-lg shadow-md">
                    <h3 class="text-lg font-bold mb-2">
                        JWT Authentication in Laravel APIs
                    </h3>
                    <p class="text-gray-700 mb-3">
                        Complete guide to implementing secure token-based authentication
                        in your Laravel applications
                    </p>
                    <a href="#" class="text-red-600 hover:text-red-700 text-sm font-medium">Read More →</a>
                </div>

                <div class="article-card bg-gray-50 p-6 rounded-lg shadow-md">
                    <h3 class="text-lg font-bold mb-2">Database Performance Tuning</h3>
                    <p class="text-gray-700 mb-3">
                        Strategies for optimizing database queries and improving
                        application performance
                    </p>
                    <a href="#" class="text-red-600 hover:text-red-700 text-sm font-medium">Read More →</a>
                </div>
            </div>
        </section>

        <!-- Contact Form -->
        <section class="mb-16">
            <h2 class="text-3xl font-bold mb-6">Get In Touch</h2>
            <div class="bg-gray-50 p-8 rounded-lg shadow-md">
                <form id="contactForm" class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium mb-2">Name</label>
                        <input type="text" required
                            class="w-full px-4 py-2 rounded-lg border border-gray-300 bg-gray-100 focus:ring-2 focus:ring-red-500 focus:border-transparent" />
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-2">Email</label>
                        <input type="email" required
                            class="w-full px-4 py-2 rounded-lg border border-gray-300 bg-gray-100 focus:ring-2 focus:ring-red-500 focus:border-transparent" />
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-2">Message</label>
                        <textarea rows="5" required
                            class="w-full px-4 py-2 rounded-lg border border-gray-300 bg-gray-100 focus:ring-2 focus:ring-red-500 focus:border-transparent"></textarea>
                    </div>
                    <button type="submit"
                        class="w-full bg-red-600 hover:bg-red-700 text-white font-medium py-3 rounded-lg transition-colors">
                        Send Message
                    </button>
                </form>
            </div>
        </section>

        <!-- Footer -->
        <footer class="text-center py-8 border-t border-gray-300">
            <div class="flex justify-center gap-6 mb-4">
                <a href="#"
                    class="text-2xl text-gray-500 hover:text-red-600 transition-colors animate-icon-on-hover">
                    <i class="fab fa-github"></i>
                </a>
                <a href="#"
                    class="text-2xl text-gray-500 hover:text-red-600 transition-colors animate-icon-on-hover">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="#"
                    class="text-2xl text-gray-500 hover:text-red-600 transition-colors animate-icon-on-hover">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="#"
                    class="text-2xl text-gray-500 hover:text-red-600 transition-colors animate-icon-on-hover">
                    <i class="fas fa-envelope"></i>
                </a>
            </div>
            <p class="text-gray-600 text-sm">
                © 2024 John Doe. All rights reserved.
            </p>
        </footer>
    </div>

    <!-- home page JS moved to resources/js/app.js -->
</body>

</html>

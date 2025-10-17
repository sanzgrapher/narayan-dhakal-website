<!-- Profile Section -->
<section class="mb-16">
    <div class="flex flex-col md:flex-row items-center md:items-start gap-8 p-8" role="region" aria-label="Profile">
        <img src="https://ui-avatars.com/api/?name=Narayan+Dhakal&size=160&background=ef4444&color=fff"
            alt="Narayan Dhakal" class="w-40 h-40 rounded-full border-4 border-red-500" />
        <div class="flex-1 text-center md:text-left">
            <h1 class="text-4xl font-bold mb-2">Narayan Dhakal</h1>
            <p class="text-xl text-red-500 mb-3">
                <span id="subtitle-typer" aria-live="polite">Full Stack Laravel Developer</span>
            </p>
            <p class="text-gray-700 mb-4">
                Full Stack Laravel Developer with 2+ years of experience building scalable web
                applications and cross-platform mobile solutions. Specialized in PHP/Laravel backend
                development with proven expertise in RESTful API design, database optimization, and
                third-party integrations.
            </p>

            <div class="flex gap-4 items-center justify-center md:justify-start mb-3">
                <a href="mailto:narayandhakal443@gmail.com" class="text-sm text-gray-600 hover:text-red-600 mr-3">
                    <i class="fas fa-envelope mr-2"></i>narayandhakal443@gmail.com
                </a>
                <a href="https://www.linkedin.com/in/narayandhakal09/" target="_blank"
                    class="text-sm text-gray-600 hover:text-red-600 mr-3">
                    <i class="fab fa-linkedin mr-2"></i>LinkedIn
                </a>
                <a href="https://github.com/sanzgrapher" target="_blank"
                    class="text-sm text-gray-600 hover:text-red-600">
                    <i class="fab fa-github mr-2"></i>GitHub
                </a>
            </div>
            <div class="flex flex-wrap gap-3 justify-center md:justify-start">
                <x-ui.pills.icon-pill tabindex="0"
                    class="inline-flex items-center px-3 py-1 bg-red-200 text-red-800 rounded-full text-sm">
                    <x-slot name="icon">
                        <i class="fab fa-laravel"></i>
                    </x-slot>
                    Laravel
                </x-ui.pills.icon-pill>

                <x-ui.pills.icon-pill tabindex="0"
                    class="inline-flex items-center px-3 py-1 bg-blue-200 text-blue-800 rounded-full text-sm">
                    <x-slot name="icon">
                        <i class="fab fa-php"></i>
                    </x-slot>
                    PHP
                </x-ui.pills.icon-pill>

                <x-ui.pills.icon-pill tabindex="0"
                    class="inline-flex items-center px-3 py-1 bg-purple-200 text-purple-800 rounded-full text-sm">
                    <x-slot name="icon">
                        <x-si-mysql class="w-3 h-3" />
                    </x-slot>
                    MySQL
                </x-ui.pills.icon-pill>

                <x-ui.pills.icon-pill tabindex="0"
                    class="inline-flex items-center px-3 py-1 bg-cyan-200 text-cyan-800 rounded-full text-sm">
                    <x-slot name="icon">
                        {{-- Use the single blade component for the Tailwind CSS icon. Adjust size with Tailwind classes. --}}
                        <x-si-tailwindcss class="w-3 h-3" />
                    </x-slot>
                    Tailwind
                </x-ui.pills.icon-pill>

                <x-ui.pills.icon-pill tabindex="0"
                    class="inline-flex items-center px-3 py-1 bg-yellow-200 text-yellow-800 rounded-full text-sm">
                    <x-slot name="icon">
                        <i class="fab fa-js"></i>
                    </x-slot>
                    JavaScript
                </x-ui.pills.icon-pill>

                <x-ui.pills.icon-pill tabindex="0"
                    class="inline-flex items-center px-3 py-1 bg-teal-200 text-teal-800 rounded-full text-sm">
                    <x-slot name="icon">
                        <x-si-flutter class="w-3 h-3" />
                    </x-slot>
                    Flutter / Dart
                </x-ui.pills.icon-pill>
            </div>
        </div>
    </div>
</section>

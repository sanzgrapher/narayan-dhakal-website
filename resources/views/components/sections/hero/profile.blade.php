<!-- Profile Section -->
<section class="mb-16">
    <div class="flex flex-col md:flex-row items-center md:items-start gap-8 p-8" role="region" aria-label="Profile">
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
                <x-ui.pills.icon-pill tabindex="0"
                    class="inline-flex items-center px-3 py-1 bg-red-200 text-red-800 rounded-full text-sm"
                    icon='<i class="fab fa-laravel"></i>'>
                    Laravel
                </x-ui.pills.icon-pill>

                <x-ui.pills.icon-pill tabindex="0"
                    class="inline-flex items-center px-3 py-1 bg-green-200 text-green-800 rounded-full text-sm"
                    icon='<i class="fab fa-vuejs"></i>'>
                    Vue.js
                </x-ui.pills.icon-pill>

                <x-ui.pills.icon-pill tabindex="0"
                    class="inline-flex items-center px-3 py-1 bg-blue-200 text-blue-800 rounded-full text-sm"
                    icon='<i class="fab fa-php"></i>'>
                    PHP
                </x-ui.pills.icon-pill>

                <x-ui.pills.icon-pill tabindex="0"
                    class="inline-flex items-center px-3 py-1 bg-purple-200 text-purple-800 rounded-full text-sm"
                    icon='<i class="fas fa-database"></i>'>
                    MySQL
                </x-ui.pills.icon-pill>
            </div>
        </div>
    </div>
</section>

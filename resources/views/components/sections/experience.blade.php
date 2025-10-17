<!-- Experience -->
<section class="mb-16">
    <h2 class="text-3xl font-bold mb-6">Experience</h2>
    <div class="space-y-6">
        <x-ui.cards.experience title="Full Stack Developer" duration="January 2022 - Present" company="Padandas Edu"
            companyLink="https://padandas.com/" companyIcon="<i class='fas fa-globe'></i>"
            description="Built scalable web application for note sharing and community discussions serving over 100K+ users. Developed RESTful APIs and authentication systems for third-party integrations, and optimized database queries and caching to improve performance."
            :skills="['Laravel', 'MySQL', 'RESTful APIs', 'Caching']" border-color="border-red-500" />

        <x-ui.cards.experience title="Web Developer" duration="April 2024" company="Hands For Conservation (HFCNP.org)"
            companyLink="http://HFCNP.org" companyIcon="<i class='fas fa-globe'></i>"
            description="Developed Laravel CMS with role-based access control for content management, integrated responsive frontend with PHP backend, and configured production deployment (cPanel, DNS, Cloudflare)."
            :skills="['Laravel', 'Blade', 'Deployment']" border-color="border-blue-500" />

        <x-ui.cards.experience title="Mobile App Developer - Padandas Mobile App" duration="Project Complete"
            company="Padandas" companyLink="https://play.google.com/store/apps/details?id=com.padandas.app&hl=en"
            companyIcon="<i class='fab fa-google-play'></i>"
            description="Launched cross-platform Flutter app with 4,000+ downloads on Google Play Store, integrated with a Laravel API backend, and implemented real-time data synchronization and authentication."
            :skills="['Flutter', 'Dart', 'Laravel API']" border-color="border-green-500" />
    </div>
</section>

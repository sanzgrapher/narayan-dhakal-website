<!-- Projects -->
<section class="mb-16">
    <h2 class="text-3xl font-bold mb-6">Featured Projects</h2>
    <div class="grid md:grid-cols-2 gap-6">
        <x-ui.cards.project title="E-Commerce Platform"
            description="Full-featured online store with payment integration, inventory management, and admin dashboard"
            :technologies="['Laravel', 'Vue.js', 'Stripe']" link="#" />

        <x-ui.cards.project title="Task Management System"
            description="Collaborative project management tool with real-time updates and team collaboration features"
            :technologies="['Laravel', 'WebSockets', 'Redis']" link="#" />

        <x-ui.cards.project title="RESTful API Service"
            description="Scalable API with JWT authentication, rate limiting, and comprehensive documentation"
            :technologies="['Laravel', 'JWT', 'Swagger']" link="#" />

        <x-ui.cards.project title="CMS for Bloggers"
            description="Content management system with SEO optimization, media library, and multi-author support"
            :technologies="['Laravel', 'Tailwind', 'AWS S3']" link="#" />
    </div>
</section>

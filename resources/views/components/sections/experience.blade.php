<!-- Experience -->
<section class="mb-16">
    <h2 class="text-3xl font-bold mb-6">Experience</h2>
    <div class="space-y-6">
        <x-ui.cards.experience title="Mid-Level Laravel Developer" company="Tech Solutions Inc." duration="2022 - Present"
            description="Developed and maintained enterprise-level applications, led API development, and mentored junior developers"
            :skills="['Laravel', 'Vue.js', 'REST API', 'MySQL']" border-color="border-red-500" />

        <x-ui.cards.experience title="Junior Laravel Developer" company="Digital Innovations Ltd." duration="2020 - 2022"
            description="Built custom CMS solutions, implemented payment gateways, and optimized database queries"
            :skills="['Laravel', 'PHP', 'jQuery', 'Bootstrap']" border-color="border-blue-500" />

        <x-ui.cards.experience
            title="Laravel Development Intern"
            company="StartupHub"
            duration="2019 - 2020"
            description="Assisted in developing web applications, wrote unit tests, and participated in code reviews"
            :skills="['Laravel', 'Git', 'PHPUnit']"
            border-color="border-green-500"
        />
    </div>
</section>

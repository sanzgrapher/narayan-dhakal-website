<!-- Projects -->
<section class="mb-16">
    <h2 class="text-3xl font-bold mb-6">Featured Projects</h2>
    <div class="grid md:grid-cols-2 gap-6">
        <x-ui.cards.project title="Multivendor eCommerce — Electrox"
            description="Efficient stock handling, role-based authentication, and eSewa payment integration for end-to-end e-commerce management."
            :technologies="['Laravel', 'MySQL', 'AdminLTE', 'eSewa']" link="https://github.com/sanzgrapher/Multi-Vendor-Ecommerce-Gces-Minor-ii" />

        <x-ui.cards.project title="TRaiFIC ANPR System"
            description="Nepali license plate recognition system using ML models, FastAPI for image processing, and Laravel for user management with real-time processing."
            :technologies="['Laravel', 'Python', 'FastAPI', 'Machine Learning']"
            link="https://github.com/sanzgrapher/TRaiFIC-ANPR-Nepali-Number-Plate-Detection-plus-Character-Recognition" />

        <x-ui.cards.project title="Evolutionary AI Block Puzzle Trainer"
            description="Web-based AI training platform using genetic algorithms and visualization for agent evolution across generations."
            :technologies="['JavaScript', 'Chart.js', 'Genetic Algorithms']" link="https://github.com/sanzgrapher/Ai-Plays-Color-Box-Game" />

        <x-ui.cards.project title="Tool Social by Sanzgrapher - SAAS"
            description="Unified social media management platform with multi-account posting and centralized content distribution."
            :technologies="['Laravel', 'MySQL', 'APIs']" link="#" />

        <x-ui.cards.project title="Blood Works - Blood Donation Management System"
            description="Donor-patient matching, automated email notifications, and multi-role support built with a custom PHP MVC."
            :technologies="['Custom PHP', 'MySQL']" link="https://github.com/sanzgrapher/bloodworks" />

        <x-ui.cards.project title="Google OAuth Integration"
            description="Secure Google OAuth authentication flow with dashboard login and session management."
            :technologies="['PHP', 'Google OAuth']" link="https://github.com/sanzgrapher/Google-oAuth-login-system" />
    </div>
</section>

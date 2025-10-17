<!-- Tools & Technologies -->
<section class="mb-16">
    <h2 class="text-3xl font-bold mb-6">Tools & Technologies</h2>
    <div class="overflow-hidden" role="region" aria-label="Tools and Technologies">
        <!-- Marquee: left -> right, duplicated track for seamless looping -->
        <div class="marquee-wrapper" aria-hidden="false">
            <!-- fade overlays to smooth the edges -->
            <div class="marquee-fade left" aria-hidden="true"></div>
            <div class="marquee-fade right" aria-hidden="true"></div>
            <div class="marquee-track flex items-center gap-x-8" tabindex="0">
                <!-- original track -->
                <div class="marquee-item tech-icon text-center shrink-0">
                    <x-ui.cards.labeledicon aria-label="Laravel"
                        icon='<i class="fab fa-laravel text-5xl text-red-500 mb-2"></i>' label="Laravel" />
                </div>
                <div class="marquee-item tech-icon text-center shrink-0">
                    <x-ui.cards.labeledicon aria-label="PHP"
                        icon='<i class="fab fa-php text-5xl text-indigo-500 mb-2"></i>' label="PHP" />
                </div>
                <div class="marquee-item tech-icon text-center shrink-0">
                    <x-ui.cards.labeledicon aria-label="MySQL" label="MySQL">
                        <x-slot name="icon">
                            <x-si-mysql class="text-5xl text-blue-500 mb-2" />
                        </x-slot>
                    </x-ui.cards.labeledicon>
                </div>
                <div class="marquee-item tech-icon text-center shrink-0">
                    <x-ui.cards.labeledicon aria-label="Tailwind" label="Tailwind">
                        <x-slot name="icon">
                            <x-si-tailwindcss class="text-5xl text-cyan-500 mb-2" />
                        </x-slot>
                    </x-ui.cards.labeledicon>
                </div>
                <div class="marquee-item tech-icon text-center shrink-0">
                    <x-ui.cards.labeledicon aria-label="Flutter" label="Flutter">
                        <x-slot name="icon">
                            <x-si-flutter class="text-5xl text-teal-500 mb-2" />
                        </x-slot>
                    </x-ui.cards.labeledicon>
                </div>
                <div class="marquee-item tech-icon text-center shrink-0">
                    <x-ui.cards.labeledicon aria-label="Git"
                        icon='<i class="fab fa-git-alt text-5xl text-orange-500 mb-2"></i>' label="Git" />
                </div>
                <div class="marquee-item tech-icon text-center shrink-0">
                    <x-ui.cards.labeledicon aria-label="Docker"
                        icon='<i class="fab fa-docker text-5xl text-blue-400 mb-2"></i>' label="Docker" />
                </div>
                {{-- <div class="marquee-item tech-icon text-center shrink-0">
                    <x-ui.cards.labeledicon aria-label="Vue.js"
                        icon='<i class="fab fa-vuejs text-5xl text-green-500 mb-2"></i>' label="Vue.js" />
                </div> --}}
                <div class="marquee-item tech-icon text-center shrink-0">
                    <x-ui.cards.labeledicon aria-label="PHP"
                        icon='<i class="fab fa-php text-5xl text-indigo-500 mb-2"></i>' label="PHP" />
                </div>
                <div class="marquee-item tech-icon text-center shrink-0">
                    <x-ui.cards.labeledicon aria-label="MySQL" label="MySQL">
                        <x-slot name="icon">
                            <x-si-mysql class="text-5xl text-blue-500 mb-2" />
                        </x-slot>
                    </x-ui.cards.labeledicon>
                </div>
                <div class="marquee-item tech-icon text-center shrink-0">
                    <x-ui.cards.labeledicon aria-label="JavaScript"
                        icon='<i class="fab fa-js text-5xl text-yellow-500 mb-2"></i>' label="JavaScript" />
                </div>
                <div class="marquee-item tech-icon text-center shrink-0">
                    <x-ui.cards.labeledicon aria-label="Git"
                        icon='<i class="fab fa-git-alt text-5xl text-orange-500 mb-2"></i>' label="Git" />
                </div>
                <div class="marquee-item tech-icon text-center shrink-0">
                    <x-ui.cards.labeledicon aria-label="Docker"
                        icon='<i class="fab fa-docker text-5xl text-blue-400 mb-2"></i>' label="Docker" />
                </div>
                {{--
                <div class="marquee-item tech-icon text-center shrink-0">
                    <x-ui.cards.labeledicon aria-label="AWS"
                        icon='<i class="fab fa-aws text-5xl text-orange-400 mb-2"></i>' label="AWS" />
                </div>
                --}}
                <div class="marquee-item tech-icon text-center shrink-0">
                    <x-ui.cards.labeledicon aria-label="Tailwind" label="Tailwind">
                        <x-slot name="icon">
                            <x-si-tailwindcss class="text-5xl text-cyan-500 mb-2" />
                        </x-slot>
                    </x-ui.cards.labeledicon>
                </div>
                <div class="marquee-item tech-icon text-center">
                    <x-ui.cards.labeledicon aria-label="Bootstrap"
                        icon='<i class="fab fa-bootstrap text-5xl text-purple-500 mb-2"></i>' label="Bootstrap" />
                </div>
                {{--
                <div class="marquee-item tech-icon text-center">
                    <x-ui.cards.labeledicon aria-label="Redis" label="Redis">
                        <x-slot name="icon">
                            <x-icon-redis class="text-5xl text-red-500 mb-2" />
                        </x-slot>
                    </x-ui.cards.labeledicon>
                </div>
                --}}
                <div class="marquee-item tech-icon text-center">
                    <x-ui.cards.labeledicon aria-label="Node.js"
                        icon='<i class="fab fa-node text-5xl text-green-600 mb-2"></i>' label="Node.js" />
                </div>
                <!-- duplicate track for seamless looping -->
                <div class="marquee-item tech-icon text-center">
                    <x-ui.cards.labeledicon aria-label="Laravel"
                        icon='<i class="fab fa-laravel text-5xl text-red-500 mb-2"></i>' label="Laravel" />
                </div>
                <div class="marquee-item tech-icon text-center">
                    <x-ui.cards.labeledicon aria-label="PHP"
                        icon='<i class="fab fa-php text-5xl text-indigo-500 mb-2"></i>' label="PHP" />
                </div>
                <div class="marquee-item tech-icon text-center">
                    <x-ui.cards.labeledicon aria-label="MySQL" label="MySQL">
                        <x-slot name="icon">
                            <x-si-mysql class="text-5xl text-blue-500 mb-2" />
                        </x-slot>
                    </x-ui.cards.labeledicon>
                </div>
                <div class="marquee-item tech-icon text-center">
                    <x-ui.cards.labeledicon aria-label="Tailwind" label="Tailwind">
                        <x-slot name="icon">
                            <x-si-tailwindcss class="text-5xl text-cyan-500 mb-2" />
                        </x-slot>
                    </x-ui.cards.labeledicon>
                </div>
                <div class="marquee-item tech-icon text-center">
                    <x-ui.cards.labeledicon aria-label="Flutter" label="Flutter">
                        <x-slot name="icon">
                            <x-si-flutter class="text-5xl text-teal-500 mb-2" />
                        </x-slot>
                    </x-ui.cards.labeledicon>
                </div>
                <div class="marquee-item tech-icon text-center">
                    <x-ui.cards.labeledicon aria-label="Git"
                        icon='<i class="fab fa-git-alt text-5xl text-orange-500 mb-2"></i>' label="Git" />
                </div>
                <div class="marquee-item tech-icon text-center">
                    <x-ui.cards.labeledicon aria-label="Docker"
                        icon='<i class="fab fa-docker text-5xl text-blue-400 mb-2"></i>' label="Docker" />
                </div>
                {{--
                <div class="marquee-item tech-icon text-center">
                    <x-ui.cards.labeledicon aria-label="Vue.js"
                        icon='<i class="fab fa-vuejs text-5xl text-green-500 mb-2"></i>' label="Vue.js" />
                </div>
                --}}
                <div class="marquee-item tech-icon text-center">
                    <x-ui.cards.labeledicon aria-label="PHP"
                        icon='<i class="fab fa-php text-5xl text-indigo-500 mb-2"></i>' label="PHP" />
                </div>
                <div class="marquee-item tech-icon text-center">
                    <x-ui.cards.labeledicon aria-label="MySQL" label="MySQL">
                        <x-slot name="icon">
                            <x-si-mysql class="text-5xl text-blue-500 mb-2" />
                        </x-slot>
                    </x-ui.cards.labeledicon>
                </div>
                <div class="marquee-item tech-icon text-center">
                    <x-ui.cards.labeledicon aria-label="JavaScript"
                        icon='<i class="fab fa-js text-5xl text-yellow-500 mb-2"></i>' label="JavaScript" />
                </div>
                <div class="marquee-item tech-icon text-center">
                    <x-ui.cards.labeledicon aria-label="Git"
                        icon='<i class="fab fa-git-alt text-5xl text-orange-500 mb-2"></i>' label="Git" />
                </div>
                <div class="marquee-item tech-icon text-center">
                    <x-ui.cards.labeledicon aria-label="Docker"
                        icon='<i class="fab fa-docker text-5xl text-blue-400 mb-2"></i>' label="Docker" />
                </div>
                {{--
                <div class="marquee-item tech-icon text-center">
                    <x-ui.cards.labeledicon aria-label="AWS"
                        icon='<i class="fab fa-aws text-5xl text-orange-400 mb-2'></i>' label="AWS" />
                </div>
                --}}
                <div class="marquee-item tech-icon text-center">
                    <x-ui.cards.labeledicon aria-label="Tailwind"
                        icon='<i class="fab fa-tailwind text-5xl text-cyan-500 mb-2"></i>' label="Tailwind" />
                </div>
                <div class="marquee-item tech-icon text-center">
                    <x-ui.cards.labeledicon aria-label="Bootstrap"
                        icon='<i class="fab fa-bootstrap text-5xl text-purple-500 mb-2"></i>' label="Bootstrap" />
                </div>
                {{--
                <div class="marquee-item tech-icon text-center">
                    <x-ui.cards.labeledicon aria-label="Redis" label="Redis">
                        <x-slot name="icon">
                            <x-icon-redis class="text-5xl text-red-500 mb-2" />
                        </x-slot>
                    </x-ui.cards.labeledicon>
                </div>
                --}}

            </div>
        </div>
    </div>
</section>

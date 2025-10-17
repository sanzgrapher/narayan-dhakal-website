{{--
Component: UI Card - Project
Purpose: Display project information with technologies and link
Props:
  - title (string, required): Project title
  - description (string, optional): Project description
  - technologies (array, optional): Array of technologies used
  - link (string, optional): Project link URL
  - linkText (string, optional): Link text (default: 'View Project')
Usage:
  <x-ui.cards.project
    title="E-Commerce Platform"
    description="Full-featured online store"
    :technologies="['Laravel', 'Vue.js', 'Stripe']"
    link="#"
  />
--}}
@props([
    'title' => '',
    'description' => '',
    'technologies' => [],
    'link' => '#',
    'linkText' => 'View Project',
])

<div class="project-card bg-gray-50 p-6 rounded-lg shadow-md">
    @if ($title)
        <h3 class="text-xl font-bold mb-2">{{ $title }}</h3>
    @endif
    @if ($description)
        <p class="text-gray-700 mb-4">{{ $description }}</p>
    @endif
    @if (!empty($technologies))
        <div class="flex flex-wrap gap-2 mb-4">
            @foreach ($technologies as $tech)
                <span class="px-2 py-1 bg-red-200 text-red-800 rounded text-xs">{{ $tech }}</span>
            @endforeach
        </div>
    @endif
    @if ($link)
        <a href="{{ $link }}"
            class="inline-flex items-center text-red-600 hover:text-red-700 animate-icon-on-hover">
            {{ $linkText }} <i class="fas fa-arrow-right ml-2"></i>
        </a>
    @endif
</div>

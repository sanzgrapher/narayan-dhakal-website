{{--
Component: UI Card - Experience
Purpose: Display professional experience information
Props:
  - title (string, required): Job title
  - company (string, required): Company name
  - duration (string, required): Employment duration
  - description (string, optional): Job description
  - skills (array, optional): Array of skills used
  - borderColor (string, optional): Border color class (default: 'border-red-500')
Usage:
  <x-ui.cards.experience
    title="Senior Developer"
    company="Tech Corp"
    duration="2020-2023"
    description="Developed enterprise applications"
    :skills="['PHP', 'Laravel']"
    border-color="border-blue-500"
  />
--}}
@props([
    'title' => '',
    'company' => '',
    'duration' => '',
    'description' => '',
    'skills' => [],
    'borderColor' => 'border-red-500',
])

<div class="bg-gray-50 p-6 rounded-lg shadow-md border-l-4 {{ $borderColor }}">
    <div class="flex justify-between items-start mb-2">
        <div>
            <h3 class="text-xl font-bold">{{ $title }}</h3>
            <p class="{{ str_replace('border-', 'text-', $borderColor) }} font-medium">{{ $company }}</p>
        </div>
        <span class="text-sm text-gray-600">{{ $duration }}</span>
    </div>
    @if ($description)
        <p class="text-gray-700 mb-3">{{ $description }}</p>
    @endif
    @if (!empty($skills))
        <div class="flex flex-wrap gap-2">
            @foreach ($skills as $skill)
                <span tabindex="0" class="icon-pill px-2 py-1 bg-gray-200 rounded text-xs">{{ $skill }}</span>
            @endforeach
        </div>
    @endif
</div>

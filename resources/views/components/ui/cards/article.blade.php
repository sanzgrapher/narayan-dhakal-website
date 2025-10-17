{{--
Component: UI Card - Article
Purpose: Display article/blog post information
Props:
  - title (string, required): Article title
  - description (string, optional): Article description/excerpt
  - link (string, optional): Article link URL
  - linkText (string, optional): Link text (default: 'Read More →')
Usage:
  <x-ui.cards.article
    title="Building Scalable Laravel Applications"
    description="Best practices for structuring large-scale Laravel projects"
    link="#"
  />
--}}
@props([
    'title' => '',
    'description' => '',
    'link' => '#',
    'linkText' => 'Read More →',
])

<div class="article-card bg-gray-50 p-6 rounded-lg shadow-md">
    @if ($title)
        <h3 class="text-lg font-bold mb-2">{{ $title }}</h3>
    @endif
    @if ($description)
        <p class="text-gray-700 mb-3">{{ $description }}</p>
    @endif
    @if ($link)
        <a href="{{ $link }}" class="text-red-600 hover:text-red-700 text-sm font-medium">{{ $linkText }}</a>
    @endif
</div>

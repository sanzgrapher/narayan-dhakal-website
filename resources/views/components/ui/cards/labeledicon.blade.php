@props([
    'icon' => null,
    'label' => null,
    'size' => 'text-5xl',
    'color' => 'text-gray-700',
    'tabindex' => 0,
    'as' => 'button',
])

@php
    // Determine wrapper tag (button by default) and common classes
    $tag = $as;
    $wrapperClasses = $attributes->get('class', 'icon-pill inline-flex flex-col items-center bg-transparent p-2');
    // Icon HTML passed either via prop or slot
    $iconHtml = $icon ?? null;
@endphp

<{{ $tag }}
    {{ $attributes->merge(['class' => $wrapperClasses, 'tabindex' => $tabindex, 'aria-hidden' => 'false']) }}>
    @if ($iconHtml)
        {{-- Render raw icon HTML so callers can pass <i class="..."></i> --}}
        {!! $iconHtml !!}
    @else
        {{-- Fallback: render default slot icon if provided --}}
        {{ $slot->isEmpty() ? '' : $slot }}
    @endif

    @if ($label)
        <span class="text-sm font-medium">{{ $label }}</span>
    @endif
    </{{ $tag }}>
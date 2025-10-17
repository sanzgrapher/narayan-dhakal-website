@props([
    // color can be one of: primary, secondary, success, danger, warning, info, dark, light
    'color' => 'primary',
    // icon can be an HTML string (SVG) or null; prefer passing icon via the named slot 'icon'
    'icon' => null,
    // position of icon: 'leading' or 'trailing'
    'position' => 'leading',
    // small, normal, large
    'size' => 'normal',
    // animate the entrance of icon/text
    'animated' => false,
    // optional extra classes for the pill container
    'class' => '',
])

@php
    $colors = [
        'primary' => 'bg-blue-100 text-blue-800',
        'secondary' => 'bg-gray-100 text-gray-800',
        'success' => 'bg-green-100 text-green-800',
        'danger' => 'bg-red-100 text-red-800',
        'warning' => 'bg-yellow-100 text-yellow-800',
        'info' => 'bg-sky-100 text-sky-800',
        'dark' => 'bg-gray-800 text-white',
        'light' => 'bg-white text-gray-800 border border-gray-200',
    ];

    // keep color classes (but allow override via $class prop)
    $colorClasses = $colors[$color] ?? $colors['primary'];

    // rely on project's `.icon-pill` CSS for gap, padding and animation.
// Component will add the `icon-pill` class so existing animations apply.
$animatedClasses = $animated ? 'transform transition-all duration-200 ease-out hover:scale-105' : '';

// wrapper classes: use project's icon-pill base, plus any color or extra classes
    $wrapper = trim(
        implode(' ', [
            'icon-pill inline-flex items-center rounded-full font-medium',
            $colorClasses,
            $animatedClasses,
            $class,
        ]),
    );
@endphp

<span {{ $attributes->merge(['class' => $wrapper]) }} role="status">
    {{-- Leading icon/prop directly as child so existing CSS (.icon-pill > i) targets it --}}
    @if ($position === 'leading')
        @if (!empty($icon))
            {!! $icon !!}
        @endif
        <span class="ml-0">{{ $slot }}</span>
    @else
        {{-- Trailing --}}
        <span class="mr-0">{{ $slot }}</span>
        @if (!empty($icon))
            {!! $icon !!}
        @endif
    @endif
</span>

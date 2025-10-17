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
    'class' => ''
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

    $sizeMap = [
        'small' => ['px-2', 'py-0.5', 'text-xs', 'gap-1'],
        'normal' => ['px-3', 'py-1', 'text-sm', 'gap-2'],
        'large' => ['px-4', 'py-1.5', 'text-base', 'gap-2.5'],
    ];

    $colorClasses = $colors[$color] ?? $colors['primary'];
    [$px, $py, $textSize, $gap] = $sizeMap[$size] ?? $sizeMap['normal'];

    $animatedClasses = $animated ? 'transform transition-all duration-200 ease-out hover:scale-105' : '';

    // wrapper classes
    $wrapper = trim(implode(' ', [
        'inline-flex items-center rounded-full font-medium',
        $px, $py, $textSize, $gap, $colorClasses, $animatedClasses, $class
    ]));

    // icon container classes
    $iconSize = match($size) {
        'small' => 'h-3 w-3',
        'large' => 'h-5 w-5',
        default => 'h-4 w-4',
    };

    $iconOrder = $position === 'trailing' ? 'order-2' : 'order-1';
    $textOrder = $position === 'trailing' ? 'order-1' : 'order-2';
    $iconMargin = $position === 'trailing' ? 'ml-2' : 'mr-2';
    // when icon is provided via prop string, we will render it with {!! $icon !!}
@endphp

<span {{ $attributes->merge(['class' => $wrapper]) }} role="status">
    {{-- Leading icon slot/prop --}}
    @if($position === 'leading')
        @if(! empty($icon))
            <span class="flex items-center {{ $iconOrder }} {{ $iconMargin }}">
                <span class="{{ $iconSize }} inline-flex items-center justify-center">{!! $icon !!}</span>
            </span>
        @endif
    @endif

    {{-- Text/content slot --}}
    <span class="{{ $textOrder }}">{{ $slot }}</span>

    {{-- Trailing icon slot/prop --}}
    @if($position === 'trailing')
        @if(! empty($icon))
            <span class="flex items-center {{ $iconOrder }} {{ $iconMargin }}">
                <span class="{{ $iconSize }} inline-flex items-center justify-center">{!! $icon !!}</span>
            </span>
        @endif
    @endif
</span>

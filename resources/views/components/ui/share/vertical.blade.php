{{--
Vertical Share Menu Component
Usage: <x-ui.share.vertical />
--}}

@props([
    'positionOffset' => '64px',
    // side: 'left' or 'right' - default 'left'
    'side' => 'left',
])

@php
    // Compute inline style depending on requested side. Default to left.
    if ($side === 'right') {
        // Place to the right of the centered container: calc(50% + half-container + offset)
        $placement = "right: calc(50% - -28rem + $positionOffset);";
        // The expression above intentionally mirrors the left calc but for right placement.
        // A clearer formula in CSS: left: calc(50% + 28rem + {offset}), but when using 'right' we set right accordingly.
        // For consistency we will set 'left' when side is left, and 'left' when side is right as well but with a plus.
        $inline = "left: calc(50% + 28rem + {$positionOffset}); transform: translateY(-50%);";
    } else {
        // left placement
        $inline = "left: calc(50% - 28rem - {$positionOffset}); transform: translateY(-50%);";
    }
    // Label rotation depending on side
    $labelTransform = $side === 'right' ? 'rotate(0deg)' : 'rotate(180deg)';
@endphp

<div class="hidden md:flex flex-col items-center gap-4 fixed top-1/2" style="{{ $inline }}">
    <div id="share-aria-live" class="sr-only" aria-live="polite" aria-atomic="true"></div>
    <!-- Theme toggle (example) -->
    <button aria-label="Toggle theme"
        class="w-10 h-10 flex items-center justify-center animate-icon-on-hover text-gray-500 hover:text-red-600 transition-colors">
        <i class="fas fa-sun"></i>
    </button>

    <!-- Share icon -->
    <div class="text-gray-500 animate-icon-on-hover">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M4 12v.01M12 12v.01M20 12v.01M8 12h8" />
        </svg>
    </div>

    <!-- Share text (vertical) -->
    <div class="text-sm tracking-wider text-gray-600"
        style="white-space: nowrap; writing-mode: vertical-lr; transform: {{ $labelTransform }};">Refer This Profile
    </div>

    <!-- Separator (matches site separator style) -->
    <div class="w-px h-6 bg-[#e3e3e0] dark:bg-[#3E3E3A] my-2"></div>


    <!-- Link icon -->
    <a href="#" aria-label="Copy link" title="Copy profile link"
        class="text-gray-500 hover:text-red-600 transition-colors animate-icon-on-hover js-copy-link"
        data-url="{{ request()->fullUrl() }}">
        <i class="fas fa-link"></i>
    </a>

    <!-- Social icons (no background) -->
    <a href="https://github.com/sanzgrapher" target="_blank" rel="noopener noreferrer"
        class="text-2xl text-gray-500 hover:text-red-600 transition-colors animate-icon-on-hover" aria-label="GitHub">
        <i class="fab fa-github"></i>
    </a>

    <a href="https://www.linkedin.com/in/narayandhakal09/" target="_blank" rel="noopener noreferrer"
        class="text-2xl text-gray-500 hover:text-red-600 transition-colors animate-icon-on-hover" aria-label="LinkedIn">
        <i class="fab fa-linkedin-in"></i>
    </a>

    <a href="mailto:narayandhakal443@gmail.com" aria-label="Email" title="Email"
        class="text-2xl text-gray-500 hover:text-red-600 transition-colors animate-icon-on-hover">
        <i class="fas fa-envelope"></i>
    </a>
</div>

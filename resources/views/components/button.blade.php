@props([
    'type' => 'button',
    'variant' => 'primary',
    'size' => 'base',
    'icon' => null,
])

<button
    {{ $attributes->merge(['class' => 'btn btn-' . $variant . ($size ? ' btn-' . $size : '')]) }}
    type="{{ $type }}">
    @if ($icon)
        <i class="ri-{{ $icon }}"></i>
    @endif
    @if ($size != 'icon')
        {{ $slot }}
    @endif
</button>

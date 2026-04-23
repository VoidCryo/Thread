@props([
'for' => null
])

<div>
    <label for="{{ $for }}" class="text-sm">{{ $slot }}</label>
</div>

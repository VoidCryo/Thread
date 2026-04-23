@props([
'type' => 'text'
])

<div>
    <button type="{{ $type }}"

    class="bg-cyan-500 rounded-sm px-2 active:bg-cyan-50 active:text-cyan-950"

    >{{ $slot }}</button>
</div>

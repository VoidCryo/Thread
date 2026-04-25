@props([
    'id' => null,
    'type' => null,
    'label' => null,
    'desc' => null,
    'error' => null,
])

<div class="field">
    @if ($label)
        <label class="label" for="field-{{ $id }}">{{ $label }}</label>
    @endif

    <input
        {{ $attributes->merge(['class' => 'input']) }}
        type="{{ $type ?? 'text' }}"
        name="{{ $id }}"
        id="field-{{ $id }}"
        value="{{ old($id) }}"
        @if ($error) aria-invalid="true" @endif
        @if ($desc) aria-describedby="field-{{ $id }}-desc" @endif
    >

    @if ($desc && !$error)
        <p class="field-description" id="field-{{ $id }}-desc">{{ $desc }}</p>
    @endif

    @if ($error)
        <p class="field-error" id="field-{{ $id }}-desc">{{ $error }}</p>
    @endif
</div>

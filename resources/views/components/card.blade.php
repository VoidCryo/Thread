<div class="card w-full max-w-sm ">
    <div {{ $attributes->merge(["class" =>
    'card-content'
    ]) }}>
    {{ $slot }}
    </div>
</div>

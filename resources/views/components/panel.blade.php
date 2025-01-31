@php
    $classes = 'p-4 bg-black/5 rounded-xl border border-transparent hover:border-black/20 group transition-colors duration-300';
@endphp

<div {{ $attributes(['class' => $classes]) }}>
    {{ $slot }}
</div>
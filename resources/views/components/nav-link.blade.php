@props(['active','icon'=>'home'])

@php
    $classes = ($active ?? true) ? 'nav-link active' : 'nav-link';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    <span data-feather="{{ $icon }}" class="align-text-bottom"></span>
    {{ $slot }}
</a>

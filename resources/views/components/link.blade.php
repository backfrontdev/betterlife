
@php
$classes = 'font-medium text-gray-800 hover:underline cursor-pointer';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>

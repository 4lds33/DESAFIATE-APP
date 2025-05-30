@php
    $classes = "text-xs text-gray-500 hover:text-gray-900"
@endphp


<a {{ $attributes->merge(['classes' => $classes]) }}>
    {{ $slot}}
</a>
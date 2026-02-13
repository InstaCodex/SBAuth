@props([
    'href',
    'aktif' => false,
])

@php
    $cek = $aktif ? 'active' : '';
@endphp

<a {{ $attributes->merge(['class' => 'nav-link ' . $cek]) }} href="{{ $href }}">
    {{ $slot }}
</a>

@props(['status'])

@if ($status)
    <div {{ $attributes->merge(['class' => 'fw-medium small text-success']) }}>
        {{ $status }}
    </div>
@endif

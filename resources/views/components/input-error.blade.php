@props(['messages'])

@if ($messages)
    <ul {{ $attributes->merge(['class' => 'small text-danger mb-0']) }}>
        @foreach ((array) $messages as $message)
            <li>{{ $message }}</li>
        @endforeach
    </ul>
@endif

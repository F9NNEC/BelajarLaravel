@props(['active' => ''])

<a class="{{ $attributes->get('class') }}" href="{{ $attributes->get('href') }}">{{ $slot }} {{ $active }}</a>
{{-- <a {{ $attributes }} > {{ $slot }} </a> --}}
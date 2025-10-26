@props(['active' => ''])

<a href="{{ $attributes->get('href') }}">{{ $slot }} {{ $active }}</a>
{{-- <a {{ $attributes }} > {{ $slot }} </a> --}}
@props(['active' => ''])

{{-- <a class="{{ $attributes->get('class') }}" href="{{ $attributes->get('href') }}">{{ $slot }} {{ $active }}</a> --}}
<a {{ $attributes->merge(['class' => $active ? 'text-teal-600 font-bold' : '']) }} > {{ $slot }} </a>
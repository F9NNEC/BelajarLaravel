<x-layout>
    <h1>About Us</h1>
    <p>Hello There! My name is {{ $nama }}</p>
    <p>I'm {{ $umur }} years old</p>

    <x-slot:footer>
        <strong>About Us Page</strong>
    </x-slot:footer>
</x-layout>
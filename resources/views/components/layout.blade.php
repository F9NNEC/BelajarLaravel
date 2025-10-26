<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <nav>
        <x-navLink href="/" active="1">
            Home
        </x-navLink>
        <x-navLink href="/about">
            About Us
        </x-navLink>
        <x-navLink href="/contact">
            Contact
        </x-navLink>
        <x-navLink href="/dashboard">
            Dashboard
        </x-navLink>
    </nav>
    <main>
        {{ $slot }}
    </main>
    <footer>
        Footer of <span>{{ $footer }}</span>
    </footer>
</body>
</html>
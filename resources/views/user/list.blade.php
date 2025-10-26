<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User List</title>
</head>
<body>
    <h1>List User</h2>
    <ul>
        @foreach ($data as $item)
            <li>
                <p>Nama {{ $item['nama']}}, Role: {{ $item['role']}}, id: {{ $item['id']}}</p>
            </li>
            @endforeach
        @if ($item['role'] == 'user')
            <p>No admin</p>
        @endif
        </ul>
    </body>
</html>
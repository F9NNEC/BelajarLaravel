<x-layout>
    <h1>List User</h2>
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y-2 divide-gray-200">
                <thead class="ltr:text-left rtl:text-right">
                    <tr class="*:font-medium *:text-gray-900">
                        <th class="px-3 py-2 whitespace-nowrap">Nama</th>
                        <th class="px-3 py-2 whitespace-nowrap">Role</th>
                        <th class="px-3 py-2 whitespace-nowrap">Id</th>
                <th class="px-3 py-2 whitespace-nowrap">Tanggal</th>
            </tr>
        </thead>
        
        <tbody class="divide-y divide-gray-200">
            @foreach ($data as $item)
            <tr class="*:text-gray-900 *:first:font-medium">
                <td class="px-3 py-2 whitespace-nowrap">{{ $item['nama'] }}</td>
                <td class="px-3 py-2 whitespace-nowrap">{{ $item['role'] }}</td>
                <td class="px-3 py-2 whitespace-nowrap">{{ $item['id'] }}</td>
                <td class="px-3 py-2 whitespace-nowrap">{{ $item['tanggal_lahir'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
        @if ($item['role'] == 'user')
            <p>No admin</p>
        @endif
</div>    

        <x-slot:footer>
            <strong>User List</strong>
        </x-slot:footer>
</x-layout>
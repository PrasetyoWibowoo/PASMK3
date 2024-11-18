<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Tiket Kendaraan</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-4">Daftar Tiket Kendaraan</h1>
        <a href="{{ route('tikets.create') }}" class="mb-4 inline-block bg-green-500 text-white px-4 py-2 rounded">Beli Tiket</a>

        @if(session('success'))
            <div class="bg-green-200 text-green-800 p-4 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <table class="min-w-full bg-white border border-gray-300">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b">Nama</th>
                    <th class="py-2 px-4 border-b">Kendaraan</th>
                    <th class="py-2 px-4 border-b">Jumlah</th>
                    <th class="py-2 px-4 border-b">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tikets as $tiket)
                <tr>
                    <td class="py-2 px-4 border-b">{{ $tiket->nama }}</td>
                    <td class="py-2 px-4 border-b">{{ $tiket->kendaraan }}</td>
                    <td class="py-2 px-4 border-b">{{ $tiket->jumlah }}</td>
                    <td class="py-2 px-4 border-b">
                        <a href="{{ route('tikets.show', $tiket->id) }}" class="text-blue-500">Lihat Detail</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
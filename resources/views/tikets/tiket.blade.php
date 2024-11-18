<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Tiket</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-4">Detail Tiket</h1>

        <div class="bg-white shadow-md rounded-lg p-6">
            <p><strong>Nama:</strong> {{ $tiket->nama }}</p>
            <p><strong>Kendaraan:</strong> {{ $tiket->kendaraan }}</p>
            <p><strong>Jumlah:</strong> {{ $tiket->jumlah }}</p>
            <p><strong>Tujuan:</strong> {{ $tiket->tujuan ?? 'Tidak ada' }}</p>
        </div>

        <a href="{{ route('tikets.index') }}" class="mt-4 inline-block bg-blue-500 text-white px-4 py-2 rounded">Kembali ke Daftar Tiket</a>
    </div>
</body>
</html>
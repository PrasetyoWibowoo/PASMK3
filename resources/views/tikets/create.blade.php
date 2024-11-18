<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beli Tiket</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-4">Beli Tiket</h1>
        <form action="{{ route('tikets.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="nama" class="block text-sm font-medium text-gray-700">Nama</label>
                <input type="text" name="nama" id="nama" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" required>
            </div>
            <div class="mb-4">
                <label for="kendaraan" class="block text-sm font-medium text-gray-700">Kendaraan</label>
                <select name="kendaraan" id="kendaraan" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" required>
                    <option value="motor">Motor</option>
                    <option value="mobil">Mobil</option>
                    <option value="pesawat">Pesawat</option>
                    <option value="kereta">Kereta</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="jumlah" class="block text-sm font-medium text-gray-700">Jumlah</label>
                <input type="number" name="jumlah" id="jumlah" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" required>
            </div>
            <div class="mb-4">
                <label for="tujuan" class="block text-sm font-medium text-gray-700">Tujuan (opsional)</label>
                <input type="text" name="tujuan" id="tujuan" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Beli Tiket</button>
        </form>
    </div>
</body>
</html>
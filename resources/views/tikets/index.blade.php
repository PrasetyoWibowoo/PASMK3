<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesan Tiket</title>
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css2?family=Lalezar&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body class="bg-gray-100">
@if(session('success'))
    <div class="fixed inset-0 flex items-center justify-center z-50">
        <div class="bg-white bg-opacity-30 rounded-lg shadow-lg p-6">
            <h2 class="text-xl font-bold text-black transition duration-300 delay-100 hover:text-white">{{ session('success') }}</h2>
            <button id="close-popup" class="flex bg-opacity-70 mt-4 px-4 py-2 bg-green-500 text-white rounded transition duration-300 delay-100 hover:bg-black">Close</button>
        </div>
    </div>
@endif

<script>
    document.getElementById('close-popup')?.addEventListener('click', function() {
        this.closest('.fixed').style.display = 'none';
    });
</script>

    <div class="container mx-auto py-8">
        <h1 class="text-3xl font-bold mb-6 font-poppins">Daftar Tiket</h1>
        <h2 class="mb-5 font-bold font-poppins">Daftar Tiket Yang Tersedia:</h2>
        <div class="flex overflow-x-auto whitespace-nowrap">
    @foreach ($tikets as $tiket)
        <div class="bg-white w-1/2 h-auto bg-opacity-10 shadow-md rounded-lg overflow-hidden inline-block m-2">
            <div class="p-4">
                <h2 class="text-xl font-semibold">{{ $tiket->nama }}</h2>
                <p class="text-gray-600">Tujuan: {{ $tiket->tujuan }}</p>
                <p class="text-gray-800">Harga: IDR {{ number_format($tiket->price) }}</p>
                <p class="text-gray-800">Stok: {{ $tiket->stocks }}</p>
                <a href="{{ route('tickets.show', $tiket) }}" class="mt-4 inline-block bg-blue-500 text-white py-2 px-4 rounded">Pesan Sekarang</a>
            </div>
        </div>
    @endforeach
</div>
    </div>
</body>
</html>
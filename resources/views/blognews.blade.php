<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Website Layout</title>
  @vite('resources/css/app.css')
  <link href="https://fonts.googleapis.com/css2?family=Lalezar&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>

<body class="bg-white overflow-y-scroll overflow-x-hidden min-h-screen flex flex-col">

  <!-- Header -->
  <header id="navbar" class="bg-white/5 transition duration-300 ease-in-out absolute z-10 top-0 left-0 w-full p-4 shadow-lg sticky">
    <div class="container mx-auto flex items-center justify-between p-4">
      <a href="#" class="relative right-20 text-green-500 text-5xl font-lalezar text-shadow">TravelGo</a>
      <nav class="space-x-10 hidden md:flex left-40 top-3 relative">
        <a href="{{ route('home') }}" class="text-2xl font-lalezar hover:text-white text-shadow">Home</a>
        <a href="{{ route('about') }}" class="text-2xl font-lalezar hover:text-white text-shadow">About Us</a>
        <a href="{{ route('blognews') }}" class="text-2xl font-lalezar hover:text-white text-shadow">Blog & News</a>
        <a href="{{ route('product') }}" class="text-2xl font-lalezar hover:text-white text-shadow">Product</a>
        <a href="{{ route('home') }}" class="px-5 py-2 bg-green-500 text-center text-white text-2xl font-lalezar relative bottom-3 rounded-3xl hover:text-black text-shadow">Join Us</a>
      </nav>
    </div>
  </header>

  <main class="flex-grow">
    <section>
      <img src="{{URL::asset('/assets/img/hpblogandnews.jpg')}}" class="relative">
    </section>

    <!-- Hero Section -->
    <section class="py-24">
      <div class="mt-6 space-x-64 text-center">
        <button class="font-poppins font-extrabold text-xl bg-green-500 text-black hover:text-white rounded-3xl rounded shadow-xl w-72 h-16 hover:bg-green-700">Culture</button>
        <button class="font-poppins font-extrabold text-xl bg-green-500 text-black hover:text-white rounded-3xl rounded shadow-xl w-72 h-16 hover:bg-green-700">News</button>
        <button class="font-poppins font-extrabold text-xl bg-green-500 text-black hover:text-white rounded-3xl rounded shadow-xl w-72 h-16 hover:bg-green-700">All</button>
      </div>
    </section>

    <!-- Culture Section -->
    <section class="py-10">
      <div class="container mx-auto px-4">
        <h3 class="text-8xl font-extrabold mb-6">Culture</h3>
        <hr class="mt-1 border-t-2 h-10 border-black w-full">
      </div>
    </section>

    <section class="container mx-auto px-4">
    <p class="text-3xl font-bold font-poppins mb-10 flex justify-center text-shadow">Tentang SMK Telkom Purwokerto</p>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
      <img src="{{URL::asset('/assets/img/news1.png')}}" alt="Culture 2" class ="hover:scale-105 transition-transform duration-300 mb-20 w-full rounded mb-2">
      <p class="text-xl font-semibold top-10 relative ">SMK Telkom Purwokerto mengasah keahlian dalam bidang Teknik Informatika yang semula merupakan program keahlian dari Teknik Telekomunikasi sekarang berubah menjadi Bidang Keahlian dengan nama Teknologi Informasi dan Komunikasi yang memiliki empat program keahlian yaitu Teknik Komputer dan Jaringan, Rekayasa Perangkat Lunak, Multimedia, dan Teknik Penyiaran Radio. Sedangkan Program Keahlian Teknik Jaringan Akses Pelanggan terbagi menjadi dua program keahlian yaitu Teknik Akses Kabel dan Teknik Akses Radio. Pada saat yang bersamaan, SMK Telkom Purwokerto harus memilih program keahlian yang disesuaikan yaitu Program Keahlian Teknik Akses Radio dan Teknik Komputer dan Jaringan. Pada perkembangannya di tahun 2005, SMK Telkom Purwokerto menambah satu program keahlian lagi yaitu Rekayasa Perangkat Lunak.</p>
      </div>
    </section>

    <section class="container mx-auto px-4">
    <p class="text-3xl font-bold font-poppins mb-10 flex justify-center text-shadow">Cara Claim Code Redeem Free Fire</p>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
      <img src="{{URL::asset('/assets/img/news2.png')}}" alt="Culture 2" class ="hover:scale-105 transition-transform duration-300 w-full rounded mb-2">
        <p class="text-xl font-semibold top-10 relative">Cara melakukan klaim kode redeem yakni dengan mengunjungi situs resmi Garena di reward.ff.garena.com/id, Setelah itu, lakukan login dengan masuk ke akun Anda. Masukkan kode redeem yang sudah ada dapatkan ke dalam kotak yang tersedia.  Klik "Confirm" untuk me-redeem kodenya agar kita mendapat hadiah. Apabila berhasil, hadiah akan masuk melalui bagian Vault pada beranda gim. Hadiah pun bisa langsung digunakan oleh para pemain setelah kode berhasil di-redeem. Pemain juga bisa melakukan redeem melalui aplikasi Free Fire secara langsung. Caranya yakni masuk ke aplikasi dan pilih ikon Event di bagian atas paling kiri. Masuk ke Info di dashboard dan pilih website kode redeem. Masukkan 12-16 digit kode redeem lalu klik tombol Konfirmasi.Kode redeem pun sudah ditukarkan.</p>
      </div>
    </section>

    <!-- News Section -->
    <section class="py-10">
      <div class="container mx-auto px-4">
        <h3 class="text-6xl font-extrabold mb-6">News</h3>
        <hr class="mt-1 border-t-2 h-10 border-black w-full">
        <div class="space-y-6">
          @foreach ($news as $news)
          <div class="flex gap-4">
            <img src="{{ asset('storage/' . $news->image)}}" alt="News 1" class="w-6/12 rounded">
            <div>
              <p class="text-lg font-semibold">{{ $news->title }}</p>
              <p class="text-gray-600">{{ $news->description }}</p>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </section>

    <section class="py-10">
      <div class="container mx-auto px-4">
        <h3 class="text-8xl font-extrabold mb-6">All</h3>
        <hr class="mt-1 border-t-2 h-10 border-black w-full">
      </div>
    </section>

    <section class="container mx-auto px-4">
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="flex gap-4">
        <img src="{{URL::asset('/assets/img/news1.png')}}" alt="Culture 2" class ="hover:scale-105 transition-transform duration-300 mb-20 w-full rounded mb-2">
        </div>
          <div class="flex gap-4">
            <img src="{{ asset('storage/' . $news->image)}}" alt="News 1" class="w-6/12 rounded">
            <div>
      </div>
    </section>
  </main>

  <footer class="bg-gray-800 text-white py-8">
    <div class="container mx-auto grid md:grid-cols-3">
      <div>
        <h1 class="text-4xl font-bold text-green-600 mb-4">Travelgo</h1>
        <div class="flex space-x-20">
          <a href="#" class="text-2xl hover:text-green-500 mr-3">Home</a>
          <a href="#" class="text-2xl hover:text-green-500">Blog & News</a>
        </div>
        <div class="flex space-x-20 text-left mb-4">
          <a href="#" class="text-2xl hover:text-green-500">Join Us</a>
          <a href="#" class="text-2xl hover:text-green-500">Cookie Settings</a>
        </div>
        <input type="email" placeholder="Send your email" class="p-2 w-80 rounded-xl text-gray-700"> 
        <button class="mr-10">
          <img src="{{ URL::asset('assets/img/Submit.png') }}" alt="Submit" class="">
        </button>
      </div>
    </div>
    <div class="relative h-52 w-px bg-gray-500 mx-auto bottom-20"></div>
    <h1 class="text-2xl flex justify-center relative -right-[35rem] bottom-80">Follow and keep updated!</h1>
    <div class="text-center flex justify-center relative -right-[35rem] bottom-72">
      <div class="flex justify-center space-x-8">
        <a href="https://www.linkedin.com" target="_blank" class="hover:scale-110 transition-transform duration-300">
          <img src="{{ URL::asset('assets/img/bxl-linkedin.png') }}" alt="LinkedIn" class="">
        </a>
        <a href="https://www.twitter.com" target="_blank" class="hover:scale-110 transition-transform duration-300">
          <img src="{{ URL::asset('assets/img/bxl-twitter.png') }}" alt="Twitter" class="">
        </a>
        <a href="https://www.instagram.com" target="_blank" class="hover:scale-110 transition-transform duration-300">
          <img src="{{ URL::asset('assets/img/bxl-instagram-alt.png') }}" alt ="Instagram" class="">
        </a>
        <a href="https://www.youtube.com" target="_blank" class="hover:scale-110 transition-transform duration-300">
          <img src="{{ URL::asset('assets/img/bxl-youtube.png') }}" alt="YouTube" class="">
        </a>
        <a href="https://www.github.com" target="_blank" class="hover:scale-110 transition-transform duration-300">
          <img src="{{ URL::asset('assets/img/bxl-github.png') }}" alt="GitHub" class="">
        </a>
      </div>
    </div>
    <div class="text-center text-xl relative bottom-20">
      <p>TravelGo | 2024 All Rights Reserved</p>
    </div>
  </footer>

</body>
</html>
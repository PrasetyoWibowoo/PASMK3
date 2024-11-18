<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-900 overflow-y-scroll w-screen h-screen m-0 font-poppins">

<!-- Header -->
<header id="navbar" class="bg-white/5 transition duration-300 ease-in-out absolute z-10 top-0 left-0 w-full p-4 shadow-lg sticky">
  <div class="container mx-auto flex items-center justify-between p-4">
    <a href="#" class="relative right-20 text-green-600 text-5xl font-lalezar text-shadow">TravelGo</a>
    <nav class="space-x-10 hidden md:flex left-40 top-3 relative">
      <a href="#" class="text-white text-2xl font-lalezar hover:text-green-500 text-shadow">Home</a>
      <a href="#" class="text-white text-2xl font-lalezar hover:text-green-500 text-shadow">About Us</a>
      <a href="#" class="text-white text-2xl font-lalezar hover:text-green-500 text-shadow">Blog & News</a>
      <a href="#" class="text-white text-2xl font-lalezar hover:text-green-500 text-shadow">Product</a>
      <a href="#" class="px-5 py-2 bg-green-500 text-center text-white text-2xl font-lalezar relative bottom-3 rounded-3xl hover:text-black text-shadow">Join Us</a>
    </nav>
  </div>
</header>


<script>
  window.addEventListener('scroll', function() {
    const navbar = document.getElementById('navbar');
    if (window.scrollY > 950) {
      navbar.classList.add('bg-custom-gray');
      navbar.classList.remove('bg-white/5');
    } else {
      navbar.classList.remove('bg-custom-gray');
      navbar.classList.add('bg-white/5');
    }
  });
</script>

    <!-- Section Hijau -->
    <section class="bg-green-500 py-10 flex">
        <img src="/UTS (TravelGo)/IMG/driverhp.png" alt="driver muncul dari hp" class="ml-10 mt-20">
        <h1 class="text-4xl text-white mt-28 ml-10">Our Products</h1>
    </section>

    <!-- Product Menu -->
    <div class="flex gap-12 mt-12 mb-16 justify-center">
        <div class="bg-green-500 py-3 px-5 rounded-full text-center w-48 cursor-pointer hover:bg-gray-900">
            <a href="#" class="text-2xl text-black font-bold">Motor</a>
        </div>
        <div class="bg-green-500 py-3 px-5 rounded-full text-center w-48 cursor-pointer hover:bg-gray-900">
            <a href="#" class="text-2xl text-black font-bold">Mobil</a>
        </div>
        <div class="bg-green-500 py-3 px-5 rounded-full text-center w-48 cursor-pointer hover:bg-gray-900">
            <a href="#" class="text-2xl text-black font-bold">Kereta</a>
        </div>
        <div class="bg-green-500 py-3 px-5 rounded-full text-center w-48 cursor-pointer hover:bg-gray-900">
            <a href="#" class="text-2xl text-black font-bold">Pesawat</a>
        </div>
    </div>

    <!-- Images Section -->
    <div class="relative flex flex-col items-center">
        <img src="/UTS (TravelGo)/IMG/img1.png" alt="" class="w-full max-w-6xl mt-5">
        <img src="/UTS (TravelGo)/IMG/img2.png" alt="" class="w-full max-w-6xl mt-[-180px]">
        <img src="/UTS (TravelGo)/IMG/img3.png" alt="" class="w-full max-w-6xl mt-[-180px]">
        <img src="/UTS (TravelGo)/IMG/img4.png" alt="" class="w-full max-w-6xl mt-[-200px]">
    </div>

    <!-- Footer -->
    <footer class="bg-gray-700 py-24">
        <section class="text-center text-white">
            <h1 class="text-5xl text-green-400 font-lalezar mb-5">Travelgo</h1>
            <div class="flex justify-center gap-12 mb-5">
                <a href="/index.html" class="hover:text-gray-400">Home</a>
                <a href="/blogAndNews/index.html" class="hover:text-gray-400">Blog & News</a>
                <a href="/Login/index.html" class="hover:text-gray-400">Join Us</a>
                <a href="/products/index.html" class="hover:text-gray-400">Product</a>
            </div>
            <div class="mb-5">
                <a href="/Login/index.html" class="bg-gray-300 px-5 py-2 rounded-full text-black">Send your email</a>
            </div>
            <div class="relative">
                <img src="/UTS (TravelGo)/IMG/garisfooter.png" alt="" class="w-full">
                <h2 class="absolute bottom-5 left-1/2 transform -translate-x-1/2 text-gray-300 text-xl">TravelGo | 2024 All Rights Reserved</h2>
            </div>
            <div class="relative mt-10">
                <h2 class="absolute top-0 right-0 text-gray-300 text-xl">Follow and keep updated!</h2>
                <img src="/UTS (TravelGo)/IMG/contact.png" alt="" class="absolute top-8 right-10">
            </div>
        </section>
    </footer>

</body>

</html>
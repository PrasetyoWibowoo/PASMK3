<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>TravelGo</title>
<link href="https://fonts.googleapis.com/css2?family=Lalezar&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
@vite('resources/css/app.css')
</head>

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

<!-- Hero Section -->
<section class="relative">
  <img src="{{URL::asset('assets/img/travelgo.png')}}" alt="Hero Image" class="h-dvh w-full object-cover relative bottom-28 z-0">
  <div class="absolute inset-0 flex flex-col items-center justify-center text-center text-white">
    <div class="w-[750px] left-[70rem] top-[35rem] absolute text-right text-white text-shadow text-6xl font-lalezar">PERMUDAH PERJALANANMU DENGAN TRAVELGO</div>
  </div>
</section>

<section>
    <div class="relative bottom-28 p-24 bg-green-500">
</section>

<!-- Main Content -->
<main class="container mx-auto py-16 space-y-10">
  <!-- Heading -->
  <div class="text-center mb-12">
    <h2 class="text-7xl md:text-7xl font-lalezar font-black mb-4">Bingung Mau Keluar Pake Apa?</h2>
    <p class="text-5xl font-black font-lalezar">JALANIN AJA PAKE <span class="text-green-600 font-black font-customFont">TRAVELGO</span> BRUMM.. BRUMMM..</p>
  </div>

  <img src="{{URL::asset('assets/img/Pel.png')}}" alt="Feature 1" class="w-68 h-full object-contain mx-auto hover:scale-105 transition-transform duration-300">

  <img src="{{URL::asset('assets/img/Aman.png')}}" alt="Feature 2" class="w-68 h-full object-contain ml-52 mx-auto hover:scale-105 transition-transform duration-300">

  <img src="{{URL::asset('assets/img/Cep.png')}}" alt="Feature 2" class="w-68 h-full object-contain ml-52 mx-auto hover:scale-105 transition-transform duration-300">
</main>

<footer class="bg-gray-800 text-white py-8">
  <div class="container mx-auto grid md:grid-cols-3 gap-4">

    <div>
      <h3 class="text-2xl font-bold text-green-600 mb-4">Travelgo</h3>
      <ul class="space-y-2">
        <li><a href="#" class="hover:text-green-500">Home</a></li>
        <li><a href="#" class="hover:text-green-500">Blog & News</a></li>
        <li><a href="#" class="hover:text-green-500">Join Us</a></li>
        <li><a href="#" class="hover:text-green-500">Product</a></li>
      </ul>
    </div>

    <div class="text-center">
      <p class="mb-4">Send your email</p>
      <input type="email" placeholder="Enter your email" class="p-2 w-full rounded-md text-gray-700">
    </div>

    <div class="flex justify-center space-x-4">
      <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-twitter"></i></a>
      <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-instagram"></i></a>
      <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-youtube"></i></a>
      <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-facebook"></i></a>
    </div>
  </div>
  <div class="text-center mt-4">
    <p>TravelGo | 2024 All Rights Reserved</p>
  </div>
</footer>

</body>
</html>

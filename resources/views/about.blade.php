<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TravelGo</title>
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css2?family=Lalezar&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body class="bg-black text-white">
    <!-- Header -->
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
  <section class="py-20">
    <div class="space-x-0 container mx-auto place-items-end mt-16 px-10">
    <h1 class="text-7xl font-extrabold font-poppins text-left w-200">
      <span class="text-green-500">TRAVELGO GROWS</span>
    <br />
      <span>WITH</span>
      <span class="text-lime-400">YOUR LIFE</span>
      
    </h1>
      <p class="mt-4 text-gray-300">Jelajahi dunia, mulailah kemana menuju perjalananmu.</p>
      </div>
      <img src="{{URL::asset('/assets/img/cricleabout.png')}}" class="relative size-100 mx-auto mb- right-72">
      <img src="{{URL::asset('/assets/img/containerabout.png')}}" class="relative top-16 left-52">

  </section>

  <section class="bg-green-500 py-8 h-52 mt-20">
    <div class="container mx-auto px-6">
      <h2 class="text-black text-6xl font-extrabold mb-2 font-poppins">Tentang Kami</h2>
      <p class="text-black text-3xl font-poppins">
        Travelgo adalah platform yang menyediakan layanan transportasi ke berbagai tempat yang ingin dikunjungi.
      </p>
    </div>
  </section>

  <!-- Location Section -->
   <sectio class="py-16">
    <h2 class="text-5xl font-poppins ml-24 mt-64 m-20">Berlokasi diJl. DI Panjaitan No.128, Karangreja, <br> Purwokerto Kulon, Kec. Purwokerto Sel,</br> Kabupaten Banyumas, Jawa Tengah 53141</h2>
    <img src="{{URL::asset('/assets/img/locabout.png')}}" class="relative left-1/2 m-1 w-auto h-auto">
    </section>

    <!-- Develop Section -->
     <section class="pb-5">
      <h2 class="text-5xl font-poppins mr-64">Didukung dengan laju perkembangan<br>terupdate disetiap masanya dan ikut</br>mengatasi permasalahan anda</br> dikehidupan sehari-hari.</h2>
      <img src="{{URL::asset('/assets/img/compabout.png')}}" class="relative right-4 m-1 w-auto h-auto">
    </section>
  
  <!-- Footer -->
  <footer class="bg-gray-800 py-6 bottom-28">
    <div class="container mx-auto text-center">
      <p class="text-gray-400">Travelgo Â© 2024 - Semua Hak Dilindungi</p>
      <ul class="flex justify-center space-x-4 mt-4">
        <li><a href="#" class="hover:text-green-400">Privacy Policy</a></li>
        <li><a href="#" class="hover:text-green-400">Terms</a></li>
        <li><a href="#" class="hover:text-green-400">Contact Us</a></li>
      </ul>
    </div>
  </footer>
</body>
</html>
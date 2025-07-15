<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Produk - ParTea</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
    body { font-family: 'Poppins', sans-serif; }
    .like-btn.liked svg { fill: #e11d48; }
    .fade-item {
      opacity: 0;
      transform: translateY(20px);
      transition: all 2.0s ease;
    }
    .fade-in {
      opacity: 1 !important;
      transform: translateY(0) !important;
    }
  </style>
</head>
<body class="bg-gradient-to-b from-yellow-100 to-white min-h-screen">

  <!-- Navbar -->
  <nav class="flex items-center justify-between px-6 py-4 shadow-sm bg-white sticky top-0 z-50">
    <div class="flex items-center space-x-3">
      <img src="assets/logo.png" alt="Logo" class="h-10 w-10 object-contain rounded-full border border-yellow-400">
      <span class="text-2xl font-bold text-yellow-600">ParTea</span>
    </div>

    <!-- Burger Icon -->
    <div class="md:hidden">
      <button id="burgerBtn" class="focus:outline-none">
        <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
      </button>
    </div>

    <!-- Desktop Menu -->
    <ul class="hidden md:flex space-x-6 text-gray-700 font-medium">
      <li><a href="index.php" class="hover:text-yellow-600 transition">Beranda</a></li>
      <li><a href="produk.php" class="text-yellow-600 font-semibold">Produk</a></li>
      <li><a href="tentang.php" class="hover:text-yellow-600 transition">Tentang</a></li>
      <li><a href="kontak.php" class="hover:text-yellow-600 transition">Hubungi kami</a></li>
    </ul>
  </nav>

  <!-- Mobile Menu -->
  <div id="mobileMenu" class="md:hidden hidden bg-white shadow-md px-6 pt-2 pb-4 space-y-2 text-gray-700 font-medium">
    <a href="index.php" class="block hover:text-yellow-600 transition">Beranda</a>
    <a href="produk.php" class="block text-yellow-600 font-semibold">Produk</a>
    <a href="tentang.php" class="block hover:text-yellow-600 transition">Tentang</a>
    <a href="kontak.php" class="block hover:text-yellow-600 transition">Hubungi kami</a>
  </div>

  <!-- Produk Section -->
  <section class="px-6 md:px-20 py-16">
    <h1 class="fade-item text-4xl font-bold text-yellow-700 mb-12 text-center">Produk Kami</h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">

      <!-- Produk 1 -->
      <div class="fade-item bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition duration-300">
        <img src="assets/hasil produkku png.png" alt="Thai Tea" class="w-full h-72 object-contain bg-white">
        <div class="p-5">
          <h2 class="text-xl font-semibold text-yellow-700 mb-2">Thai Tea Original</h2>
          <p class="text-gray-600 mb-4">Thai tea segar dan manis, cocok untuk cuaca tropis!</p>

          <div class="flex items-center justify-between mb-4">
            <div class="harga-produk text-base"></div>
            <button class="like-btn flex items-center space-x-1 text-gray-500 hover:text-pink-600 transition" onclick="like(this)">
              <svg class="w-5 h-5 transition" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                <path d="M16.032,29.247c-0.092,0-0.185-0.035-0.255-0.105L3.008,16.373c-1.507-1.507-2.337-3.506-2.337-5.629 
                  c0-2.139,0.83-4.147,2.337-5.655c1.506-1.506,3.508-2.335,5.639-2.337c2.132,0,4.136,0.83,5.643,2.337 
                  l1.74,1.74l1.74-1.74c1.507-1.507,3.511-2.337,5.642-2.337c2.128,0.002,4.129,0.832,5.635,2.337 
                  c1.507,1.508,2.337,3.511,2.337,5.642s-0.83,4.134-2.337,5.642L16.287,29.142C16.216,29.212,16.124,29.247,16.032,29.247z" />
              </svg>
              <span class="like-count text-sm">0</span>
            </button>
          </div>
          <button class="w-full bg-yellow-500 hover:bg-yellow-600 text-white font-semibold py-2 rounded-xl transition">Beli Sekarang</button>
        </div>
      </div>

    </div>
  </section>

  <!-- Footer -->
  <footer class="text-center py-6 text-gray-500 text-sm border-t mt-10">
    &copy; <?= date("Y") ?> ParTea. All rights reserved.
  </footer>

  <!-- Script -->
  <script>
    // Like Button Function
    function like(button) {
      const countEl = button.querySelector('.like-count');
      let count = parseInt(countEl.innerText);
      button.classList.toggle('liked');

      if (button.classList.contains('liked')) {
        count++;
        button.querySelector('svg').classList.add('fill-pink-600');
      } else {
        count--;
        button.querySelector('svg').classList.remove('fill-pink-600');
      }

      countEl.innerText = count;
    }

    // Ambil parameter URL
    function getQueryParam(name) {
      const params = new URLSearchParams(window.location.search);
      return params.get(name);
    }

    document.addEventListener("DOMContentLoaded", () => {
      const burgerBtn = document.getElementById("burgerBtn");
      const mobileMenu = document.getElementById("mobileMenu");

      burgerBtn.addEventListener("click", () => {
        mobileMenu.classList.toggle("hidden");
      });

      // Animasi fade-in produk
      const items = document.querySelectorAll('.fade-item');
      items.forEach((item, index) => {
        setTimeout(() => {
          item.classList.add('fade-in');
        }, 500 + index * 300);
      });

      // Logika diskon
      const urlDiskon = getQueryParam('diskon') === '1';
      if (urlDiskon) {
        sessionStorage.setItem('sudahKlaimDiskon', 'true');
        history.replaceState(null, '', 'produk.php');
      }

      const diskon = sessionStorage.getItem('sudahKlaimDiskon') === 'true';
      const hargaEl = document.querySelector('.harga-produk');

      if (diskon) {
        hargaEl.innerHTML = `
          <span class="line-through text-gray-400 mr-2">Rp10.000</span>
          <span class="text-yellow-600 font-semibold">Rp7.000</span>
        `;
      } else {
        hargaEl.innerHTML = `<span class="text-yellow-600 font-semibold">Rp10.000</span>`;
      }
    });
  </script>

</body>
</html>
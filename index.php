<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>ParTea - Minuman Segar</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
    body { font-family: 'Poppins', sans-serif; }

    @keyframes bounce-in {
      0% { transform: scale(0.5); opacity: 0; }
      60% { transform: scale(1.05); opacity: 1; }
      100% { transform: scale(1); }
    }

    .animate-bounce-in {
      animation: bounce-in 0.6s ease-out;
    }
  </style>
</head>
<body class="bg-gradient-to-b from-yellow-100 to-white min-h-screen">

  <!-- Navbar -->
  <nav class="flex items-center justify-between px-6 py-4 shadow-sm bg-white sticky top-0 z-50">
    <div class="flex items-center space-x-3">
      <img src="assets/logo.jpg" alt="Logo" class="h-10 w-10 object-contain rounded-full border border-yellow-400">
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

    <!-- Menu Desktop -->
    <ul class="hidden md:flex space-x-6 text-gray-700 font-medium">
      <li><a href="produk.php" class="hover:text-yellow-600 transition duration-300">Produk</a></li>
      <li><a href="tentang.php" class="hover:text-yellow-600 transition duration-300">Tentang</a></li>
      <li><a href="kontak.php" class="hover:text-yellow-600 transition duration-300">Hubungi Kami</a></li>
    </ul>
  </nav>

  <!-- Menu Mobile -->
  <div id="mobileMenu" class="md:hidden hidden bg-white shadow-md px-6 pt-2 pb-4 space-y-2 text-gray-700 font-medium">
    <a href="produk.php" class="block hover:text-yellow-600 transition duration-300">Produk</a>
    <a href="tentang.php" class="block hover:text-yellow-600 transition duration-300">Tentang</a>
    <a href="kontak.php" class="block hover:text-yellow-600 transition duration-300">Hubungi Kami</a>
  </div>

  <!-- Hero Section -->
  <section class="flex flex-col-reverse md:flex-row items-center justify-between px-6 md:px-20 py-24">
    <div class="md:w-1/2 text-center md:text-left">
      <h1 class="text-fade text-4xl md:text-6xl font-bold text-yellow-700 leading-tight mb-6">
        Kesegaran<br>Dalam Setiap Tegukan
      </h1>
      <p class="text-fade text-gray-600 text-lg mb-8">
        Nikmati minuman alami, sehat, dan menyegarkan yang diracik khusus untuk mood terbaikmu.
      </p>
      <a href="produk.php" class="text-fade inline-block bg-yellow-500 hover:bg-yellow-600 text-white px-8 py-3 rounded-full font-semibold shadow-md transition duration-300">
        Lihat Produk
      </a>
    </div>
    <div class="md:w-1/2 mb-10 md:mb-0 flex justify-center">
      <img src="assets/minuman6.png" alt="Minuman"
        class="fade-in-start opacity-0 translate-y-4 transform transition-all duration-[1500ms] ease-in-out
               w-2/3 sm:w-3/4 md:w-full max-w-xs sm:max-w-sm md:max-w-md">
    </div>
  </section>

  <!-- Footer -->
  <footer class="text-center py-6 text-gray-500 text-sm border-t mt-10">
    &copy; <?= date("Y") ?> ParTea. All rights reserved.
  </footer>

  <!-- Popup Diskon -->
  <div id="popupDiskon" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
    <div class="bg-white rounded-2xl shadow-xl p-6 max-w-sm w-full text-center animate-bounce-in">
      <h2 class="text-2xl font-bold text-yellow-600 mb-2">🎉🎉🎉</h2>
      <p class="text-gray-600 mb-4">Khusus pengguna pertama kamu bisa mendapatkan partea dengan harga yang murah!!! jangan lewatkan diskon ini klik klaim diskon untuk mendapat harga yang lebih murah.</p>
      <div class="flex justify-center gap-4">
        <button id="btnKlaim" class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-full font-semibold transition">Klaim Diskon</button>
        <button id="btnTutup" class="text-gray-500 hover:text-gray-700 transition font-medium">Tutup</button>
      </div>
    </div>
  </div>

  <!-- Script -->
  <script>
    document.addEventListener("DOMContentLoaded", () => {
      // Gambar fade + slide up
      document.querySelectorAll('.fade-in-start').forEach(el => {
        setTimeout(() => {
          el.classList.remove('opacity-0', 'translate-y-4');
        }, 300);
      });

      // Teks fade + slide up
      document.querySelectorAll('.text-fade').forEach((el, i) => {
        el.classList.add("opacity-0", "translate-y-4", "transform", "transition-all", "duration-[1200ms]", "ease-in-out");
        setTimeout(() => {
          el.classList.remove("opacity-0", "translate-y-4");
        }, 400 + (i * 150));
      });

      // Toggle Mobile Menu
      const burgerBtn = document.getElementById("burgerBtn");
      const mobileMenu = document.getElementById("mobileMenu");

      burgerBtn.addEventListener("click", () => {
        mobileMenu.classList.toggle("hidden");
      });

      // Popup Diskon
      const popup = document.getElementById('popupDiskon');
      const btnTutup = document.getElementById('btnTutup');
      const btnKlaim = document.getElementById('btnKlaim');

      if (!sessionStorage.getItem('popupDiskonDitutup')) {
        popup.classList.remove('hidden');
      }

      btnTutup.addEventListener('click', () => {
        popup.classList.add('hidden');
        sessionStorage.setItem('popupDiskonDitutup', 'true');
      });

btnKlaim.addEventListener('click', () => {
  alert("Selamat! Diskon berhasil diklaim 🎉");
  sessionStorage.setItem('popupDiskonDitutup', 'true');
  window.location.href = 'produk.php?diskon=1';
});
    });
  </script>

</body>
</html>
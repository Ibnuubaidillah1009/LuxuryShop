<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Tentang Kami - ParTea</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
    body { font-family: 'Poppins', sans-serif; }
    .fade-item {
      opacity: 0;
      transform: translateY(20px);
      transition: all 0.8s ease;
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

    <ul class="hidden md:flex space-x-6 text-gray-700 font-medium">
      <li><a href="index.php" class="hover:text-yellow-600 transition">Beranda</a></li>
      <li><a href="produk.php" class="hover:text-yellow-600 transition">Produk</a></li>
      <li><a href="tentang.php" class="text-yellow-600 font-semibold">Tentang</a></li>
      <li><a href="kontak.php" class="hover:text-yellow-600 transition">Hubungi kami</a></li>
    </ul>
  </nav>

  <!-- Mobile Menu -->
  <div id="mobileMenu" class="md:hidden hidden bg-white shadow-md px-6 pt-2 pb-4 space-y-2 text-gray-700 font-medium">
    <a href="index.php" class="block hover:text-yellow-600 transition">Beranda</a>
    <a href="produk.php" class="block hover:text-yellow-600 transition">Produk</a>
    <a href="tentang.php" class="text-yellow-600 font-semibold">Tentang</a>
    <a href="kontak.php" class="block hover:text-yellow-600 transition">Kontak</a>
  </div>

  <!-- Tentang Section -->
  <section class="px-6 md:px-20 py-16">
    <h1 class="fade-item text-4xl font-bold text-yellow-700 mb-6">Tentang ParTea</h1>
    <p class="fade-item text-gray-700 text-lg leading-relaxed mb-4">
      ParTea adalah brand minuman lokal yang menyajikan kombinasi teh alami dan buah-buahan segar, cocok untuk menemani harimu kapan pun dan di mana pun.
    </p>
    <p class="fade-item text-gray-600 leading-relaxed">
      Kami berdiri sejak tahun 2020 dan berkomitmen untuk menghadirkan minuman berkualitas tinggi, sehat, dan menyegarkan. Produk kami diracik dengan cinta, tanpa pengawet dan pemanis buatan.
    </p>
  </section>

  <!-- Footer -->
  <footer class="text-center py-6 text-gray-500 text-sm border-t mt-10">
    &copy; <?= date("Y") ?> ParTea. All rights reserved.
  </footer>

  <!-- Script -->
  <script>
    document.addEventListener("DOMContentLoaded", () => {
      const burgerBtn = document.getElementById("burgerBtn");
      const mobileMenu = document.getElementById("mobileMenu");

      burgerBtn.addEventListener("click", () => {
        mobileMenu.classList.toggle("hidden");
      });

      // Fade-in animation
      const items = document.querySelectorAll('.fade-item');
      items.forEach((item, index) => {
        setTimeout(() => {
          item.classList.add('fade-in');
        }, 200 + index * 200);
      });
    });
  </script>

</body>
</html>
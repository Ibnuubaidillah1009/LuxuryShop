<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Kontak Kami - ParTea</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
    body { font-family: 'Poppins', sans-serif; }
  </style>
</head>
<body class="bg-gradient-to-b from-yellow-100 to-white min-h-screen">

  <!-- Navbar -->
  <nav class="flex items-center justify-between px-6 py-4 shadow-sm bg-white sticky top-0 z-50">
    <div class="flex items-center space-x-3">
      <img src="assets/logo.png" alt="Logo" class="h-10 w-10 object-contain rounded-full border border-yellow-400">
      <span class="text-2xl font-bold text-yellow-600">ParTea</span>
    </div>
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
      <li><a href="tentang.php" class="hover:text-yellow-600 transition">Tentang</a></li>
      <li><a href="kontak.php" class="text-yellow-600 font-semibold">Hubungi kami</a></li>
    </ul>
  </nav>

  <!-- Mobile Menu -->
  <div id="mobileMenu" class="md:hidden hidden bg-white shadow-md px-6 pt-2 pb-4 space-y-2 text-gray-700 font-medium">
    <a href="index.php" class="block hover:text-yellow-600 transition">Beranda</a>
    <a href="produk.php" class="block hover:text-yellow-600 transition">Produk</a>
    <a href="tentang.php" class="block hover:text-yellow-600 transition">Tentang</a>
    <a href="kontak.php" class="block text-yellow-600 font-semibold">Hubungi kami</a>
  </div>

  <!-- Kontak Section -->
  <section class="px-6 md:px-20 py-16">
    <h1 class="fade-item text-4xl font-bold text-yellow-700 mb-6 opacity-0 translate-y-4 transition-all duration-1000 ease-in-out">Hubungi Kami</h1>
    <p class="fade-item text-gray-700 mb-10 opacity-0 translate-y-4 transition-all duration-1000 ease-in-out">Kami siap membantu Anda! Silakan isi formulir di bawah ini atau hubungi kami langsung melalui kontak yang tersedia.</p>

    <form action="#" method="POST" class="bg-white shadow-lg rounded-2xl p-8 max-w-2xl mx-auto space-y-6">
      <div class="fade-item opacity-0 translate-y-4 transition-all duration-1000 ease-in-out">
        <label class="block text-gray-700 mb-2">Nama Lengkap</label>
        <input type="text" name="nama" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-400" required>
      </div>
      <div class="fade-item opacity-0 translate-y-4 transition-all duration-1000 ease-in-out">
        <label class="block text-gray-700 mb-2">Email</label>
        <input type="email" name="email" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-400" required>
      </div>
      <div class="fade-item opacity-0 translate-y-4 transition-all duration-1000 ease-in-out">
        <label class="block text-gray-700 mb-2">No Telepon</label>
        <input type="number" name="number" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-400" required>
      </div>
      <div class="fade-item opacity-0 translate-y-4 transition-all duration-1000 ease-in-out">
        <label class="block text-gray-700 mb-2">Pesan</label>
        <textarea name="pesan" rows="5" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-400" required></textarea>
      </div>
      <div class="fade-item opacity-0 translate-y-4 transition-all duration-1000 ease-in-out">
        <button type="submit" class="bg-yellow-500 text-white px-6 py-3 rounded-full font-semibold hover:bg-yellow-600 transition">Kirim Pesan</button>
      </div>
    </form>
  </section>

  <!-- Footer -->
  <footer class="text-center py-6 text-gray-500 text-sm border-t mt-10">
    &copy; <?= date("Y") ?> ParTea. All rights reserved.
  </footer>

  <!-- Script -->
  <script>
    document.addEventListener("DOMContentLoaded", () => {
      // Burger Menu
      const burgerBtn = document.getElementById("burgerBtn");
      const mobileMenu = document.getElementById("mobileMenu");

      burgerBtn.addEventListener("click", () => {
        mobileMenu.classList.toggle("hidden");
      });

      // Smooth fade animation
      const fadeItems = document.querySelectorAll('.fade-item');
      fadeItems.forEach((el, index) => {
        setTimeout(() => {
          el.classList.remove('opacity-0', 'translate-y-4');
        }, 200 + index * 150);
      });
    });
  </script>

</body>
</html>
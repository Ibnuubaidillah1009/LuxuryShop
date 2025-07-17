<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Kontak - LuxuryShop</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    .font-primary { font-family: 'Playfair Display', serif; }
    .font-secondary { font-family: 'Inter', sans-serif; }
    
    body { 
      font-family: 'Inter', sans-serif;
      background: linear-gradient(135deg, #fef3c7 0%, #fffbeb 25%, #ffffff 50%, #fef3c7 75%, #fbbf24 100%);
      background-attachment: fixed;
    }

    .luxury-gradient {
      background: linear-gradient(135deg, #f59e0b 0%, #fbbf24 25%, #fcd34d 50%, #fde68a 75%, #ffffff 100%);
    }

    .glass-effect {
      background: rgba(255, 255, 255, 0.25);
      backdrop-filter: blur(10px);
      border: 1px solid rgba(255, 255, 255, 0.18);
    }

    .hover-lift {
      transition: all 0.3s ease;
    }
    
    .hover-lift:hover {
      transform: translateY(-8px);
      box-shadow: 0 20px 40px rgba(0,0,0,0.1);
    }

    .golden-text {
      background: linear-gradient(135deg, #f59e0b, #fbbf24, #fcd34d);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
    }

    .cart-counter {
      position: absolute;
      top: -8px;
      right: -8px;
      background: #ef4444;
      color: white;
      border-radius: 50%;
      width: 20px;
      height: 20px;
      font-size: 12px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: bold;
    }

    .fade-item {
      opacity: 0;
      transform: translateY(20px);
      transition: all 0.8s ease;
    }

    .fade-in {
      opacity: 1 !important;
      transform: translateY(0) !important;
    }

    .contact-card {
      transition: all 0.3s ease;
    }

    .contact-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 15px 35px rgba(0,0,0,0.1);
    }

    .form-group {
      position: relative;
    }

    .form-input {
      transition: all 0.3s ease;
      border: 2px solid #e5e7eb;
    }

    .form-input:focus {
      border-color: #fbbf24;
      box-shadow: 0 0 0 3px rgba(251, 191, 36, 0.1);
    }

    .floating-label {
      position: absolute;
      left: 12px;
      top: 50%;
      transform: translateY(-50%);
      background: white;
      padding: 0 8px;
      color: #6b7280;
      transition: all 0.3s ease;
      pointer-events: none;
    }

    .form-input:focus + .floating-label,
    .form-input:not(:placeholder-shown) + .floating-label {
      top: 0;
      font-size: 12px;
      color: #fbbf24;
    }

    .map-container {
      position: relative;
      overflow: hidden;
      border-radius: 1rem;
      height: 300px;
      background: linear-gradient(45deg, #f59e0b, #fbbf24);
    }
  </style>
</head>
<body class="min-h-screen">

  <!-- Header -->
  <header class="sticky top-0 z-50 glass-effect shadow-lg">
    <nav class="container mx-auto px-4 py-4 flex items-center justify-between">
      <!-- Logo -->
      <div class="flex items-center space-x-3">
        <div class="w-12 h-12 luxury-gradient rounded-full flex items-center justify-center">
          <i class="fas fa-gem text-white text-xl"></i>
        </div>
        <h1 class="text-2xl font-primary font-bold golden-text">LuxuryShop</h1>
      </div>

      <!-- Desktop Menu -->
      <ul class="hidden md:flex space-x-8 font-secondary font-medium text-gray-700">
        <li><a href="index.php" class="hover:text-yellow-600 transition duration-300">Beranda</a></li>
        <li><a href="produk.php" class="hover:text-yellow-600 transition duration-300">Produk</a></li>
        <li><a href="kategori.php" class="hover:text-yellow-600 transition duration-300">Kategori</a></li>
        <li><a href="tentang.php" class="hover:text-yellow-600 transition duration-300">Tentang</a></li>
        <li><a href="kontak.php" class="text-yellow-600 font-semibold">Kontak</a></li>
      </ul>

      <!-- Cart & Actions -->
      <div class="flex items-center space-x-4">
        <!-- Shopping Cart -->
        <div class="relative cursor-pointer" onclick="toggleCart()">
          <div class="p-3 hover:bg-yellow-100 rounded-full transition duration-300">
            <i class="fas fa-shopping-cart text-xl text-yellow-600"></i>
            <span id="cartCounter" class="cart-counter">0</span>
          </div>
        </div>

        <!-- Mobile Menu Button -->
        <button id="mobileMenuBtn" class="md:hidden p-2 text-yellow-600">
          <i class="fas fa-bars text-xl"></i>
        </button>
      </div>
    </nav>

    <!-- Mobile Menu -->
    <div id="mobileMenu" class="md:hidden hidden bg-white/90 backdrop-blur-lg border-t border-yellow-200">
      <div class="container mx-auto px-4 py-4 space-y-4">
        <a href="index.php" class="block py-2 text-gray-700 hover:text-yellow-600">Beranda</a>
        <a href="produk.php" class="block py-2 text-gray-700 hover:text-yellow-600">Produk</a>
        <a href="kategori.php" class="block py-2 text-gray-700 hover:text-yellow-600">Kategori</a>
        <a href="tentang.php" class="block py-2 text-gray-700 hover:text-yellow-600">Tentang</a>
        <a href="kontak.php" class="block py-2 text-yellow-600 font-semibold">Kontak</a>
      </div>
    </div>
  </header>

  <!-- Page Header -->
  <section class="container mx-auto px-4 py-16">
    <div class="text-center">
      <h1 class="text-5xl font-primary font-bold golden-text mb-4">Hubungi Kami</h1>
      <p class="text-xl text-gray-600 font-secondary">Kami siap membantu Anda dengan pelayanan terbaik 24/7</p>
    </div>
  </section>

  <!-- Contact Info Cards -->
  <section class="container mx-auto px-4 py-12">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
      
      <!-- Phone -->
      <div class="contact-card fade-item glass-effect rounded-2xl p-8 text-center shadow-lg">
        <div class="w-16 h-16 luxury-gradient rounded-full flex items-center justify-center mx-auto mb-6">
          <i class="fas fa-phone text-white text-2xl"></i>
        </div>
        <h3 class="text-xl font-bold mb-3">Telepon</h3>
        <p class="text-gray-600 mb-4">Hubungi customer service kami</p>
        <a href="tel:+6281234567890" class="text-yellow-600 font-semibold hover:text-yellow-700 transition">
          +62 812-3456-7890
        </a>
      </div>

      <!-- Email -->
      <div class="contact-card fade-item glass-effect rounded-2xl p-8 text-center shadow-lg">
        <div class="w-16 h-16 luxury-gradient rounded-full flex items-center justify-center mx-auto mb-6">
          <i class="fas fa-envelope text-white text-2xl"></i>
        </div>
        <h3 class="text-xl font-bold mb-3">Email</h3>
        <p class="text-gray-600 mb-4">Kirim pertanyaan Anda</p>
        <a href="mailto:info@luxuryshop.com" class="text-yellow-600 font-semibold hover:text-yellow-700 transition">
          info@luxuryshop.com
        </a>
      </div>

      <!-- WhatsApp -->
      <div class="contact-card fade-item glass-effect rounded-2xl p-8 text-center shadow-lg">
        <div class="w-16 h-16 luxury-gradient rounded-full flex items-center justify-center mx-auto mb-6">
          <i class="fab fa-whatsapp text-white text-2xl"></i>
        </div>
        <h3 class="text-xl font-bold mb-3">WhatsApp</h3>
        <p class="text-gray-600 mb-4">Chat langsung dengan tim kami</p>
        <a href="https://wa.me/6281234567890" class="text-yellow-600 font-semibold hover:text-yellow-700 transition">
          +62 812-3456-7890
        </a>
      </div>

      <!-- Address -->
      <div class="contact-card fade-item glass-effect rounded-2xl p-8 text-center shadow-lg">
        <div class="w-16 h-16 luxury-gradient rounded-full flex items-center justify-center mx-auto mb-6">
          <i class="fas fa-map-marker-alt text-white text-2xl"></i>
        </div>
        <h3 class="text-xl font-bold mb-3">Alamat</h3>
        <p class="text-gray-600 mb-4">Kunjungi kantor kami</p>
        <p class="text-gray-700 text-sm">
          Jl. Sudirman No. 123<br>
          Jakarta Pusat, 10220
        </p>
      </div>

    </div>
  </section>

  <!-- Contact Form & Map -->
  <section class="container mx-auto px-4 py-20">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
      
      <!-- Contact Form -->
      <div class="fade-item">
        <div class="glass-effect rounded-2xl p-8 shadow-lg">
          <h2 class="text-3xl font-primary font-bold golden-text mb-6">Kirim Pesan</h2>
          <p class="text-gray-600 mb-8">
            Isi formulir di bawah ini dan tim kami akan merespons dalam waktu 24 jam.
          </p>
          
          <form id="contactForm" class="space-y-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
              <div class="form-group">
                <input type="text" name="firstName" class="form-input w-full px-4 py-3 rounded-lg focus:outline-none" placeholder=" " required>
                <label class="floating-label">Nama Depan*</label>
              </div>
              <div class="form-group">
                <input type="text" name="lastName" class="form-input w-full px-4 py-3 rounded-lg focus:outline-none" placeholder=" " required>
                <label class="floating-label">Nama Belakang*</label>
              </div>
            </div>
            
            <div class="form-group">
              <input type="email" name="email" class="form-input w-full px-4 py-3 rounded-lg focus:outline-none" placeholder=" " required>
              <label class="floating-label">Email*</label>
            </div>
            
            <div class="form-group">
              <input type="tel" name="phone" class="form-input w-full px-4 py-3 rounded-lg focus:outline-none" placeholder=" ">
              <label class="floating-label">Nomor Telepon</label>
            </div>
            
            <div class="form-group">
              <select name="subject" class="form-input w-full px-4 py-3 rounded-lg focus:outline-none" required>
                <option value="">Pilih Topik</option>
                <option value="general">Pertanyaan Umum</option>
                <option value="order">Pertanyaan Pesanan</option>
                <option value="product">Informasi Produk</option>
                <option value="complaint">Keluhan</option>
                <option value="suggestion">Saran</option>
                <option value="partnership">Kerjasama</option>
              </select>
            </div>
            
            <div class="form-group">
              <textarea name="message" rows="5" class="form-input w-full px-4 py-3 rounded-lg focus:outline-none resize-none" placeholder="Tulis pesan Anda di sini..." required></textarea>
            </div>
            
            <div class="flex items-start space-x-3">
              <input type="checkbox" id="privacy" name="privacy" class="mt-1" required>
              <label for="privacy" class="text-sm text-gray-600">
                Saya setuju dengan <a href="#" class="text-yellow-600 hover:text-yellow-700">Kebijakan Privasi</a> 
                dan <a href="#" class="text-yellow-600 hover:text-yellow-700">Syarat & Ketentuan</a>*
              </label>
            </div>
            
            <button type="submit" class="w-full luxury-gradient text-white py-4 rounded-lg font-semibold hover-lift">
              <i class="fas fa-paper-plane mr-2"></i>Kirim Pesan
            </button>
          </form>
        </div>
      </div>

      <!-- Map & Additional Info -->
      <div class="fade-item space-y-8">
        
        <!-- Map -->
        <div class="glass-effect rounded-2xl p-8 shadow-lg">
          <h3 class="text-2xl font-bold mb-6">Lokasi Kami</h3>
          <div class="map-container flex items-center justify-center text-white">
            <div class="text-center">
              <i class="fas fa-map-marked-alt text-6xl mb-4"></i>
              <h4 class="text-xl font-bold mb-2">LuxuryShop HQ</h4>
              <p>Jl. Sudirman No. 123, Jakarta Pusat</p>
              <p class="mt-2 text-sm opacity-90">Buka: Senin - Jumat, 09:00 - 18:00</p>
            </div>
          </div>
        </div>

        <!-- Business Hours -->
        <div class="glass-effect rounded-2xl p-8 shadow-lg">
          <h3 class="text-2xl font-bold mb-6">Jam Operasional</h3>
          <div class="space-y-4">
            <div class="flex justify-between items-center">
              <span class="font-semibold">Customer Service</span>
              <span class="text-yellow-600">24/7</span>
            </div>
            <div class="flex justify-between items-center">
              <span class="font-semibold">WhatsApp Support</span>
              <span class="text-gray-600">08:00 - 22:00</span>
            </div>
            <div class="flex justify-between items-center">
              <span class="font-semibold">Kantor</span>
              <span class="text-gray-600">09:00 - 18:00</span>
            </div>
            <div class="flex justify-between items-center">
              <span class="font-semibold">Pengiriman</span>
              <span class="text-gray-600">Senin - Sabtu</span>
            </div>
          </div>
        </div>

        <!-- Social Media -->
        <div class="glass-effect rounded-2xl p-8 shadow-lg">
          <h3 class="text-2xl font-bold mb-6">Ikuti Kami</h3>
          <div class="grid grid-cols-2 gap-4">
            <a href="#" class="flex items-center space-x-3 p-4 bg-blue-50 rounded-lg hover:bg-blue-100 transition">
              <i class="fab fa-facebook-f text-blue-600 text-xl"></i>
              <span class="font-semibold">Facebook</span>
            </a>
            <a href="#" class="flex items-center space-x-3 p-4 bg-pink-50 rounded-lg hover:bg-pink-100 transition">
              <i class="fab fa-instagram text-pink-600 text-xl"></i>
              <span class="font-semibold">Instagram</span>
            </a>
            <a href="#" class="flex items-center space-x-3 p-4 bg-blue-50 rounded-lg hover:bg-blue-100 transition">
              <i class="fab fa-twitter text-blue-500 text-xl"></i>
              <span class="font-semibold">Twitter</span>
            </a>
            <a href="#" class="flex items-center space-x-3 p-4 bg-red-50 rounded-lg hover:bg-red-100 transition">
              <i class="fab fa-youtube text-red-600 text-xl"></i>
              <span class="font-semibold">YouTube</span>
            </a>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- FAQ Section -->
  <section class="container mx-auto px-4 py-20">
    <div class="text-center mb-16">
      <h2 class="text-4xl font-primary font-bold golden-text mb-4">Pertanyaan Sering Diajukan</h2>
      <p class="text-xl text-gray-600 font-secondary">Temukan jawaban untuk pertanyaan umum</p>
    </div>

    <div class="max-w-4xl mx-auto">
      <div class="space-y-4">
        
        <div class="glass-effect rounded-lg shadow-lg overflow-hidden">
          <button class="faq-toggle w-full px-6 py-4 text-left font-semibold hover:bg-yellow-50 transition flex items-center justify-between">
            <span>Bagaimana cara melakukan pemesanan?</span>
            <i class="fas fa-chevron-down transition-transform"></i>
          </button>
          <div class="faq-content hidden px-6 pb-4">
            <p class="text-gray-600">
              Anda dapat melakukan pemesanan melalui website kami. Pilih produk yang diinginkan, 
              masukkan ke keranjang, isi data pengiriman, pilih metode pembayaran, dan konfirmasi pesanan.
            </p>
          </div>
        </div>

        <div class="glass-effect rounded-lg shadow-lg overflow-hidden">
          <button class="faq-toggle w-full px-6 py-4 text-left font-semibold hover:bg-yellow-50 transition flex items-center justify-between">
            <span>Metode pembayaran apa saja yang tersedia?</span>
            <i class="fas fa-chevron-down transition-transform"></i>
          </button>
          <div class="faq-content hidden px-6 pb-4">
            <p class="text-gray-600">
              Kami menerima pembayaran melalui transfer bank, e-wallet (GoPay, OVO, DANA), 
              kartu kredit, dan cash on delivery (COD) untuk area tertentu.
            </p>
          </div>
        </div>

        <div class="glass-effect rounded-lg shadow-lg overflow-hidden">
          <button class="faq-toggle w-full px-6 py-4 text-left font-semibold hover:bg-yellow-50 transition flex items-center justify-between">
            <span>Berapa lama waktu pengiriman?</span>
            <i class="fas fa-chevron-down transition-transform"></i>
          </button>
          <div class="faq-content hidden px-6 pb-4">
            <p class="text-gray-600">
              Waktu pengiriman bervariasi: Reguler (3-5 hari), Express (1-2 hari), 
              dan Same Day (hari yang sama untuk Jakarta & sekitarnya).
            </p>
          </div>
        </div>

        <div class="glass-effect rounded-lg shadow-lg overflow-hidden">
          <button class="faq-toggle w-full px-6 py-4 text-left font-semibold hover:bg-yellow-50 transition flex items-center justify-between">
            <span>Apakah ada garansi untuk produk?</span>
            <i class="fas fa-chevron-down transition-transform"></i>
          </button>
          <div class="faq-content hidden px-6 pb-4">
            <p class="text-gray-600">
              Ya, semua produk kami dilengkapi dengan garansi kualitas. 
              Anda dapat mengembalikan atau menukar produk dalam 7 hari jika ada masalah kualitas.
            </p>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Shopping Cart Sidebar -->
  <div id="cartSidebar" class="fixed right-0 top-0 h-full w-80 bg-white shadow-2xl transform translate-x-full transition-transform duration-300 z-50">
    <div class="p-6 border-b border-gray-200">
      <div class="flex items-center justify-between">
        <h3 class="text-xl font-primary font-bold">Keranjang Belanja</h3>
        <button onclick="toggleCart()" class="text-gray-500 hover:text-gray-700">
          <i class="fas fa-times text-xl"></i>
        </button>
      </div>
    </div>
    
    <div id="cartItems" class="flex-1 overflow-y-auto p-6">
      <!-- Cart items will be dynamically added here -->
    </div>
    
    <div class="border-t border-gray-200 p-6">
      <div class="flex items-center justify-between mb-4">
        <span class="font-bold text-lg">Total:</span>
        <span id="cartTotal" class="font-bold text-xl text-yellow-600">Rp 0</span>
      </div>
      <button onclick="checkout()" class="w-full luxury-gradient text-white py-3 rounded-full font-semibold hover-lift">
        <i class="fas fa-credit-card mr-2"></i>Checkout
      </button>
    </div>
  </div>

  <!-- Cart Overlay -->
  <div id="cartOverlay" class="fixed inset-0 bg-black bg-opacity-50 z-40 hidden" onclick="toggleCart()"></div>

  <!-- Footer -->
  <footer class="bg-gray-900 text-white py-16">
    <div class="container mx-auto px-4">
      <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
        <div>
          <div class="flex items-center space-x-3 mb-6">
            <div class="w-10 h-10 luxury-gradient rounded-full flex items-center justify-center">
              <i class="fas fa-gem text-white"></i>
            </div>
            <h3 class="text-xl font-primary font-bold">LuxuryShop</h3>
          </div>
          <p class="text-gray-400 mb-4">Destinasi belanja online terpercaya untuk produk premium dan berkualitas tinggi.</p>
          <div class="flex space-x-4">
            <a href="#" class="text-gray-400 hover:text-yellow-400"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="text-gray-400 hover:text-yellow-400"><i class="fab fa-instagram"></i></a>
            <a href="#" class="text-gray-400 hover:text-yellow-400"><i class="fab fa-twitter"></i></a>
          </div>
        </div>
        
        <div>
          <h4 class="font-bold mb-4">Layanan</h4>
          <ul class="space-y-2 text-gray-400">
            <li><a href="#" class="hover:text-yellow-400">Pengiriman</a></li>
            <li><a href="#" class="hover:text-yellow-400">Pembayaran</a></li>
            <li><a href="#" class="hover:text-yellow-400">Garansi</a></li>
            <li><a href="#" class="hover:text-yellow-400">Pengembalian</a></li>
          </ul>
        </div>
        
        <div>
          <h4 class="font-bold mb-4">Bantuan</h4>
          <ul class="space-y-2 text-gray-400">
            <li><a href="#" class="hover:text-yellow-400">FAQ</a></li>
            <li><a href="kontak.php" class="hover:text-yellow-400">Kontak</a></li>
            <li><a href="#" class="hover:text-yellow-400">Panduan</a></li>
            <li><a href="#" class="hover:text-yellow-400">Kebijakan</a></li>
          </ul>
        </div>
        
        <div>
          <h4 class="font-bold mb-4">Newsletter</h4>
          <p class="text-gray-400 mb-4">Dapatkan penawaran eksklusif dan update produk terbaru.</p>
          <div class="flex">
            <input type="email" placeholder="Email Anda" class="flex-1 px-4 py-2 rounded-l-full focus:outline-none text-gray-800">
            <button class="luxury-gradient px-6 py-2 rounded-r-full">
              <i class="fas fa-paper-plane"></i>
            </button>
          </div>
        </div>
      </div>
      
      <div class="border-t border-gray-800 mt-12 pt-8 text-center text-gray-400">
        <p>&copy; <?= date("Y") ?> LuxuryShop. All rights reserved.</p>
      </div>
    </div>
  </footer>

  <!-- JavaScript -->
  <script>
    let cart = [];

    // Mobile menu toggle
    document.getElementById('mobileMenuBtn').addEventListener('click', function() {
      const mobileMenu = document.getElementById('mobileMenu');
      mobileMenu.classList.toggle('hidden');
    });

    // Animate elements on page load
    document.addEventListener('DOMContentLoaded', function() {
      const items = document.querySelectorAll('.fade-item');
      items.forEach((item, index) => {
        setTimeout(() => {
          item.classList.add('fade-in');
        }, 200 + index * 150);
      });
      
      // Initialize cart display
      updateCartDisplay();
      
      // Setup FAQ toggles
      setupFAQ();
      
      // Setup contact form
      setupContactForm();
    });

    // FAQ functionality
    function setupFAQ() {
      const faqToggles = document.querySelectorAll('.faq-toggle');
      faqToggles.forEach(toggle => {
        toggle.addEventListener('click', function() {
          const content = this.nextElementSibling;
          const icon = this.querySelector('i');
          
          if (content.classList.contains('hidden')) {
            content.classList.remove('hidden');
            icon.style.transform = 'rotate(180deg)';
          } else {
            content.classList.add('hidden');
            icon.style.transform = 'rotate(0deg)';
          }
        });
      });
    }

    // Contact form functionality
    function setupContactForm() {
      const form = document.getElementById('contactForm');
      form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Show loading state
        const submitBtn = form.querySelector('button[type="submit"]');
        const originalText = submitBtn.innerHTML;
        submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i>Mengirim...';
        submitBtn.disabled = true;
        
        // Simulate form submission
        setTimeout(() => {
          showNotification('Pesan berhasil dikirim! Kami akan membalas dalam 24 jam.', 'success');
          form.reset();
          
          // Reset button
          submitBtn.innerHTML = originalText;
          submitBtn.disabled = false;
        }, 2000);
      });
    }

    // Shopping cart functions
    function toggleCart() {
      const sidebar = document.getElementById('cartSidebar');
      const overlay = document.getElementById('cartOverlay');
      
      if (sidebar.classList.contains('translate-x-full')) {
        sidebar.classList.remove('translate-x-full');
        overlay.classList.remove('hidden');
        document.body.style.overflow = 'hidden';
      } else {
        sidebar.classList.add('translate-x-full');
        overlay.classList.add('hidden');
        document.body.style.overflow = 'auto';
      }
    }

    function updateCartDisplay() {
      const cartItems = document.getElementById('cartItems');
      const cartCounter = document.getElementById('cartCounter');
      const cartTotal = document.getElementById('cartTotal');
      
      // Load cart from localStorage if exists
      const storedCart = localStorage.getItem('cart');
      if (storedCart) {
        cart = JSON.parse(storedCart);
      }
      
      // Update counter
      const totalItems = cart.reduce((sum, item) => sum + item.quantity, 0);
      cartCounter.textContent = totalItems;
      cartCounter.style.display = totalItems > 0 ? 'flex' : 'none';
      
      // Update total
      const total = cart.reduce((sum, item) => sum + (item.price * item.quantity), 0);
      cartTotal.textContent = 'Rp ' + total.toLocaleString('id-ID');
      
      // Update cart items
      if (cart.length === 0) {
        cartItems.innerHTML = '<p class="text-gray-500 text-center">Keranjang kosong</p>';
      } else {
        cartItems.innerHTML = cart.map(item => `
          <div class="flex items-center space-x-4 mb-4 p-4 bg-gray-50 rounded-lg">
            <img src="${item.image}" alt="${item.name}" class="w-16 h-16 object-cover rounded-lg">
            <div class="flex-1">
              <h4 class="font-semibold">${item.name}</h4>
              <p class="text-yellow-600 font-bold">Rp ${item.price.toLocaleString('id-ID')}</p>
              <div class="flex items-center space-x-2 mt-2">
                <button onclick="updateQuantity('${item.name}', -1)" class="w-8 h-8 bg-gray-200 rounded-full flex items-center justify-center hover:bg-gray-300">
                  <i class="fas fa-minus text-sm"></i>
                </button>
                <span class="w-8 text-center font-semibold">${item.quantity}</span>
                <button onclick="updateQuantity('${item.name}', 1)" class="w-8 h-8 bg-gray-200 rounded-full flex items-center justify-center hover:bg-gray-300">
                  <i class="fas fa-plus text-sm"></i>
                </button>
              </div>
            </div>
            <button onclick="removeFromCart('${item.name}')" class="text-red-500 hover:text-red-700">
              <i class="fas fa-trash"></i>
            </button>
          </div>
        `).join('');
      }
    }

    function removeFromCart(name) {
      cart = cart.filter(item => item.name !== name);
      localStorage.setItem('cart', JSON.stringify(cart));
      updateCartDisplay();
    }

    function updateQuantity(name, change) {
      const item = cart.find(item => item.name === name);
      if (item) {
        item.quantity += change;
        if (item.quantity <= 0) {
          removeFromCart(name);
        } else {
          localStorage.setItem('cart', JSON.stringify(cart));
          updateCartDisplay();
        }
      }
    }

    function checkout() {
      if (cart.length === 0) {
        showNotification('Keranjang masih kosong!', 'error');
        return;
      }
      
      window.location.href = 'checkout.php';
    }

    function showNotification(message, type = 'success') {
      const notification = document.createElement('div');
      notification.className = `fixed top-4 right-4 z-50 p-4 rounded-lg shadow-lg text-white font-semibold ${
        type === 'success' ? 'bg-green-500' : 'bg-red-500'
      }`;
      notification.textContent = message;
      
      document.body.appendChild(notification);
      
      setTimeout(() => {
        notification.remove();
      }, 3000);
    }
  </script>

</body>
</html>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Tentang Kami - LuxuryShop</title>
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

    .team-card {
      transition: all 0.3s ease;
    }

    .team-card:hover {
      transform: translateY(-5px);
    }

    .timeline-item {
      position: relative;
      padding-left: 2rem;
    }

    .timeline-item::before {
      content: '';
      position: absolute;
      left: 0;
      top: 0.5rem;
      width: 1rem;
      height: 1rem;
      background: #fbbf24;
      border-radius: 50%;
      box-shadow: 0 0 0 3px rgba(251, 191, 36, 0.3);
    }

    .stats-counter {
      font-size: 3rem;
      font-weight: bold;
      color: #f59e0b;
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
        <li><a href="tentang.php" class="text-yellow-600 font-semibold">Tentang</a></li>
        <li><a href="kontak.php" class="hover:text-yellow-600 transition duration-300">Kontak</a></li>
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
        <a href="tentang.php" class="block py-2 text-yellow-600 font-semibold">Tentang</a>
        <a href="kontak.php" class="block py-2 text-gray-700 hover:text-yellow-600">Kontak</a>
      </div>
    </div>
  </header>

  <!-- Page Header -->
  <section class="container mx-auto px-4 py-16">
    <div class="text-center">
      <h1 class="text-5xl font-primary font-bold golden-text mb-4">Tentang LuxuryShop</h1>
      <p class="text-xl text-gray-600 font-secondary">Perjalanan kami dalam menghadirkan produk premium untuk Anda</p>
    </div>
  </section>

  <!-- Hero About Section -->
  <section class="container mx-auto px-4 py-20">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
      <div class="fade-item">
        <h2 class="text-4xl font-primary font-bold golden-text mb-6">Visi & Misi Kami</h2>
        <div class="space-y-6">
          <div>
            <h3 class="text-2xl font-bold text-gray-800 mb-3">Visi</h3>
            <p class="text-gray-600 leading-relaxed">
              Menjadi destinasi utama belanja online untuk produk premium dan berkualitas tinggi, 
              memberikan pengalaman berbelanja yang tak terlupakan bagi setiap pelanggan.
            </p>
          </div>
          <div>
            <h3 class="text-2xl font-bold text-gray-800 mb-3">Misi</h3>
            <ul class="text-gray-600 space-y-2">
              <li class="flex items-start">
                <i class="fas fa-check-circle text-yellow-500 mt-1 mr-3"></i>
                Menyediakan produk berkualitas tinggi dengan standar internasional
              </li>
              <li class="flex items-start">
                <i class="fas fa-check-circle text-yellow-500 mt-1 mr-3"></i>
                Memberikan pelayanan pelanggan yang excellent dan responsif
              </li>
              <li class="flex items-start">
                <i class="fas fa-check-circle text-yellow-500 mt-1 mr-3"></i>
                Menghadirkan inovasi dalam pengalaman berbelanja online
              </li>
              <li class="flex items-start">
                <i class="fas fa-check-circle text-yellow-500 mt-1 mr-3"></i>
                Membangun komunitas pecinta produk premium yang loyal
              </li>
            </ul>
          </div>
        </div>
      </div>
      
      <div class="fade-item">
        <div class="relative">
          <div class="w-full h-96 luxury-gradient rounded-2xl flex items-center justify-center">
            <i class="fas fa-crown text-white text-8xl"></i>
          </div>
          <div class="absolute -bottom-6 -right-6 w-32 h-32 bg-white rounded-full shadow-lg flex items-center justify-center">
            <i class="fas fa-star text-yellow-500 text-4xl"></i>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Our Story Section -->
  <section class="container mx-auto px-4 py-20">
    <div class="text-center mb-16">
      <h2 class="text-4xl font-primary font-bold golden-text mb-4">Cerita Kami</h2>
      <p class="text-xl text-gray-600 font-secondary">Perjalanan dari ide hingga menjadi brand terpercaya</p>
    </div>

    <div class="glass-effect rounded-2xl p-8 shadow-lg">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
        <div class="space-y-6">
          <div class="timeline-item">
            <h3 class="text-xl font-bold mb-2">2020 - Awal Mula</h3>
            <p class="text-gray-600">
              LuxuryShop didirikan dengan visi untuk menghadirkan produk-produk premium berkualitas tinggi 
              yang dapat diakses oleh semua kalangan melalui platform online.
            </p>
          </div>
          
          <div class="timeline-item">
            <h3 class="text-xl font-bold mb-2">2021 - Ekspansi Produk</h3>
            <p class="text-gray-600">
              Menambah berbagai kategori produk premium dan menjalin kemitraan strategis dengan 
              brand-brand ternama untuk memperluas koleksi kami.
            </p>
          </div>
          
          <div class="timeline-item">
            <h3 class="text-xl font-bold mb-2">2022 - Teknologi Terdepan</h3>
            <p class="text-gray-600">
              Mengimplementasikan teknologi terbaru untuk meningkatkan pengalaman berbelanja online 
              dan sistem logistik yang lebih efisien.
            </p>
          </div>
          
          <div class="timeline-item">
            <h3 class="text-xl font-bold mb-2">2023 - Kepercayaan Pelanggan</h3>
            <p class="text-gray-600">
              Berhasil meraih kepercayaan lebih dari 100,000 pelanggan dengan rating kepuasan 
              4.8/5 dan menjadi marketplace premium terpercaya.
            </p>
          </div>
        </div>
        
        <div class="flex items-center justify-center">
          <div class="grid grid-cols-2 gap-8 text-center">
            <div class="p-6">
              <div class="stats-counter">100K+</div>
              <p class="text-gray-600 font-semibold">Pelanggan Puas</p>
            </div>
            <div class="p-6">
              <div class="stats-counter">500+</div>
              <p class="text-gray-600 font-semibold">Produk Premium</p>
            </div>
            <div class="p-6">
              <div class="stats-counter">50+</div>
              <p class="text-gray-600 font-semibold">Brand Partner</p>
            </div>
            <div class="p-6">
              <div class="stats-counter">4.8</div>
              <p class="text-gray-600 font-semibold">Rating Kepuasan</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Values Section -->
  <section class="container mx-auto px-4 py-20">
    <div class="text-center mb-16">
      <h2 class="text-4xl font-primary font-bold golden-text mb-4">Nilai-Nilai Kami</h2>
      <p class="text-xl text-gray-600 font-secondary">Prinsip yang menjadi fondasi dalam setiap langkah kami</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
      <div class="fade-item text-center p-8 glass-effect rounded-2xl shadow-lg hover-lift">
        <div class="w-20 h-20 luxury-gradient rounded-full flex items-center justify-center mx-auto mb-6">
          <i class="fas fa-gem text-white text-3xl"></i>
        </div>
        <h3 class="text-xl font-bold mb-4">Kualitas Premium</h3>
        <p class="text-gray-600">
          Kami hanya menyediakan produk dengan standar kualitas tertinggi yang telah melewati seleksi ketat.
        </p>
      </div>

      <div class="fade-item text-center p-8 glass-effect rounded-2xl shadow-lg hover-lift">
        <div class="w-20 h-20 luxury-gradient rounded-full flex items-center justify-center mx-auto mb-6">
          <i class="fas fa-handshake text-white text-3xl"></i>
        </div>
        <h3 class="text-xl font-bold mb-4">Integritas</h3>
        <p class="text-gray-600">
          Kejujuran dan transparansi dalam setiap transaksi adalah komitmen utama kami kepada pelanggan.
        </p>
      </div>

      <div class="fade-item text-center p-8 glass-effect rounded-2xl shadow-lg hover-lift">
        <div class="w-20 h-20 luxury-gradient rounded-full flex items-center justify-center mx-auto mb-6">
          <i class="fas fa-rocket text-white text-3xl"></i>
        </div>
        <h3 class="text-xl font-bold mb-4">Inovasi</h3>
        <p class="text-gray-600">
          Terus berinovasi dalam teknologi dan layanan untuk memberikan pengalaman terbaik bagi pelanggan.
        </p>
      </div>

      <div class="fade-item text-center p-8 glass-effect rounded-2xl shadow-lg hover-lift">
        <div class="w-20 h-20 luxury-gradient rounded-full flex items-center justify-center mx-auto mb-6">
          <i class="fas fa-heart text-white text-3xl"></i>
        </div>
        <h3 class="text-xl font-bold mb-4">Kepedulian</h3>
        <p class="text-gray-600">
          Mengutamakan kepuasan pelanggan dan memberikan dukungan penuh dalam setiap langkah perjalanan berbelanja.
        </p>
      </div>
    </div>
  </section>

  <!-- Team Section -->
  <section class="container mx-auto px-4 py-20">
    <div class="text-center mb-16">
      <h2 class="text-4xl font-primary font-bold golden-text mb-4">Tim Kami</h2>
      <p class="text-xl text-gray-600 font-secondary">Orang-orang hebat di balik kesuksesan LuxuryShop</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      <div class="team-card glass-effect rounded-2xl p-8 text-center shadow-lg">
        <div class="w-24 h-24 luxury-gradient rounded-full flex items-center justify-center mx-auto mb-6">
          <i class="fas fa-user text-white text-3xl"></i>
        </div>
        <h3 class="text-xl font-bold mb-2">Andreas Wijaya</h3>
        <p class="text-yellow-600 font-semibold mb-4">CEO & Founder</p>
        <p class="text-gray-600 text-sm">
          Visioner dengan pengalaman 15+ tahun di industri e-commerce premium dan teknologi.
        </p>
      </div>

      <div class="team-card glass-effect rounded-2xl p-8 text-center shadow-lg">
        <div class="w-24 h-24 luxury-gradient rounded-full flex items-center justify-center mx-auto mb-6">
          <i class="fas fa-user text-white text-3xl"></i>
        </div>
        <h3 class="text-xl font-bold mb-2">Sarah Putri</h3>
        <p class="text-yellow-600 font-semibold mb-4">Head of Product</p>
        <p class="text-gray-600 text-sm">
          Expert dalam kurasi produk premium dengan background fashion dan lifestyle luxury.
        </p>
      </div>

      <div class="team-card glass-effect rounded-2xl p-8 text-center shadow-lg">
        <div class="w-24 h-24 luxury-gradient rounded-full flex items-center justify-center mx-auto mb-6">
          <i class="fas fa-user text-white text-3xl"></i>
        </div>
        <h3 class="text-xl font-bold mb-2">Michael Chen</h3>
        <p class="text-yellow-600 font-semibold mb-4">CTO</p>
        <p class="text-gray-600 text-sm">
          Tech enthusiast yang memimpin pengembangan platform dengan teknologi terdepan.
        </p>
      </div>
    </div>
  </section>

  <!-- CTA Section -->
  <section class="container mx-auto px-4 py-20">
    <div class="glass-effect rounded-2xl p-12 text-center shadow-lg">
      <h2 class="text-4xl font-primary font-bold golden-text mb-6">Bergabunglah dengan Komunitas Kami</h2>
      <p class="text-xl text-gray-600 mb-8 max-w-2xl mx-auto">
        Dapatkan akses eksklusif ke produk premium terbaru, penawaran spesial, dan pengalaman berbelanja yang tak terlupakan.
      </p>
      <div class="flex flex-col sm:flex-row gap-4 justify-center">
        <a href="produk.php" class="luxury-gradient text-white px-8 py-4 rounded-full font-semibold hover-lift">
          <i class="fas fa-shopping-bag mr-2"></i>Mulai Berbelanja
        </a>
        <a href="kontak.php" class="border-2 border-yellow-500 text-yellow-600 px-8 py-4 rounded-full font-semibold hover:bg-yellow-50 transition">
          <i class="fas fa-envelope mr-2"></i>Hubungi Kami
        </a>
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
        }, 200 + index * 200);
      });
      
      // Initialize cart display
      updateCartDisplay();
    });

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
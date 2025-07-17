<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Kategori - LuxuryShop</title>
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

    .category-card {
      transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
      position: relative;
      overflow: hidden;
    }

    .category-card:hover {
      transform: translateY(-10px) scale(1.02);
    }

    .category-card::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: linear-gradient(45deg, rgba(251, 191, 36, 0.8), rgba(245, 158, 11, 0.8));
      opacity: 0;
      transition: opacity 0.3s ease;
    }

    .category-card:hover::before {
      opacity: 1;
    }

    .category-content {
      position: relative;
      z-index: 10;
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

    .category-icon {
      font-size: 3rem;
      margin-bottom: 1rem;
      color: #f59e0b;
      transition: all 0.3s ease;
    }

    .category-card:hover .category-icon {
      color: white;
      transform: scale(1.1);
    }

    .category-card:hover .category-title {
      color: white;
    }

    .category-card:hover .category-description {
      color: rgba(255, 255, 255, 0.9);
    }

    .popular-badge {
      position: absolute;
      top: 10px;
      right: 10px;
      background: #ef4444;
      color: white;
      padding: 4px 8px;
      border-radius: 12px;
      font-size: 10px;
      font-weight: bold;
      z-index: 20;
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
        <li><a href="kategori.php" class="text-yellow-600 font-semibold">Kategori</a></li>
        <li><a href="tentang.php" class="hover:text-yellow-600 transition duration-300">Tentang</a></li>
        <li><a href="kontak.php" class="hover:text-yellow-600 transition duration-300">Kontak</a></li>
      </ul>

      <!-- Cart & Actions -->
      <div class="flex items-center space-x-4">
        <!-- Search -->
        <div class="hidden md:block relative">
          <input type="text" placeholder="Cari kategori..." class="pl-10 pr-4 py-2 rounded-full border border-yellow-200 focus:outline-none focus:border-yellow-400 bg-white/70">
          <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
        </div>

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
        <div class="relative mb-4">
          <input type="text" placeholder="Cari kategori..." class="w-full pl-10 pr-4 py-2 rounded-full border border-yellow-200 focus:outline-none focus:border-yellow-400">
          <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
        </div>
        <a href="index.php" class="block py-2 text-gray-700 hover:text-yellow-600">Beranda</a>
        <a href="produk.php" class="block py-2 text-gray-700 hover:text-yellow-600">Produk</a>
        <a href="kategori.php" class="block py-2 text-yellow-600 font-semibold">Kategori</a>
        <a href="tentang.php" class="block py-2 text-gray-700 hover:text-yellow-600">Tentang</a>
        <a href="kontak.php" class="block py-2 text-gray-700 hover:text-yellow-600">Kontak</a>
      </div>
    </div>
  </header>

  <!-- Page Header -->
  <section class="container mx-auto px-4 py-16">
    <div class="text-center">
      <h1 class="text-5xl font-primary font-bold golden-text mb-4">Kategori Produk</h1>
      <p class="text-xl text-gray-600 font-secondary">Jelajahi berbagai kategori produk premium kami</p>
    </div>
  </section>

  <!-- Categories Grid -->
  <section class="container mx-auto px-4 pb-20">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
      
      <!-- Category 1: Teh Premium -->
      <div class="category-card fade-item glass-effect rounded-2xl p-8 shadow-lg text-center hover-lift">
        <div class="popular-badge">POPULER</div>
        <div class="category-content">
          <i class="fas fa-leaf category-icon"></i>
          <h3 class="category-title text-xl font-primary font-bold mb-3 text-gray-800">Teh Premium</h3>
          <p class="category-description text-gray-600 mb-6">Koleksi teh berkualitas tinggi dari perkebunan terbaik dunia</p>
          <div class="mb-6">
            <span class="text-2xl font-bold text-yellow-600">12+ Produk</span>
          </div>
          <a href="produk.php?kategori=teh" class="inline-block luxury-gradient text-white px-6 py-3 rounded-full font-semibold hover-lift">
            Lihat Produk
          </a>
        </div>
      </div>

      <!-- Category 2: Kopi Premium -->
      <div class="category-card fade-item glass-effect rounded-2xl p-8 shadow-lg text-center hover-lift">
        <div class="category-content">
          <i class="fas fa-coffee category-icon"></i>
          <h3 class="category-title text-xl font-primary font-bold mb-3 text-gray-800">Kopi Premium</h3>
          <p class="category-description text-gray-600 mb-6">Biji kopi pilihan dengan cita rasa yang kaya dan aromanya yang memikat</p>
          <div class="mb-6">
            <span class="text-2xl font-bold text-yellow-600">8+ Produk</span>
          </div>
          <a href="produk.php?kategori=kopi" class="inline-block luxury-gradient text-white px-6 py-3 rounded-full font-semibold hover-lift">
            Lihat Produk
          </a>
        </div>
      </div>

      <!-- Category 3: Jus Segar -->
      <div class="category-card fade-item glass-effect rounded-2xl p-8 shadow-lg text-center hover-lift">
        <div class="category-content">
          <i class="fas fa-seedling category-icon"></i>
          <h3 class="category-title text-xl font-primary font-bold mb-3 text-gray-800">Jus Segar</h3>
          <p class="category-description text-gray-600 mb-6">Jus buah segar alami tanpa bahan pengawet, kaya vitamin dan nutrisi</p>
          <div class="mb-6">
            <span class="text-2xl font-bold text-yellow-600">15+ Produk</span>
          </div>
          <a href="produk.php?kategori=jus" class="inline-block luxury-gradient text-white px-6 py-3 rounded-full font-semibold hover-lift">
            Lihat Produk
          </a>
        </div>
      </div>

      <!-- Category 4: Minuman Herbal -->
      <div class="category-card fade-item glass-effect rounded-2xl p-8 shadow-lg text-center hover-lift">
        <div class="category-content">
          <i class="fas fa-spa category-icon"></i>
          <h3 class="category-title text-xl font-primary font-bold mb-3 text-gray-800">Minuman Herbal</h3>
          <p class="category-description text-gray-600 mb-6">Ramuan herbal tradisional untuk kesehatan dan kebugaran tubuh</p>
          <div class="mb-6">
            <span class="text-2xl font-bold text-yellow-600">6+ Produk</span>
          </div>
          <a href="produk.php?kategori=herbal" class="inline-block luxury-gradient text-white px-6 py-3 rounded-full font-semibold hover-lift">
            Lihat Produk
          </a>
        </div>
      </div>

      <!-- Category 5: Smoothies -->
      <div class="category-card fade-item glass-effect rounded-2xl p-8 shadow-lg text-center hover-lift">
        <div class="popular-badge">TRENDING</div>
        <div class="category-content">
          <i class="fas fa-blender category-icon"></i>
          <h3 class="category-title text-xl font-primary font-bold mb-3 text-gray-800">Smoothies</h3>
          <p class="category-description text-gray-600 mb-6">Perpaduan buah-buahan segar dalam minuman yang lezat dan bernutrisi</p>
          <div class="mb-6">
            <span class="text-2xl font-bold text-yellow-600">10+ Produk</span>
          </div>
          <a href="produk.php?kategori=smoothie" class="inline-block luxury-gradient text-white px-6 py-3 rounded-full font-semibold hover-lift">
            Lihat Produk
          </a>
        </div>
      </div>

      <!-- Category 6: Minuman Energi -->
      <div class="category-card fade-item glass-effect rounded-2xl p-8 shadow-lg text-center hover-lift">
        <div class="category-content">
          <i class="fas fa-bolt category-icon"></i>
          <h3 class="category-title text-xl font-primary font-bold mb-3 text-gray-800">Minuman Energi</h3>
          <p class="category-description text-gray-600 mb-6">Minuman untuk meningkatkan stamina dan energi sepanjang hari</p>
          <div class="mb-6">
            <span class="text-2xl font-bold text-yellow-600">5+ Produk</span>
          </div>
          <a href="produk.php?kategori=energi" class="inline-block luxury-gradient text-white px-6 py-3 rounded-full font-semibold hover-lift">
            Lihat Produk
          </a>
        </div>
      </div>

      <!-- Category 7: Minuman Detox -->
      <div class="category-card fade-item glass-effect rounded-2xl p-8 shadow-lg text-center hover-lift">
        <div class="category-content">
          <i class="fas fa-heart category-icon"></i>
          <h3 class="category-title text-xl font-primary font-bold mb-3 text-gray-800">Minuman Detox</h3>
          <p class="category-description text-gray-600 mb-6">Minuman pembersih tubuh untuk hidup yang lebih sehat dan segar</p>
          <div class="mb-6">
            <span class="text-2xl font-bold text-yellow-600">7+ Produk</span>
          </div>
          <a href="produk.php?kategori=detox" class="inline-block luxury-gradient text-white px-6 py-3 rounded-full font-semibold hover-lift">
            Lihat Produk
          </a>
        </div>
      </div>

      <!-- Category 8: Koleksi Khusus -->
      <div class="category-card fade-item glass-effect rounded-2xl p-8 shadow-lg text-center hover-lift">
        <div class="popular-badge">EKSLUSIF</div>
        <div class="category-content">
          <i class="fas fa-crown category-icon"></i>
          <h3 class="category-title text-xl font-primary font-bold mb-3 text-gray-800">Koleksi Khusus</h3>
          <p class="category-description text-gray-600 mb-6">Produk limited edition dan koleksi istimewa untuk para connoisseur</p>
          <div class="mb-6">
            <span class="text-2xl font-bold text-yellow-600">4+ Produk</span>
          </div>
          <a href="produk.php?kategori=khusus" class="inline-block luxury-gradient text-white px-6 py-3 rounded-full font-semibold hover-lift">
            Lihat Produk
          </a>
        </div>
      </div>

    </div>
  </section>

  <!-- Featured Categories Section -->
  <section class="container mx-auto px-4 py-20">
    <div class="text-center mb-16">
      <h2 class="text-4xl font-primary font-bold golden-text mb-4">Mengapa Memilih LuxuryShop?</h2>
      <p class="text-xl text-gray-600 font-secondary">Keunggulan yang membuat kami berbeda</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <div class="text-center p-8">
        <div class="w-20 h-20 luxury-gradient rounded-full flex items-center justify-center mx-auto mb-6">
          <i class="fas fa-award text-white text-3xl"></i>
        </div>
        <h3 class="text-xl font-bold mb-4">Kualitas Premium</h3>
        <p class="text-gray-600">Setiap produk dipilih dengan standar kualitas tertinggi dan telah tersertifikasi</p>
      </div>
      
      <div class="text-center p-8">
        <div class="w-20 h-20 luxury-gradient rounded-full flex items-center justify-center mx-auto mb-6">
          <i class="fas fa-shipping-fast text-white text-3xl"></i>
        </div>
        <h3 class="text-xl font-bold mb-4">Pengiriman Cepat</h3>
        <p class="text-gray-600">Sistem logistik terpercaya dengan berbagai pilihan pengiriman sesuai kebutuhan</p>
      </div>
      
      <div class="text-center p-8">
        <div class="w-20 h-20 luxury-gradient rounded-full flex items-center justify-center mx-auto mb-6">
          <i class="fas fa-headset text-white text-3xl"></i>
        </div>
        <h3 class="text-xl font-bold mb-4">Layanan 24/7</h3>
        <p class="text-gray-600">Tim customer service yang siap membantu Anda kapan saja dengan pelayanan terbaik</p>
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
          <h4 class="font-bold mb-4">Kategori</h4>
          <ul class="space-y-2 text-gray-400">
            <li><a href="produk.php?kategori=teh" class="hover:text-yellow-400">Teh Premium</a></li>
            <li><a href="produk.php?kategori=kopi" class="hover:text-yellow-400">Kopi Premium</a></li>
            <li><a href="produk.php?kategori=jus" class="hover:text-yellow-400">Jus Segar</a></li>
            <li><a href="produk.php?kategori=smoothie" class="hover:text-yellow-400">Smoothies</a></li>
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

    // Animate categories on page load
    document.addEventListener('DOMContentLoaded', function() {
      const items = document.querySelectorAll('.fade-item');
      items.forEach((item, index) => {
        setTimeout(() => {
          item.classList.add('fade-in');
        }, 100 + index * 150);
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
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>LuxuryShop - Premium E-Commerce</title>
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

    @keyframes float {
      0%, 100% { transform: translateY(0px); }
      50% { transform: translateY(-10px); }
    }

    .float-animation {
      animation: float 3s ease-in-out infinite;
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

    .product-card {
      transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    }

    .product-card:hover {
      transform: translateY(-10px) scale(1.02);
    }

    .shine-effect {
      position: relative;
      overflow: hidden;
    }

    .shine-effect::before {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
      transition: left 0.6s;
    }

    .shine-effect:hover::before {
      left: 100%;
    }
  </style>
</head>
<body class="min-h-screen">

  <!-- Header dengan Shopping Cart -->
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
        <li><a href="#" class="hover:text-yellow-600 transition duration-300">Beranda</a></li>
        <li><a href="produk.php" class="hover:text-yellow-600 transition duration-300">Produk</a></li>
        <li><a href="kategori.php" class="hover:text-yellow-600 transition duration-300">Kategori</a></li>
        <li><a href="tentang.php" class="hover:text-yellow-600 transition duration-300">Tentang</a></li>
        <li><a href="kontak.php" class="hover:text-yellow-600 transition duration-300">Kontak</a></li>
      </ul>

      <!-- Cart & User Actions -->
      <div class="flex items-center space-x-4">
        <!-- Search -->
        <div class="hidden md:block relative">
          <input type="text" placeholder="Cari produk..." class="pl-10 pr-4 py-2 rounded-full border border-yellow-200 focus:outline-none focus:border-yellow-400 bg-white/70">
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
          <input type="text" placeholder="Cari produk..." class="w-full pl-10 pr-4 py-2 rounded-full border border-yellow-200 focus:outline-none focus:border-yellow-400">
          <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
        </div>
        <a href="#" class="block py-2 text-gray-700 hover:text-yellow-600">Beranda</a>
        <a href="produk.php" class="block py-2 text-gray-700 hover:text-yellow-600">Produk</a>
        <a href="kategori.php" class="block py-2 text-gray-700 hover:text-yellow-600">Kategori</a>
        <a href="tentang.php" class="block py-2 text-gray-700 hover:text-yellow-600">Tentang</a>
        <a href="kontak.php" class="block py-2 text-gray-700 hover:text-yellow-600">Kontak</a>
      </div>
    </div>
  </header>

  <!-- Hero Section -->
  <section class="container mx-auto px-4 py-20">
    <div class="flex flex-col lg:flex-row items-center justify-between">
      <!-- Text Content -->
      <div class="lg:w-1/2 text-center lg:text-left mb-10 lg:mb-0">
        <h1 class="text-5xl lg:text-7xl font-primary font-bold golden-text leading-tight mb-6">
          Kemewahan<br>
          <span class="text-gray-800">dalam Genggaman</span>
        </h1>
        <p class="text-xl text-gray-600 mb-8 font-secondary leading-relaxed">
          Temukan koleksi produk premium yang dirancang khusus untuk gaya hidup mewah Anda. 
          Setiap produk dipilih dengan teliti untuk memberikan pengalaman berbelanja terbaik.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
          <a href="produk.php" class="inline-flex items-center justify-center luxury-gradient text-white px-8 py-4 rounded-full font-semibold shadow-lg hover-lift shine-effect">
            <i class="fas fa-shopping-bag mr-2"></i>
            Belanja Sekarang
          </a>
          <a href="#featured" class="inline-flex items-center justify-center bg-white/80 backdrop-blur-sm text-gray-800 px-8 py-4 rounded-full font-semibold shadow-lg hover-lift border border-yellow-200">
            <i class="fas fa-star mr-2"></i>
            Produk Unggulan
          </a>
        </div>
      </div>

      <!-- Hero Image -->
      <div class="lg:w-1/2 flex justify-center">
        <div class="relative">
          <div class="w-80 h-80 luxury-gradient rounded-full flex items-center justify-center float-animation">
            <i class="fas fa-crown text-white text-8xl"></i>
          </div>
          <div class="absolute -top-4 -right-4 w-20 h-20 bg-white rounded-full shadow-lg flex items-center justify-center">
            <i class="fas fa-gem text-yellow-500 text-2xl"></i>
          </div>
          <div class="absolute -bottom-4 -left-4 w-16 h-16 bg-white rounded-full shadow-lg flex items-center justify-center">
            <i class="fas fa-star text-yellow-500 text-xl"></i>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Featured Products -->
  <section id="featured" class="container mx-auto px-4 py-20">
    <div class="text-center mb-16">
      <h2 class="text-4xl font-primary font-bold golden-text mb-4">Produk Unggulan</h2>
      <p class="text-xl text-gray-600 font-secondary">Koleksi terpilih untuk Anda</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
      <!-- Product 1 -->
      <div class="product-card glass-effect rounded-2xl overflow-hidden shadow-lg">
        <div class="relative">
          <img src="assets/minuman6.png" alt="Produk 1" class="w-full h-48 object-cover">
          <div class="absolute top-4 right-4 bg-red-500 text-white px-2 py-1 rounded-full text-sm font-bold">
            -20%
          </div>
        </div>
        <div class="p-6">
          <h3 class="font-primary font-bold text-xl mb-2">Premium Tea Gold</h3>
          <p class="text-gray-600 mb-4">Teh premium dengan kualitas terbaik</p>
          <div class="flex items-center justify-between mb-4">
            <div>
              <span class="text-gray-400 line-through">Rp 100.000</span>
              <span class="text-2xl font-bold text-yellow-600 ml-2">Rp 80.000</span>
            </div>
          </div>
          <button onclick="addToCart('Premium Tea Gold', 80000, 'assets/minuman6.png')" 
                  class="w-full luxury-gradient text-white py-3 rounded-full font-semibold hover-lift">
            <i class="fas fa-cart-plus mr-2"></i>Tambah ke Keranjang
          </button>
        </div>
      </div>

      <!-- Product 2 -->
      <div class="product-card glass-effect rounded-2xl overflow-hidden shadow-lg">
        <div class="relative">
          <img src="assets/minuman5.png" alt="Produk 2" class="w-full h-48 object-cover">
          <div class="absolute top-4 right-4 bg-green-500 text-white px-2 py-1 rounded-full text-sm font-bold">
            NEW
          </div>
        </div>
        <div class="p-6">
          <h3 class="font-primary font-bold text-xl mb-2">Royal Coffee Blend</h3>
          <p class="text-gray-600 mb-4">Kopi premium dengan aroma istimewa</p>
          <div class="flex items-center justify-between mb-4">
            <span class="text-2xl font-bold text-yellow-600">Rp 120.000</span>
          </div>
          <button onclick="addToCart('Royal Coffee Blend', 120000, 'assets/minuman5.png')" 
                  class="w-full luxury-gradient text-white py-3 rounded-full font-semibold hover-lift">
            <i class="fas fa-cart-plus mr-2"></i>Tambah ke Keranjang
          </button>
        </div>
      </div>

      <!-- Product 3 -->
      <div class="product-card glass-effect rounded-2xl overflow-hidden shadow-lg">
        <div class="relative">
          <img src="assets/minuman4.png" alt="Produk 3" class="w-full h-48 object-cover">
        </div>
        <div class="p-6">
          <h3 class="font-primary font-bold text-xl mb-2">Luxury Smoothie</h3>
          <p class="text-gray-600 mb-4">Smoothie segar dengan buah pilihan</p>
          <div class="flex items-center justify-between mb-4">
            <span class="text-2xl font-bold text-yellow-600">Rp 65.000</span>
          </div>
          <button onclick="addToCart('Luxury Smoothie', 65000, 'assets/minuman4.png')" 
                  class="w-full luxury-gradient text-white py-3 rounded-full font-semibold hover-lift">
            <i class="fas fa-cart-plus mr-2"></i>Tambah ke Keranjang
          </button>
        </div>
      </div>

      <!-- Product 4 -->
      <div class="product-card glass-effect rounded-2xl overflow-hidden shadow-lg">
        <div class="relative">
          <img src="assets/minuman3.jpeg" alt="Produk 4" class="w-full h-48 object-cover">
        </div>
        <div class="p-6">
          <h3 class="font-primary font-bold text-xl mb-2">Golden Juice</h3>
          <p class="text-gray-600 mb-4">Jus segar dengan nutrisi lengkap</p>
          <div class="flex items-center justify-between mb-4">
            <span class="text-2xl font-bold text-yellow-600">Rp 45.000</span>
          </div>
          <button onclick="addToCart('Golden Juice', 45000, 'assets/minuman3.jpeg')" 
                  class="w-full luxury-gradient text-white py-3 rounded-full font-semibold hover-lift">
            <i class="fas fa-cart-plus mr-2"></i>Tambah ke Keranjang
          </button>
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
            <li><a href="#" class="hover:text-yellow-400">Kontak</a></li>
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
    let cartTotal = 0;

    // Mobile menu toggle
    document.getElementById('mobileMenuBtn').addEventListener('click', function() {
      const mobileMenu = document.getElementById('mobileMenu');
      mobileMenu.classList.toggle('hidden');
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

    function addToCart(name, price, image) {
      const existingItem = cart.find(item => item.name === name);
      
      if (existingItem) {
        existingItem.quantity += 1;
      } else {
        cart.push({
          name: name,
          price: price,
          image: image,
          quantity: 1
        });
      }
      
      updateCartDisplay();
      
      // Show success message
      showNotification('Produk berhasil ditambahkan ke keranjang!');
    }

    function removeFromCart(name) {
      cart = cart.filter(item => item.name !== name);
      updateCartDisplay();
    }

    function updateQuantity(name, change) {
      const item = cart.find(item => item.name === name);
      if (item) {
        item.quantity += change;
        if (item.quantity <= 0) {
          removeFromCart(name);
        } else {
          updateCartDisplay();
        }
      }
    }

    function updateCartDisplay() {
      const cartItems = document.getElementById('cartItems');
      const cartCounter = document.getElementById('cartCounter');
      const cartTotal = document.getElementById('cartTotal');
      
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

    function checkout() {
      if (cart.length === 0) {
        showNotification('Keranjang masih kosong!', 'error');
        return;
      }
      
      // Redirect to checkout page
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

    // Initialize cart display
    updateCartDisplay();

    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
          target.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
          });
        }
      });
    });
  </script>

</body>
</html>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Produk - LuxuryShop</title>
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

    .product-card {
      transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    }

    .product-card:hover {
      transform: translateY(-10px) scale(1.02);
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

    .filter-btn.active {
      background: linear-gradient(135deg, #f59e0b, #fbbf24);
      color: white;
    }

    .star-rating {
      color: #fbbf24;
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
        <li><a href="produk.php" class="text-yellow-600 font-semibold">Produk</a></li>
        <li><a href="kategori.php" class="hover:text-yellow-600 transition duration-300">Kategori</a></li>
        <li><a href="tentang.php" class="hover:text-yellow-600 transition duration-300">Tentang</a></li>
        <li><a href="kontak.php" class="hover:text-yellow-600 transition duration-300">Kontak</a></li>
      </ul>

      <!-- Cart & Actions -->
      <div class="flex items-center space-x-4">
        <!-- Search -->
        <div class="hidden md:block relative">
          <input type="text" id="searchInput" placeholder="Cari produk..." class="pl-10 pr-4 py-2 rounded-full border border-yellow-200 focus:outline-none focus:border-yellow-400 bg-white/70">
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
        <a href="index.php" class="block py-2 text-gray-700 hover:text-yellow-600">Beranda</a>
        <a href="produk.php" class="block py-2 text-yellow-600 font-semibold">Produk</a>
        <a href="kategori.php" class="block py-2 text-gray-700 hover:text-yellow-600">Kategori</a>
        <a href="tentang.php" class="block py-2 text-gray-700 hover:text-yellow-600">Tentang</a>
        <a href="kontak.php" class="block py-2 text-gray-700 hover:text-yellow-600">Kontak</a>
      </div>
    </div>
  </header>

  <!-- Page Header -->
  <section class="container mx-auto px-4 py-16">
    <div class="text-center">
      <h1 class="text-5xl font-primary font-bold golden-text mb-4">Koleksi Premium</h1>
      <p class="text-xl text-gray-600 font-secondary">Temukan produk berkualitas tinggi untuk gaya hidup mewah Anda</p>
    </div>
  </section>

  <!-- Filters -->
  <section class="container mx-auto px-4 mb-12">
    <div class="glass-effect rounded-2xl p-6 shadow-lg">
      <div class="flex flex-wrap gap-4 justify-center items-center">
        <span class="font-semibold text-gray-700">Filter:</span>
        <button onclick="filterProducts('all')" class="filter-btn active px-6 py-2 rounded-full border border-yellow-200 hover:bg-yellow-50 transition">
          Semua Produk
        </button>
        <button onclick="filterProducts('minuman')" class="filter-btn px-6 py-2 rounded-full border border-yellow-200 hover:bg-yellow-50 transition">
          Minuman
        </button>
        <button onclick="filterProducts('teh')" class="filter-btn px-6 py-2 rounded-full border border-yellow-200 hover:bg-yellow-50 transition">
          Teh Premium
        </button>
        <button onclick="filterProducts('kopi')" class="filter-btn px-6 py-2 rounded-full border border-yellow-200 hover:bg-yellow-50 transition">
          Kopi
        </button>
        <button onclick="filterProducts('jus')" class="filter-btn px-6 py-2 rounded-full border border-yellow-200 hover:bg-yellow-50 transition">
          Jus Segar
        </button>
        
        <!-- Sort Options -->
        <select id="sortSelect" onchange="sortProducts()" class="px-4 py-2 rounded-full border border-yellow-200 focus:outline-none focus:border-yellow-400 bg-white/70">
          <option value="name">Urutkan: Nama</option>
          <option value="price-low">Harga: Rendah ke Tinggi</option>
          <option value="price-high">Harga: Tinggi ke Rendah</option>
          <option value="rating">Rating Tertinggi</option>
        </select>
      </div>
    </div>
  </section>

  <!-- Products Grid -->
  <section class="container mx-auto px-4 pb-20">
    <div id="productsGrid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
      <!-- Product cards will be dynamically generated here -->
    </div>
    
    <!-- No results message -->
    <div id="noResults" class="hidden text-center py-20">
      <i class="fas fa-search text-6xl text-gray-300 mb-4"></i>
      <h3 class="text-2xl font-bold text-gray-500 mb-2">Produk tidak ditemukan</h3>
      <p class="text-gray-400">Coba ubah filter atau kata kunci pencarian</p>
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
        </div>
        
        <div>
          <h4 class="font-bold mb-4">Layanan</h4>
          <ul class="space-y-2 text-gray-400">
            <li><a href="#" class="hover:text-yellow-400">Pengiriman</a></li>
            <li><a href="#" class="hover:text-yellow-400">Pembayaran</a></li>
            <li><a href="#" class="hover:text-yellow-400">Garansi</a></li>
          </ul>
        </div>
        
        <div>
          <h4 class="font-bold mb-4">Bantuan</h4>
          <ul class="space-y-2 text-gray-400">
            <li><a href="#" class="hover:text-yellow-400">FAQ</a></li>
            <li><a href="kontak.php" class="hover:text-yellow-400">Kontak</a></li>
            <li><a href="#" class="hover:text-yellow-400">Panduan</a></li>
          </ul>
        </div>
        
        <div>
          <h4 class="font-bold mb-4">Newsletter</h4>
          <p class="text-gray-400 mb-4">Dapatkan penawaran eksklusif</p>
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
    let allProducts = [
      {
        id: 1,
        name: "Premium Tea Gold",
        category: "teh",
        price: 80000,
        originalPrice: 100000,
        image: "assets/minuman6.png",
        rating: 4.8,
        description: "Teh premium dengan kualitas terbaik dari perkebunan pilihan",
        badge: "SALE",
        badgeColor: "bg-red-500"
      },
      {
        id: 2,
        name: "Royal Coffee Blend",
        category: "kopi",
        price: 120000,
        originalPrice: null,
        image: "assets/minuman5.png",
        rating: 4.9,
        description: "Kopi premium dengan aroma istimewa dan cita rasa yang kaya",
        badge: "NEW",
        badgeColor: "bg-green-500"
      },
      {
        id: 3,
        name: "Luxury Smoothie",
        category: "minuman",
        price: 65000,
        originalPrice: null,
        image: "assets/minuman4.png",
        rating: 4.7,
        description: "Smoothie segar dengan buah pilihan dan nutrisi lengkap",
        badge: null,
        badgeColor: null
      },
      {
        id: 4,
        name: "Golden Juice",
        category: "jus",
        price: 45000,
        originalPrice: null,
        image: "assets/minuman3.jpeg",
        rating: 4.6,
        description: "Jus segar dengan nutrisi lengkap untuk kesehatan optimal",
        badge: null,
        badgeColor: null
      },
      {
        id: 5,
        name: "Artisan Tea Collection",
        category: "teh",
        price: 150000,
        originalPrice: 180000,
        image: "assets/minuman2.png",
        rating: 4.9,
        description: "Koleksi teh artisan dari berbagai daerah terbaik dunia",
        badge: "LIMITED",
        badgeColor: "bg-purple-500"
      },
      {
        id: 6,
        name: "Tropical Paradise",
        category: "jus",
        price: 55000,
        originalPrice: null,
        image: "assets/minuman.jpeg",
        rating: 4.5,
        description: "Perpaduan jus buah tropis yang menyegarkan dan bernutrisi",
        badge: null,
        badgeColor: null
      },
      {
        id: 7,
        name: "Espresso Supremo",
        category: "kopi",
        price: 95000,
        originalPrice: null,
        image: "assets/minuman5.png",
        rating: 4.8,
        description: "Espresso dengan beans premium untuk pencinta kopi sejati",
        badge: "POPULAR",
        badgeColor: "bg-blue-500"
      },
      {
        id: 8,
        name: "Herbal Wellness",
        category: "teh",
        price: 75000,
        originalPrice: null,
        image: "assets/minuman6.png",
        rating: 4.7,
        description: "Teh herbal untuk kesehatan dan relaksasi tubuh",
        badge: null,
        badgeColor: null
      }
    ];

    let currentFilter = 'all';
    let filteredProducts = [...allProducts];

    // Mobile menu toggle
    document.getElementById('mobileMenuBtn').addEventListener('click', function() {
      const mobileMenu = document.getElementById('mobileMenu');
      mobileMenu.classList.toggle('hidden');
    });

    // Search functionality
    document.getElementById('searchInput').addEventListener('input', function() {
      const searchTerm = this.value.toLowerCase();
      filteredProducts = allProducts.filter(product => 
        product.name.toLowerCase().includes(searchTerm) ||
        product.description.toLowerCase().includes(searchTerm)
      );
      
      if (currentFilter !== 'all') {
        filteredProducts = filteredProducts.filter(product => product.category === currentFilter);
      }
      
      renderProducts();
    });

    // Filter products
    function filterProducts(category) {
      currentFilter = category;
      
      // Update active button
      document.querySelectorAll('.filter-btn').forEach(btn => {
        btn.classList.remove('active');
      });
      event.target.classList.add('active');
      
      // Filter products
      if (category === 'all') {
        filteredProducts = [...allProducts];
      } else {
        filteredProducts = allProducts.filter(product => product.category === category);
      }
      
      // Apply search if exists
      const searchTerm = document.getElementById('searchInput').value.toLowerCase();
      if (searchTerm) {
        filteredProducts = filteredProducts.filter(product => 
          product.name.toLowerCase().includes(searchTerm) ||
          product.description.toLowerCase().includes(searchTerm)
        );
      }
      
      renderProducts();
    }

    // Sort products
    function sortProducts() {
      const sortBy = document.getElementById('sortSelect').value;
      
      switch(sortBy) {
        case 'name':
          filteredProducts.sort((a, b) => a.name.localeCompare(b.name));
          break;
        case 'price-low':
          filteredProducts.sort((a, b) => a.price - b.price);
          break;
        case 'price-high':
          filteredProducts.sort((a, b) => b.price - a.price);
          break;
        case 'rating':
          filteredProducts.sort((a, b) => b.rating - a.rating);
          break;
      }
      
      renderProducts();
    }

    // Render products
    function renderProducts() {
      const grid = document.getElementById('productsGrid');
      const noResults = document.getElementById('noResults');
      
      if (filteredProducts.length === 0) {
        grid.innerHTML = '';
        noResults.classList.remove('hidden');
        return;
      }
      
      noResults.classList.add('hidden');
      
      grid.innerHTML = filteredProducts.map(product => `
        <div class="product-card fade-item glass-effect rounded-2xl overflow-hidden shadow-lg">
          <div class="relative">
            <img src="${product.image}" alt="${product.name}" class="w-full h-48 object-cover">
            ${product.badge ? `<div class="absolute top-4 right-4 ${product.badgeColor} text-white px-2 py-1 rounded-full text-sm font-bold">${product.badge}</div>` : ''}
            <button onclick="toggleWishlist(${product.id})" class="absolute top-4 left-4 p-2 bg-white/80 rounded-full hover:bg-white transition">
              <i class="far fa-heart text-gray-600 hover:text-red-500"></i>
            </button>
          </div>
          <div class="p-6">
            <h3 class="font-primary font-bold text-xl mb-2">${product.name}</h3>
            <p class="text-gray-600 mb-3 text-sm">${product.description}</p>
            
            <div class="flex items-center mb-3">
              <div class="star-rating mr-2">
                ${'★'.repeat(Math.floor(product.rating))}${'☆'.repeat(5 - Math.floor(product.rating))}
              </div>
              <span class="text-sm text-gray-500">(${product.rating})</span>
            </div>
            
            <div class="flex items-center justify-between mb-4">
              <div>
                ${product.originalPrice ? `<span class="text-gray-400 line-through text-sm">Rp ${product.originalPrice.toLocaleString('id-ID')}</span>` : ''}
                <span class="text-2xl font-bold text-yellow-600 ${product.originalPrice ? 'ml-2' : ''}">Rp ${product.price.toLocaleString('id-ID')}</span>
              </div>
            </div>
            
            <button onclick="addToCart('${product.name}', ${product.price}, '${product.image}')" 
                    class="w-full luxury-gradient text-white py-3 rounded-full font-semibold hover-lift">
              <i class="fas fa-cart-plus mr-2"></i>Tambah ke Keranjang
            </button>
          </div>
        </div>
      `).join('');
      
      // Animate items
      setTimeout(() => {
        document.querySelectorAll('.fade-item').forEach((item, index) => {
          setTimeout(() => {
            item.classList.add('fade-in');
          }, index * 100);
        });
      }, 100);
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
      
      // Save cart to localStorage for checkout page
      localStorage.setItem('cart', JSON.stringify(cart));
      window.location.href = 'checkout.php';
    }

    function toggleWishlist(productId) {
      showNotification('Produk ditambahkan ke wishlist!');
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

    // Initialize
    renderProducts();
    updateCartDisplay();
  </script>

</body>
</html>
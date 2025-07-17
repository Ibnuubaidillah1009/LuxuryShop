<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Checkout - LuxuryShop</title>
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

    .step-indicator {
      position: relative;
    }

    .step-indicator::after {
      content: '';
      position: absolute;
      top: 50%;
      right: -50%;
      width: 100%;
      height: 2px;
      background: #e5e7eb;
      transform: translateY(-50%);
    }

    .step-indicator.active::after {
      background: #fbbf24;
    }

    .step-indicator:last-child::after {
      display: none;
    }

    .payment-option {
      border: 2px solid #e5e7eb;
      transition: all 0.3s ease;
    }

    .payment-option.selected {
      border-color: #fbbf24;
      background: rgba(251, 191, 36, 0.1);
    }

    .progress-bar {
      width: 0%;
      transition: width 0.5s ease;
    }

    .progress-bar.step-1 { width: 33.33%; }
    .progress-bar.step-2 { width: 66.66%; }
    .progress-bar.step-3 { width: 100%; }
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

      <!-- Back to Shop -->
      <a href="index.php" class="flex items-center space-x-2 text-gray-600 hover:text-yellow-600 transition">
        <i class="fas fa-arrow-left"></i>
        <span class="hidden md:inline">Kembali Berbelanja</span>
      </a>
    </nav>
  </header>

  <!-- Progress Steps -->
  <section class="container mx-auto px-4 py-8">
    <div class="max-w-4xl mx-auto">
      <div class="flex items-center justify-between mb-8">
        <div class="step-indicator active flex flex-col items-center">
          <div class="w-12 h-12 bg-yellow-500 text-white rounded-full flex items-center justify-center font-bold mb-2">
            1
          </div>
          <span class="text-sm font-medium">Keranjang</span>
        </div>
        <div class="step-indicator flex flex-col items-center">
          <div class="w-12 h-12 bg-gray-300 text-gray-600 rounded-full flex items-center justify-center font-bold mb-2">
            2
          </div>
          <span class="text-sm font-medium">Informasi</span>
        </div>
        <div class="step-indicator flex flex-col items-center">
          <div class="w-12 h-12 bg-gray-300 text-gray-600 rounded-full flex items-center justify-center font-bold mb-2">
            3
          </div>
          <span class="text-sm font-medium">Pembayaran</span>
        </div>
        <div class="step-indicator flex flex-col items-center">
          <div class="w-12 h-12 bg-gray-300 text-gray-600 rounded-full flex items-center justify-center font-bold mb-2">
            4
          </div>
          <span class="text-sm font-medium">Selesai</span>
        </div>
      </div>
      
      <!-- Progress Bar -->
      <div class="w-full bg-gray-200 rounded-full h-2 mb-8">
        <div id="progressBar" class="progress-bar step-1 bg-yellow-500 h-2 rounded-full"></div>
      </div>
    </div>
  </section>

  <!-- Checkout Content -->
  <section class="container mx-auto px-4 pb-20">
    <div class="max-w-6xl mx-auto">
      <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        
        <!-- Checkout Form -->
        <div class="lg:col-span-2">
          
          <!-- Step 1: Cart Review -->
          <div id="step1" class="checkout-step glass-effect rounded-2xl p-8 shadow-lg mb-8">
            <h2 class="text-2xl font-primary font-bold golden-text mb-6">Review Pesanan Anda</h2>
            <div id="cartReview" class="space-y-4">
              <!-- Cart items will be populated here -->
            </div>
            <button onclick="nextStep()" class="mt-6 luxury-gradient text-white px-8 py-3 rounded-full font-semibold hover-lift">
              Lanjutkan ke Informasi Pengiriman
            </button>
          </div>

          <!-- Step 2: Shipping Information -->
          <div id="step2" class="checkout-step glass-effect rounded-2xl p-8 shadow-lg mb-8 hidden">
            <h2 class="text-2xl font-primary font-bold golden-text mb-6">Informasi Pengiriman</h2>
            <form id="shippingForm" class="space-y-6">
              <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                  <label class="block text-sm font-medium text-gray-700 mb-2">Nama Depan</label>
                  <input type="text" name="firstName" required class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:border-yellow-400">
                </div>
                <div>
                  <label class="block text-sm font-medium text-gray-700 mb-2">Nama Belakang</label>
                  <input type="text" name="lastName" required class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:border-yellow-400">
                </div>
              </div>
              
              <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                <input type="email" name="email" required class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:border-yellow-400">
              </div>
              
              <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Nomor Telepon</label>
                <input type="tel" name="phone" required class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:border-yellow-400">
              </div>
              
              <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Alamat Lengkap</label>
                <textarea name="address" required rows="3" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:border-yellow-400"></textarea>
              </div>
              
              <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div>
                  <label class="block text-sm font-medium text-gray-700 mb-2">Kota</label>
                  <input type="text" name="city" required class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:border-yellow-400">
                </div>
                <div>
                  <label class="block text-sm font-medium text-gray-700 mb-2">Provinsi</label>
                  <select name="province" required class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:border-yellow-400">
                    <option value="">Pilih Provinsi</option>
                    <option value="DKI Jakarta">DKI Jakarta</option>
                    <option value="Jawa Barat">Jawa Barat</option>
                    <option value="Jawa Tengah">Jawa Tengah</option>
                    <option value="Jawa Timur">Jawa Timur</option>
                    <option value="Banten">Banten</option>
                    <option value="Yogyakarta">D.I. Yogyakarta</option>
                  </select>
                </div>
                <div>
                  <label class="block text-sm font-medium text-gray-700 mb-2">Kode Pos</label>
                  <input type="text" name="postalCode" required class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:border-yellow-400">
                </div>
              </div>

              <!-- Shipping Options -->
              <div>
                <label class="block text-sm font-medium text-gray-700 mb-4">Pilih Pengiriman</label>
                <div class="space-y-3">
                  <label class="payment-option block p-4 rounded-lg cursor-pointer">
                    <input type="radio" name="shipping" value="regular" class="mr-3" checked>
                    <span class="flex justify-between items-center">
                      <div>
                        <strong>Reguler (3-5 hari)</strong>
                        <p class="text-sm text-gray-600">Pengiriman standar</p>
                      </div>
                      <span class="font-bold text-yellow-600">Rp 15.000</span>
                    </span>
                  </label>
                  
                  <label class="payment-option block p-4 rounded-lg cursor-pointer">
                    <input type="radio" name="shipping" value="express" class="mr-3">
                    <span class="flex justify-between items-center">
                      <div>
                        <strong>Express (1-2 hari)</strong>
                        <p class="text-sm text-gray-600">Pengiriman cepat</p>
                      </div>
                      <span class="font-bold text-yellow-600">Rp 35.000</span>
                    </span>
                  </label>
                  
                  <label class="payment-option block p-4 rounded-lg cursor-pointer">
                    <input type="radio" name="shipping" value="same-day" class="mr-3">
                    <span class="flex justify-between items-center">
                      <div>
                        <strong>Same Day (Hari yang sama)</strong>
                        <p class="text-sm text-gray-600">Khusus Jakarta & sekitarnya</p>
                      </div>
                      <span class="font-bold text-yellow-600">Rp 50.000</span>
                    </span>
                  </label>
                </div>
              </div>
              
              <div class="flex space-x-4">
                <button type="button" onclick="prevStep()" class="px-8 py-3 border border-gray-300 rounded-full font-semibold hover:bg-gray-50 transition">
                  Kembali
                </button>
                <button type="button" onclick="nextStep()" class="luxury-gradient text-white px-8 py-3 rounded-full font-semibold hover-lift">
                  Lanjutkan ke Pembayaran
                </button>
              </div>
            </form>
          </div>

          <!-- Step 3: Payment -->
          <div id="step3" class="checkout-step glass-effect rounded-2xl p-8 shadow-lg mb-8 hidden">
            <h2 class="text-2xl font-primary font-bold golden-text mb-6">Metode Pembayaran</h2>
            
            <div class="space-y-4 mb-6">
              <label class="payment-option block p-4 rounded-lg cursor-pointer">
                <input type="radio" name="payment" value="bank-transfer" class="mr-3" checked>
                <span class="flex items-center">
                  <i class="fas fa-university text-2xl text-blue-600 mr-4"></i>
                  <div>
                    <strong>Transfer Bank</strong>
                    <p class="text-sm text-gray-600">BCA, Mandiri, BNI, BRI</p>
                  </div>
                </span>
              </label>
              
              <label class="payment-option block p-4 rounded-lg cursor-pointer">
                <input type="radio" name="payment" value="e-wallet" class="mr-3">
                <span class="flex items-center">
                  <i class="fas fa-mobile-alt text-2xl text-green-600 mr-4"></i>
                  <div>
                    <strong>E-Wallet</strong>
                    <p class="text-sm text-gray-600">GoPay, OVO, DANA, ShopeePay</p>
                  </div>
                </span>
              </label>
              
              <label class="payment-option block p-4 rounded-lg cursor-pointer">
                <input type="radio" name="payment" value="credit-card" class="mr-3">
                <span class="flex items-center">
                  <i class="fas fa-credit-card text-2xl text-purple-600 mr-4"></i>
                  <div>
                    <strong>Kartu Kredit</strong>
                    <p class="text-sm text-gray-600">Visa, Mastercard, JCB</p>
                  </div>
                </span>
              </label>
              
              <label class="payment-option block p-4 rounded-lg cursor-pointer">
                <input type="radio" name="payment" value="cod" class="mr-3">
                <span class="flex items-center">
                  <i class="fas fa-hand-holding-usd text-2xl text-orange-600 mr-4"></i>
                  <div>
                    <strong>Cash on Delivery (COD)</strong>
                    <p class="text-sm text-gray-600">Bayar saat barang tiba</p>
                  </div>
                </span>
              </label>
            </div>

            <!-- Special Instructions -->
            <div class="mb-6">
              <label class="block text-sm font-medium text-gray-700 mb-2">Catatan Khusus (Opsional)</label>
              <textarea name="specialInstructions" rows="3" placeholder="Instruksi khusus untuk pengiriman..." class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:border-yellow-400"></textarea>
            </div>
            
            <div class="flex space-x-4">
              <button type="button" onclick="prevStep()" class="px-8 py-3 border border-gray-300 rounded-full font-semibold hover:bg-gray-50 transition">
                Kembali
              </button>
              <button type="button" onclick="processOrder()" class="luxury-gradient text-white px-8 py-3 rounded-full font-semibold hover-lift">
                <i class="fas fa-lock mr-2"></i>Bayar Sekarang
              </button>
            </div>
          </div>

          <!-- Step 4: Order Confirmation -->
          <div id="step4" class="checkout-step glass-effect rounded-2xl p-8 shadow-lg mb-8 hidden">
            <div class="text-center">
              <div class="w-20 h-20 bg-green-500 text-white rounded-full flex items-center justify-center mx-auto mb-6">
                <i class="fas fa-check text-3xl"></i>
              </div>
              <h2 class="text-3xl font-primary font-bold text-green-600 mb-4">Pesanan Berhasil!</h2>
              <p class="text-gray-600 mb-6">Terima kasih telah berbelanja di LuxuryShop. Pesanan Anda sedang diproses.</p>
              
              <div class="bg-gray-50 rounded-lg p-6 mb-6">
                <h3 class="font-bold mb-2">Detail Pesanan</h3>
                <p><strong>Nomor Pesanan:</strong> <span id="orderNumber" class="text-yellow-600">#LS-</span></p>
                <p><strong>Estimasi Pengiriman:</strong> <span id="estimatedDelivery"></span></p>
              </div>
              
              <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="index.php" class="luxury-gradient text-white px-8 py-3 rounded-full font-semibold hover-lift">
                  Lanjutkan Belanja
                </a>
                <button onclick="window.print()" class="border border-gray-300 px-8 py-3 rounded-full font-semibold hover:bg-gray-50 transition">
                  <i class="fas fa-print mr-2"></i>Cetak Invoice
                </button>
              </div>
            </div>
          </div>
        </div>

        <!-- Order Summary -->
        <div class="lg:col-span-1">
          <div class="glass-effect rounded-2xl p-6 shadow-lg sticky top-24">
            <h3 class="text-xl font-primary font-bold golden-text mb-6">Ringkasan Pesanan</h3>
            
            <div id="orderSummary" class="space-y-4 mb-6">
              <!-- Order items will be populated here -->
            </div>
            
            <div class="border-t pt-4 space-y-2">
              <div class="flex justify-between text-sm">
                <span>Subtotal</span>
                <span id="subtotal">Rp 0</span>
              </div>
              <div class="flex justify-between text-sm">
                <span>Ongkos Kirim</span>
                <span id="shippingCost">Rp 15.000</span>
              </div>
              <div class="flex justify-between text-sm text-green-600">
                <span>Diskon</span>
                <span id="discount">-Rp 0</span>
              </div>
              <div class="border-t pt-2 flex justify-between font-bold text-lg">
                <span>Total</span>
                <span id="total" class="text-yellow-600">Rp 0</span>
              </div>
            </div>

            <!-- Promo Code -->
            <div class="border-t pt-4">
              <div class="flex space-x-2">
                <input type="text" id="promoCode" placeholder="Kode promo" class="flex-1 px-3 py-2 border border-gray-300 rounded-lg text-sm focus:outline-none focus:border-yellow-400">
                <button onclick="applyPromo()" class="bg-yellow-500 text-white px-4 py-2 rounded-lg text-sm font-semibold hover:bg-yellow-600 transition">
                  Terapkan
                </button>
              </div>
            </div>

            <!-- Security Badge -->
            <div class="border-t pt-4 text-center">
              <div class="flex items-center justify-center space-x-2 text-sm text-gray-500">
                <i class="fas fa-shield-alt text-green-500"></i>
                <span>Pembayaran 100% Aman</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- JavaScript -->
  <script>
    let currentStep = 1;
    let cart = [];
    let shippingCost = 15000;
    let discountAmount = 0;

    // Initialize page
    document.addEventListener('DOMContentLoaded', function() {
      loadCartFromStorage();
      updateOrderSummary();
      populateCartReview();
      updateStepIndicators();
      
      // Setup payment option listeners
      setupPaymentListeners();
      setupShippingListeners();
    });

    function loadCartFromStorage() {
      const storedCart = localStorage.getItem('cart');
      if (storedCart) {
        cart = JSON.parse(storedCart);
      }
      
      if (cart.length === 0) {
        // Redirect back if cart is empty
        window.location.href = 'produk.php';
      }
    }

    function populateCartReview() {
      const cartReview = document.getElementById('cartReview');
      cartReview.innerHTML = cart.map(item => `
        <div class="flex items-center space-x-4 p-4 bg-white/50 rounded-lg">
          <img src="${item.image}" alt="${item.name}" class="w-16 h-16 object-cover rounded-lg">
          <div class="flex-1">
            <h4 class="font-semibold">${item.name}</h4>
            <p class="text-gray-600">Quantity: ${item.quantity}</p>
          </div>
          <div class="text-right">
            <p class="font-bold text-yellow-600">Rp ${(item.price * item.quantity).toLocaleString('id-ID')}</p>
          </div>
        </div>
      `).join('');
    }

    function updateOrderSummary() {
      const orderSummary = document.getElementById('orderSummary');
      const subtotalEl = document.getElementById('subtotal');
      const shippingCostEl = document.getElementById('shippingCost');
      const discountEl = document.getElementById('discount');
      const totalEl = document.getElementById('total');

      // Populate order items
      orderSummary.innerHTML = cart.map(item => `
        <div class="flex justify-between text-sm">
          <span>${item.name} x${item.quantity}</span>
          <span>Rp ${(item.price * item.quantity).toLocaleString('id-ID')}</span>
        </div>
      `).join('');

      // Calculate totals
      const subtotal = cart.reduce((sum, item) => sum + (item.price * item.quantity), 0);
      const total = subtotal + shippingCost - discountAmount;

      subtotalEl.textContent = 'Rp ' + subtotal.toLocaleString('id-ID');
      shippingCostEl.textContent = 'Rp ' + shippingCost.toLocaleString('id-ID');
      discountEl.textContent = '-Rp ' + discountAmount.toLocaleString('id-ID');
      totalEl.textContent = 'Rp ' + total.toLocaleString('id-ID');
    }

    function setupPaymentListeners() {
      document.querySelectorAll('input[name="payment"]').forEach(radio => {
        radio.addEventListener('change', function() {
          document.querySelectorAll('.payment-option').forEach(option => {
            option.classList.remove('selected');
          });
          this.closest('.payment-option').classList.add('selected');
        });
      });
    }

    function setupShippingListeners() {
      document.querySelectorAll('input[name="shipping"]').forEach(radio => {
        radio.addEventListener('change', function() {
          document.querySelectorAll('input[name="shipping"]').forEach(r => {
            r.closest('.payment-option').classList.remove('selected');
          });
          this.closest('.payment-option').classList.add('selected');
          
          // Update shipping cost
          switch(this.value) {
            case 'regular':
              shippingCost = 15000;
              break;
            case 'express':
              shippingCost = 35000;
              break;
            case 'same-day':
              shippingCost = 50000;
              break;
          }
          updateOrderSummary();
        });
      });
    }

    function nextStep() {
      if (currentStep < 4) {
        // Hide current step
        document.getElementById(`step${currentStep}`).classList.add('hidden');
        
        // Move to next step
        currentStep++;
        
        // Show next step
        document.getElementById(`step${currentStep}`).classList.remove('hidden');
        
        // Update indicators
        updateStepIndicators();
        
        // Scroll to top
        window.scrollTo({ top: 0, behavior: 'smooth' });
      }
    }

    function prevStep() {
      if (currentStep > 1) {
        // Hide current step
        document.getElementById(`step${currentStep}`).classList.add('hidden');
        
        // Move to previous step
        currentStep--;
        
        // Show previous step
        document.getElementById(`step${currentStep}`).classList.remove('hidden');
        
        // Update indicators
        updateStepIndicators();
        
        // Scroll to top
        window.scrollTo({ top: 0, behavior: 'smooth' });
      }
    }

    function updateStepIndicators() {
      // Update step circles
      for (let i = 1; i <= 4; i++) {
        const stepEl = document.querySelector(`.step-indicator:nth-child(${i}) > div`);
        if (i <= currentStep) {
          stepEl.classList.remove('bg-gray-300', 'text-gray-600');
          stepEl.classList.add('bg-yellow-500', 'text-white');
        } else {
          stepEl.classList.remove('bg-yellow-500', 'text-white');
          stepEl.classList.add('bg-gray-300', 'text-gray-600');
        }
      }
      
      // Update progress bar
      const progressBar = document.getElementById('progressBar');
      progressBar.className = `progress-bar step-${currentStep} bg-yellow-500 h-2 rounded-full`;
    }

    function applyPromo() {
      const promoCode = document.getElementById('promoCode').value.toUpperCase();
      const validCodes = {
        'LUXURY10': 0.1,
        'WELCOME15': 0.15,
        'SAVE20': 0.2
      };
      
      if (validCodes[promoCode]) {
        const subtotal = cart.reduce((sum, item) => sum + (item.price * item.quantity), 0);
        discountAmount = subtotal * validCodes[promoCode];
        updateOrderSummary();
        showNotification('Kode promo berhasil diterapkan!', 'success');
      } else {
        showNotification('Kode promo tidak valid!', 'error');
      }
    }

    function processOrder() {
      // Validate form
      const form = document.getElementById('shippingForm');
      if (!form.checkValidity()) {
        form.reportValidity();
        return;
      }
      
      // Generate order number
      const orderNumber = 'LS-' + Date.now().toString().slice(-8);
      document.getElementById('orderNumber').textContent = '#' + orderNumber;
      
      // Calculate delivery date
      const shipping = document.querySelector('input[name="shipping"]:checked').value;
      let deliveryDays = 3;
      if (shipping === 'express') deliveryDays = 1;
      else if (shipping === 'same-day') deliveryDays = 0;
      
      const deliveryDate = new Date();
      deliveryDate.setDate(deliveryDate.getDate() + deliveryDays);
      document.getElementById('estimatedDelivery').textContent = deliveryDate.toLocaleDateString('id-ID');
      
      // Clear cart
      localStorage.removeItem('cart');
      
      // Move to confirmation step
      nextStep();
      
      // Show success notification
      showNotification('Pesanan berhasil diproses!', 'success');
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
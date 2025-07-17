# LuxuryShop - Premium E-Commerce Website

![LuxuryShop Logo](https://img.shields.io/badge/LuxuryShop-Premium%20E--Commerce-gold?style=for-the-badge&logo=shopping-bag)

LuxuryShop adalah website E-Commerce premium yang dibangun menggunakan **PHP Native** dengan desain mewah dan responsif. Website ini menggunakan gradient kuning-putih sebagai tema utama dan menyediakan pengalaman berbelanja online yang elegan.

## ✨ Fitur Utama

### 🛍️ **E-Commerce Core Features**
- **Katalog Produk** - Grid produk dengan filter dan pencarian
- **Keranjang Belanja** - Shopping cart dengan localStorage
- **Checkout System** - Multi-step checkout process
- **Kategori Produk** - 8 kategori produk premium
- **Sistem Rating** - Product ratings dan reviews
- **Promo Code** - Sistem kode diskon
- **Wishlist** - Favorite products

### 🎨 **Desain & UI/UX**
- **Responsive Design** - Mobile-first approach
- **Luxury Gradient** - Yellow-white gradient theme
- **Glass Morphism** - Modern glass effect design
- **Smooth Animations** - CSS transitions dan hover effects
- **Typography** - Playfair Display + Inter fonts
- **Icons** - Font Awesome 6.4.0

### 🛠️ **Technical Features**
- **PHP Native** - No framework dependencies
- **Tailwind CSS** - Utility-first CSS framework
- **Vanilla JavaScript** - No jQuery dependencies
- **LocalStorage** - Client-side data persistence
- **Progressive Enhancement** - Works without JavaScript
- **SEO Friendly** - Semantic HTML structure

## 📁 Struktur File

```
├── index.php          # Homepage dengan hero section
├── produk.php         # Halaman katalog produk
├── kategori.php       # Halaman kategori produk
├── tentang.php        # Halaman about us
├── kontak.php         # Halaman kontak dengan form
├── checkout.php       # Multi-step checkout process
├── assets/            # Folder aset gambar
│   ├── logo.jpg
│   ├── minuman*.png
│   └── ...
└── README.md          # Dokumentasi
```

## 🚀 Cara Menjalankan

### Prerequisites
- PHP 7.4 atau lebih tinggi
- Web browser modern
- (Opsional) Web server Apache/Nginx

### 1. Clone Repository
```bash
git clone <repository-url>
cd luxury-shop
```

### 2. Jalankan dengan PHP Built-in Server
```bash
php -S localhost:8080
```

### 3. Akses Website
Buka browser dan kunjungi: `http://localhost:8080`

## 🎯 Halaman Website

### 🏠 **Homepage (index.php)**
- Hero section dengan CTA buttons
- Produk unggulan showcase
- Newsletter subscription
- Responsive navigation

### 🛒 **Produk (produk.php)**
- Grid layout responsif
- Filter berdasarkan kategori
- Sorting options (nama, harga, rating)
- Search functionality
- Product cards dengan rating

### 📂 **Kategori (kategori.php)**
- 8 kategori produk premium:
  - Teh Premium ⭐ POPULER
  - Kopi Premium
  - Jus Segar
  - Minuman Herbal
  - Smoothies 🔥 TRENDING
  - Minuman Energi
  - Minuman Detox
  - Koleksi Khusus 👑 EKSKLUSIF

### ℹ️ **Tentang (tentang.php)**
- Company story & timeline
- Visi & misi
- Team profiles
- Company values
- Statistics counters

### 📞 **Kontak (kontak.php)**
- Contact information cards
- Interactive contact form
- Business hours
- Social media links
- FAQ section

### 💳 **Checkout (checkout.php)**
- 4-step checkout process:
  1. Cart review
  2. Shipping information
  3. Payment method
  4. Order confirmation
- Multiple payment options
- Shipping calculator
- Promo code system

## 🎨 Design System

### Color Palette
```css
Primary: #f59e0b (Yellow/Gold)
Secondary: #fbbf24 (Lighter Gold)
Accent: #fcd34d (Light Yellow)
Background: Linear gradient (Yellow to White)
Text: #374151 (Dark Gray)
```

### Typography
- **Headings**: Playfair Display (Serif)
- **Body**: Inter (Sans-serif)
- **Weights**: 300, 400, 500, 600, 700

### Effects
- **Glass Morphism**: `backdrop-filter: blur(10px)`
- **Hover Animations**: `transform: translateY(-8px)`
- **Gradient Backgrounds**: Multi-stop linear gradients
- **Smooth Transitions**: 0.3s ease

## 🛠️ Teknologi yang Digunakan

| Technology | Purpose | Version |
|------------|---------|---------|
| **PHP** | Backend Logic | 7.4+ |
| **HTML5** | Markup Structure | Latest |
| **CSS3** | Styling | Latest |
| **JavaScript** | Interactivity | ES6+ |
| **Tailwind CSS** | Utility CSS | 3.x |
| **Font Awesome** | Icons | 6.4.0 |

## 🚀 Fitur JavaScript

### Shopping Cart
```javascript
// Add to cart functionality
function addToCart(name, price, image) {
  // Add item to cart array
  // Update localStorage
  // Update UI counters
}

// Cart management
function updateQuantity(name, change) {
  // Update item quantity
  // Recalculate totals
}
```

### Form Handling
```javascript
// Contact form with validation
function setupContactForm() {
  // Form submission
  // Loading states
  // Success notifications
}
```

### Animations
```javascript
// Scroll-triggered animations
function animateOnScroll() {
  // Fade in effects
  // Stagger animations
}
```

## 📱 Responsive Breakpoints

| Screen Size | Breakpoint | Layout |
|-------------|------------|--------|
| **Mobile** | < 768px | Single column |
| **Tablet** | 768px - 1024px | 2 columns |
| **Desktop** | > 1024px | 3-4 columns |
| **Large** | > 1280px | Full layout |

## 🎯 Browser Support

- ✅ Chrome 90+
- ✅ Firefox 88+
- ✅ Safari 14+
- ✅ Edge 90+
- ⚠️ IE 11 (Limited support)

## 🔧 Customization

### Mengubah Warna
Edit file CSS untuk mengubah variabel warna:
```css
.luxury-gradient {
  background: linear-gradient(135deg, #your-color 0%, #your-color-2 100%);
}
```

### Menambah Produk
Edit array `allProducts` di `produk.php`:
```javascript
let allProducts = [
  {
    id: 9,
    name: "Produk Baru",
    category: "kategori",
    price: 50000,
    image: "assets/produk-baru.jpg",
    rating: 4.5,
    description: "Deskripsi produk"
  }
];
```

## 🔒 Security Features

- ✅ **Input Sanitization** - PHP filter functions
- ✅ **XSS Protection** - Output escaping
- ✅ **CSRF Protection** - Form tokens (can be implemented)
- ✅ **Client Validation** - JavaScript form validation
- ✅ **Server Validation** - PHP form validation

## 📈 Performance

### Loading Speed
- ⚡ **Optimized CSS** - Utility-first approach
- ⚡ **Minimal JavaScript** - Vanilla JS only
- ⚡ **Image Optimization** - Compressed assets
- ⚡ **CDN Resources** - External font/icon loading

### SEO Optimization
- 🔍 **Semantic HTML** - Proper heading structure
- 🔍 **Meta Tags** - Title and description
- 🔍 **Mobile Friendly** - Responsive design
- 🔍 **Fast Loading** - Optimized resources

## 🔮 Future Enhancements

### Phase 1 - Backend Integration
- [ ] Database integration (MySQL/PostgreSQL)
- [ ] User authentication system
- [ ] Admin panel untuk manage products
- [ ] Order management system

### Phase 2 - Advanced Features
- [ ] Payment gateway integration
- [ ] Real-time notifications
- [ ] Advanced search & filters
- [ ] Product reviews system

### Phase 3 - Business Features
- [ ] Inventory management
- [ ] Analytics dashboard
- [ ] Email marketing integration
- [ ] Multi-language support

## 🐛 Troubleshooting

### Common Issues

**1. PHP Server tidak jalan**
```bash
# Pastikan PHP terinstall
php --version

# Jalankan server
php -S localhost:8080
```

**2. Gambar tidak muncul**
- Pastikan folder `assets/` memiliki permission yang benar
- Check path gambar di file PHP

**3. JavaScript tidak bekerja**
- Buka Developer Tools (F12)
- Check Console untuk error messages
- Pastikan browser support ES6+

## 📝 License

Proyek ini menggunakan lisensi MIT. Silakan gunakan untuk keperluan komersial maupun non-komersial.

## 👨‍💻 Developer

Dibuat dengan ❤️ untuk proyek E-Commerce premium.

---

**⭐ Jika project ini membantu, berikan star di repository ini!**

---

*Last updated: December 2025*
<?php
$page_title = "Cat Products & Accessories - MeowMate";
$page_description = "Premium cat products, food, toys, and accessories for your feline friends.";

// Sample product data with more variety
$all_products = [
    [
        'id' => 1,
        'name' => 'Premium Cat Food - Salmon & Rice',
        'price' => 24.99,
        'original_price' => 29.99,
        'image' => '/placeholder.svg?height=400&width=400&text=Premium+Cat+Food',
        'rating' => 4.8,
        'reviews' => 156,
        'category' => 'Food',
        'brand' => 'Royal Canin',
        'badge' => 'Best Seller',
        'in_stock' => true,
        'description' => 'High-quality salmon and rice formula for adult cats'
    ],
    [
        'id' => 2,
        'name' => 'Interactive Cat Toy - Feather Wand',
        'price' => 12.99,
        'original_price' => 15.99,
        'image' => '/placeholder.svg?height=400&width=400&text=Cat+Toy',
        'rating' => 4.6,
        'reviews' => 89,
        'category' => 'Toys',
        'brand' => 'PetSafe',
        'badge' => 'Sale',
        'in_stock' => true,
        'description' => 'Interactive feather wand to keep your cat entertained'
    ],
    [
        'id' => 3,
        'name' => 'Luxury Cat Bed - Memory Foam',
        'price' => 49.99,
        'original_price' => 59.99,
        'image' => '/placeholder.svg?height=400&width=400&text=Cat+Bed',
        'rating' => 4.9,
        'reviews' => 234,
        'category' => 'Accessories',
        'brand' => 'PetFusion',
        'badge' => 'Premium',
        'in_stock' => true,
        'description' => 'Orthopedic memory foam bed for ultimate comfort'
    ],
    [
        'id' => 4,
        'name' => 'Cat Grooming Kit - Professional',
        'price' => 34.99,
        'original_price' => 39.99,
        'image' => '/placeholder.svg?height=400&width=400&text=Grooming+Kit',
        'rating' => 4.7,
        'reviews' => 67,
        'category' => 'Grooming',
        'brand' => 'FURminator',
        'badge' => 'New',
        'in_stock' => true,
        'description' => 'Complete grooming kit with brushes and nail clippers'
    ],
    [
        'id' => 5,
        'name' => 'Organic Cat Treats - Chicken',
        'price' => 8.99,
        'original_price' => 10.99,
        'image' => '/placeholder.svg?height=400&width=400&text=Cat+Treats',
        'rating' => 4.5,
        'reviews' => 123,
        'category' => 'Food',
        'brand' => 'Blue Buffalo',
        'badge' => 'Organic',
        'in_stock' => true,
        'description' => 'All-natural organic chicken treats for training'
    ],
    [
        'id' => 6,
        'name' => 'Cat Scratching Post - Tall',
        'price' => 39.99,
        'original_price' => 49.99,
        'image' => '/placeholder.svg?height=400&width=400&text=Scratching+Post',
        'rating' => 4.4,
        'reviews' => 78,
        'category' => 'Accessories',
        'brand' => 'SmartCat',
        'badge' => 'Popular',
        'in_stock' => false,
        'description' => 'Tall sisal scratching post for large cats'
    ],
    [
        'id' => 7,
        'name' => 'Automatic Water Fountain',
        'price' => 45.99,
        'original_price' => 55.99,
        'image' => '/placeholder.svg?height=400&width=400&text=Water+Fountain',
        'rating' => 4.6,
        'reviews' => 145,
        'category' => 'Accessories',
        'brand' => 'Catit',
        'badge' => 'New',
        'in_stock' => true,
        'description' => 'Automatic water fountain with filtration system'
    ],
    [
        'id' => 8,
        'name' => 'Catnip Spray - Natural',
        'price' => 6.99,
        'original_price' => 8.99,
        'image' => '/placeholder.svg?height=400&width=400&text=Catnip+Spray',
        'rating' => 4.3,
        'reviews' => 92,
        'category' => 'Toys',
        'brand' => 'KONG',
        'badge' => 'Sale',
        'in_stock' => true,
        'description' => '100% natural catnip spray for toys and scratchers'
    ],
    [
        'id' => 9,
        'name' => 'Cat Carrier - Airline Approved',
        'price' => 79.99,
        'original_price' => 89.99,
        'image' => '/placeholder.svg?height=400&width=400&text=Cat+Carrier',
        'rating' => 4.8,
        'reviews' => 203,
        'category' => 'Accessories',
        'brand' => 'Sherpa',
        'badge' => 'Premium',
        'in_stock' => true,
        'description' => 'Airline approved soft-sided cat carrier'
    ],
    [
        'id' => 10,
        'name' => 'Dental Care Treats',
        'price' => 14.99,
        'original_price' => 17.99,
        'image' => '/placeholder.svg?height=400&width=400&text=Dental+Treats',
        'rating' => 4.4,
        'reviews' => 87,
        'category' => 'Food',
        'brand' => 'Greenies',
        'badge' => 'Health',
        'in_stock' => true,
        'description' => 'Dental care treats for healthy teeth and gums'
    ],
    [
        'id' => 11,
        'name' => 'Cat Litter - Clumping',
        'price' => 18.99,
        'original_price' => 22.99,
        'image' => '/placeholder.svg?height=400&width=400&text=Cat+Litter',
        'rating' => 4.5,
        'reviews' => 167,
        'category' => 'Accessories',
        'brand' => 'Tidy Cats',
        'badge' => 'Best Seller',
        'in_stock' => true,
        'description' => 'Premium clumping cat litter with odor control'
    ],
    [
        'id' => 12,
        'name' => 'Cat Shampoo - Hypoallergenic',
        'price' => 16.99,
        'original_price' => 19.99,
        'image' => '/placeholder.svg?height=400&width=400&text=Cat+Shampoo',
        'rating' => 4.2,
        'reviews' => 54,
        'category' => 'Grooming',
        'brand' => 'Earthbath',
        'badge' => 'Gentle',
        'in_stock' => true,
        'description' => 'Gentle hypoallergenic shampoo for sensitive cats'
    ]
];

$categories = [
    ['name' => 'All Products', 'count' => count($all_products), 'active' => true],
    ['name' => 'Food', 'count' => count(array_filter($all_products, fn($p) => $p['category'] === 'Food')), 'active' => false],
    ['name' => 'Toys', 'count' => count(array_filter($all_products, fn($p) => $p['category'] === 'Toys')), 'active' => false],
    ['name' => 'Accessories', 'count' => count(array_filter($all_products, fn($p) => $p['category'] === 'Accessories')), 'active' => false],
    ['name' => 'Grooming', 'count' => count(array_filter($all_products, fn($p) => $p['category'] === 'Grooming')), 'active' => false]
];

$brands = array_unique(array_column($all_products, 'brand'));
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <meta name="description" content="<?php echo $page_description; ?>">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            50: '#f0fdf4',
                            100: '#dcfce7',
                            200: '#bbf7d0',
                            300: '#86efac',
                            400: '#4ade80',
                            500: '#22c55e',
                            600: '#16a34a',
                            700: '#15803d',
                            800: '#166534',
                            900: '#14532d',
                        }
                    },
                    animation: {
                        'bounce-slow': 'bounce 3s infinite',
                        'pulse-slow': 'pulse 4s infinite',
                        'wiggle': 'wiggle 1s ease-in-out infinite',
                        'float': 'float 6s ease-in-out infinite',
                        'glow': 'glow 2s ease-in-out infinite alternate',
                    },
                    keyframes: {
                        wiggle: {
                            '0%, 100%': { transform: 'rotate(-3deg)' },
                            '50%': { transform: 'rotate(3deg)' },
                        },
                        float: {
                            '0%, 100%': { transform: 'translateY(0px)' },
                            '50%': { transform: 'translateY(-20px)' },
                        },
                        glow: {
                            '0%': { boxShadow: '0 0 5px #22c55e, 0 0 10px #22c55e, 0 0 15px #22c55e' },
                            '100%': { boxShadow: '0 0 10px #22c55e, 0 0 20px #22c55e, 0 0 30px #22c55e' },
                        }
                    }
                }
            }
        }
    </script>
    <style>
        .gradient-text {
            background: linear-gradient(45deg, #22c55e, #3b82f6, #8b5cf6, #ef4444);
            background-size: 300% 300%;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: gradient-shift 3s ease infinite;
        }

        @keyframes gradient-shift {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        .card-hover {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .card-hover:hover {
            transform: translateY(-12px) scale(1.03);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
        }

        .floating-shapes {
            position: absolute;
            width: 100%;
            height: 100%;
            overflow: hidden;
            pointer-events: none;
        }

        .floating-shape {
            position: absolute;
            opacity: 0.1;
            animation: float 8s ease-in-out infinite;
        }

        .floating-shape:nth-child(1) {
            left: 10%;
            animation-delay: 0s;
        }

        .floating-shape:nth-child(2) {
            left: 20%;
            animation-delay: 1s;
        }

        .floating-shape:nth-child(3) {
            left: 30%;
            animation-delay: 2s;
        }

        .floating-shape:nth-child(4) {
            left: 40%;
            animation-delay: 3s;
        }

        .floating-shape:nth-child(5) {
            left: 50%;
            animation-delay: 4s;
        }

        .floating-shape:nth-child(6) {
            left: 60%;
            animation-delay: 5s;
        }

        .floating-shape:nth-child(7) {
            left: 70%;
            animation-delay: 6s;
        }

        .floating-shape:nth-child(8) {
            left: 80%;
            animation-delay: 7s;
        }

        .sparkle {
            position: fixed;
            pointer-events: none;
            z-index: 9999;
        }

        @keyframes sparkle {
            0% {
                transform: scale(0) rotate(0deg);
                opacity: 1;
            }

            50% {
                transform: scale(1) rotate(180deg);
                opacity: 1;
            }

            100% {
                transform: scale(0) rotate(360deg);
                opacity: 0;
            }
        }

        .loading-skeleton {
            background: linear-gradient(90deg, #f0f0f0 25%, #e0e0e0 50%, #f0f0f0 75%);
            background-size: 200% 100%;
            animation: loading 1.5s infinite;
        }

        @keyframes loading {
            0% {
                background-position: 200% 0;
            }

            100% {
                background-position: -200% 0;
            }
        }

        .product-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .product-card:hover {
            background: rgba(255, 255, 255, 0.98);
            border: 1px solid rgba(34, 197, 94, 0.3);
        }

        .image-container {
            position: relative;
            overflow: hidden;
            border-radius: 1rem;
        }

        .image-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.4), transparent);
            transition: left 0.5s;
            z-index: 1;
        }

        .image-container:hover::before {
            left: 100%;
        }
    </style>
</head>

<body class="bg-gradient-to-br from-green-50 via-white to-blue-50 min-h-screen">
    <!-- Floating Background Shapes -->
    <div class="floating-shapes fixed inset-0 z-0">
        <div class="floating-shape w-20 h-20 bg-green-200 rounded-full"></div>
        <div class="floating-shape w-16 h-16 bg-blue-200 rounded-full"></div>
        <div class="floating-shape w-12 h-12 bg-purple-200 rounded-full"></div>
        <div class="floating-shape w-24 h-24 bg-pink-200 rounded-full"></div>
        <div class="floating-shape w-18 h-18 bg-yellow-200 rounded-full"></div>
        <div class="floating-shape w-14 h-14 bg-indigo-200 rounded-full"></div>
        <div class="floating-shape w-22 h-22 bg-red-200 rounded-full"></div>
        <div class="floating-shape w-10 h-10 bg-teal-200 rounded-full"></div>
    </div>

    <!-- Header -->
    <!-- <header class="bg-white/80 backdrop-blur-md shadow-lg sticky top-0 z-50 animate__animated animate__slideInDown">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16"> -->
    <!-- Logo -->
    <!-- <div class="flex items-center space-x-3 animate-pulse-slow">
                    <div
                        class="w-10 h-10 bg-gradient-to-r from-green-600 to-emerald-600 rounded-xl flex items-center justify-center animate-wiggle">
                        <i data-lucide="cat" class="w-6 h-6 text-white"></i>
                    </div>
                    <span class="text-2xl font-bold gradient-text">MeowMate</span>
                </div> -->

    <!-- Navigation -->
    <!-- <nav class="hidden md:flex space-x-8">
                    <a href="index.php"
                        class="text-gray-600 hover:text-green-600 transition-all duration-300 hover:scale-110">Home</a>
                    <a href="products-page.php" class="text-green-600 font-medium relative">
                        Products
                        <div class="absolute -bottom-1 left-0 w-full h-0.5 bg-green-600 animate-glow"></div>
                    </a>
                    <a href="providers.php"
                        class="text-gray-600 hover:text-green-600 transition-all duration-300 hover:scale-110">Providers</a>
                    <a href="contact.php"
                        class="text-gray-600 hover:text-green-600 transition-all duration-300 hover:scale-110">Contact</a>
                </nav> -->

    <!-- Actions -->
    <!-- <div class="flex items-center space-x-4">
        <button class="p-2 text-gray-600 hover:text-green-600 transition-all duration-300 hover:scale-125 relative">
            <i data-lucide="search" class="w-5 h-5"></i>
        </button>
        <button class="p-2 text-gray-600 hover:text-red-500 transition-all duration-300 hover:scale-125 relative">
            <i data-lucide="heart" class="w-5 h-5"></i>
            <span
                class="absolute -top-1 -right-1 bg-red-500 text-white text-xs rounded-full w-5 h-5 flex items-center justify-center animate-bounce"
                id="wishlist-count">0</span>
        </button>
        <a href="cart.php"
            class="p-2 text-gray-600 hover:text-green-600 transition-all duration-300 hover:scale-125 relative">
            <i data-lucide="shopping-cart" class="w-5 h-5"></i>
            <span
                class="absolute -top-1 -right-1 bg-green-500 text-white text-xs rounded-full w-5 h-5 flex items-center justify-center animate-bounce"
                id="cart-count">0</span>
        </a>
        <a href="signin.php"
            class="bg-gradient-to-r from-green-600 to-emerald-600 text-white px-6 py-2 rounded-full hover:from-green-700 hover:to-emerald-700 transition-all duration-300 hover:scale-105 hover:shadow-lg">
            Sign In
        </a> -->
    <!-- </div>
    </div>
    </div>
    </header> -->

    <!-- Hero Section -->
    <section
        class="bg-gradient-to-r from-green-600 via-emerald-600 to-teal-600 text-white py-20 relative overflow-hidden">
        <div class="absolute inset-0 bg-black/10"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center animate__animated animate__fadeInUp">
                <h1 class="text-5xl md:text-7xl font-bold mb-6 animate__animated animate__bounceIn">
                    Premium Cat Products
                    <div class="inline-block animate-wiggle">🐱</div>
                </h1>
                <p
                    class="text-xl md:text-3xl mb-10 text-green-100 animate__animated animate__fadeInUp animate__delay-1s">
                    Everything your feline friend needs for a happy, healthy life
                </p>
                <div
                    class="flex flex-col sm:flex-row gap-6 justify-center animate__animated animate__fadeInUp animate__delay-2s">
                    <button
                        class="bg-white text-green-600 px-10 py-4 rounded-full font-bold text-lg hover:bg-gray-100 transition-all duration-300 hover:scale-110 hover:shadow-2xl transform">
                        Shop Now ✨
                    </button>
                    <button
                        class="border-2 border-white text-white px-10 py-4 rounded-full font-bold text-lg hover:bg-white hover:text-green-600 transition-all duration-300 hover:scale-110">
                        View Categories 📂
                    </button>
                </div>
            </div>
        </div>

        <!-- Animated Cat Icons -->
        <div class="absolute top-20 left-10 text-6xl animate-bounce-slow opacity-20">🐾</div>
        <div class="absolute top-40 right-20 text-4xl animate-pulse-slow opacity-20">🐱</div>
        <div class="absolute bottom-20 left-20 text-5xl animate-float opacity-20">❤️</div>
        <div class="absolute bottom-40 right-10 text-3xl animate-wiggle opacity-20">🏠</div>
    </section>

    <!-- Search and Filter Bar -->
    <section class="bg-white/90 backdrop-blur-md border-b shadow-lg py-8 sticky top-16 z-40">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row gap-6 items-center justify-between">
                <!-- Search -->
                <div class="relative flex-1 max-w-md">
                    <input type="text" id="search-input" placeholder="Search products..."
                        class="w-full pl-12 pr-4 py-4 border-2 border-gray-300 rounded-full focus:ring-4 focus:ring-green-500/50 focus:border-green-500 transition-all duration-300 text-lg">
                    <i data-lucide="search"
                        class="w-6 h-6 text-gray-400 absolute left-4 top-1/2 transform -translate-y-1/2"></i>
                    <div class="absolute right-4 top-1/2 transform -translate-y-1/2">
                        <div class="animate-spin rounded-full h-5 w-5 border-b-2 border-green-500 hidden"
                            id="search-loading"></div>
                    </div>
                </div>

                <!-- Filters -->
                <div class="flex flex-wrap gap-4 items-center">
                    <select id="sort-select"
                        class="px-6 py-4 border-2 border-gray-300 rounded-full focus:ring-4 focus:ring-green-500/50 focus:border-green-500 transition-all duration-300 text-lg">
                        <option value="featured">Sort by: Featured</option>
                        <option value="price-low">Price: Low to High</option>
                        <option value="price-high">Price: High to Low</option>
                        <option value="newest">Newest First</option>
                        <option value="rating">Best Rating</option>
                        <option value="name">Name A-Z</option>
                    </select>

                    <select id="price-range-select"
                        class="px-6 py-4 border-2 border-gray-300 rounded-full focus:ring-4 focus:ring-green-500/50 focus:border-green-500 transition-all duration-300 text-lg">
                        <option value="">All Prices</option>
                        <option value="0-10">Under $10</option>
                        <option value="10-25">$10 - $25</option>
                        <option value="25-50">$25 - $50</option>
                        <option value="50-100">$50 - $100</option>
                        <option value="100+">Over $100</option>
                    </select>

                    <button id="clear-filters"
                        class="flex items-center space-x-2 px-6 py-4 border-2 border-red-300 text-red-600 rounded-full hover:bg-red-50 transition-all duration-300 hover:scale-105">
                        <i data-lucide="x-circle" class="w-5 h-5"></i>
                        <span>Clear Filters</span>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 relative z-10">
        <div class="flex flex-col lg:flex-row gap-8">
            <!-- Sidebar -->
            <aside class="lg:w-80 flex-shrink-0">
                <!-- Categories -->
                <div
                    class="bg-white/80 backdrop-blur-md rounded-2xl shadow-xl border p-8 mb-8 animate__animated animate__slideInLeft">
                    <h3 class="text-2xl font-bold text-gray-900 mb-6 flex items-center">
                        <i data-lucide="grid-3x3" class="w-6 h-6 mr-3 text-green-600"></i>
                        Categories
                    </h3>
                    <ul class="space-y-3">
                        <?php foreach ($categories as $index => $category): ?>
                            <li>
                                <button
                                    class="category-filter w-full flex items-center justify-between py-3 px-4 rounded-xl transition-all duration-300 hover:scale-105 <?php echo $category['active'] ? 'bg-gradient-to-r from-green-500 to-emerald-500 text-white shadow-lg' : 'text-gray-600 hover:bg-green-50 hover:text-green-800'; ?>"
                                    data-category="<?php echo $category['name']; ?>">
                                    <span class="font-medium"><?php echo $category['name']; ?></span>
                                    <span
                                        class="text-sm bg-white/20 px-2 py-1 rounded-full"><?php echo $category['count']; ?></span>
                                </button>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <!-- Price Range -->
                <div
                    class="bg-white/80 backdrop-blur-md rounded-2xl shadow-xl border p-8 mb-8 animate__animated animate__slideInLeft animate__delay-1s">
                    <h3 class="text-2xl font-bold text-gray-900 mb-6 flex items-center">
                        <i data-lucide="dollar-sign" class="w-6 h-6 mr-3 text-green-600"></i>
                        Price Range
                    </h3>
                    <div class="space-y-6">
                        <div class="flex items-center space-x-4">
                            <input type="number" id="min-price" placeholder="Min"
                                class="flex-1 px-4 py-3 border-2 border-gray-300 rounded-xl focus:ring-4 focus:ring-green-500/50 focus:border-green-500 transition-all duration-300">
                            <span class="text-gray-500 font-bold">-</span>
                            <input type="number" id="max-price" placeholder="Max"
                                class="flex-1 px-4 py-3 border-2 border-gray-300 rounded-xl focus:ring-4 focus:ring-green-500/50 focus:border-green-500 transition-all duration-300">
                        </div>
                        <button id="apply-price-filter"
                            class="w-full bg-gradient-to-r from-green-600 to-emerald-600 text-white py-3 rounded-xl hover:from-green-700 hover:to-emerald-700 transition-all duration-300 hover:scale-105 hover:shadow-lg font-bold">
                            Apply Filter
                        </button>
                    </div>
                </div>

                <!-- Brands -->
                <div
                    class="bg-white/80 backdrop-blur-md rounded-2xl shadow-xl border p-8 mb-8 animate__animated animate__slideInLeft animate__delay-2s">
                    <h3 class="text-2xl font-bold text-gray-900 mb-6 flex items-center">
                        <i data-lucide="tag" class="w-6 h-6 mr-3 text-green-600"></i>
                        Brands
                    </h3>
                    <div class="space-y-3">
                        <?php foreach ($brands as $brand): ?>
                            <label class="flex items-center group cursor-pointer">
                                <input type="checkbox"
                                    class="brand-filter rounded border-gray-300 text-green-600 focus:ring-green-500 focus:ring-4 transition-all duration-300"
                                    value="<?php echo $brand; ?>">
                                <span
                                    class="ml-3 text-gray-700 group-hover:text-green-600 transition-colors duration-300 font-medium"><?php echo $brand; ?></span>
                            </label>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- Rating -->
                <div
                    class="bg-white/80 backdrop-blur-md rounded-2xl shadow-xl border p-8 animate__animated animate__slideInLeft animate__delay-3s">
                    <h3 class="text-2xl font-bold text-gray-900 mb-6 flex items-center">
                        <i data-lucide="star" class="w-6 h-6 mr-3 text-yellow-500"></i>
                        Rating
                    </h3>
                    <div class="space-y-3">
                        <?php for ($i = 5; $i >= 1; $i--): ?>
                            <label class="flex items-center group cursor-pointer">
                                <input type="checkbox"
                                    class="rating-filter rounded border-gray-300 text-green-600 focus:ring-green-500 focus:ring-4 transition-all duration-300"
                                    value="<?php echo $i; ?>">
                                <div class="ml-3 flex items-center">
                                    <?php for ($j = 1; $j <= 5; $j++): ?>
                                        <i data-lucide="star"
                                            class="w-5 h-5 <?php echo $j <= $i ? 'text-yellow-400 fill-current' : 'text-gray-300'; ?> transition-colors duration-300"></i>
                                    <?php endfor; ?>
                                    <span
                                        class="ml-2 text-sm text-gray-600 group-hover:text-green-600 transition-colors duration-300 font-medium">&
                                        up</span>
                                </div>
                            </label>
                        <?php endfor; ?>
                    </div>
                </div>
            </aside>

            <!-- Main Content -->
            <main class="flex-1">
                <!-- Results Header -->
                <div
                    class="flex flex-col sm:flex-row items-start sm:items-center justify-between mb-8 animate__animated animate__fadeInRight gap-4">
                    <div>
                        <h2 class="text-3xl font-bold text-gray-900 gradient-text">Featured Products</h2>
                        <p class="text-gray-600 text-lg mt-2">Showing <span
                                id="results-count"><?php echo count($all_products); ?></span> of
                            <?php echo count($all_products); ?> results
                        </p>
                    </div>
                    <div class="flex items-center space-x-4">
                        <button id="grid-view"
                            class="p-3 border-2 border-green-500 bg-green-500 text-white rounded-xl hover:bg-green-600 transition-all duration-300 hover:scale-110">
                            <i data-lucide="grid-3x3" class="w-6 h-6"></i>
                        </button>
                        <button id="list-view"
                            class="p-3 border-2 border-gray-300 text-gray-600 rounded-xl hover:bg-gray-50 transition-all duration-300 hover:scale-110">
                            <i data-lucide="list" class="w-6 h-6"></i>
                        </button>
                    </div>
                </div>

                <!-- Loading Skeleton -->
                <div id="loading-skeleton" class="hidden">
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                        <?php for ($i = 0; $i < 6; $i++): ?>
                            <div class="bg-white rounded-2xl shadow-lg border overflow-hidden">
                                <div class="loading-skeleton h-64 w-full"></div>
                                <div class="p-6">
                                    <div class="loading-skeleton h-4 w-3/4 mb-3 rounded"></div>
                                    <div class="loading-skeleton h-6 w-1/2 mb-3 rounded"></div>
                                    <div class="loading-skeleton h-4 w-full mb-4 rounded"></div>
                                    <div class="loading-skeleton h-10 w-full rounded"></div>
                                </div>
                            </div>
                        <?php endfor; ?>
                    </div>
                </div>

                <!-- Products Grid -->
                <div id="products-grid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                    <?php foreach ($all_products as $index => $product): ?>
                        <div class="product-card rounded-3xl shadow-xl border hover:shadow-2xl transition-all duration-500 group card-hover animate__animated animate__fadeInUp overflow-hidden"
                            data-category="<?php echo $product['category']; ?>"
                            data-price="<?php echo $product['price']; ?>" data-rating="<?php echo $product['rating']; ?>"
                            data-brand="<?php echo $product['brand']; ?>"
                            data-name="<?php echo strtolower($product['name']); ?>"
                            style="animation-delay: <?php echo $index * 0.1; ?>s">

                            <!-- Product Image -->
                            <div class="relative image-container">
                                <a href="product-details.php?id=<?php echo $product['id']; ?>" class="block">
                                    <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>"
                                        class="w-full h-80 object-cover group-hover:scale-110 transition-transform duration-700">
                                </a>

                                <!-- Badge -->
                                <?php if ($product['badge']): ?>
                                    <span class="absolute top-4 left-4 px-4 py-2 text-sm font-bold rounded-full animate-pulse shadow-lg
                                        <?php
                                        echo $product['badge'] === 'Best Seller' ? 'bg-gradient-to-r from-green-500 to-emerald-500 text-white' :
                                            ($product['badge'] === 'Sale' ? 'bg-gradient-to-r from-red-500 to-pink-500 text-white' :
                                                ($product['badge'] === 'New' ? 'bg-gradient-to-r from-blue-500 to-cyan-500 text-white' :
                                                    ($product['badge'] === 'Premium' ? 'bg-gradient-to-r from-purple-500 to-indigo-500 text-white' : 'bg-gradient-to-r from-orange-500 to-yellow-500 text-white')));
                                        ?>">
                                        <?php echo $product['badge']; ?>
                                    </span>
                                <?php endif; ?>

                                <!-- Quick Actions -->
                                <div
                                    class="absolute top-4 right-4 flex flex-col space-y-3 opacity-0 group-hover:opacity-100 transition-all duration-300 transform translate-x-4 group-hover:translate-x-0">
                                    <button
                                        class="wishlist-btn p-3 bg-white/90 backdrop-blur-md rounded-full shadow-lg hover:bg-red-50 hover:text-red-500 transition-all duration-300 hover:scale-125"
                                        data-product-id="<?php echo $product['id']; ?>">
                                        <i data-lucide="heart" class="w-5 h-5 text-gray-600"></i>
                                    </button>
                                    <a href="product-details.php?id=<?php echo $product['id']; ?>"
                                        class="p-3 bg-white/90 backdrop-blur-md rounded-full shadow-lg hover:bg-blue-50 hover:text-blue-500 transition-all duration-300 hover:scale-125">
                                        <i data-lucide="eye" class="w-5 h-5 text-gray-600"></i>
                                    </a>
                                </div>

                                <!-- Stock Status -->
                                <?php if (!$product['in_stock']): ?>
                                    <div class="absolute inset-0 bg-black/60 backdrop-blur-sm flex items-center justify-center">
                                        <span
                                            class="bg-red-600 text-white px-6 py-3 rounded-full font-bold text-lg animate-pulse">Out
                                            of Stock</span>
                                    </div>
                                <?php endif; ?>
                            </div>

                            <!-- Product Info -->
                            <div class="p-6">
                                <div class="mb-3">
                                    <span
                                        class="text-sm font-medium text-green-600 bg-green-100 px-3 py-1 rounded-full"><?php echo $product['category']; ?></span>
                                </div>

                                <a href="product-details.php?id=<?php echo $product['id']; ?>" class="block">
                                    <h3
                                        class="text-xl font-bold text-gray-900 mb-3 line-clamp-2 group-hover:text-green-600 transition-colors duration-300">
                                        <?php echo $product['name']; ?>
                                    </h3>
                                </a>

                                <p class="text-gray-600 mb-4 text-sm"><?php echo $product['description']; ?></p>

                                <div class="flex items-center mb-4">
                                    <div class="flex items-center">
                                        <?php for ($i = 1; $i <= 5; $i++): ?>
                                            <i data-lucide="star"
                                                class="w-5 h-5 <?php echo $i <= floor($product['rating']) ? 'text-yellow-400 fill-current' : 'text-gray-300'; ?> transition-colors duration-300"></i>
                                        <?php endfor; ?>
                                    </div>
                                    <span class="ml-3 text-sm text-gray-600 font-medium"><?php echo $product['rating']; ?>
                                        (<?php echo $product['reviews']; ?> reviews)</span>
                                </div>

                                <div class="flex items-center justify-between mb-6">
                                    <div class="flex items-center space-x-3">
                                        <span
                                            class="text-2xl font-bold text-green-600">$<?php echo number_format($product['price'], 2); ?></span>
                                        <?php if ($product['original_price'] > $product['price']): ?>
                                            <span
                                                class="text-lg text-gray-500 line-through">$<?php echo number_format($product['original_price'], 2); ?></span>
                                        <?php endif; ?>
                                    </div>
                                    <?php if ($product['original_price'] > $product['price']): ?>
                                        <span
                                            class="text-sm font-bold text-red-600 bg-red-100 px-2 py-1 rounded-full animate-pulse">
                                            <?php echo round((($product['original_price'] - $product['price']) / $product['original_price']) * 100); ?>%
                                            OFF
                                        </span>
                                    <?php endif; ?>
                                </div>

                                <!-- Add to Cart Button -->
                                <button
                                    class="add-to-cart-btn w-full bg-gradient-to-r from-green-600 to-emerald-600 text-white py-4 rounded-xl hover:from-green-700 hover:to-emerald-700 transition-all duration-300 flex items-center justify-center space-x-3 font-bold text-lg hover:scale-105 hover:shadow-lg <?php echo !$product['in_stock'] ? 'opacity-50 cursor-not-allowed' : ''; ?>"
                                    data-product-id="<?php echo $product['id']; ?>"
                                    data-product-name="<?php echo $product['name']; ?>"
                                    data-product-price="<?php echo $product['price']; ?>"
                                    data-product-image="<?php echo $product['image']; ?>" <?php echo !$product['in_stock'] ? 'disabled' : ''; ?>>
                                    <i data-lucide="shopping-cart" class="w-5 h-5"></i>
                                    <span><?php echo $product['in_stock'] ? 'Add to Cart' : 'Out of Stock'; ?></span>
                                </button>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <!-- No Results Message -->
                <div id="no-results" class="hidden text-center py-20">
                    <div class="text-6xl mb-6">😿</div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">No products found</h3>
                    <p class="text-gray-600 mb-8">Try adjusting your filters or search terms</p>
                    <button id="reset-filters"
                        class="bg-gradient-to-r from-green-600 to-emerald-600 text-white px-8 py-4 rounded-full hover:from-green-700 hover:to-emerald-700 transition-all duration-300 hover:scale-105 font-bold">
                        Reset All Filters
                    </button>
                </div>

                <!-- Pagination -->
                <div class="flex items-center justify-center mt-16 animate__animated animate__fadeInUp">
                    <nav class="flex items-center space-x-3">
                        <button
                            class="px-4 py-3 border-2 border-gray-300 rounded-xl hover:bg-gray-50 transition-all duration-300 hover:scale-110">
                            <i data-lucide="chevron-left" class="w-5 h-5"></i>
                        </button>
                        <button
                            class="px-6 py-3 bg-gradient-to-r from-green-600 to-emerald-600 text-white rounded-xl font-bold hover:scale-110 transition-all duration-300">1</button>
                        <button
                            class="px-6 py-3 border-2 border-gray-300 rounded-xl hover:bg-gray-50 transition-all duration-300 hover:scale-110">2</button>
                        <button
                            class="px-6 py-3 border-2 border-gray-300 rounded-xl hover:bg-gray-50 transition-all duration-300 hover:scale-110">3</button>
                        <span class="px-3 text-gray-500">...</span>
                        <button
                            class="px-6 py-3 border-2 border-gray-300 rounded-xl hover:bg-gray-50 transition-all duration-300 hover:scale-110">10</button>
                        <button
                            class="px-4 py-3 border-2 border-gray-300 rounded-xl hover:bg-gray-50 transition-all duration-300 hover:scale-110">
                            <i data-lucide="chevron-right" class="w-5 h-5"></i>
                        </button>
                    </nav>
                </div>
            </main>
        </div>
    </div>

    <!-- Newsletter Section -->
    <section
        class="bg-gradient-to-r from-green-600 via-emerald-600 to-teal-600 text-white py-20 relative overflow-hidden">
        <div class="absolute inset-0 bg-black/10"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
            <h2 class="text-4xl font-bold mb-6 animate__animated animate__fadeInUp">Stay Updated with New Products 📧
            </h2>
            <p class="text-xl text-green-100 mb-10 animate__animated animate__fadeInUp animate__delay-1s">Get notified
                about new arrivals, special offers, and cat care tips</p>
            <div class="max-w-md mx-auto flex gap-4 animate__animated animate__fadeInUp animate__delay-2s">
                <input type="email" placeholder="Enter your email"
                    class="flex-1 px-6 py-4 rounded-full text-gray-900 focus:ring-4 focus:ring-green-300 focus:outline-none text-lg">
                <button
                    class="bg-white text-green-600 px-8 py-4 rounded-full font-bold hover:bg-gray-100 transition-all duration-300 hover:scale-105 hover:shadow-lg">
                    Subscribe ✨
                </button>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="animate__animated animate__fadeInUp">
                    <div class="flex items-center space-x-3 mb-6">
                        <div
                            class="w-10 h-10 bg-gradient-to-r from-green-600 to-emerald-600 rounded-xl flex items-center justify-center animate-pulse">
                            <i data-lucide="cat" class="w-6 h-6"></i>
                        </div>
                        <span class="text-2xl font-bold gradient-text">PurrfectStay</span>
                    </div>
                    <p class="text-gray-400 text-lg">Premium cat products and services for your beloved feline friends.
                    </p>
                </div>

                <div class="animate__animated animate__fadeInUp animate__delay-1s">
                    <h3 class="text-xl font-bold mb-6">Quick Links</h3>
                    <ul class="space-y-3 text-gray-400">
                        <li><a href="#"
                                class="hover:text-white transition-colors duration-300 hover:scale-105 inline-block">Home</a>
                        </li>
                        <li><a href="#"
                                class="hover:text-white transition-colors duration-300 hover:scale-105 inline-block">Products</a>
                        </li>
                        <li><a href="#"
                                class="hover:text-white transition-colors duration-300 hover:scale-105 inline-block">Services</a>
                        </li>
                        <li><a href="#"
                                class="hover:text-white transition-colors duration-300 hover:scale-105 inline-block">Contact</a>
                        </li>
                    </ul>
                </div>

                <div class="animate__animated animate__fadeInUp animate__delay-2s">
                    <h3 class="text-xl font-bold mb-6">Categories</h3>
                    <ul class="space-y-3 text-gray-400">
                        <li><a href="#"
                                class="hover:text-white transition-colors duration-300 hover:scale-105 inline-block">Cat
                                Food</a></li>
                        <li><a href="#"
                                class="hover:text-white transition-colors duration-300 hover:scale-105 inline-block">Toys</a>
                        </li>
                        <li><a href="#"
                                class="hover:text-white transition-colors duration-300 hover:scale-105 inline-block">Accessories</a>
                        </li>
                        <li><a href="#"
                                class="hover:text-white transition-colors duration-300 hover:scale-105 inline-block">Grooming</a>
                        </li>
                    </ul>
                </div>

                <div class="animate__animated animate__fadeInUp animate__delay-3s">
                    <h3 class="text-xl font-bold mb-6">Contact Info</h3>
                    <div class="space-y-3 text-gray-400">
                        <p class="flex items-center hover:text-white transition-colors duration-300">
                            <i data-lucide="phone" class="w-5 h-5 mr-3"></i>
                            +1 (555) 123-4567
                        </p>
                        <p class="flex items-center hover:text-white transition-colors duration-300">
                            <i data-lucide="mail" class="w-5 h-5 mr-3"></i>
                            info@purrfectstay.com
                        </p>
                        <p class="flex items-center hover:text-white transition-colors duration-300">
                            <i data-lucide="map-pin" class="w-5 h-5 mr-3"></i>
                            123 Cat Street, Pet City
                        </p>
                    </div>
                </div>
            </div>

            <div class="border-t border-gray-800 mt-12 pt-8 text-center text-gray-400">
                <p>&copy; 2024 PurrfectStay. All rights reserved. Made with ❤️ for cats</p>
            </div>
        </div>
    </footer>

    <!-- Toast Notification -->
    <div id="toast"
        class="fixed top-20 right-4 bg-green-600 text-white px-6 py-4 rounded-xl shadow-lg transform translate-x-full transition-transform duration-300 z-50">
        <div class="flex items-center space-x-3">
            <i data-lucide="check-circle" class="w-5 h-5"></i>
            <span id="toast-message">Product added to cart!</span>
        </div>
    </div>

    <script>
        lucide.createIcons();

        // Global variables
        let allProducts = <?php echo json_encode($all_products); ?>;
        let filteredProducts = [...allProducts];
        let cart = JSON.parse(localStorage.getItem('cart')) || [];
        let wishlist = JSON.parse(localStorage.getItem('wishlist')) || [];

        // Update cart count
        function updateCartCount() {
            document.getElementById('cart-count').textContent = cart.length;
            document.getElementById('wishlist-count').textContent = wishlist.length;
        }

        // Show toast notification
        function showToast(message, type = 'success') {
            const toast = document.getElementById('toast');
            const toastMessage = document.getElementById('toast-message');

            toastMessage.textContent = message;
            toast.className = `fixed top-20 right-4 px-6 py-4 rounded-xl shadow-lg transform transition-transform duration-300 z-50 ${type === 'success' ? 'bg-green-600 text-white' : 'bg-red-600 text-white'
                }`;

            toast.style.transform = 'translateX(0)';

            setTimeout(() => {
                toast.style.transform = 'translateX(100%)';
            }, 3000);
        }

        // Create sparkle effect
        function createSparkles(x, y) {
            for (let i = 0; i < 20; i++) {
                const sparkle = document.createElement('div');
                sparkle.className = 'sparkle';
                sparkle.innerHTML = '✨';
                sparkle.style.left = x + 'px';
                sparkle.style.top = y + 'px';
                sparkle.style.animation = `sparkle 1s ease-out forwards`;
                sparkle.style.animationDelay = Math.random() * 0.5 + 's';
                sparkle.style.transform = `translate(${Math.random() * 200 - 100}px, ${Math.random() * 200 - 100}px)`;

                document.body.appendChild(sparkle);

                setTimeout(() => {
                    sparkle.remove();
                }, 1500);
            }
        }

        // Filter products
        function filterProducts() {
            const searchTerm = document.getElementById('search-input').value.toLowerCase();
            const selectedCategory = document.querySelector('.category-filter.bg-gradient-to-r')?.dataset.category || 'All Products';
            const sortBy = document.getElementById('sort-select').value;
            const priceRange = document.getElementById('price-range-select').value;
            const minPrice = parseFloat(document.getElementById('min-price').value) || 0;
            const maxPrice = parseFloat(document.getElementById('max-price').value) || Infinity;
            const selectedBrands = Array.from(document.querySelectorAll('.brand-filter:checked')).map(cb => cb.value);
            const selectedRatings = Array.from(document.querySelectorAll('.rating-filter:checked')).map(cb => parseFloat(cb.value));

            // Show loading
            showLoading();

            setTimeout(() => {
                filteredProducts = allProducts.filter(product => {
                    // Search filter
                    const matchesSearch = product.name.toLowerCase().includes(searchTerm) ||
                        product.description.toLowerCase().includes(searchTerm) ||
                        product.category.toLowerCase().includes(searchTerm);

                    // Category filter
                    const matchesCategory = selectedCategory === 'All Products' || product.category === selectedCategory;

                    // Price range filter
                    let matchesPriceRange = true;
                    if (priceRange) {
                        const [min, max] = priceRange.split('-').map(p => p === '+' ? Infinity : parseFloat(p));
                        matchesPriceRange = product.price >= min && (max === undefined || product.price <= max);
                    }

                    // Custom price filter
                    const matchesCustomPrice = product.price >= minPrice && product.price <= maxPrice;

                    // Brand filter
                    const matchesBrand = selectedBrands.length === 0 || selectedBrands.includes(product.brand);

                    // Rating filter
                    const matchesRating = selectedRatings.length === 0 || selectedRatings.some(rating => product.rating >= rating);

                    return matchesSearch && matchesCategory && matchesPriceRange && matchesCustomPrice && matchesBrand && matchesRating;
                });

                // Sort products
                switch (sortBy) {
                    case 'price-low':
                        filteredProducts.sort((a, b) => a.price - b.price);
                        break;
                    case 'price-high':
                        filteredProducts.sort((a, b) => b.price - a.price);
                        break;
                    case 'rating':
                        filteredProducts.sort((a, b) => b.rating - a.rating);
                        break;
                    case 'name':
                        filteredProducts.sort((a, b) => a.name.localeCompare(b.name));
                        break;
                    case 'newest':
                        filteredProducts.sort((a, b) => b.id - a.id);
                        break;
                    default:
                        // Featured - keep original order
                        break;
                }

                renderProducts();
                hideLoading();
            }, 500);
        }

        // Show loading skeleton
        function showLoading() {
            document.getElementById('loading-skeleton').classList.remove('hidden');
            document.getElementById('products-grid').classList.add('hidden');
            document.getElementById('no-results').classList.add('hidden');
        }

        // Hide loading skeleton
        function hideLoading() {
            document.getElementById('loading-skeleton').classList.add('hidden');
            document.getElementById('products-grid').classList.remove('hidden');
        }

        // Render products
        function renderProducts() {
            const grid = document.getElementById('products-grid');
            const noResults = document.getElementById('no-results');
            const resultsCount = document.getElementById('results-count');

            resultsCount.textContent = filteredProducts.length;

            if (filteredProducts.length === 0) {
                grid.classList.add('hidden');
                noResults.classList.remove('hidden');
                return;
            }

            grid.classList.remove('hidden');
            noResults.classList.add('hidden');

            grid.innerHTML = filteredProducts.map((product, index) => `
                <div class="product-card rounded-3xl shadow-xl border hover:shadow-2xl transition-all duration-500 group card-hover animate__animated animate__fadeInUp overflow-hidden" 
                     data-category="${product.category}" 
                     data-price="${product.price}" 
                     data-rating="${product.rating}" 
                     data-brand="${product.brand}"
                     data-name="${product.name.toLowerCase()}"
                     style="animation-delay: ${index * 0.1}s">
                    
                    <div class="relative image-container">
                        <a href="product-details.php?id=${product.id}" class="block">
                            <img src="${product.image}" alt="${product.name}" class="w-full h-80 object-cover group-hover:scale-110 transition-transform duration-700">
                        </a>
                        
                        ${product.badge ? `
                            <span class="absolute top-4 left-4 px-4 py-2 text-sm font-bold rounded-full animate-pulse shadow-lg
                                ${product.badge === 'Best Seller' ? 'bg-gradient-to-r from-green-500 to-emerald-500 text-white' :
                        product.badge === 'Sale' ? 'bg-gradient-to-r from-red-500 to-pink-500 text-white' :
                            product.badge === 'New' ? 'bg-gradient-to-r from-blue-500 to-cyan-500 text-white' :
                                product.badge === 'Premium' ? 'bg-gradient-to-r from-purple-500 to-indigo-500 text-white' : 'bg-gradient-to-r from-orange-500 to-yellow-500 text-white'}">
                                ${product.badge}
                            </span>
                        ` : ''}

                        <div class="absolute top-4 right-4 flex flex-col space-y-3 opacity-0 group-hover:opacity-100 transition-all duration-300 transform translate-x-4 group-hover:translate-x-0">
                            <button class="wishlist-btn p-3 bg-white/90 backdrop-blur-md rounded-full shadow-lg hover:bg-red-50 hover:text-red-500 transition-all duration-300 hover:scale-125" data-product-id="${product.id}">
                                <i data-lucide="heart" class="w-5 h-5 text-gray-600"></i>
                            </button>
                            <a href="product-details.php?id=${product.id}" class="p-3 bg-white/90 backdrop-blur-md rounded-full shadow-lg hover:bg-blue-50 hover:text-blue-500 transition-all duration-300 hover:scale-125">
                                <i data-lucide="eye" class="w-5 h-5 text-gray-600"></i>
                            </a>
                        </div>

                        ${!product.in_stock ? `
                            <div class="absolute inset-0 bg-black/60 backdrop-blur-sm flex items-center justify-center">
                                <span class="bg-red-600 text-white px-6 py-3 rounded-full font-bold text-lg animate-pulse">Out of Stock</span>
                            </div>
                        ` : ''}
                    </div>

                    <div class="p-6">
                        <div class="mb-3">
                            <span class="text-sm font-medium text-green-600 bg-green-100 px-3 py-1 rounded-full">${product.category}</span>
                        </div>
                        
                        <a href="product-details.php?id=${product.id}" class="block">
                            <h3 class="text-xl font-bold text-gray-900 mb-3 line-clamp-2 group-hover:text-green-600 transition-colors duration-300">
                                ${product.name}
                            </h3>
                        </a>

                        <p class="text-gray-600 mb-4 text-sm">${product.description}</p>

                        <div class="flex items-center mb-4">
                            <div class="flex items-center">
                                ${Array.from({ length: 5 }, (_, i) => `
                                    <i data-lucide="star" class="w-5 h-5 ${i < Math.floor(product.rating) ? 'text-yellow-400 fill-current' : 'text-gray-300'} transition-colors duration-300"></i>
                                `).join('')}
                            </div>
                            <span class="ml-3 text-sm text-gray-600 font-medium">${product.rating} (${product.reviews} reviews)</span>
                        </div>

                        <div class="flex items-center justify-between mb-6">
                            <div class="flex items-center space-x-3">
                                <span class="text-2xl font-bold text-green-600">$${product.price.toFixed(2)}</span>
                                ${product.original_price > product.price ? `
                                    <span class="text-lg text-gray-500 line-through">$${product.original_price.toFixed(2)}</span>
                                ` : ''}
                            </div>
                            ${product.original_price > product.price ? `
                                <span class="text-sm font-bold text-red-600 bg-red-100 px-2 py-1 rounded-full animate-pulse">
                                    ${Math.round(((product.original_price - product.price) / product.original_price) * 100)}% OFF
                                </span>
                            ` : ''}
                        </div>

                        <button class="add-to-cart-btn w-full bg-gradient-to-r from-green-600 to-emerald-600 text-white py-4 rounded-xl hover:from-green-700 hover:to-emerald-700 transition-all duration-300 flex items-center justify-center space-x-3 font-bold text-lg hover:scale-105 hover:shadow-lg ${!product.in_stock ? 'opacity-50 cursor-not-allowed' : ''}" 
                                data-product-id="${product.id}" 
                                data-product-name="${product.name}" 
                                data-product-price="${product.price}"
                                data-product-image="${product.image}"
                                ${!product.in_stock ? 'disabled' : ''}>
                            <i data-lucide="shopping-cart" class="w-5 h-5"></i>
                            <span>${product.in_stock ? 'Add to Cart' : 'Out of Stock'}</span>
                        </button>
                    </div>
                </div>
            `).join('');

            // Reinitialize Lucide icons
            lucide.createIcons();

            // Reattach event listeners
            attachEventListeners();
        }

        // Attach event listeners
        function attachEventListeners() {
            // Add to cart buttons
            document.querySelectorAll('.add-to-cart-btn').forEach(btn => {
                btn.addEventListener('click', function (e) {
                    if (this.disabled) return;

                    const productId = this.dataset.productId;
                    const productName = this.dataset.productName;
                    const productPrice = this.dataset.productPrice;
                    const productImage = this.dataset.productImage;

                    // Check if product already exists in cart
                    const existingItem = cart.find(item => item.id === productId);

                    if (existingItem) {
                        existingItem.quantity += 1;
                    } else {
                        // Add to cart
                        cart.push({
                            id: productId,
                            name: productName,
                            price: parseFloat(productPrice),
                            quantity: 1,
                            image: productImage
                        });
                    }

                    localStorage.setItem('cart', JSON.stringify(cart));
                    updateCartCount();

                    // Create sparkle effect
                    createSparkles(e.clientX, e.clientY);

                    // Show toast
                    showToast(`${productName} added to cart!`);

                    // Button animation
                    this.style.transform = 'scale(0.95)';
                    setTimeout(() => {
                        this.style.transform = 'scale(1)';
                    }, 150);
                });
            });

            // Wishlist buttons
            document.querySelectorAll('.wishlist-btn').forEach(btn => {
                btn.addEventListener('click', function (e) {
                    e.stopPropagation();
                    const productId = this.dataset.productId;
                    const heartIcon = this.querySelector('i');

                    if (wishlist.includes(productId)) {
                        wishlist = wishlist.filter(id => id !== productId);
                        heartIcon.classList.remove('text-red-500', 'fill-current');
                        heartIcon.classList.add('text-gray-600');
                        showToast('Removed from wishlist', 'success');
                    } else {
                        wishlist.push(productId);
                        heartIcon.classList.remove('text-gray-600');
                        heartIcon.classList.add('text-red-500', 'fill-current');
                        showToast('Added to wishlist!', 'success');
                    }

                    localStorage.setItem('wishlist', JSON.stringify(wishlist));
                    updateCartCount();

                    // Animation
                    this.style.transform = 'scale(1.2)';
                    setTimeout(() => {
                        this.style.transform = 'scale(1)';
                    }, 200);
                });
            });
        }

        // Event listeners
        document.addEventListener('DOMContentLoaded', function () {
            updateCartCount();
            attachEventListeners();

            // Search input
            let searchTimeout;
            document.getElementById('search-input').addEventListener('input', function () {
                clearTimeout(searchTimeout);
                searchTimeout = setTimeout(() => {
                    filterProducts();
                }, 300);
            });

            // Sort select
            document.getElementById('sort-select').addEventListener('change', filterProducts);

            // Price range select
            document.getElementById('price-range-select').addEventListener('change', filterProducts);

            // Custom price filter
            document.getElementById('apply-price-filter').addEventListener('click', filterProducts);

            // Category filters
            document.querySelectorAll('.category-filter').forEach(btn => {
                btn.addEventListener('click', function () {
                    // Remove active class from all
                    document.querySelectorAll('.category-filter').forEach(b => {
                        b.classList.remove('bg-gradient-to-r', 'from-green-500', 'to-emerald-500', 'text-white', 'shadow-lg');
                        b.classList.add('text-gray-600', 'hover:bg-green-50', 'hover:text-green-800');
                    });

                    // Add active class to clicked
                    this.classList.remove('text-gray-600', 'hover:bg-green-50', 'hover:text-green-800');
                    this.classList.add('bg-gradient-to-r', 'from-green-500', 'to-emerald-500', 'text-white', 'shadow-lg');

                    filterProducts();
                });
            });

            // Brand filters
            document.querySelectorAll('.brand-filter').forEach(cb => {
                cb.addEventListener('change', filterProducts);
            });

            // Rating filters
            document.querySelectorAll('.rating-filter').forEach(cb => {
                cb.addEventListener('change', filterProducts);
            });

            // Clear filters
            document.getElementById('clear-filters').addEventListener('click', function () {
                // Reset all filters
                document.getElementById('search-input').value = '';
                document.getElementById('sort-select').value = 'featured';
                document.getElementById('price-range-select').value = '';
                document.getElementById('min-price').value = '';
                document.getElementById('max-price').value = '';

                // Reset category to "All Products"
                document.querySelectorAll('.category-filter').forEach(b => {
                    b.classList.remove('bg-gradient-to-r', 'from-green-500', 'to-emerald-500', 'text-white', 'shadow-lg');
                    b.classList.add('text-gray-600', 'hover:bg-green-50', 'hover:text-green-800');
                });
                document.querySelector('.category-filter[data-category="All Products"]').classList.remove('text-gray-600', 'hover:bg-green-50', 'hover:text-green-800');
                document.querySelector('.category-filter[data-category="All Products"]').classList.add('bg-gradient-to-r', 'from-green-500', 'to-emerald-500', 'text-white', 'shadow-lg');

                // Uncheck all checkboxes
                document.querySelectorAll('.brand-filter, .rating-filter').forEach(cb => {
                    cb.checked = false;
                });

                filterProducts();
                showToast('All filters cleared!', 'success');
            });

            // Reset filters from no results
            document.getElementById('reset-filters').addEventListener('click', function () {
                document.getElementById('clear-filters').click();
            });

            // Grid/List view toggle
            document.getElementById('grid-view').addEventListener('click', function () {
                this.classList.add('border-green-500', 'bg-green-500', 'text-white');
                this.classList.remove('border-gray-300', 'text-gray-600');
                document.getElementById('list-view').classList.remove('border-green-500', 'bg-green-500', 'text-white');
                document.getElementById('list-view').classList.add('border-gray-300', 'text-gray-600');

                document.getElementById('products-grid').className = 'grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8';
            });

            document.getElementById('list-view').addEventListener('click', function () {
                this.classList.add('border-green-500', 'bg-green-500', 'text-white');
                this.classList.remove('border-gray-300', 'text-gray-600');
                document.getElementById('grid-view').classList.remove('border-green-500', 'bg-green-500', 'text-white');
                document.getElementById('grid-view').classList.add('border-gray-300', 'text-gray-600');

                document.getElementById('products-grid').className = 'grid grid-cols-1 gap-8';
            });

            // Initialize wishlist states
            wishlist.forEach(productId => {
                const btn = document.querySelector(`.wishlist-btn[data-product-id="${productId}"]`);
                if (btn) {
                    const heartIcon = btn.querySelector('i');
                    heartIcon.classList.remove('text-gray-600');
                    heartIcon.classList.add('text-red-500', 'fill-current');
                }
            });
        });

        // Add sparkle animation keyframes
        const style = document.createElement('style');
        style.textContent = `
            @keyframes sparkle {
                0% { transform: scale(0) rotate(0deg); opacity: 1; }
                50% { transform: scale(1) rotate(180deg); opacity: 1; }
                100% { transform: scale(0) rotate(360deg); opacity: 0; }
            }
        `;
        document.head.appendChild(style);
    </script>
</body>

</html>
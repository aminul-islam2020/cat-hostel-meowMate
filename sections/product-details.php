<?php
// Get product ID from URL parameter
$product_id = isset($_GET['id']) ? (int) $_GET['id'] : 1;

// Sample product data (in a real app, this would come from a database)
$products = [
    1 => [
        'id' => 1,
        'name' => 'Premium Cat Food - Salmon & Rice',
        'price' => 24.99,
        'original_price' => 29.99,
        'images' => [
            '/placeholder.svg?height=600&width=600&text=Premium+Cat+Food+Main',
            '/placeholder.svg?height=600&width=600&text=Premium+Cat+Food+Side',
            '/placeholder.svg?height=600&width=600&text=Premium+Cat+Food+Back',
            '/placeholder.svg?height=600&width=600&text=Premium+Cat+Food+Ingredients'
        ],
        'rating' => 4.8,
        'reviews' => 156,
        'category' => 'Food',
        'brand' => 'Royal Canin',
        'badge' => 'Best Seller',
        'in_stock' => true,
        'stock_quantity' => 25,
        'sku' => 'RC-SF-001',
        'weight' => '2.5 kg',
        'description' => 'Premium salmon and rice formula specially crafted for adult cats. This nutritious blend provides complete and balanced nutrition with high-quality protein from real salmon, essential vitamins, and minerals to support your cat\'s overall health and vitality.',
        'long_description' => 'Our Premium Cat Food with Salmon & Rice is expertly formulated to meet the nutritional needs of adult cats. Made with real salmon as the first ingredient, this recipe provides high-quality protein to support lean muscle maintenance. The addition of rice provides easily digestible carbohydrates for sustained energy. Enriched with omega-3 and omega-6 fatty acids for healthy skin and a shiny coat, plus antioxidants to support immune system health. This formula is free from artificial colors, flavors, and preservatives.',
        'ingredients' => [
            'Salmon (25%)',
            'Rice (20%)',
            'Chicken meal',
            'Sweet potato',
            'Peas',
            'Chicken fat',
            'Natural flavors',
            'Vitamins and minerals',
            'Omega-3 fatty acids',
            'Antioxidants'
        ],
        'nutritional_info' => [
            'Crude Protein' => '32% min',
            'Crude Fat' => '16% min',
            'Crude Fiber' => '3% max',
            'Moisture' => '10% max',
            'Omega-6 Fatty Acids' => '2.5% min',
            'Omega-3 Fatty Acids' => '0.5% min'
        ],
        'feeding_guide' => [
            '2-4 kg cat' => '40-60g per day',
            '4-6 kg cat' => '60-80g per day',
            '6-8 kg cat' => '80-100g per day',
            '8+ kg cat' => '100-120g per day'
        ],
        'features' => [
            'Real salmon as first ingredient',
            'Complete and balanced nutrition',
            'Supports healthy skin and coat',
            'Easy to digest',
            'No artificial preservatives',
            'Veterinarian recommended'
        ]
    ],
    2 => [
        'id' => 2,
        'name' => 'Interactive Cat Toy - Feather Wand',
        'price' => 12.99,
        'original_price' => 15.99,
        'images' => [
            '/placeholder.svg?height=600&width=600&text=Cat+Toy+Main',
            '/placeholder.svg?height=600&width=600&text=Cat+Toy+Action',
            '/placeholder.svg?height=600&width=600&text=Cat+Toy+Parts',
            '/placeholder.svg?height=600&width=600&text=Cat+Toy+Package'
        ],
        'rating' => 4.6,
        'reviews' => 89,
        'category' => 'Toys',
        'brand' => 'PetSafe',
        'badge' => 'Sale',
        'in_stock' => true,
        'stock_quantity' => 15,
        'sku' => 'PS-FW-002',
        'weight' => '0.2 kg',
        'description' => 'Interactive feather wand toy designed to stimulate your cat\'s natural hunting instincts and provide hours of engaging play.',
        'long_description' => 'This premium interactive feather wand is designed to provide endless entertainment for your feline friend. The extendable wand features natural feathers and colorful ribbons that flutter and dance, triggering your cat\'s predatory instincts. Perfect for bonding time between you and your cat while providing essential exercise and mental stimulation.',
        'ingredients' => [],
        'nutritional_info' => [],
        'feeding_guide' => [],
        'features' => [
            'Extendable telescopic wand',
            'Natural feathers',
            'Colorful ribbons',
            'Durable construction',
            'Safe materials',
            'Interactive play'
        ]
    ]
];

// Get the specific product or default to first product
$product = isset($products[$product_id]) ? $products[$product_id] : $products[1];

$page_title = $product['name'] . " - PurrfectStay";
$page_description = $product['description'];
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

        .image-zoom {
            transition: transform 0.3s ease;
        }

        .image-zoom:hover {
            transform: scale(1.1);
        }

        .tab-content {
            display: none;
        }

        .tab-content.active {
            display: block;
        }

        .tab-button.active {
            background: linear-gradient(to right, #16a34a, #059669);
            color: white;
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
    <header class="bg-white/80 backdrop-blur-md shadow-lg sticky top-0 z-50 animate__animated animate__slideInDown">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <!-- Logo -->
                <div class="flex items-center space-x-3 animate-pulse-slow">
                    <div
                        class="w-10 h-10 bg-gradient-to-r from-green-600 to-emerald-600 rounded-xl flex items-center justify-center animate-wiggle">
                        <i data-lucide="cat" class="w-6 h-6 text-white"></i>
                    </div>
                    <span class="text-2xl font-bold gradient-text">PurrfectStay</span>
                </div>

                <!-- Navigation -->
                <nav class="hidden md:flex space-x-8">
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
                </nav>

                <!-- Actions -->
                <div class="flex items-center space-x-4">
                    <button
                        class="p-2 text-gray-600 hover:text-green-600 transition-all duration-300 hover:scale-125 relative">
                        <i data-lucide="search" class="w-5 h-5"></i>
                    </button>
                    <button
                        class="p-2 text-gray-600 hover:text-red-500 transition-all duration-300 hover:scale-125 relative">
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
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- Breadcrumb -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6 relative z-10">
        <nav class="flex items-center space-x-2 text-sm animate__animated animate__fadeInUp">
            <a href="index.php" class="text-gray-500 hover:text-green-600 transition-colors">Home</a>
            <i data-lucide="chevron-right" class="w-4 h-4 text-gray-400"></i>
            <a href="products-page.php" class="text-gray-500 hover:text-green-600 transition-colors">Products</a>
            <i data-lucide="chevron-right" class="w-4 h-4 text-gray-400"></i>
            <a href="#"
                class="text-gray-500 hover:text-green-600 transition-colors"><?php echo $product['category']; ?></a>
            <i data-lucide="chevron-right" class="w-4 h-4 text-gray-400"></i>
            <span class="text-green-600 font-medium"><?php echo $product['name']; ?></span>
        </nav>
    </div>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-20 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Product Images -->
            <div class="animate__animated animate__slideInLeft">
                <!-- Main Image -->
                <div class="mb-6">
                    <div class="relative overflow-hidden rounded-2xl bg-white shadow-2xl">
                        <img id="main-image" src="<?php echo $product['images'][0]; ?>"
                            alt="<?php echo $product['name']; ?>"
                            class="w-full h-96 md:h-[500px] object-cover image-zoom">

                        <!-- Badge -->
                        <?php if ($product['badge']): ?>
                            <span class="absolute top-6 left-6 px-4 py-2 text-sm font-bold rounded-full animate-pulse
                                <?php
                                echo $product['badge'] === 'Best Seller' ? 'bg-gradient-to-r from-green-500 to-emerald-500 text-white' :
                                    ($product['badge'] === 'Sale' ? 'bg-gradient-to-r from-red-500 to-pink-500 text-white' :
                                        ($product['badge'] === 'New' ? 'bg-gradient-to-r from-blue-500 to-cyan-500 text-white' :
                                            ($product['badge'] === 'Premium' ? 'bg-gradient-to-r from-purple-500 to-indigo-500 text-white' : 'bg-gradient-to-r from-orange-500 to-yellow-500 text-white')));
                                ?>">
                                <?php echo $product['badge']; ?>
                            </span>
                        <?php endif; ?>

                        <!-- Zoom Icon -->
                        <button
                            class="absolute top-6 right-6 p-3 bg-white/90 backdrop-blur-md rounded-full shadow-lg hover:bg-white transition-all duration-300 hover:scale-110">
                            <i data-lucide="zoom-in" class="w-5 h-5 text-gray-600"></i>
                        </button>
                    </div>
                </div>

                <!-- Thumbnail Images -->
                <div class="grid grid-cols-4 gap-4">
                    <?php foreach ($product['images'] as $index => $image): ?>
                        <button
                            class="thumbnail-btn relative overflow-hidden rounded-xl bg-white shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-105 <?php echo $index === 0 ? 'ring-4 ring-green-500' : ''; ?>"
                            data-image="<?php echo $image; ?>">
                            <img src="<?php echo $image; ?>" alt="Product view <?php echo $index + 1; ?>"
                                class="w-full h-20 md:h-24 object-cover">
                        </button>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- Product Info -->
            <div class="animate__animated animate__slideInRight">
                <!-- Product Title and Rating -->
                <div class="mb-6">
                    <div class="flex items-center gap-3 mb-3">
                        <span
                            class="text-sm font-medium text-green-600 bg-green-100 px-3 py-1 rounded-full"><?php echo $product['category']; ?></span>
                        <span class="text-sm text-gray-500">SKU: <?php echo $product['sku']; ?></span>
                    </div>

                    <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4"><?php echo $product['name']; ?></h1>

                    <div class="flex items-center gap-4 mb-4">
                        <div class="flex items-center">
                            <?php for ($i = 1; $i <= 5; $i++): ?>
                                <i data-lucide="star"
                                    class="w-5 h-5 <?php echo $i <= floor($product['rating']) ? 'text-yellow-400 fill-current' : 'text-gray-300'; ?>"></i>
                            <?php endfor; ?>
                        </div>
                        <span class="text-lg font-medium text-gray-700"><?php echo $product['rating']; ?></span>
                        <span class="text-gray-500">(<?php echo $product['reviews']; ?> reviews)</span>
                    </div>
                </div>

                <!-- Price -->
                <div class="mb-8">
                    <div class="flex items-center gap-4 mb-2">
                        <span
                            class="text-4xl font-bold text-green-600">$<?php echo number_format($product['price'], 2); ?></span>
                        <?php if ($product['original_price'] > $product['price']): ?>
                            <span
                                class="text-2xl text-gray-500 line-through">$<?php echo number_format($product['original_price'], 2); ?></span>
                            <span class="text-lg font-bold text-red-600 bg-red-100 px-3 py-1 rounded-full">
                                <?php echo round((($product['original_price'] - $product['price']) / $product['original_price']) * 100); ?>%
                                OFF
                            </span>
                        <?php endif; ?>
                    </div>
                    <p class="text-gray-600">Free shipping on orders over $50</p>
                </div>

                <!-- Description -->
                <div class="mb-8">
                    <p class="text-gray-700 text-lg leading-relaxed"><?php echo $product['description']; ?></p>
                </div>

                <!-- Key Features -->
                <?php if (!empty($product['features'])): ?>
                    <div class="mb-8">
                        <h3 class="text-xl font-bold text-gray-900 mb-4">Key Features:</h3>
                        <ul class="grid grid-cols-1 md:grid-cols-2 gap-3">
                            <?php foreach ($product['features'] as $feature): ?>
                                <li class="flex items-center text-gray-700">
                                    <i data-lucide="check-circle" class="w-5 h-5 text-green-600 mr-3 flex-shrink-0"></i>
                                    <?php echo $feature; ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endif; ?>

                <!-- Stock Status -->
                <div class="mb-8">
                    <?php if ($product['in_stock']): ?>
                        <div class="flex items-center text-green-600 mb-2">
                            <i data-lucide="check-circle" class="w-5 h-5 mr-2"></i>
                            <span class="font-medium">In Stock (<?php echo $product['stock_quantity']; ?> available)</span>
                        </div>
                    <?php else: ?>
                        <div class="flex items-center text-red-600 mb-2">
                            <i data-lucide="x-circle" class="w-5 h-5 mr-2"></i>
                            <span class="font-medium">Out of Stock</span>
                        </div>
                    <?php endif; ?>
                </div>

                <!-- Quantity and Add to Cart -->
                <div class="mb-8">
                    <div class="flex flex-col sm:flex-row gap-4">
                        <div class="flex items-center border-2 border-gray-300 rounded-xl overflow-hidden">
                            <button id="decrease-qty" class="px-4 py-3 hover:bg-gray-100 transition-colors">
                                <i data-lucide="minus" class="w-5 h-5"></i>
                            </button>
                            <input type="number" id="quantity" value="1" min="1"
                                max="<?php echo $product['stock_quantity']; ?>"
                                class="w-20 text-center py-3 border-0 focus:ring-0">
                            <button id="increase-qty" class="px-4 py-3 hover:bg-gray-100 transition-colors">
                                <i data-lucide="plus" class="w-5 h-5"></i>
                            </button>
                        </div>

                        <button id="add-to-cart"
                            class="flex-1 bg-gradient-to-r from-green-600 to-emerald-600 text-white py-4 px-8 rounded-xl hover:from-green-700 hover:to-emerald-700 transition-all duration-300 hover:scale-105 hover:shadow-lg font-bold text-lg flex items-center justify-center space-x-3 <?php echo !$product['in_stock'] ? 'opacity-50 cursor-not-allowed' : ''; ?>"
                            <?php echo !$product['in_stock'] ? 'disabled' : ''; ?>>
                            <i data-lucide="shopping-cart" class="w-6 h-6"></i>
                            <span><?php echo $product['in_stock'] ? 'Add to Cart' : 'Out of Stock'; ?></span>
                        </button>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="flex gap-4 mb-8">
                    <button id="add-to-wishlist"
                        class="flex-1 border-2 border-red-500 text-red-500 py-3 px-6 rounded-xl hover:bg-red-50 transition-all duration-300 hover:scale-105 font-bold flex items-center justify-center space-x-2">
                        <i data-lucide="heart" class="w-5 h-5"></i>
                        <span>Add to Wishlist</span>
                    </button>

                    <button
                        class="flex-1 border-2 border-blue-500 text-blue-500 py-3 px-6 rounded-xl hover:bg-blue-50 transition-all duration-300 hover:scale-105 font-bold flex items-center justify-center space-x-2">
                        <i data-lucide="share-2" class="w-5 h-5"></i>
                        <span>Share</span>
                    </button>
                </div>

                <!-- Product Info -->
                <div class="bg-gray-50 rounded-xl p-6">
                    <div class="grid grid-cols-2 gap-4 text-sm">
                        <div>
                            <span class="text-gray-600">Brand:</span>
                            <span class="font-medium ml-2"><?php echo $product['brand']; ?></span>
                        </div>
                        <div>
                            <span class="text-gray-600">Weight:</span>
                            <span class="font-medium ml-2"><?php echo $product['weight']; ?></span>
                        </div>
                        <div>
                            <span class="text-gray-600">Category:</span>
                            <span class="font-medium ml-2"><?php echo $product['category']; ?></span>
                        </div>
                        <div>
                            <span class="text-gray-600">SKU:</span>
                            <span class="font-medium ml-2"><?php echo $product['sku']; ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Product Details Tabs -->
        <div class="mt-16">
            <div
                class="bg-white/90 backdrop-blur-md rounded-2xl shadow-xl border p-8 animate__animated animate__fadeInUp">
                <!-- Tab Navigation -->
                <div class="flex flex-wrap gap-2 mb-8 border-b">
                    <button class="tab-button active px-6 py-3 rounded-t-xl font-medium transition-all duration-300"
                        data-tab="description">
                        Description
                    </button>
                    <?php if (!empty($product['ingredients'])): ?>
                        <button
                            class="tab-button px-6 py-3 rounded-t-xl font-medium transition-all duration-300 hover:bg-gray-100"
                            data-tab="ingredients">
                            Ingredients
                        </button>
                    <?php endif; ?>
                    <?php if (!empty($product['nutritional_info'])): ?>
                        <button
                            class="tab-button px-6 py-3 rounded-t-xl font-medium transition-all duration-300 hover:bg-gray-100"
                            data-tab="nutrition">
                            Nutrition
                        </button>
                    <?php endif; ?>
                    <?php if (!empty($product['feeding_guide'])): ?>
                        <button
                            class="tab-button px-6 py-3 rounded-t-xl font-medium transition-all duration-300 hover:bg-gray-100"
                            data-tab="feeding">
                            Feeding Guide
                        </button>
                    <?php endif; ?>
                    <button
                        class="tab-button px-6 py-3 rounded-t-xl font-medium transition-all duration-300 hover:bg-gray-100"
                        data-tab="reviews">
                        Reviews (<?php echo $product['reviews']; ?>)
                    </button>
                </div>

                <!-- Tab Content -->
                <div class="tab-content active" id="description">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Product Description</h3>
                    <p class="text-gray-700 text-lg leading-relaxed mb-6"><?php echo $product['long_description']; ?>
                    </p>

                    <?php if (!empty($product['features'])): ?>
                        <h4 class="text-xl font-bold text-gray-900 mb-4">Features & Benefits:</h4>
                        <ul class="space-y-3">
                            <?php foreach ($product['features'] as $feature): ?>
                                <li class="flex items-start text-gray-700">
                                    <i data-lucide="check-circle" class="w-5 h-5 text-green-600 mr-3 mt-0.5 flex-shrink-0"></i>
                                    <span><?php echo $feature; ?></span>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </div>

                <?php if (!empty($product['ingredients'])): ?>
                    <div class="tab-content" id="ingredients">
                        <h3 class="text-2xl font-bold text-gray-900 mb-6">Ingredients</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <?php foreach ($product['ingredients'] as $ingredient): ?>
                                <div class="flex items-center p-3 bg-green-50 rounded-lg">
                                    <i data-lucide="leaf" class="w-5 h-5 text-green-600 mr-3"></i>
                                    <span class="text-gray-700"><?php echo $ingredient; ?></span>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endif; ?>

                <?php if (!empty($product['nutritional_info'])): ?>
                    <div class="tab-content" id="nutrition">
                        <h3 class="text-2xl font-bold text-gray-900 mb-6">Nutritional Information</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <?php foreach ($product['nutritional_info'] as $nutrient => $value): ?>
                                <div class="flex justify-between items-center p-4 bg-gray-50 rounded-lg">
                                    <span class="font-medium text-gray-900"><?php echo $nutrient; ?>:</span>
                                    <span class="text-green-600 font-bold"><?php echo $value; ?></span>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endif; ?>

                <?php if (!empty($product['feeding_guide'])): ?>
                    <div class="tab-content" id="feeding">
                        <h3 class="text-2xl font-bold text-gray-900 mb-6">Feeding Guide</h3>
                        <div class="overflow-x-auto">
                            <table class="w-full bg-white rounded-lg overflow-hidden shadow-lg">
                                <thead class="bg-green-600 text-white">
                                    <tr>
                                        <th class="px-6 py-4 text-left font-bold">Cat Weight</th>
                                        <th class="px-6 py-4 text-left font-bold">Daily Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($product['feeding_guide'] as $weight => $amount): ?>
                                        <tr class="border-b hover:bg-gray-50">
                                            <td class="px-6 py-4 font-medium text-gray-900"><?php echo $weight; ?></td>
                                            <td class="px-6 py-4 text-green-600 font-bold"><?php echo $amount; ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <p class="text-sm text-gray-600 mt-4">
                            <i data-lucide="info" class="w-4 h-4 inline mr-2"></i>
                            These are general guidelines. Adjust portions based on your cat's activity level, age, and
                            health condition. Consult your veterinarian for personalized feeding advice.
                        </p>
                    </div>
                <?php endif; ?>

                <div class="tab-content" id="reviews">
                    <h3 class="text-2xl font-bold text-gray-900 mb-6">Customer Reviews</h3>

                    <!-- Review Summary -->
                    <div class="bg-gray-50 rounded-xl p-6 mb-8">
                        <div class="flex items-center gap-6">
                            <div class="text-center">
                                <div class="text-4xl font-bold text-green-600 mb-2"><?php echo $product['rating']; ?>
                                </div>
                                <div class="flex items-center justify-center mb-2">
                                    <?php for ($i = 1; $i <= 5; $i++): ?>
                                        <i data-lucide="star"
                                            class="w-5 h-5 <?php echo $i <= floor($product['rating']) ? 'text-yellow-400 fill-current' : 'text-gray-300'; ?>"></i>
                                    <?php endfor; ?>
                                </div>
                                <div class="text-sm text-gray-600"><?php echo $product['reviews']; ?> reviews</div>
                            </div>

                            <div class="flex-1">
                                <?php for ($i = 5; $i >= 1; $i--): ?>
                                    <div class="flex items-center gap-3 mb-2">
                                        <span class="text-sm w-8"><?php echo $i; ?> ★</span>
                                        <div class="flex-1 bg-gray-200 rounded-full h-2">
                                            <div class="bg-green-600 h-2 rounded-full"
                                                style="width: <?php echo rand(10, 80); ?>%"></div>
                                        </div>
                                        <span class="text-sm text-gray-600 w-8"><?php echo rand(5, 50); ?></span>
                                    </div>
                                <?php endfor; ?>
                            </div>
                        </div>
                    </div>

                    <!-- Sample Reviews -->
                    <div class="space-y-6">
                        <div class="border-b pb-6">
                            <div class="flex items-start gap-4">
                                <div
                                    class="w-12 h-12 bg-green-600 rounded-full flex items-center justify-center text-white font-bold">
                                    JD
                                </div>
                                <div class="flex-1">
                                    <div class="flex items-center gap-3 mb-2">
                                        <span class="font-bold text-gray-900">Jane Doe</span>
                                        <div class="flex items-center">
                                            <?php for ($i = 1; $i <= 5; $i++): ?>
                                                <i data-lucide="star" class="w-4 h-4 text-yellow-400 fill-current"></i>
                                            <?php endfor; ?>
                                        </div>
                                        <span class="text-sm text-gray-500">2 days ago</span>
                                    </div>
                                    <p class="text-gray-700 mb-3">Excellent product! My cat absolutely loves this food.
                                        The quality is outstanding and I can see the difference in her coat and energy
                                        levels.</p>
                                    <div class="flex items-center gap-4 text-sm text-gray-500">
                                        <button class="hover:text-green-600 transition-colors">👍 Helpful (12)</button>
                                        <button class="hover:text-green-600 transition-colors">Reply</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="border-b pb-6">
                            <div class="flex items-start gap-4">
                                <div
                                    class="w-12 h-12 bg-blue-600 rounded-full flex items-center justify-center text-white font-bold">
                                    MS
                                </div>
                                <div class="flex-1">
                                    <div class="flex items-center gap-3 mb-2">
                                        <span class="font-bold text-gray-900">Mike Smith</span>
                                        <div class="flex items-center">
                                            <?php for ($i = 1; $i <= 4; $i++): ?>
                                                <i data-lucide="star" class="w-4 h-4 text-yellow-400 fill-current"></i>
                                            <?php endfor; ?>
                                            <i data-lucide="star" class="w-4 h-4 text-gray-300"></i>
                                        </div>
                                        <span class="text-sm text-gray-500">1 week ago</span>
                                    </div>
                                    <p class="text-gray-700 mb-3">Good quality food, though a bit pricey. My cats seem
                                        to enjoy it and it's definitely better than the cheaper alternatives.</p>
                                    <div class="flex items-center gap-4 text-sm text-gray-500">
                                        <button class="hover:text-green-600 transition-colors">👍 Helpful (8)</button>
                                        <button class="hover:text-green-600 transition-colors">Reply</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Write Review Button -->
                    <div class="mt-8 text-center">
                        <button
                            class="bg-gradient-to-r from-green-600 to-emerald-600 text-white px-8 py-4 rounded-xl hover:from-green-700 hover:to-emerald-700 transition-all duration-300 hover:scale-105 font-bold">
                            Write a Review
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
        let cart = JSON.parse(localStorage.getItem('cart')) || [];
        let wishlist = JSON.parse(localStorage.getItem('wishlist')) || [];
        const product = <?php echo json_encode($product); ?>;

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

        // Update cart count
        function updateCartCount() {
            document.getElementById('cart-count').textContent = cart.length;
            document.getElementById('wishlist-count').textContent = wishlist.length;
        }

        // Create sparkles effect
        function createSparkles(x, y) {
            for (let i = 0; i < 15; i++) {
                const sparkle = document.createElement('div');
                sparkle.className = 'fixed pointer-events-none z-50';
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

        // Initialize page
        document.addEventListener('DOMContentLoaded', function () {
            updateCartCount();

            // Thumbnail image switching
            document.querySelectorAll('.thumbnail-btn').forEach(btn => {
                btn.addEventListener('click', function () {
                    const newImage = this.dataset.image;
                    document.getElementById('main-image').src = newImage;

                    // Update active thumbnail
                    document.querySelectorAll('.thumbnail-btn').forEach(b => {
                        b.classList.remove('ring-4', 'ring-green-500');
                    });
                    this.classList.add('ring-4', 'ring-green-500');
                });
            });

            // Quantity controls
            const quantityInput = document.getElementById('quantity');
            const decreaseBtn = document.getElementById('decrease-qty');
            const increaseBtn = document.getElementById('increase-qty');

            decreaseBtn.addEventListener('click', function () {
                const currentValue = parseInt(quantityInput.value);
                if (currentValue > 1) {
                    quantityInput.value = currentValue - 1;
                }
            });

            increaseBtn.addEventListener('click', function () {
                const currentValue = parseInt(quantityInput.value);
                const maxValue = parseInt(quantityInput.max);
                if (currentValue < maxValue) {
                    quantityInput.value = currentValue + 1;
                }
            });

            // Add to cart
            document.getElementById('add-to-cart').addEventListener('click', function (e) {
                if (this.disabled) return;

                const quantity = parseInt(quantityInput.value);

                // Check if product already exists in cart
                const existingItem = cart.find(item => item.id === product.id.toString());

                if (existingItem) {
                    existingItem.quantity += quantity;
                } else {
                    cart.push({
                        id: product.id.toString(),
                        name: product.name,
                        price: product.price,
                        quantity: quantity,
                        image: product.images[0]
                    });
                }

                localStorage.setItem('cart', JSON.stringify(cart));
                updateCartCount();

                // Create sparkle effect
                createSparkles(e.clientX, e.clientY);

                // Show toast
                showToast(`${product.name} added to cart!`);

                // Button animation
                this.style.transform = 'scale(0.95)';
                setTimeout(() => {
                    this.style.transform = 'scale(1)';
                }, 150);
            });

            // Add to wishlist
            document.getElementById('add-to-wishlist').addEventListener('click', function () {
                const productId = product.id.toString();
                const heartIcon = this.querySelector('i');
                const textSpan = this.querySelector('span');

                if (wishlist.includes(productId)) {
                    wishlist = wishlist.filter(id => id !== productId);
                    this.classList.remove('bg-red-50', 'border-red-600', 'text-red-600');
                    this.classList.add('border-red-500', 'text-red-500');
                    textSpan.textContent = 'Add to Wishlist';
                    showToast('Removed from wishlist');
                } else {
                    wishlist.push(productId);
                    this.classList.remove('border-red-500', 'text-red-500');
                    this.classList.add('bg-red-50', 'border-red-600', 'text-red-600');
                    textSpan.textContent = 'Remove from Wishlist';
                    showToast('Added to wishlist!');
                }

                localStorage.setItem('wishlist', JSON.stringify(wishlist));
                updateCartCount();

                // Animation
                this.style.transform = 'scale(1.05)';
                setTimeout(() => {
                    this.style.transform = 'scale(1)';
                }, 200);
            });

            // Tab functionality
            document.querySelectorAll('.tab-button').forEach(btn => {
                btn.addEventListener('click', function () {
                    const tabId = this.dataset.tab;

                    // Remove active class from all tabs and content
                    document.querySelectorAll('.tab-button').forEach(b => {
                        b.classList.remove('active');
                    });
                    document.querySelectorAll('.tab-content').forEach(c => {
                        c.classList.remove('active');
                    });

                    // Add active class to clicked tab and corresponding content
                    this.classList.add('active');
                    document.getElementById(tabId).classList.add('active');
                });
            });

            // Initialize wishlist state
            if (wishlist.includes(product.id.toString())) {
                const wishlistBtn = document.getElementById('add-to-wishlist');
                const textSpan = wishlistBtn.querySelector('span');
                wishlistBtn.classList.remove('border-red-500', 'text-red-500');
                wishlistBtn.classList.add('bg-red-50', 'border-red-600', 'text-red-600');
                textSpan.textContent = 'Remove from Wishlist';
            }
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
<?php
$page_title = "Provider Details - MeowMate";
$page_description = "View detailed information about our trusted cat hostel provider.";
include 'includes/header.php';

// Get provider ID from URL
$provider_id = isset($_GET['id']) ? (int) $_GET['id'] : 1;
?>

<div class="flex flex-col min-h-screen bg-gray-50">
    <?php include 'includes/navbar.php'; ?>

    <main class="flex-1 py-8">
        <div class="container px-4 md:px-6 mx-auto max-w-6xl">
            <!-- Breadcrumb -->
            <nav class="flex mb-8" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <a href="index.php" class="text-gray-700 hover:text-blue-600">Home</a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <a href="find-providers.php" class="ml-1 text-gray-700 hover:text-blue-600 md:ml-2">Find
                                Providers</a>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="ml-1 text-gray-500 md:ml-2">Provider Details</span>
                        </div>
                    </li>
                </ol>
            </nav>

            <!-- Provider Details -->
            <div id="providerDetails" class="bg-white rounded-2xl shadow-lg overflow-hidden">
                <!-- Provider details will be loaded here by JavaScript -->
            </div>
        </div>
    </main>

    <?php include 'includes/footer.php'; ?>
</div>

<script>
    // Provider data (same as in find-providers.php)
    const providers = [
        {
            id: 1,
            name: "Hostel Providers Name",
            location: "Mirpur",
            distance: "2.3 miles",
            rating: 4.9,
            reviews: 127,
            price: 25,
            image: "/placeholder.svg?height=400&width=400&text=Sarah",
            services: ["Overnight Boarding", "Day Care", "Grooming"],
            experience: "5 years",
            capacity: "Up to 8 cats",
            verified: true,
            description: "Experienced cat lover with a spacious home and dedicated cat rooms.",
            fullDescription: "Welcome to Sarah's Cat Haven! I'm Sarah, a dedicated cat enthusiast with over 5 years of experience in pet care. My home features specially designed cat rooms with climbing trees, cozy sleeping areas, and plenty of natural light. I provide personalized care for each cat, ensuring they feel comfortable and loved while their owners are away.",
            amenities: ["Climate Controlled Rooms", "24/7 Supervision", "Daily Updates", "Emergency Vet Access", "Outdoor Enclosed Play Area"],
            gallery: [
                "/placeholder.svg?height=300&width=400&text=Room+1",
                "/placeholder.svg?height=300&width=400&text=Room+2",
                "/placeholder.svg?height=300&width=400&text=Play+Area",
                "/placeholder.svg?height=300&width=400&text=Garden"
            ]
        }
        // Add more providers as needed
    ];

    function loadProviderDetails() {
        const providerId = <?php echo $provider_id; ?>;
        const provider = providers.find(p => p.id === providerId) || providers[0];

        document.getElementById('providerDetails').innerHTML = `
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 p-8">
            <!-- Left Column - Images -->
            <div>
                <div class="mb-4">
                    <img src="${provider.image}" alt="${provider.name}" class="w-full h-80 object-cover rounded-xl">
                </div>
                <div class="grid grid-cols-4 gap-2">
                    ${provider.gallery.map(img => `
                        <img src="${img}" alt="Gallery" class="w-full h-20 object-cover rounded-lg cursor-pointer hover:opacity-75 transition-opacity">
                    `).join('')}
                </div>
            </div>
            
            <!-- Right Column - Details -->
            <div>
                <div class="flex items-start justify-between mb-4">
                    <div>
                        <h1 class="text-3xl font-bold text-gray-900 mb-2">${provider.name}</h1>
                        <div class="flex items-center text-gray-600 mb-2">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                            <span>${provider.location} • ${provider.distance}</span>
                        </div>
                        <div class="flex items-center mb-4">
                            <div class="flex items-center">
                                ${Array(5).fill().map((_, i) => `
                                    <svg class="w-5 h-5 ${i < Math.floor(provider.rating) ? 'text-yellow-400' : 'text-gray-300'} fill-current" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                `).join('')}
                            </div>
                            <span class="ml-2 text-lg font-semibold text-gray-700">${provider.rating}</span>
                            <span class="ml-1 text-gray-500">(${provider.reviews} reviews)</span>
                            ${provider.verified ? '<span class="ml-3 bg-green-100 text-green-800 px-2 py-1 rounded-full text-xs font-semibold">✓ Verified</span>' : ''}
                        </div>
                    </div>
                    <div class="text-right">
                        <div class="text-3xl font-bold text-blue-600">$${provider.price}</div>
                        <div class="text-gray-500">per night</div>
                    </div>
                </div>
                
                <div class="mb-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">About</h3>
                    <p class="text-gray-600">${provider.fullDescription}</p>
                </div>
                
                <div class="grid grid-cols-2 gap-4 mb-6">
                    <div>
                        <h4 class="font-semibold text-gray-900">Experience</h4>
                        <p class="text-gray-600">${provider.experience}</p>
                    </div>
                    <div>
                        <h4 class="font-semibold text-gray-900">Capacity</h4>
                        <p class="text-gray-600">${provider.capacity}</p>
                    </div>
                </div>
                
                <div class="mb-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-3">Services</h3>
                    <div class="flex flex-wrap gap-2">
                        ${provider.services.map(service => `
                            <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm font-medium">${service}</span>
                        `).join('')}
                    </div>
                </div>
                
                <div class="mb-8">
                    <h3 class="text-lg font-semibold text-gray-900 mb-3">Amenities</h3>
                    <div class="grid grid-cols-1 gap-2">
                        ${provider.amenities.map(amenity => `
                            <div class="flex items-center">
                                <svg class="w-4 h-4 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-gray-700">${amenity}</span>
                            </div>
                        `).join('')}
                    </div>
                </div>
                
                <div class="flex gap-4">
                    <button class="flex-1 bg-blue-600 hover:bg-blue-700 text-white py-3 px-6 rounded-lg font-semibold transition-colors">
                        Book Now
                    </button>
                    <button class="flex-1 bg-gray-100 hover:bg-gray-200 text-gray-800 py-3 px-6 rounded-lg font-semibold transition-colors">
                        Send Message
                    </button>
                </div>
            </div>
        </div>
    `;
    }

    // Initialize page
    document.addEventListener('DOMContentLoaded', loadProviderDetails);
</script>

<?php include 'includes/scripts.php'; ?>
</body>

</html>
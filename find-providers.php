<?php
$page_title = "Find Cat Hostel Providers - PurrfectStay";
$page_description = "Find trusted cat hostel providers in your area for safe and comfortable cat boarding services.";
include 'includes/header.php';
?>

<div class="flex flex-col min-h-screen bg-gradient-to-br from-blue-50 to-indigo-50">
    <?php include 'includes/navbar.php'; ?>

    <main class="flex-1">
        <?php include 'sections/find-provider-section.php'; ?>
    </main>

    <?php include 'includes/footer.php'; ?>
</div>

<script>
    // Provider data
    const providers = [
        {
            id: 1,
            name: "Sarah's Cat Haven",
            location: "Mirpur",
            distance: "2.3 miles",
            rating: 4.9,
            reviews: 127,
            price: 250,
            image: "/placeholder.svg?height=200&width=200&text=Sarah",
            services: ["Overnight Boarding", "Day Care", "Grooming"],
            experience: "5 years",
            capacity: "Up to 8 cats",
            verified: true,
            description: "Experienced cat lover with a spacious home and dedicated cat rooms."
        },
        {
            id: 2,
            name: "Whiskers Paradise",
            location: "Mirpur",
            distance: "4.1 miles",
            rating: 4.8,
            reviews: 89,
            price: 300,
            image: "/placeholder.svg?height=200&width=200&text=Whiskers",
            services: ["Overnight Boarding", "Medical Care", "Play Time"],
            experience: "3 years",
            capacity: "Up to 6 cats",
            verified: true,
            description: "Professional pet sitter with veterinary background and loving care."
        },
        {
            id: 3,
            name: "Cozy Cat Retreat",
            location: "Mohammadpur",
            distance: "6.8 miles",
            rating: 4.7,
            reviews: 156,
            price: 220,
            image: "/placeholder.svg?height=200&width=200&text=Cozy",
            services: ["Overnight Boarding", "Day Care", "Exercise"],
            experience: "7 years",
            capacity: "Up to 10 cats",
            verified: true,
            description: "Family-run cat hostel with large play areas and individual attention."
        },
        {
            id: 4,
            name: "Purrfect Care Home",
            location: "Rampura",
            distance: "3.5 miles",
            rating: 4.9,
            reviews: 203,
            price: 350,
            image: "/placeholder.svg?height=200&width=200&text=Purrfect",
            services: ["Overnight Boarding", "Grooming", "Medical Care", "Transport"],
            experience: "8 years",
            capacity: "Up to 12 cats",
            verified: true,
            description: "Premium cat boarding with luxury amenities and 24/7 care."
        },
        {
            id: 5,
            name: "Feline Friends Lodge",
            location: "Old Dhaka",
            distance: "8.2 miles",
            rating: 4.6,
            reviews: 74,
            price: 200,
            image: "/placeholder.svg?height=200&width=200&text=Feline",
            services: ["Overnight Boarding", "Day Care"],
            experience: "4 years",
            capacity: "Up to 5 cats",
            verified: false,
            description: "Affordable and caring cat boarding with personalized attention."
        },
        {
            id: 6,
            name: "Cat Castle Boarding",
            location: "Old Dhaka",
            distance: "12.1 miles",
            rating: 4.8,
            reviews: 91,
            price: 280,
            image: "/placeholder.svg?height=200&width=200&text=Castle",
            services: ["Overnight Boarding", "Grooming", "Play Time", "Training"],
            experience: "6 years",
            capacity: "Up to 15 cats",
            verified: true,
            description: "Large facility with multiple play areas and specialized cat care."
        }
    ];

    let filteredProviders = [...providers];

    // Search and filter functions
    function searchProviders() {
        const searchTerm = document.getElementById('searchInput').value.toLowerCase();
        const location = document.getElementById('locationFilter').value;
        const priceRange = document.getElementById('priceFilter').value;
        const services = document.getElementById('serviceFilter').value;
        const verified = document.getElementById('verifiedFilter').checked;

        filteredProviders = providers.filter(provider => {
            const matchesSearch = provider.name.toLowerCase().includes(searchTerm) ||
                provider.description.toLowerCase().includes(searchTerm);

            const matchesLocation = !location || provider.location.includes(location);

            const matchesPrice = !priceRange ||
                (priceRange === 'low' && provider.price <= 25) ||
                (priceRange === 'medium' && provider.price > 25 && provider.price <= 35) ||
                (priceRange === 'high' && provider.price > 35);

            const matchesService = !services || provider.services.includes(services);

            const matchesVerified = !verified || provider.verified;

            return matchesSearch && matchesLocation && matchesPrice && matchesService && matchesVerified;
        });

        displayProviders();
        updateResultsCount();
    }

    function displayProviders() {
        const container = document.getElementById('providersContainer');

        if (filteredProviders.length === 0) {
            container.innerHTML = `
            <div class="col-span-full text-center py-12">
                <div class="text-gray-400 text-6xl mb-4">🐱</div>
                <h3 class="text-xl font-semibold text-gray-600 mb-2">No providers found</h3>
                <p class="text-gray-500">Try adjusting your search criteria</p>
            </div>
        `;
            return;
        }

        container.innerHTML = filteredProviders.map(provider => `
        <div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden">
            <div class="relative">
                <img src="${provider.image}" alt="${provider.name}" class="w-full h-48 object-cover">
                ${provider.verified ? '<div class="absolute top-3 right-3 bg-green-500 text-white px-2 py-1 rounded-full text-xs font-semibold flex items-center gap-1"><svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>Verified</div>' : ''}
                <div class="absolute bottom-3 left-3 bg-blue-600 text-white px-3 py-1 rounded-full text-sm font-semibold">
                    BDT ${provider.price} / night
                </div>
            </div>
            
            <div class="p-6">
                <div class="flex justify-between items-start mb-3">
                    <h3 class="text-xl font-bold text-gray-800">${provider.name}</h3>
                    <div class="flex items-center gap-1">
                        <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <span class="text-sm font-semibold text-gray-700">${provider.rating}</span>
                        <span class="text-sm text-gray-500">(${provider.reviews})</span>
                    </div>
                </div>
                
                <div class="flex items-center text-gray-600 mb-3">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                    <span class="text-sm">${provider.location} • ${provider.distance}</span>
                </div>
                
                <p class="text-gray-600 text-sm mb-4">${provider.description}</p>
                
                <div class="mb-4">
                    <div class="flex flex-wrap gap-2">
                        ${provider.services.map(service => `
                            <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded-full text-xs font-medium">${service}</span>
                        `).join('')}
                    </div>
                </div>
                
                <div class="grid grid-cols-2 gap-4 text-sm text-gray-600 mb-4">
                    <div>
                        <span class="font-medium">Experience:</span> ${provider.experience}
                    </div>
                    <div>
                        <span class="font-medium">Capacity:</span> ${provider.capacity}
                    </div>
                </div>
                
                <div class="flex gap-3">
                    <button onclick="viewProvider(${provider.id})" class="flex-1 bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded-lg font-medium transition-colors">
                        View Details
                    </button>
                    <button onclick="contactProvider(${provider.id})" class="flex-1 bg-gray-100 hover:bg-gray-200 text-gray-800 py-2 px-4 rounded-lg font-medium transition-colors">
                        Contact
                    </button>
                </div>
            </div>
        </div>
    `).join('');
    }

    function updateResultsCount() {
        document.getElementById('resultsCount').textContent = `${filteredProviders.length} providers found`;
    }

    function clearFilters() {
        document.getElementById('searchInput').value = '';
        document.getElementById('locationFilter').value = '';
        document.getElementById('priceFilter').value = '';
        document.getElementById('serviceFilter').value = '';
        document.getElementById('verifiedFilter').checked = false;

        filteredProviders = [...providers];
        displayProviders();
        updateResultsCount();
    }

    function viewProvider(id) {
        // Redirect to provider detail page
        window.location.href = `provider-detail.php?id=${id}`;
    }

    function contactProvider(id) {
        // Show contact modal or redirect to contact page
        alert(`Contacting provider ${id}. This would open a contact form or messaging system.`);
    }

    // Initialize page
    document.addEventListener('DOMContentLoaded', function () {
        displayProviders();
        updateResultsCount();

        // Add event listeners
        document.getElementById('searchInput').addEventListener('input', searchProviders);
        document.getElementById('locationFilter').addEventListener('change', searchProviders);
        document.getElementById('priceFilter').addEventListener('change', searchProviders);
        document.getElementById('serviceFilter').addEventListener('change', searchProviders);
        document.getElementById('verifiedFilter').addEventListener('change', searchProviders);
    });
</script>

<?php include 'includes/scripts.php'; ?>
</body>

</html>
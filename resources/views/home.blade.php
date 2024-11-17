<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-foodFinder</title>
    <!-- Link to your locally compiled Tailwind CSS -->
    <link href="{{ Vite::asset('resources/css/app.css') }}" rel="stylesheet">
    <!-- Font Awesome for Hamburger Icon -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 font-sans">

    <!-- Navbar -->
    <nav class="bg-blue-600 p-4 shadow-md fixed w-full z-50 top-0 left-0">
        <div class="container mx-auto flex justify-between items-center">
            <a href="/" class="text-white text-3xl font-bold hover:text-yellow-400 transition-all">E-foodFinder</a>

            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center space-x-6">
                <a href="/login" class="text-white text-lg hover:text-yellow-400 transition-all">Login</a>
                <a href="/register" class="text-white text-lg hover:text-yellow-400 transition-all">Register</a>
            </div>

            <!-- Mobile Menu Button (Hamburger) -->
            <div class="md:hidden flex items-center">
                <button id="mobile-menu-btn" class="text-white text-2xl focus:outline-none">
                    <i class="fas fa-bars"></i> <!-- Font Awesome Bars Icon for Hamburger -->
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="md:hidden hidden bg-blue-700 text-white mt-4 px-4 py-4 rounded-lg">
            <a href="/login" class="block py-2 px-4 text-lg hover:bg-blue-600 rounded-lg">Login</a>
            <a href="/register" class="block py-2 px-4 text-lg hover:bg-blue-600 rounded-lg">Register</a>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="bg-blue-100 text-center py-16 mt-8">
        <h1 class="text-4xl font-extrabold text-gray-800 mb-4">Find Your Favorite Food Easily</h1>
        <p class="text-lg text-gray-600">Search for dishes, restaurants, or cuisines from your favorite places</p>
    </div>

    <!-- Search Bar -->
    <div class="container mx-auto mt-8">
        <div class="flex items-center space-x-4">
            <input type="text" id="search-input" class="w-full px-4 py-2 border border-gray-300 rounded-lg" placeholder="Search for a dish or restaurant...">
            <button id="search-btn" class="px-4 py-2 bg-blue-600 text-white rounded-lg">Search</button>
        </div>
    </div>

    <!-- Filters Section -->
    <div class="container mx-auto mt-6">
        <div class="flex space-x-4">
            <select id="filter-price" class="px-4 py-2 border border-gray-300 rounded-lg">
                <option value="0">Sort by Price</option>
                <option value="asc">Low to High</option>
                <option value="desc">High to Low</option>
            </select>
            <select id="filter-cuisine" class="px-4 py-2 border border-gray-300 rounded-lg">
                <option value="0">Select Cuisine</option>
                <option value="chinese">Chinese</option>
                <option value="indian">Indian</option>
                <option value="italian">Italian</option>
            </select>
        </div>
    </div>

    <!-- Search Results -->
    <div id="results" class="container mx-auto mt-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Results will appear here -->
    </div>

    <script>
        // Handle search button click
        document.getElementById('search-btn').addEventListener('click', function () {
            searchFood();
        });

        // Handle Enter key press for search input
        document.getElementById('search-input').addEventListener('keyup', function (event) {
            if (event.key === 'Enter') {
                searchFood();
            }
        });

        function searchFood() {
            const query = document.getElementById('search-input').value;
            const priceFilter = document.getElementById('filter-price').value;
            const cuisineFilter = document.getElementById('filter-cuisine').value;

            // Create the query parameters
            const params = new URLSearchParams();
            params.append('query', query);
            params.append('price_filter', priceFilter);
            params.append('cuisine_filter', cuisineFilter);

            // Perform the fetch request (AJAX)
            fetch('/search?' + params.toString())
                .then(response => response.json())
                .then(data => {
                    displayResults(data);
                })
                .catch(error => console.error('Error:', error));
        }

        function displayResults(data) {
            const resultsDiv = document.getElementById('results');
            resultsDiv.innerHTML = ''; // Clear previous results

            // Check if there are results
            if (data.length === 0) {
                resultsDiv.innerHTML = '<p class="col-span-3 text-center text-gray-500">No results found.</p>';
                return;
            }

            // Loop through each result and create a card
            data.forEach(item => {
                const restaurantCard = `
                    <div class="bg-white p-4 rounded-lg shadow-md">
                        <img src="${item.restaurant_image}" alt="Restaurant Image" class="w-full h-40 object-cover rounded-lg">
                        <h3 class="mt-4 text-lg font-semibold">${item.restaurant_name}</h3>
                        <p class="text-sm text-gray-500">${item.restaurant_address}</p>
                        <div class="mt-4">
                            <h4 class="font-semibold">Menu Items</h4>
                            <ul>
                                ${item.menu_items.map(menuItem => `
                                    <li class="text-sm text-gray-700">${menuItem.name} - ₹${menuItem.price}</li>
                                `).join('')}
                            </ul>
                        </div>
                    </div>
                `;
                resultsDiv.innerHTML += restaurantCard;
            });
        }

        // Mobile menu toggle
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');

        mobileMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>

</body>

</html>

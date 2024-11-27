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
    <script src="https://cdn.jsdelivr.net/npm/flowbite@1.5.3/dist/flowbite.min.js"></script>
</head>

<body class="bg-gray-100 font-sans">

    {{-- Navbar --}}
    <nav class="bg-white border-gray-200 dark:bg-gray-900 shadow-lg">
        <div class="max-w-screen-xl flex items-center justify-between mx-auto p-4">
        
            <span class="self-center text-3xl font-bold text-gray-800 whitespace-nowrap dark:text-white">
                E-f<span class="text-transparent bg-clip-text bg-gradient-to-r from-violet-600 to-blue-600">oo</span>d F<span class="text-green-500">in</span>d<span class="text-orange-500">er</span>
            </span>

        
            <button data-collapse-toggle="navbar-default" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600 transition duration-300"
                aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>

        
            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                <ul
                    class="font-medium flex flex-col p-4 md:p-0 mt-4 md:flex-row md:space-x-6 border border-gray-100 rounded-lg bg-gray-50 md:bg-transparent dark:bg-gray-800 md:dark:bg-transparent dark:border-gray-700 md:mt-0">
                    
                    
                    <li>
                        <a href="#"
                            class=" block py-2 px-4 text-white bg-gradient-to-r from-blue-600 to-indigo-600 rounded-full shadow-lg md:rounded hover:opacity-90 focus:ring-4 focus:ring-blue-300 transition duration-300 ease-in-out"
                            aria-current="page">Signup</a>
                    </li>

                    
                    <li>
                        <a href="#"
                            class="block py-2 px-4 text-gray-800 dark:text-white rounded hover:bg-blue-100 dark:hover:bg-gray-700 md:hover:text-blue-600 dark:md:hover:text-blue-400 transition duration-300">About us</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-4 text-gray-800 dark:text-white rounded hover:bg-blue-100 dark:hover:bg-gray-700 md:hover:text-blue-600 dark:md:hover:text-blue-400 transition duration-300">Services</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-4 text-gray-800 dark:text-white rounded hover:bg-blue-100 dark:hover:bg-gray-700 md:hover:text-blue-600 dark:md:hover:text-blue-400 transition duration-300">Pricing</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-4 text-gray-800 dark:text-white rounded hover:bg-blue-100 dark:hover:bg-gray-700 md:hover:text-blue-600 dark:md:hover:text-blue-400 transition duration-300">Contact us</a>
                    </li>
                </ul>
            </div>
        </div>
   </nav>

    </header>
    <main>

        {{-- Carousel --}}
        <div id="default-carousel" class="relative w-full" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative h-56 overflow-hidden rounded-lg md:h-[600px]">
                <!-- Search Bar -->
                <form
                    class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-[600px] mx-auto z-40"
                    action="{{ url('home') }}" method="GET">
                    <label for="default-search"
                        class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>
                        <input name="search" type="search" id="default-search"
                            class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Search your favourite foods" required />
                        <button type="submit"
                            class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                    </div>
                </form>

                <!-- Carousel items -->
                <div class=" duration-700 ease-in-out" data-carousel-item>
                    <img src="https://images.immediate.co.uk/production/volatile/sites/30/2013/05/spaghetti-carbonara-382837d.jpg?resize=768,574"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <div class="block duration-700 ease-in-out" data-carousel-item>
                    <img src="https://turismo.antequera.es/wp-content/uploads/2023/04/pexels-robin-stickel-70497.jpg"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <div class="block duration-700 ease-in-out" data-carousel-item>
                    <img src="https://static.wixstatic.com/media/91e241_475faa4fa56341f3878699dde5ab4904~mv2.jpg/v1/fill/w_666,h_444,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/91e241_475faa4fa56341f3878699dde5ab4904~mv2.jpg"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <div class="block duration-700 ease-in-out" data-carousel-item>
                    <img src="https://i0.wp.com/mountainsandmahals.com/wp-content/uploads/2023/04/PXL_20221022_122155035.MP_-scaled-e1681852087123-1024x537.jpg?resize=1024%2C537&ssl=1"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <div class="block duration-700 ease-in-out" data-carousel-item>
                    <img src="https://i0.wp.com/lovelaughmirch.com/wp-content/uploads/2023/01/Instant-Paneer-Tikka-_3.jpg?resize=650%2C619&ssl=1"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
            </div>

            <!-- Slider indicators -->
            <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                    data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                    data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                    data-carousel-slide-to="2"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                    data-carousel-slide-to="3"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
                    data-carousel-slide-to="4"></button>
            </div>

            <!-- Slider controls -->
            <button type="button"
                class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-prev>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 1 1 5l4 4" />
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button"
                class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-next>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 9 4-4-4-4" />
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>

        <div class="grid grid-cols-3 gap-10">
            @foreach ($infos as $info)
            <div
                class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg" src="{{asset('images/' .$info->image)}}" alt="" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$info->dish}}</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{$info->price}}</p>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Restaurant :{{$info->res_name}}</p>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Location :{{$info->location}}</p>
                    <a href="#"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Order Now
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </main>

    <script>
        // Handle search button click
        document.getElementById('search-btn').addEventListener('click', function() {
            searchFood();
        });

        // Handle Enter key press for search input
        document.getElementById('search-input').addEventListener('keyup', function(event) {
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
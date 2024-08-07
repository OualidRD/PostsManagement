<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Include Vite for bundling CSS and JS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
    <!-- Include Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@^2.0/dist/tailwind.min.css" rel="stylesheet">
    <!-- Include Font Awesome for icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <!-- Custom CSS -->
    <style>
        /* Add any custom CSS here */
    </style>
    <!-- Additional Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <link rel="stylesheet" href="{{ asset('ressources/css/accueil.css') }}"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-LGteHApcHl56n0vSxGvZj6xMg/Kl6fowkXVbO2UyQGHMLL2G4o9BRZSzM5Sk+cjA8JFheCnNcN5tO7iNhGptIA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="bg-gray-100">

    <nav class="bg-gray-900 text-white">
        <div class="container mx-auto px-4" style="margin-right: 20px">
            <div class="flex items-center justify-between py-4">
                <div class="text-gray-400">
                    <h1 class="text-3xl font-bold mb-4" style="font-family: inherit; margin-left: -98px;color:aliceblue;">PostPro Opportunities</h1>
                </div>
                <div>
                    <ul class="flex space-x-4">
                        <li>
                            <a href="{{ route('accueil') }}" class="flex items-center hover:text-gray-400" style="font-size: 17px">
                                <i class="fas fa-home mr-2"></i> Home
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('posts.index') }}" class="flex items-center hover:text-gray-400" style="font-size: 17px">
                                <i class="fas fa-newspaper mr-2"></i> Posts
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('contacts') }}" class="flex items-center hover:text-gray-400" style="font-size: 17px">
                                <i class="fas fa-address-book mr-2"></i> Contacts
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    
    @yield('content')

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            cssMode: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
                el: ".swiper-pagination",
            },
            mousewheel: true,
            keyboard: true,
        });
    </script>
</body>

</html>

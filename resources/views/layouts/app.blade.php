<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'RTO Vehicle Registration Details - ThiyagiPedia')</title>

    <!-- SEO Meta Tags -->
    <meta name="description" content="@yield('description', 'Search vehicle registration details and get all the RTO information including address, email ID & phone number online at Thiyagipedia.')">
    <meta name="keywords" content="@yield('keywords', 'RTO, Vehicle Registration, Transport Office, India')">
    <meta name="author" content="Thiyagipedia">

    <!-- Canonical Link -->
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- CSS -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- AdSense -->
    <meta name="google-adsense-account" content="ca-pub-1381776395680802">
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1381776395680802" crossorigin="anonymous"></script>

    <!-- Clarity tracking -->
    <script>
        (function(c,l,a,r,i,t,y){
            c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
            t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i+"?ref=bwt";
            y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
        })(window, document, "clarity", "script", "su9csmhrpd");
    </script>

    <!-- Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-SRLG3Y0TBJ"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-SRLG3Y0TBJ');
    </script>
</head>
<body class="min-h-screen flex flex-col">

    <!-- Header -->
    <header class="bg-white shadow-md sticky top-0 z-50 border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <div class="flex-shrink-0">
                    <a href="{{ url('/') }}" class="flex items-center">
                        <img src="{{ asset('images/logo.png') }}" alt="ThiyagiPedia" class="h-10 w-auto">
                        <span class="ml-3 text-xl font-bold text-gray-900 hidden sm:block">ThiyagiPedia</span>
                    </a>
                </div>

                <!-- Navigation (if needed) -->
                <nav class="hidden md:flex space-x-8">
                    <a href="{{ url('/') }}" class="text-gray-700 hover:text-blue-600 px-3 py-2 text-sm font-medium transition-colors">Home</a>
                    <!-- Add more navigation items as needed -->
                </nav>

                <!-- Mobile menu button -->
                <div class="md:hidden">
                    <button type="button" class="text-gray-700 hover:text-blue-600">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="flex-1">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Company Info -->
                <div>
                    <div class="flex items-center mb-4">
                        <img src="{{ asset('images/logo.png') }}" alt="ThiyagiPedia" class="h-8 w-auto">
                        <span class="ml-3 text-lg font-bold">ThiyagiPedia</span>
                    </div>
                    <p class="text-gray-400 text-sm">
                        Your trusted source for RTO vehicle registration details across India.
                        Get comprehensive information about Regional Transport Offices.
                    </p>
                </div>

                <!-- Quick Links -->
                <div>
                    <h3 class="text-lg font-semibold mb-4">Quick Links</h3>
                    <ul class="space-y-2 text-sm">
                        <li><a href="{{ url('/') }}" class="text-gray-400 hover:text-white transition-colors">Home</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">About Us</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Contact</a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div>
                    <h3 class="text-lg font-semibold mb-4">Contact</h3>
                    <p class="text-gray-400 text-sm">
                        For any queries or support, please reach out to us.
                    </p>
                </div>
            </div>

            <div class="mt-8 pt-8 border-t border-gray-800 text-center text-sm text-gray-400">
                <p>&copy; {{ date('Y') }} ThiyagiPedia. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script src="{{ mix('js/app.js') }}"></script>
    @stack('scripts')
</body>
</html>

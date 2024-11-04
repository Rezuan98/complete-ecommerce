<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('ftitle')</title>
    <!-- Add CSS Links (Bootstrap, FontAwesome, Custom CSS) -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/layout.css') }}">
</head>

<body>
    <body>
        <!-- Header Section -->
        <header>
            @include('frontend.module-1.includes.header')
        </header>
    
        <!-- Navbar Section -->
        <nav>
            @include('frontend.module-1.includes.navbar')
        </nav>
    
        <!-- Main Wrapper with Sidebar and Content -->
        <div class="main-wrapper">
            <!-- Sidebar Section on the Left -->
            <aside class="sidebar">
                @include('frontend.module-1.includes.sidebar')
            </aside>
    
            <!-- Main Content Section -->
            <main class="main-content">
                @yield('content')
            </main>
        </div>
    
        <!-- Footer Section at the Bottom -->
       
            @include('frontend.module-1.includes.footer')

    
        <!-- JS Scripts (jQuery, Bootstrap, Custom JS) -->
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    </body>
    
</html>

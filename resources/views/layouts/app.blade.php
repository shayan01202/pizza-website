<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Responsive Pizza Landing Page')</title>
    
    <!-- Box Icons -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    
    <!-- Link To CSS -->
    
      <link rel="stylesheet" href="{{ asset('css/style.css') }}">
       <!-- <link rel="stylesheet" href="/css/style.css"> -->
      
    
    @yield('styles')
</head>
<body>
    <!-- Navbar -->
    <header>
        <!-- <a href="{{ url('/') }}" class="logo">Khan.</a> -->
        <a href="{{ url('/') }}" class="logo">Pizza Pie</a>
        <!-- <a href="{{ url('') }}" class="logo">Shayan and Khan</a> -->
      
        <div class="bx bx-menu" id="menu-icon"></div>

        <ul class="navbar">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#menu">Menu</a></li>
            <li><a href="#services">Service</a></li>
            <li><a href="#contact">Contact</a></li>
            <!-- Dark Mode -->
            <div class="bx bx-moon" id="darkmode"></div>
        </ul>
    </header>

    <main>
        @yield('content')
    </main>

    <!-- Scroll Reveal -->
    <script src="https://unpkg.com/scrollreveal"></script>
    <!-- Link To JavaScript -->
   <script src="{{ asset('js/script.js') }}"></script>
    
    @yield('scripts')
</body>
</html>
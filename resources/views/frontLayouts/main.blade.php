<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Layout</title>
    <link rel="stylesheet" href="{{asset('asset/css/main-style.css')}}">
</head>


<body>


<!-- Header Top Container -->
<div class="header-top container">
    <div class="menu-icon" id="menu-icon">&#9776;</div>
    <div class="logo">
        <a href="index.html"><img src="{{asset('asset/images/logo.png')}}" alt="Logo"></a>
    </div>
    <div class="contact-info">
        <h2><i class="fa fa-phone"></i> CONTACT NUMBER</h2>
        <p>
            <a href="tel:+919414400331"><span class="bookingno2">+91-9414400331<br>+91-7014137278</span></a>
        </p>
    </div>
</div>


<!-- Header Main -->
<header class="header-main">
    <nav class="header-nav">

        <ul class="header-ul" id="nav-links">
            <li><a href="{{route('about')}}">About Us</a></li>
            <li><a href="{{route('home')}}">Live Rates</a></li>
            <li><a href="{{route('coinsRate')}}">Coins Rates</a></li>
            <li><a href="{{route('updates')}}">Updates</a></li>
            <li><a href="{{route('bankDetail')}}">Bank Details</a></li>
            <li><a href="{{route('calendar')}}">Calendar</a></li>
            <li><a href="{{route('contacts')}}">Contact Us</a></li>
        </ul>
    </nav>
</header>

<!-- Sidebar -->
<aside id="sidebar">
    <div class="sidebar-header">
        <img src="{{asset('asset/images/logo.png')}}" alt="Logo" class="logo">
    </div>
    <ul class="sidebar-menu">
        <li><a href="{{route('about')}}"><i class="fa fa-info-circle"></i> About Us</a></li>
        <li><a href="#"><i class="fa fa-diamond"></i> Jewellery</a></li>
        <li><a href="{{route('home')}}"><i class="fa fa-line-chart"></i> Live Rate</a></li>
        <li><a href="{{route('coinsRate')}}"><i class="fa fa-money"></i> Coin Rate</a></li>
        <li><a href="{{route('updates')}}"><i class="fa fa-newspaper-o"></i> Updates</a></li>
        <li><a href="{{ route('bankDetail') }}"><i class="fa fa-bank"></i> Bank Detail</a></li>
        <li><a href="{{route('calendar')}}"><i class="fa fa-calendar"></i> Economic Calendar</a></li>
        <li><a href="{{route('contacts')}}"><i class="fa fa-envelope"></i> Contact Us</a></li>
        <li><a href="{{route('home')}}"><i class="fa fa-globe"></i> Visit Our Website</a></li>
        <li><a href="#"><i class="fa fa-share-alt"></i> Share</a></li>
        <li><a href="#"><i class="fa fa-star"></i> Rate Our App</a></li>
    </ul>

    <div class="social-media">
        <p>Follow on Social Account</p>
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-instagram"></i></a>
    </div>
</aside>

<!-- Overlay -->
<div id="overlay"></div>

@yield('content')

<footer class="footer">
    <div class="footer-container">
        <div class="footer-section about">
            <img src="{{asset('asset/images/logo.png')}}" alt="Radhika Jewellers Logo" class="footer-logo">
            <p>About Company</p>
        </div>
        <div class="footer-section menu">
            <h3>MENU</h3>
            <ul>
                <li><a href="{{route('about')}}">About</a></li>
                <li><a href="{{route('home')}}">Live Rate</a></li>
                <li><a href="{{route('coinsRate')}}">Coins Rates</a></li>
                <li><a href="{{route('updates')}}">Update</a></li>
                <li><a href="{{route('bankDetail')}}">Bank Detail</a></li>
                <li><a href="{{route('calendar')}}">Calendar</a></li>
                <li><a href="{{route('contacts')}}">Contact Us</a></li>
            </ul>
        </div>
        <div class="footer-section contact">
            <h3>Contact Us</h3>
            <p><strong>Radhika Jewellers</strong><br>
                Namak Ki Mandi,<br>
                Kinari Bazar,<br>
                Agra, Uttar Pradesh,<br>
                India - 282002</p>
            <p><a href="mailto:info@radhikajewellers.in">info@radhikajewellers.in</a></p>
            <p><a href="tel:+919897201554">+91 9897 201554</a></p>
        </div>
        <div class="footer-section app-links">
            <img src="{{asset('asset/images/mobile.webp')}}" alt="Phone" class="phone">
            <div class="app-buttons">
                <a href="#"><img src="{{asset('asset/images/android.webp')}}" alt="Get it on Google Play"></a>
                <a href="#"><img src="{{asset('asset/images/ios.webp')}}" alt="Download on the App Store"></a>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy;2023 Radhika Jewellers</p>
        <p>Design & Develop By <a href="#">SL</a></p>
    </div>
</footer>

<script src="{{asset('asset/js/script.js')}}"></script>

</body>

</html>

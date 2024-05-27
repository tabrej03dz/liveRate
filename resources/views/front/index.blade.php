<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Layout</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="{{asset('asset/css/main-style.css')}}">
</head>

<body>


<div class="header-top container">
    <div class="logo">
        <a href="index.html"><img src="{{asset('asset/images/logo.jpg')}}" alt="Logo" style="width: 300px; height: auto;"></a>
    </div>
    <div class="contact-info">
        <h2><i class="fa fa-phone"></i> CONTACT NUMBER</h2>
        <p>
            <a href="#"><span class="bookingno2">Gold - +91 562 4307887</span></a>
        </p>
    </div>
</div>

<header class="header-main">
    <nav class="header-nav">
        <div class="menu-icon" id="menu-icon">&#9776;</div>
        <ul class="header-ul" id="nav-links">
            <li><a href="#">About Us</a></li>
            <li><a href="#">Live Rates</a></li>
            <li><a href="#">Coins Rates</a></li>
            <li><a href="#">Updates</a></li>
            <li><a href="#">Bank Details</a></li>
            <li><a href="#">Calendar</a></li>
            <li><a href="#">Contact Us</a></li>
        </ul>
    </nav>
</header>
<aside id="sidebar">
    <ul>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Live Rates</a></li>
        <li><a href="#">Coins Rates</a></li>
        <li><a href="#">Updates</a></li>
        <li><a href="#">Bank Details</a></li>
        <li><a href="#">Calendar</a></li>
        <li><a href="#">Contact Us</a></li>
    </ul>
</aside>
<div id="overlay"></div>

<div class="header-top-marquee">
    <div class="container-fluid">
        <marquee class="marquee1">विशेष ~ आपकी सेवा में हमने एक नई कड़ी और जोड़ दी है सोने के 20k/ 18K Hallmark जेवर
            वा चांदी की ज्वेलरी पायल मूर्ति बर्तन सिक्के संपूर्ण रेंज एवं विशाल संग्रह के साथ ( बहुत ही उचित मूल्य )
            पर उपलब्ध हैं हमेशा की तरह आपके साथ और सहयोग की कामना करते हैं | Working Hours: 11:30 AM - 08:00 PM
        </marquee>
    </div>
</div>








<div class="container">
    <div class="left-side">
        <h2>PRODUCT &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            Carat &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp; SELL</h2>

        <div class="content">
            @foreach($products as $product)
                <div class="row">
                    <div class="item">
                        <div class="product-item col-md-4">{{$product->name}}</div>
                        <div class="product-item col-md-4">{{$product->carat}}</div>
                        <div class="sell-item col-md-4">{{$product->price}}</div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
    <div class="right-side">
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-12 col-sm-12 mt-2">
                    <div class="mheader" id="divFutureHd">
                        <table class="p-title-cover">
                            <tbody>
                            <tr>
                                <td><span>MCX</span></td>
                                <td><span>BID</span></td>
                                <td><span>ASK</span></td>
                                <td><span>HIGH / LOW</span></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div id="divFuture">
                        <div class="mrt">
                            <div class="pp">
                                <table>
                                    <tbody>
                                    <tr>
                                        <td><span>GOLD </span></td>
                                        <td><span class="e">71744</span></td>
                                        <td><span class="e">71757</span></td>
                                        <td><span class="e">71760 / 71456</span></td>
                                    </tr>
                                    <tr>
                                        <td><span>SILVER </span></td>
                                        <td><span class="e">92135</span></td>
                                        <td><span class="e">92158</span></td>
                                        <td><span class="e">92189 / 91461</span></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 mt-2">
                    <div class="mheader" id="divSpotHd">
                        <table class="p-title-cover">
                            <tbody>
                            <tr>
                                <td><span>SPOT</span></td>
                                <td><span>BID</span></td>
                                <td><span>ASK</span></td>
                                <td><span>HIGH / LOW</span></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div id="divSpot">
                        <div class="mrt">
                            <div class="pp">
                                <table>
                                    <tbody>
                                    <tr>
                                        <td><span>GOLD $</span></td>
                                        <td><span class="l">2344.31</span></td>
                                        <td><span class="h">2344.64</span></td>
                                        <td><span class="e">2347.60 / 2332.44</span></td>
                                    </tr>
                                    <tr>
                                        <td><span>SILVER $</span></td>
                                        <td><span class="e">30.86</span></td>
                                        <td><span class="e">30.88</span></td>
                                        <td><span class="e">30.91 / 30.35</span></td>
                                    </tr>
                                    <tr>
                                        <td><span>INR $</span></td>
                                        <td><span class="e">83.0800</span></td>
                                        <td><span class="e">83.1300</span></td>
                                        <td><span class="e">83.1350 / 83.0410</span></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 mt-2">
                    <div class="mheader" id="divNextHd">
                        <table class="p-title-cover">
                            <tbody>
                            <tr>
                                <td><span>NEXT</span></td>
                                <td><span>BID</span></td>
                                <td><span>ASK</span></td>
                                <td><span>HIGH / LOW</span></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div id="divNext">
                        <div class="mrt">
                            <div class="pp">
                                <table>
                                    <tbody>
                                    <tr>
                                        <td><span>GOLD NEXT</span></td>
                                        <td><span class="e">71976</span></td>
                                        <td><span class="e">71990</span></td>
                                        <td><span class="e">72187 / 71725</span></td>
                                    </tr>
                                    <tr>
                                        <td><span>SILVER NEXT</span></td>
                                        <td><span class="e">93872</span></td>
                                        <td><span class="e">93894</span></td>
                                        <td><span class="e">93936 / 93200</span></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>









<marquee class="marquee2">Radhika Jewellers Live Rates provides Gold &amp; Silver prices obtained from various
    sources believed to be reliable, but we do not guarantee their accuracy. Our gold &amp; silver price data are
    provided without warranty or claim of reliability. It is accepted by the site visitor on the condition that
    errors or omissions shall not be made the basis for any claim, demand or cause for action. </marquee>



<footer class="footer">
    <div class="footer-container">
        <div class="footer-section about">
            <img src="logo.webp" alt="Radhika Jewellers Logo" class="footer-logo">
            <p>About Company</p>
        </div>
        <div class="footer-section menu">
            <h3>MENU</h3>
            <ul>
                <li><a href="#">About</a></li>
                <li><a href="#">Live Rate</a></li>
                <li><a href="#">Coins Rates</a></li>
                <li><a href="#">Update</a></li>
                <li><a href="#">Bank Detail</a></li>
                <li><a href="#">Calendar</a></li>
                <li><a href="#">Contact Us</a></li>
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
            <img src="mobile.webp" alt="Phone" class="phone">
            <div class="app-buttons">
                <a href="#"><img src="android.webp" alt="Get it on Google Play"></a>
                <a href="#"><img src="ios.webp" alt="Download on the App Store"></a>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy;2023 Radhika Jewellers</p>
        <p>Design & Develop By <a href="#">SL</a></p>
    </div>
</footer>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var menuIcon = document.getElementById("menu-icon");
        var sidebar = document.getElementById("sidebar");
        var overlay = document.getElementById("overlay");

        menuIcon.addEventListener("click", function() {
            sidebar.classList.toggle("open");
            overlay.classList.toggle("show");
        });

        overlay.addEventListener("click", function() {
            sidebar.classList.remove("open");
            overlay.classList.remove("show");
        });
    });

</script>
</body>

</html>

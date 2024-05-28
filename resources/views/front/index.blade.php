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
        <a href="index.html"><img src="{{asset('asset/images/logo.jpg')}}" alt="Logo"></a>
    </div>
    <div class="contact-info">
        <h2><i class="fa fa-phone"></i> CONTACT NUMBER</h2>
        <p>
            <a href="tel:+915624307887"><span class="bookingno2">Gold - +91 562 4307887</span></a>
        </p>
    </div>
</div>

<!-- Header Main -->
<header class="header-main">
    <nav class="header-nav">

        <ul class="header-ul" id="nav-links">
            <li><a href="about.html">About Us</a></li>
            <li><a href="live-rates.html">Live Rates</a></li>
            <li><a href="coins-rates.html">Coins Rates</a></li>
            <li><a href="updates.html">Updates</a></li>
            <li><a href="bank-details.html">Bank Details</a></li>
            <li><a href="calendar.html">Calendar</a></li>
            <li><a href="contact.html">Contact Us</a></li>
        </ul>
    </nav>
</header>

<!-- Sidebar -->
<aside id="sidebar">
    <div class="sidebar-header">
        <img src="logo.webp" alt="Logo" class="logo">
    </div>
    <ul class="sidebar-menu">
        <li><a href="about.html"><i class="fa fa-info-circle"></i> About Us</a></li>
        <li><a href="#"><i class="fa fa-diamond"></i> Jewellery</a></li>
        <li><a href="live-rates.html"><i class="fa fa-line-chart"></i> Live Rate</a></li>
        <li><a href="coins-rates.html"><i class="fa fa-money"></i> Coin Rate</a></li>
        <li><a href="updates.html"><i class="fa fa-newspaper-o"></i> Updates</a></li>
        <li><a href="bank-details.html"><i class="fa fa-bank"></i> Bank Detail</a></li>
        <li><a href="calendar.html"><i class="fa fa-calendar"></i> Economic Calendar</a></li>
        <li><a href="contact.html"><i class="fa fa-envelope"></i> Contact Us</a></li>
        <li><a href="#"><i class="fa fa-globe"></i> Visit Our Website</a></li>
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
        <div class="main-product">
            <div id="divHeader">
                <table class="table">
                    <tbody>
                    <tr class="product-title-color">
                        <td class="p-h p0"><span>PRODUCT</span></td>
                        <td class="p-h ph text-center"><span>CARAT</span></td>
                        <td class="p-h ph text-center"><span>SELL</span></td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="divProduct" id="divProduct">
                <div class="content-cover">
                    <table class="left-side-table">
                        <tbody>
                        <tr class="ligh-white">
                            <td class="p-h p0">
                                <div class="main-product-cover">
                                    <h3>Gold</h3>
                                </div>
                            </td>
                            <td class="p-h ph product-rate">
                                <div class="mn-rate-cover"><span class="bgm e">24K</span></div>
                            </td>
                            <td class="p-h ph product-rate">
                                <div class="mn-rate-cover"><span class="bgm e">{{$goldPrice['price_gram_24k']}}</span></div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>

                <div class="content-cover">
                    <table class="left-side-table">
                        <tbody>
                        <tr class="ligh-white">
                            <td class="p-h p0">
                                <div class="main-product-cover">
                                    <h3>GOLD</h3>
                                </div>
                            </td>
                            <td class="p-h ph product-rate">
                                <div class="mn-rate-cover"><span class="bgm e">22K</span></div>
                            </td>
                            <td class="p-h ph product-rate">
                                <div class="mn-rate-cover"><span class="bgm e">{{$goldPrice['price_gram_22k']}}</span></div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>

                <div class="content-cover">
                    <table class="left-side-table">
                        <tbody>
                        <tr class="ligh-white">
                            <td class="p-h p0">
                                <div class="main-product-cover">
                                    <h3>GOLD</h3>
                                </div>
                            </td>
                            <td class="p-h ph product-rate">
                                <div class="mn-rate-cover"><span class="bgm e">21K</span></div>
                            </td>
                            <td class="p-h ph product-rate">
                                <div class="mn-rate-cover"><span class="bgm e">{{$goldPrice['price_gram_21k']}}</span></div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>

                <div class="content-cover">
                    <table class="left-side-table">
                        <tbody>
                        <tr class="ligh-white">
                            <td class="p-h p0">
                                <div class="main-product-cover">
                                    <h3>GOLD</h3>
                                </div>
                            </td>
                            <td class="p-h ph product-rate">
                                <div class="mn-rate-cover"><span class="bgm e">20K</span></div>
                            </td>
                            <td class="p-h ph product-rate">
                                <div class="mn-rate-cover"><span class="bgm e">{{$goldPrice['price_gram_20k']}}</span></div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>

                <div class="content-cover">
                    <table class="left-side-table">
                        <tbody>
                        <tr class="ligh-white">
                            <td class="p-h p0">
                                <div class="main-product-cover">
                                    <h3>GOLD</h3>
                                </div>
                            </td>
                            <td class="p-h ph product-rate">
                                <div class="mn-rate-cover"><span class="bgm e">18K</span></div>
                            </td>
                            <td class="p-h ph product-rate">
                                <div class="mn-rate-cover"><span class="bgm e">{{$goldPrice['price_gram_18k']}}</span></div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>

                <div class="content-cover">
                    <table class="left-side-table">
                        <tbody>
                        <tr class="ligh-white">
                            <td class="p-h p0">
                                <div class="main-product-cover">
                                    <h3>GOLD</h3>
                                </div>
                            </td>
                            <td class="p-h ph product-rate">
                                <div class="mn-rate-cover"><span class="bgm e">16K</span></div>
                            </td>
                            <td class="p-h ph product-rate">
                                <div class="mn-rate-cover"><span class="bgm e">{{$goldPrice['price_gram_16k']}}</span></div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>

                <div class="content-cover">
                    <table class="left-side-table">
                        <tbody>
                        <tr class="ligh-white">
                            <td class="p-h p0">
                                <div class="main-product-cover">
                                    <h3>GOLD</h3>
                                </div>
                            </td>
                            <td class="p-h ph product-rate">
                                <div class="mn-rate-cover"><span class="bgm e">14K</span></div>
                            </td>
                            <td class="p-h ph product-rate">
                                <div class="mn-rate-cover"><span class="bgm e">{{$goldPrice['price_gram_14k']}}</span></div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
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
                                        <td><span class="e">{{$prices->ounce_price_bid}}</span></td>
                                        <td><span class="e">{{$prices->ounce_price_ask}}</span></td>
                                        <td><span class="e">{{$prices->ounce_price_usd_today_low}} / {{$prices->ounce_price_usd_today_high}}</span></td>
                                    </tr>
                                    <tr>
                                        <td><span>SILVER </span></td>
                                        <td><span class="e">{{round($prices->silver_ounce_price_bid_inr, 2)}}</span></td>
                                        <td><span class="e">{{round($prices->silver_ounce_price_ask_inr, 2)}}</span></td>
                                        <td><span class="e">{{round($prices->silver_ounce_price_inr_today_high, 2)}} / {{round($prices->silver_ounce_price_inr_today_low, 2)}}</span></td>
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

<script src="scripts.js"></script>
<script>
    // JavaScript to handle sidebar toggle
    const menuIcon = document.getElementById('menu-icon');
    const sidebar = document.getElementById('sidebar');
    const overlay = document.getElementById('overlay');

    menuIcon.addEventListener('click', () => {
        sidebar.classList.toggle('open');
        overlay.classList.toggle('show');
    });

    overlay.addEventListener('click', () => {
        sidebar.classList.remove('open');
        overlay.classList.remove('show');
    });
</script>
</body>

</html>

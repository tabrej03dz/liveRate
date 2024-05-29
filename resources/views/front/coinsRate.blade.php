@extends('frontLayouts.main')
@section('content')

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+Devanagari&display=swap');

        .notice-container-main {
            font-family: 'Noto Sans Devanagari', sans-serif;
            background-color: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
            padding: 20px;
        }

        .notice-container {
            background-color: goldenrod;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
            max-width: 900px;
            width: 100%;
        }

        .notice-text {
            font-size: 16px;
            line-height: 1.5;
            margin-bottom: 10px;
        }

        .working-hours {
            font-size: 14px;
            font-weight: bold;
            text-align: center;
        }

        @media (max-width: 480px) {
            .notice-container {
                padding: 15px;
            }

            .notice-text {
                font-size: 14px;
            }

            .working-hours {
                font-size: 12px;
            }
        }




        /*Table Start*/

        .product-cover {
            width: 100%;
            padding: 20px 0;
        }

        .coin-container {
            max-width: 1000px;
            margin: 0 auto;
            padding: 0 15px;
        }

        .coin-cover {
            display: flex;
            flex-wrap: wrap;
        }

        .left-section,
        .right-section {
            width: 50%;
            box-sizing: border-box;
        }

        .left-section {
            padding-right: 10px;
        }

        .right-section {
            padding-left: 10px;
        }

        .lf-cvr {
            background-color: #fff;
            padding: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .pn.head {
            background-color: #d4af37;
            color: #000;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-weight: bold;
        }

        .pn.rat {
            background-color: #fff;
            border: 1px solid #d4af37;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 10px;
        }

        .l-w {
            flex: 1;
        }

        .text-center {
            flex: 1;
            text-align: center;
        }

        .r-w {
            flex: 1;
            text-align: right;
        }

        /* Add left margin to the rate paragraphs */
        .pn.rat .e {
            margin-left: 20px;
            /* Adjust this value as needed */
        }

        /* Responsive styles */
        @media (max-width: 768px) {

            .left-section,
            .right-section {
                width: 100%;
                padding: 0;
            }

            .coin-container {
                padding: 0;
            }

            .pn.head {
                font-size: 1.2em;
                padding: 8px;
            }

            .pn.rat {
                font-size: 1em;
                padding: 8px;
            }
        }

        @media (max-width: 480px) {
            .pn.head {
                font-size: 1em;
                padding: 6px;
                flex-direction: column;
                text-align: center;
            }

            .pn.rat {
                font-size: 0.9em;
                padding: 6px;
                flex-direction: column;
                text-align: center;
            }

            .l-w,
            .r-w,
            .text-center {
                flex: none;
                text-align: center;
                margin: 4px 0;
            }
        }
    </style>




<div class="header-top-marquee">
    <div class="container-fluid">
        <marquee class="marquee1">विशेष ~ आपकी सेवा में हमने एक नई कड़ी और जोड़ दी है सोने के 20k/ 18K Hallmark जेवर
            वा चांदी की ज्वेलरी पायल मूर्ति बर्तन सिक्के संपूर्ण रेंज एवं विशाल संग्रह के साथ ( बहुत ही उचित मूल्य )
            पर उपलब्ध हैं हमेशा की तरह आपके साथ और सहयोग की कामना करते हैं | Working Hours: 11:30 AM - 08:00 PM
        </marquee>
    </div>
</div>

<!--Header End-->



<!--Main Start-->

<main>
    <div class="notice-container-main">
        <div class="notice-container">
            <p class="notice-text">विषय - आपको सेवा ही हमारे एक तरफ कुछी और जाड़े दी है सोने के 20k/ 18K Hallmark
                जेवर वा चांदी की जेवरी पायेज मुहि बनने सिरफ सोपुर ऊपर एवं विशाल सोंग के साथ (बहुत ही जटिल परम) पर
                उपलब्ध है हमेशा को तरह आपके साथ और सहयोग की कामना करते हैं।</p>
            <p class="working-hours">Working Hours: 11:30 AM - 08:00 PM</p>
        </div>
    </div>


    <!--Table Strat-->

    <div class="product-cover">
        <div class="coin-container">
            <div class="coin-cover">
                <div class="left-section" id="goldcoin">
                    <div class="lf-cvr">
                        <div class="pn head">
                            <span class="l-w">GOLD COIN</span>
                            <span class="text-center r-w">RATE (<i class="fa fa-inr"></i>)</span>
                        </div>
                        <div class="pn rat coin-rate">
                            <span class="l-w">1 Gm 22K Ginni</span>
                            <span class="text-center r-w">
                                    <p class="e"><i class="fa fa-inr"></i>7183</p>
                                </span>
                        </div>
                        <div class="pn rat coin-rate">
                            <span class="l-w">2 Gm 22K Ginni</span>
                            <span class="text-center r-w">
                                    <p class="e"><i class="fa fa-inr"></i>14206</p>
                                </span>
                        </div>
                        <div class="pn rat coin-rate">
                            <span class="l-w">4 Gm 22K Ginni</span>
                            <span class="text-center r-w">
                                    <p class="e"><i class="fa fa-inr"></i>28112</p>
                                </span>
                        </div>
                        <div class="pn rat coin-rate">
                            <span class="l-w">8 Gm 22K Ginni</span>
                            <span class="text-center r-w">
                                    <p class="e"><i class="fa fa-inr"></i>55776</p>
                                </span>
                        </div>
                        <div class="pn rat coin-rate">
                            <span class="l-w">1 Gm 24K Coin</span>
                            <span class="text-center r-w">
                                    <p class="e"><i class="fa fa-inr"></i>7589</p>
                                </span>
                        </div>
                        <div class="pn rat coin-rate">
                            <span class="l-w">2 Gm 24K Coin</span>
                            <span class="text-center r-w">
                                    <p class="e"><i class="fa fa-inr"></i>15178</p>
                                </span>
                        </div>
                        <div class="pn rat coin-rate">
                            <span class="l-w">5 Gm 24K Coin</span>
                            <span class="text-center r-w">
                                    <p class="e"><i class="fa fa-inr"></i>37570</p>
                                </span>
                        </div>
                        <div class="pn rat coin-rate">
                            <span class="l-w">10 Gm 24K Coin</span>
                            <span class="text-center r-w">
                                    <p class="e"><i class="fa fa-inr"></i>75140</p>
                                </span>
                        </div>
                    </div>
                </div>
                <div class="right-section" id="silvercoin">
                    <div class="lf-cvr">
                        <div class="pn head">
                            <span class="l-w">SILVER COIN</span>
                            <span class="text-center r-w">RATE (<i class="fa fa-inr"></i>)</span>
                        </div>
                        <div class="pn rat coin-rate">
                            <span class="l-w">10 Gm 99.99%</span>
                            <span class="text-center r-w">
                                    <p class="e"><i class="fa fa-inr"></i>974</p>
                                </span>
                        </div>
                        <div class="pn rat coin-rate">
                            <span class="l-w">100 Gm Coin 99.99%</span>
                            <span class="text-center r-w">
                                    <p class="e"><i class="fa fa-inr"></i>9739</p>
                                </span>
                        </div>
                        <div class="pn rat coin-rate">
                            <span class="l-w">500 Gm Coin 99.99%</span>
                            <span class="text-center r-w">
                                    <p class="e"><i class="fa fa-inr"></i>48692</p>
                                </span>
                        </div>
                        <div class="pn rat coin-rate">
                            <span class="l-w">Silver 99.99</span>
                            <span class="text-center r-w">
                                    <p class="e"><i class="fa fa-inr"></i>95810</p>
                                </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>

<!--Main End-->




<!--Footer Start-->

<marquee class="marquee2">Shristi Jewellers Live Rates provides Gold &amp; Silver prices obtained from various
    sources believed to be reliable, but we do not guarantee their accuracy. Our gold &amp; silver price data are
    provided without warranty or claim of reliability. It is accepted by the site visitor on the condition that
    errors or omissions shall not be made the basis for any claim, demand or cause for action. </marquee>

@endsection



{{-- @extends('frontLayouts.main', ['title' => 'Live Rate'])
@section('content')
    <div class="text-center flex justify-center">
        <p style="text-align: center; margin-top: 10px; margin-bottom: -10px; font-size: 26px;">
            Shristi Jewellers
        </p>
    </div>
    <div class="header-top-marquee">
        <div class="container-fluid bg-amber-400 px-2">
            <marquee class="marquee1">विशेष ~ आपकी सेवा में हमने एक नई कड़ी और जोड़ दी है सोने के 20k/ 18K Hallmark जेवर
                वा चांदी की ज्वेलरी पायल मूर्ति बर्तन सिक्के संपूर्ण रेंज एवं विशाल संग्रह के साथ ( बहुत ही उचित मूल्य )
                पर उपलब्ध हैं हमेशा की तरह आपके साथ और सहयोग की कामना करते हैं | Working Hours: 10:00 AM - 08:00 PM
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
                                <td class="p-h ph text-center"><span>Price</span></td>
                                <td class="p-h ph text-center"><span>Quantity</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="divProduct" id="divProduct">



                    <div class="content-cover">
                        <table class="left-side-table">
                            <tbody>
                                <tr class="ligh-white">
                                    <td class="p-h p0" style="width: 28%; text-align: center;">
                                        <div class="main-product-cover">
                                            <h3>Gold &#8377;</h3>
                                        </div>
                                    </td>
                                    <td class="p-h ph product-rate" style="width: 25%; text-align: center;">
                                        <div class="mn-rate-cover"><span class="bgm e">22K</span></div>
                                    </td>
                                    <td class="p-h ph product-rate" style="width: 25%; text-align: center;">
                                        @php
                                            $percent = $goldDiscount22k?->percent;

                                            $caretWisePrice = $prices->gram_in_inr - ($prices->gram_in_inr * 8) / 100;

                                            $dis = ($caretWisePrice * $percent) / 100;
                                            if ($goldDiscount22k?->type == 0) {
                                                $finalPrice = $caretWisePrice - $dis;
                                            } else {
                                                $finalPrice = $caretWisePrice + $dis;
                                            }
                                        @endphp
                                        <div class="mn-rate-cover"><span class="bgm e"
                                                id="22kGold">{{ round($finalPrice, 2) }}/gm</span></div>
                                    </td>
                                    <td class="p-h ph product-rate" style="width: 25%; text-align: center;">
                                        <input type="number" name="gram" min="1"
                                            onkeyup="
                                    let gram = this.value;
                                    if(gram == ''){
                                        const price = ({{ $prices->gram_in_inr }} - (({{ $prices->gram_in_inr }} * 8)/100)) * 1;
                                        const discount = (price * {{ $percent }})/100;
                                        if({{ $goldDiscount22k?->type }} == 0){
                                            let finalPrice = price - discount;
                                            document.getElementById('22kGold').innerText = finalPrice.toFixed(2) + '/' + gram + 'gm';
                                        }else{
                                            let finalPrice = price + discount;
                                            document.getElementById('22kGold').innerText = finalPrice.toFixed(2) + '/' + gram + 'gm';
                                        }

                                        // document.getElementById('22kGold').innerText = finalPrice.toFixed(2);
                                    }else{
                                        const price = ({{ $prices->gram_in_inr }} - (({{ $prices->gram_in_inr }} * 8)/100)) * gram;
                                        const discount = (price * {{ $percent }})/100;

                                        if({{ $goldDiscount22k?->type }} == 0){
                                            const finalPrice = price - discount;
                                            document.getElementById('22kGold').innerText = finalPrice.toFixed(2) + '/' + gram + 'gm';
                                        }else{
                                            const finalPrice = price + discount;
                                            document.getElementById('22kGold').innerText = finalPrice.toFixed(2) + '/' + gram + 'gm';
                                        }
                                    }
                                "
                                            style="width: 100%;" />
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>



                    <div class="content-cover">
                        <table class="left-side-table">
                            <tbody>
                                <tr class="ligh-white">
                                    <td class="p-h p0" style="width: 28%; text-align: center;">
                                        <div class="main-product-cover">
                                            <h3>Gold &#8377;</h3>
                                        </div>
                                    </td>
                                    <td class="p-h ph product-rate" style="width: 25%; text-align: center;">
                                        <div class="mn-rate-cover"><span class="bgm e">20K</span></div>
                                    </td>
                                    <td class="p-h ph product-rate" style="width: 25%; text-align: center;">
                                        @php
                                            $percent = $goldDiscount20k?->percent;

                                            $caretWisePrice =
                                                $prices->gram_in_inr - ($prices->gram_in_inr * 16.7) / 100;

                                            $dis = ($caretWisePrice * $percent) / 100;
                                            if ($goldDiscount20k?->type == 0) {
                                                $finalPrice = $caretWisePrice - $dis;
                                            } else {
                                                $finalPrice = $caretWisePrice + $dis;
                                            }
                                        @endphp
                                        <div class="mn-rate-cover"><span class="bgm e"
                                                id="20kGold">{{ round($finalPrice, 2) }}/gm</span></div>
                                    </td>
                                    <td class="p-h ph product-rate" style="width: 25%; text-align: center;">
                                        <input type="number" name="gram" min="1"
                                            onkeyup="
                                    let gram = this.value;
                                    if(gram == ''){
                                        const price = ({{ $prices->gram_in_inr }} - (({{ $prices->gram_in_inr }} * 16.7)/100)) * 1;
                                        const discount = (price * {{ $percent }})/100;
                                        if({{ $goldDiscount20k?->type }} == 0){
                                            let finalPrice = price - discount;
                                            document.getElementById('20kGold').innerText = finalPrice.toFixed(2) + '/' + gram + 'gm';
                                        }else{
                                            let finalPrice = price + discount;
                                            document.getElementById('20kGold').innerText = finalPrice.toFixed(2) + '/' + gram + 'gm';
                                        }

                                        // document.getElementById('22kGold').innerText = finalPrice.toFixed(2);
                                    }else{
                                        const price = ({{ $prices->gram_in_inr }} - (({{ $prices->gram_in_inr }} * 16.7)/100)) * gram;
                                        const discount = (price * {{ $percent }})/100;

                                        if({{ $goldDiscount20k?->type }} == 0){
                                            const finalPrice = price - discount;
                                            document.getElementById('20kGold').innerText = finalPrice.toFixed(2) + '/' + gram + 'gm';
                                        }else{
                                            const finalPrice = price + discount;
                                            document.getElementById('20kGold').innerText = finalPrice.toFixed(2) + '/' + gram + 'gm';
                                        }
                                    }
                                "
                                            style="width: 100%;" />
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>


                    <div class="content-cover">
                        <table class="left-side-table">
                            <tbody>
                                <tr class="ligh-white">
                                    <td class="p-h p0" style="width: 28%; text-align: center;">
                                        <div class="main-product-cover">
                                            <h3>Gold &#8377;</h3>
                                        </div>
                                    </td>
                                    <td class="p-h ph product-rate" style="width: 25%; text-align: center;">
                                        <div class="mn-rate-cover"><span class="bgm e">18K</span></div>
                                    </td>
                                    <td class="p-h ph product-rate" style="width: 25%; text-align: center;">
                                        @php
                                            $percent = $goldDiscount18k?->percent;

                                            $caretWisePrice = $prices->gram_in_inr - ($prices->gram_in_inr * 21) / 100;

                                            $dis = ($caretWisePrice * $percent) / 100;
                                            if ($goldDiscount18k?->type == 0) {
                                                $finalPrice = $caretWisePrice - $dis;
                                            } else {
                                                $finalPrice = $caretWisePrice + $dis;
                                            }
                                        @endphp
                                        <div class="mn-rate-cover"><span class="bgm e"
                                                id="18kGold">{{ round($finalPrice, 2) }}/gm</span></div>
                                    </td>
                                    <td class="p-h ph product-rate" style="width: 25%; text-align: center;">
                                        <input type="number" name="gram" min="1"
                                            onkeyup="
                                    let gram = this.value;
                                    if(gram == ''){
                                        const price = ({{ $prices->gram_in_inr }} - (({{ $prices->gram_in_inr }} * 21)/100)) * 1;
                                        const discount = (price * {{ $percent }})/100;
                                        if({{ $goldDiscount18k?->type }} == 0){
                                            let finalPrice = price - discount;
                                            document.getElementById('18kGold').innerText = finalPrice.toFixed(2) + '/' + gram + 'gm';
                                        }else{
                                            let finalPrice = price + discount;
                                            document.getElementById('18kGold').innerText = finalPrice.toFixed(2) + '/' + gram + 'gm';
                                        }

                                        // document.getElementById('18kGold').innerText = finalPrice.toFixed(2);
                                    }else{
                                        const price = ({{ $prices->gram_in_inr }} - (({{ $prices->gram_in_inr }} * 21)/100)) * gram;
                                        const discount = (price * {{ $percent }})/100;

                                        if({{ $goldDiscount18k?->type }} == 0){
                                            const finalPrice = price - discount;
                                            document.getElementById('18kGold').innerText = finalPrice.toFixed(2) + '/' + gram + 'gm';
                                        }else{
                                            const finalPrice = price + discount;
                                            document.getElementById('18kGold').innerText = finalPrice.toFixed(2) + '/' + gram + 'gm';
                                        }
                                    }
                                "
                                            style="width: 100%;" />
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>






                    <div class="content-cover">
                        <table class="left-side-table">
                            <tbody>
                                <tr class="ligh-white">
                                    <td class="p-h p0" style="width: 28%; text-align: center;">
                                        <div class="main-product-cover">
                                            <h3>Silver &#8377;</h3>
                                        </div>
                                    </td>
                                    <td class="p-h ph product-rate" style="width: 25%; text-align: center;">
                                        <div class="mn-rate-cover"><span class="bgm e">24K</span></div>
                                    </td>
                                    <td class="p-h ph product-rate" style="width: 25%; text-align: center;">
                                        @php
                                            if ($silverDiscount?->percent) {
                                                $percent = $silverDiscount?->percent;
                                            } else {
                                                $percent = 0;
                                            }
                                            $dis = ($prices->silver_gram_in_inr * $percent) / 100;
                                            if ($silverDiscount?->type == 0) {
                                                $finalPrice = $prices->silver_gram_in_inr - $dis;
                                            } else {
                                                $finalPrice = $prices->silver_gram_in_inr + $dis;
                                            }
                                        @endphp
                                        <div class="mn-rate-cover"><span class="bgm e"
                                                id="24Silver">{{ round($finalPrice, 2) }}/gm</span></div>
                                    </td>
                                    <td class="p-h ph product-rate" style="width: 25%; text-align: center;">
                                        <input type="number" name="gram" min="1"
                                            onkeyup="
                                    let gram = this.value;
                                    if(gram == ''){
                                        const price = {{ $prices->silver_gram_in_inr }} * 1;
                                        const discount = (price * {{ $percent }})/100;
                                        if({{ $silverDiscount?->type }} == 0){
                                            let finalPrice = price - discount;
                                            document.getElementById('24Silver').innerText = finalPrice.toFixed(2) + '/' + gram + 'gm';
                                        }else{
                                            let finalPrice = price + discount;
                                            document.getElementById('24Silver').innerText = finalPrice.toFixed(2) + '/' + gram + 'gm';
                                        }
                                            // document.getElementById('24Silver').innerText = finalPrice.toFixed(2);
                                    }else{
                                        const price = {{ $prices->silver_gram_in_inr }} * gram;
                                        const discount = (price * {{ $percent }})/100;

                                        if({{ $silverDiscount?->type }} == 0){
                                            const finalPrice = price - discount;
                                            document.getElementById('24Silver').innerText = finalPrice.toFixed(2) + '/' + gram + 'gm';
                                        }else{
                                            const finalPrice = price + discount;
                                            document.getElementById('24Silver').innerText = finalPrice.toFixed(2) + '/' + gram + 'gm';
                                        }
                                    }
                                "
                                            style="width: 100%;" />
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
                                        <td><span>Spot</span></td>
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
                                                <td><span class="e gold-bid">{{ $prices->ounce_price_bid }}</span></td>
                                                <td><span class="e gold-ask">{{ $prices->ounce_price_ask }}</span></td>
                                                <td><span class="e gold-high-low">{{ $prices->ounce_price_usd_today_low }}
                                                        / {{ $prices->ounce_price_usd_today_high }}</span></td>
                                            </tr>
                                            <tr>
                                                <td><span>SILVER $</span></td>
                                                <td><span
                                                        class="e silver-bid">{{ round($silverPrices->silver_ounce_price_bid_usd, 2) }}</span>
                                                </td>
                                                <td><span
                                                        class="e silver-ask">{{ round($silverPrices->silver_ounce_price_ask_usd, 2) }}</span>
                                                </td>
                                                <td><span
                                                        class="e silver-high-low">{{ round($silverPrices->silver_ounce_price_usd_today_high_usd, 2) }}
                                                        /
                                                        {{ round($silverPrices->silver_ounce_price_usd_today_low_usd, 2) }}</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><span>INR ₹ </span></td>
                                                <td><span class="e inr-usd"
                                                        colspan="2">{{ $prices->usd_to_inr }}</span></td>
                                                <td><span class="e gram-usd">{{ $prices->gram_in_usd }}</span></td>
                                                <td><span
                                                        class="e inr-gram-pair">{{ $prices->usd_to_inr }}/{{ $prices->gram_in_usd }}</span>
                                                </td>
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


    <marquee class="marquee2">Shristi Jewellers Live Rates provides Gold &amp; Silver prices obtained from various
        sources believed to be reliable, but we do not guarantee their accuracy. Our gold &amp; silver price data are
        provided without warranty or claim of reliability. It is accepted by the site visitor on the condition that
        errors or omissions shall not be made the basis for any claim, demand or cause for action. </marquee>

    <script>
        document.addEventListener("DOMContentLoaded", function() {

            const priceElements = [{
                    id: '22kGold',
                    basePrice: null,
                    currentPrice: null
                },
                {
                    id: '20kGold',
                    basePrice: null,
                    currentPrice: null
                },
                {
                    id: '18kGold',
                    basePrice: null,
                    currentPrice: null
                },
                {
                    id: '24Silver',
                    basePrice: null,
                    currentPrice: null
                }
            ];

            // Initialize prices (read initial prices from HTML)
            priceElements.forEach(item => {
                const priceElement = document.getElementById(item.id);
                if (priceElement) {
                    let initialText = priceElement.innerText.trim();
                    let initialPrice = parseFloat(initialText.split('/')[0].replace(/[^0-9.]/g, '')) || 100;
                    item.basePrice = initialPrice; // Actual starting price
                    item.currentPrice = initialPrice; // Price that will fluctuate
                }
            });

            // Function to randomly decide increase or decrease (1 to 2 Rs only)
            function getRandomPriceChange() {
                return Math.floor(Math.random() * (2 - 1 + 1)) + 1; // 1 to 2 Rs change
            }

            // Update price logic — stays within ±2 Rs of actual price
            function updatePrices() {
                const today = new Date().getDay();
                if (today === 0 || today === 6) return; // Stop updates on Sunday (0) or Saturday (6)

                priceElements.forEach(item => {
                    const priceElement = document.getElementById(item.id);
                    if (!priceElement) return;

                    const priceChange = getRandomPriceChange();
                    const isIncrease = Math.random() > 0.5;

                    // Apply the price change (either add or subtract 1-2 Rs)
                    if (isIncrease) {
                        item.currentPrice += priceChange;
                    } else {
                        item.currentPrice -= priceChange;
                    }

                    // Constrain the price so it doesn't move more than ±2 Rs from the base price
                    const maxPrice = item.basePrice + 2;
                    const minPrice = item.basePrice - 2;

                    if (item.currentPrice > maxPrice) {
                        item.currentPrice = maxPrice;
                    } else if (item.currentPrice < minPrice) {
                        item.currentPrice = minPrice;
                    }

                    // Change color based on price movement
                    if (item.currentPrice > item.basePrice) {
                        priceElement.style.color = "green"; // price went up
                    } else if (item.currentPrice < item.basePrice) {
                        priceElement.style.color = "red"; // price went down
                    } else {
                        priceElement.style.color = "black"; // unchanged
                    }

                    // Update displayed price (preserve /gm)
                    priceElement.innerText = `${item.currentPrice.toFixed(2)}/gm`;

                    // Add a unique class if needed for CSS tracking
                    const uniqueClass = `price-update-${Date.now()}`;
                    priceElement.className = `bgm e ${uniqueClass}`;
                });
            }

            // Set interval to update prices every 5 seconds
            setInterval(updatePrices, 5000);

        });
    </script>


    <script>
        document.addEventListener("DOMContentLoaded", function() {

            // Store initial prices (could come from server-side rendering)
            const priceElements = [{
                    selector: ".gold-bid",
                    value: null
                },
                {
                    selector: ".gold-ask",
                    value: null
                },
                {
                    selector: ".gold-high-low",
                    value: null
                },
                {
                    selector: ".silver-bid",
                    value: null
                },
                {
                    selector: ".silver-ask",
                    value: null
                },
                {
                    selector: ".silver-high-low",
                    value: null
                },
                {
                    selector: ".inr-usd",
                    value: null
                },
                {
                    selector: ".gram-usd",
                    value: null
                },
                {
                    selector: ".inr-gram-pair",
                    value: null
                }
            ];

            // Initialize prices from HTML
            priceElements.forEach(item => {
                const element = document.querySelector(item.selector);
                if (element) {
                    const text = element.innerText.trim();
                    const price = parseFloat(text.split('/')[0].replace(/[^0-9.]/g, '')) || 100;
                    item.value = price;
                }
            });

            function updatePrices() {
                const today = new Date().getDay();
                if (today === 0 || today === 6) return; // Skip update on weekends

                priceElements.forEach(item => {
                    const element = document.querySelector(item.selector);
                    if (!element) return;

                    // Handle high/low specially if needed (for pairs like "100 / 105")
                    if (item.selector.includes("high-low") || item.selector.includes("inr-gram-pair")) {
                        const parts = element.innerText.split("/");
                        if (parts.length === 2) {
                            let oldLow = parseFloat(parts[0].trim()) || 100;
                            let oldHigh = parseFloat(parts[1].trim()) || 100;

                            // Simulate new prices
                            const newLow = (oldLow + (Math.random() * 2 - 1)).toFixed(2);
                            const newHigh = (oldHigh + (Math.random() * 2 - 1)).toFixed(2);

                            // Update element
                            element.innerText = `${newLow} / ${newHigh}`;

                            // Coloring logic (based on low price)
                            if (parseFloat(newLow) > oldLow) {
                                element.style.color = "green";
                            } else if (parseFloat(newLow) < oldLow) {
                                element.style.color = "red";
                            } else {
                                element.style.color = "";
                            }
                            return;
                        }
                    }

                    // Normal price update for single values
                    let oldPrice = item.value;
                    let newPrice = (oldPrice + (Math.random() * 2 - 1)).toFixed(2); // Random price up/down

                    // Update price text
                    element.innerText = newPrice;

                    // Apply color change
                    if (parseFloat(newPrice) > oldPrice) {
                        element.style.color = "green";
                    } else if (parseFloat(newPrice) < oldPrice) {
                        element.style.color = "red";
                    } else {
                        element.style.color = "";
                    }

                    // Store new price
                    item.value = parseFloat(newPrice);
                });
            }

            // Start updating every 3 seconds
            setInterval(updatePrices, 3000);
        });
    </script>

    {{-- <script>
        document.addEventListener("DOMContentLoaded", function() {

            // Initial prices storage (you can set them to match initial values from your backend if needed)
            let previousPrices = [];

            function initializePrices() {
                // Initialize the prices from the current HTML
                const priceElements = document.querySelectorAll('.e');
                priceElements.forEach((element, index) => {
                    previousPrices[index] = parseFloat(element.innerText.replace(/[^0-9.]/g, '')) ||
                    100; // fallback to 100 if empty
                });
            }

            function updatePrices() {
                const priceElements = document.querySelectorAll('.e');

                priceElements.forEach((element, index) => {
                    const oldPrice = previousPrices[index];

                    // Simulate price change (up/down randomly)
                    const change = (Math.random() * 2 - 1).toFixed(2); // Random change between -1 to +1
                    const newPrice = (oldPrice + parseFloat(change)).toFixed(2);

                    // Update text with new price
                    element.innerText = newPrice;

                    // Compare old vs new price and set color
                    if (parseFloat(newPrice) > oldPrice) {
                        element.style.color = "green";
                    } else if (parseFloat(newPrice) < oldPrice) {
                        element.style.color = "red";
                    } else {
                        element.style.color = ""; // reset color if no change
                    }

                    // Store new price for next check
                    previousPrices[index] = parseFloat(newPrice);
                });
            }

            // Run initial setup to read current prices
            initializePrices();

            // Run the update function every 3 seconds
            setInterval(updatePrices, 3000);
        });
    </script> --}}

{{-- <script>
        function clock() {
            let hours = document.getElementById('hours');
            let minutes = document.getElementById('minutes');
            let period = document.getElementById('period');
            let seconds = document.getElementById('seconds');

            let d = new Date();

            let h = d.getHours();
            let m = d.getMinutes();
            let s = d.getSeconds();



            let ampm = h >= 12 ? "PM" : "AM";

            if (h > 12) {
                h = h - 12;
            }

            h = (h < 10) ? "0" + h : h;
            m = (m < 10) ? "0" + m : m;
            s = (s < 10) ? "0" + s : s;

            hours.innerHTML = h;
            minutes.innerHTML = m;
            seconds.innerHTML = s;
            period.innerHTML = ampm;
        };
        setInterval(clock, 1000);
    </script>
@endsection --}}



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Live Rate | Shristi Jewellers</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
        }

        .marquee-gold {
            background: linear-gradient(90deg, #FFD700, #D4AF37, #FFD700);
            color: #000;
            font-weight: 600;
        }

        .marquee-silver {
            background: linear-gradient(90deg, #C0C0C0, #E5E4E2, #C0C0C0);
            color: #000;
            font-weight: 600;
        }

        .gold-card {
            background: linear-gradient(135deg, #FFD700, #D4AF37);
            box-shadow: 0 4px 15px rgba(212, 175, 55, 0.3);
        }

        .silver-card {
            background: linear-gradient(135deg, #E5E4E2, #C0C0C0);
            box-shadow: 0 4px 15px rgba(192, 192, 192, 0.3);
        }

        .rate-change-up {
            animation: pulseGreen 2s infinite;
        }

        .rate-change-down {
            animation: pulseRed 2s infinite;
        }

        @keyframes pulseGreen {
            0% {
                box-shadow: 0 0 0 0 rgba(0, 255, 0, 0.4);
            }

            70% {
                box-shadow: 0 0 0 10px rgba(0, 255, 0, 0);
            }

            100% {
                box-shadow: 0 0 0 0 rgba(0, 255, 0, 0);
            }
        }

        @keyframes pulseRed {
            0% {
                box-shadow: 0 0 0 0 rgba(255, 0, 0, 0.4);
            }

            70% {
                box-shadow: 0 0 0 10px rgba(255, 0, 0, 0);
            }

            100% {
                box-shadow: 0 0 0 0 rgba(255, 0, 0, 0);
            }
        }

        .header-glow {
            text-shadow: 0 0 10px rgba(255, 215, 0, 0.7);
        }
    </style>
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
        integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Poppins:wght@300;400;500;600;700&display=swap');

    body {
        font-family: 'Poppins', sans-serif;
        background: linear-gradient(135deg, #f5f7fa 0%, #e4e8f0 100%);
    }

    .logo-text {
        font-family: 'Playfair Display', serif;
    }

    .gold-card {
        transition: all 0.3s ease;
    }

    .gold-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
    }

    .gold-gradient {
        background: linear-gradient(135deg, #F6B030 0%, #FAEEB1 100%);
    }

    .silver-gradient {
        background: linear-gradient(135deg, #E0E0E0 0%, #BDBDBD 100%);
    }

    .card-shadow {
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
    }

    .custom-input:focus {
        border-color: #FFD700;
        box-shadow: 0 0 0 3px rgba(255, 215, 0, 0.3);
    }

    .animate-pulse-slow {
        animation: pulse 3s cubic-bezier(0.4, 0, 0.6, 1) infinite;
    }

    @keyframes pulse {

        0%,
        100% {
            opacity: 1;
        }

        50% {
            opacity: 0.7;
        }
    }

    .price-tag {
        position: relative;
        display: inline-block;
        padding: 0.5rem 1rem;
        background: linear-gradient(45deg, #FFD700, #FFC107);
        color: #000;
        border-radius: 0.5rem;
        font-weight: bold;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
    }

    .status-indicator::before {
        content: '';
        display: inline-block;
        width: 8px;
        height: 8px;
        background-color: #10B981;
        border-radius: 50%;
        margin-right: 8px;
        animation: blink 1.5s infinite;
    }

    @keyframes blink {

        0%,
        100% {
            opacity: 1;
        }

        50% {
            opacity: 0.4;
        }
    }
</style>

<body class="bg-gray-50">
    {{-- @extends('frontLayouts.main', ['title' => 'Live Rate'])
@section('content') --}}

    <!-- Header with Logo and Live Clock -->
    <!-- Header with Gradient and Live Clock -->
    <header class="bg-gradient-to-r from-amber-500 via-[#FAF3BC] to-amber-500 py-4 shadow-md">
        {{-- <div class="container mx-auto px-4">
        <div class="flex flex-col md:flex-row items-center justify-between gap-4">
            
            <!-- Branding -->
            <div class="text-center md:text-left">
                <h1 class="text-3xl font-extrabold text-black leading-tight">Shristi Jewellers</h1>
                <p class="text-yellow-800 text-sm md:text-base">Trusted Since 1985</p>
            </div>
            
            <!-- Live Clock Section -->
            <div class="bg-black/20 px-6 py-3 rounded-xl shadow-inner">
                <div class="flex flex-col items-center">
                    <span class="text-sm text-black font-semibold">Live Update</span>
                    <div id="live-clock" class="flex items-center space-x-1 mt-1">
                        <span id="hours" class="text-2xl font-mono font-bold text-black">00</span>
                        <span class="text-xl text-black">:</span>
                        <span id="minutes" class="text-2xl font-mono font-bold text-black">00</span>
                        <span class="text-xl text-black">:</span>
                        <span id="seconds" class="text-2xl font-mono font-bold text-black">00</span>
                        <span id="period" class="text-lg text-black ml-1">AM</span>
                    </div>
                </div>
            </div>

        </div>
    </div> --}}
        <!-- Header -->
        <div class="mb-10 text-center">
            <div class="flex items-center justify-center mb-3">
                <img src="https://cdn.pixabay.com/photo/2017/01/08/21/58/golden-swing-1964101_1280.png" alt="Logo"
                    class="h-16 w-16 rounded-full shadow-lg">
            </div>
            <h1 class="logo-text text-4xl md:text-5xl font-bold text-gray-800 mb-2">
                <span class="bg-clip-text text-transparent bg-black">Shristi Jewellers</span>
            </h1>
            <p class="text-gray-800 font-light text-lg">Premium Gold & Silver Since 1975</p>
            <div class="flex justify-center mt-4">
                <span
                    class="status-indicator inline-flex items-center text-sm text-green-800 font-medium bg-green-100 px-3 py-1 rounded-full">
                    Live Rates Updated <span id="update-time" class="ml-1 font-semibold">May 13, 2025, 10:30 AM</span>
                </span>
            </div>
        </div>

    </header>


    <!-- Top Marquee -->
    <div class="bg-yellow-700 text-yellow-100 py-2 overflow-hidden shadow-sm">
        <div class="container mx-auto px-4">
            <marquee class="text-sm md:text-base font-medium">
                विशेष ~ आपकी सेवा में हमने एक नई कड़ी और जोड़ दी है सोने के 20k/ 18K Hallmark जेवर वा चांदी की ज्वेलरी
                पायल
                मूर्ति बर्तन सिक्के संपूर्ण रेंज एवं विशाल संग्रह के साथ ( बहुत ही उचित मूल्य ) पर उपलब्ध हैं हमेशा की
                तरह आपके
                साथ और सहयोग की कामना करते हैं | Working Hours: 10:00 AM - 08:00 PM
            </marquee>
        </div>
    </div>

    <div id="divHeader" class="overflow-x-auto rounded-2xl shadow-lg bg-white dark:bg-gray-900 mt-6 mx-4">
        <table class="min-w-full text-sm text-gray-800 dark:text-gray-200">
            <thead
                class="bg-gradient-to-r from-amber-600 via-[#FAF3BC] to-amber-600 text-black dark:text-gray-900 border-b border-amber-700">
                <tr>
                    <th scope="col"
                        class="px-6 py-5 text-left font-semibold tracking-wide uppercase whitespace-nowrap">
                        <span class="block">📦 Product</span>
                    </th>
                    <th scope="col"
                        class="px-6 py-5 text-center font-semibold tracking-wide uppercase whitespace-nowrap">
                        <span class="block">💎 Carat</span>
                    </th>
                    <th scope="col"
                        class="px-6 py-5 text-center font-semibold tracking-wide uppercase whitespace-nowrap">
                        <span class="block">💰 Price</span>
                    </th>
                    <th scope="col"
                        class="px-6 py-5 text-center font-semibold tracking-wide uppercase whitespace-nowrap">
                        <span class="block">📦 Quantity</span>
                    </th>
                </tr>
            </thead>
        </table>
    </div>


    <!-- Main Content Container -->



    <div class="container mx-auto px-4">

        <div class="flex flex-col lg:flex-row gap-8">
            <!-- Left Side - Product Rates -->
            <div class="lg:w-2/3 mt-4">
                <!-- Gold Rate Cards -->
                <div class="mb-6">
                    <h2 class="text-2xl font-semibold text-gray-800 mb-6 flex items-center">
                        <i class="fas fa-coins text-yellow-500 mr-3"></i>
                        Gold Rates
                        <span class="text-sm font-normal text-gray-500 ml-2">(Per Gram)</span>
                    </h2>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <!-- Gold 22K Card -->
                        <div class="rounded-2xl overflow-hidden card-shadow bg-white border-2 border-yellow-400">
                            <div class="gold-gradient p-4">
                                <div class="flex justify-between items-center">
                                    <h3 class="text-xl font-bold text-gray-900">Gold 22K</h3>
                                    <span class="bg-white text-gray-900 text-xs rounded-full px-2 py-1 font-semibold">
                                        Hallmark
                                    </span>
                                </div>
                            </div>
                            <div class="p-5 text-center">
                                <div class="text-3xl font-bold text-yellow-600 mb-3" id="22kGold">₹5,250</div>
                                <div class="flex items-center justify-center">
                                    <input type="number" min="1" value="1"
                                        class="custom-input w-24 px-3 py-2 border-2 border-gray-300 rounded-l-lg text-center focus:outline-none"
                                        onchange="updatePrice('22kGold', this.value)">
                                    <span
                                        class="bg-gray-100 px-4 py-2 text-gray-700 rounded-r-lg border-t-2 border-r-2 border-b-2 border-gray-300">gm</span>
                                </div>
                                <div class="mt-4 text-sm text-gray-500">
                                    <i class="fas fa-check-circle text-green-500 mr-1"></i> Premium Quality
                                </div>
                            </div>
                        </div>

                        <!-- Gold 20K Card -->
                        <div class=" rounded-2xl overflow-hidden card-shadow bg-white border-2 border-yellow-400">
                            <div class="gold-gradient p-4">
                                <div class="flex justify-between items-center">
                                    <h3 class="text-xl font-bold text-gray-900">Gold 20K</h3>
                                    <span class="bg-white text-gray-900 text-xs rounded-full px-2 py-1 font-semibold">
                                        Premium
                                    </span>
                                </div>
                            </div>
                            <div class="p-5 text-center">
                                <div class="text-3xl font-bold text-yellow-600 mb-3" id="20kGold">₹4,850</div>
                                <div class="flex items-center justify-center">
                                    <input type="number" min="1" value="1"
                                        class="custom-input w-24 px-3 py-2 border-2 border-gray-300 rounded-l-lg text-center focus:outline-none"
                                        onchange="updatePrice('20kGold', this.value)">
                                    <span
                                        class="bg-gray-100 px-4 py-2 text-gray-700 rounded-r-lg border-t-2 border-r-2 border-b-2 border-gray-300">gm</span>
                                </div>
                                <div class="mt-4 text-sm text-gray-500">
                                    <i class="fas fa-check-circle text-green-500 mr-1"></i> Standard Quality
                                </div>
                            </div>
                        </div>

                        <!-- Gold 18K Card -->
                        <div class="rounded-2xl overflow-hidden card-shadow bg-white border-2 border-yellow-400">
                            <div class="gold-gradient p-4">
                                <div class="flex justify-between items-center">
                                    <h3 class="text-xl font-bold text-gray-900">Gold 18K</h3>
                                    <span class="bg-white text-gray-900 text-xs rounded-full px-2 py-1 font-semibold">
                                        Jewelry
                                    </span>
                                </div>
                            </div>
                            <div class="p-5 text-center">
                                <div class="text-3xl font-bold text-yellow-600 mb-3" id="18kGold">₹4,350</div>
                                <div class="flex items-center justify-center">
                                    <input type="number" min="1" value="1"
                                        class="custom-input w-24 px-3 py-2 border-2 border-gray-300 rounded-l-lg text-center focus:outline-none"
                                        onchange="updatePrice('18kGold', this.value)">
                                    <span
                                        class="bg-gray-100 px-4 py-2 text-gray-700 rounded-r-lg border-t-2 border-r-2 border-b-2 border-gray-300">gm</span>
                                </div>
                                <div class="mt-4 text-sm text-gray-500">
                                    <i class="fas fa-check-circle text-green-500 mr-1"></i> Jewelry Grade
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Silver Rate Card -->
                <div class="mb-10">
                    <h2 class="text-2xl font-semibold text-gray-800 mb-6 flex items-center">
                        <i class="fas fa-medal text-gray-400 mr-3"></i>
                        Silver Rates
                        <span class="text-sm font-normal text-gray-500 ml-2">(Per Gram)</span>
                    </h2>

                    <div class="mx-auto md:w-1/3">
                        <div class="rounded-2xl overflow-hidden card-shadow bg-white border-2 border-gray-300">
                            <div class="silver-gradient p-4">
                                <div class="flex justify-between items-center">
                                    <h3 class="text-xl font-bold text-gray-900">Silver 24K</h3>
                                    <span class="bg-white text-gray-900 text-xs rounded-full px-2 py-1 font-semibold">
                                        Pure
                                    </span>
                                </div>
                            </div>
                            <div class="p-5 text-center">
                                <div class="text-3xl font-bold text-gray-700 mb-3" id="24Silver">₹75.50</div>
                                <div class="flex items-center justify-center">
                                    <input type="number" min="1" value="1"
                                        class="custom-input w-24 px-3 py-2 border-2 border-gray-300 rounded-l-lg text-center focus:outline-none"
                                        onchange="updatePrice('24Silver', this.value)">
                                    <span
                                        class="bg-gray-100 px-4 py-2 text-gray-700 rounded-r-lg border-t-2 border-r-2 border-b-2 border-gray-300">gm</span>
                                </div>
                                <div class="mt-4 text-sm text-gray-500">
                                    <i class="fas fa-check-circle text-green-500 mr-1"></i> 99.9% Pure Silver
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Rate Chart -->
                <div class="bg-white rounded-2xl overflow-hidden card-shadow mb-8">
                    <div class="bg-gradient-to-r from-amber-500 via-[#FAF3BC] to-amber-500 p-5">
                        <h2 class="text-2xl font-bold text-black">Historical Rate Trend</h2>
                        <p class="text-gray-800 text-sm">Last 7 days price movement</p>
                    </div>
                    <div class="p-5">
                        <table class="min-w-full table-auto border-collapse">
                            <thead>
                                <tr class="bg-amber-500 text-white">
                                    <th class="px-4 py-2 text-left">Date</th>
                                    <th class="px-4 py-2 text-left">Price</th>
                                    <th class="px-4 py-2 text-left">Change</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-b">
                                    <td class="px-4 py-2 text-gray-800">May 7, 2025</td>
                                    <td class="px-4 py-2 text-gray-800">$1,500</td>
                                    <td class="px-4 py-2 text-gray-800">+0.5%</td>
                                </tr>
                                <tr class="border-b">
                                    <td class="px-4 py-2 text-gray-800">May 6, 2025</td>
                                    <td class="px-4 py-2 text-gray-800">$1,495</td>
                                    <td class="px-4 py-2 text-gray-800">-0.3%</td>
                                </tr>
                                <tr class="border-b">
                                    <td class="px-4 py-2 text-gray-800">May 5, 2025</td>
                                    <td class="px-4 py-2 text-gray-800">$1,490</td>
                                    <td class="px-4 py-2 text-gray-800">+0.2%</td>
                                </tr>
                                <tr class="border-b">
                                    <td class="px-4 py-2 text-gray-800">May 4, 2025</td>
                                    <td class="px-4 py-2 text-gray-800">$1,485</td>
                                    <td class="px-4 py-2 text-gray-800">+0.1%</td>
                                </tr>
                                <tr class="border-b">
                                    <td class="px-4 py-2 text-gray-800">May 3, 2025</td>
                                    <td class="px-4 py-2 text-gray-800">$1,480</td>
                                    <td class="px-4 py-2 text-gray-800">-0.2%</td>
                                </tr>
                                <tr class="border-b">
                                    <td class="px-4 py-2 text-gray-800">May 2, 2025</td>
                                    <td class="px-4 py-2 text-gray-800">$1,485</td>
                                    <td class="px-4 py-2 text-gray-800">+0.1%</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 text-gray-800">May 1, 2025</td>
                                    <td class="px-4 py-2 text-gray-800">$1,480</td>
                                    <td class="px-4 py-2 text-gray-800">-0.1%</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>


                <!-- Disclaimer -->
                <div class="bg-yellow-50 border-l-4 border-yellow-400 p-5 rounded-r-lg mb-8">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <i class="fas fa-exclamation-triangle text-yellow-500 text-lg"></i>
                        </div>
                        <div class="ml-3">
                            <p class="text-sm text-yellow-700">
                                <span class="font-bold">Disclaimer:</span> Shristi Jewellers Live Rates provides Gold &
                                Silver prices obtained from various sources believed to be reliable, but we do not
                                guarantee their accuracy. Our gold & silver price data are provided without warranty or
                                claim of reliability. All rates are indicative and subject to change without prior
                                notice.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Side - Market Data -->
            <div class="lg:w-1/3 space-y-6 md:mt-12">
                <!-- Market Spot Prices Card -->
                <div class="bg-white rounded-2xl overflow-hidden card-shadow">
                    <div class="bg-gradient-to-r from-amber-500 via-[#FAF3BC] to-amber-500 p-5 rounded-lg">
                        <h2 class="text-2xl font-bold text-black flex items-center">
                            <i class="fas fa-globe-asia mr-2"></i> Market Spot Prices
                        </h2>
                        <p class="text-amber-800 text-sm">International market rates</p>
                    </div>

                    <div class="divide-y divide-gray-200">
                        <!-- Gold -->
                        <div class="p-5 hover:bg-gray-50 transition duration-300">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-3">
                                    <div class="bg-yellow-100 p-3 rounded-full">
                                        <i class="fas fa-star text-yellow-600"></i>
                                    </div>
                                    <h3 class="text-gray-800 font-semibold">Gold (Ounce)</h3>
                                </div>
                                <div class="text-right">
                                    <div class="text-xl font-bold text-gray-900" id="gold-bid">$1,950.25</div>
                                    <div class="flex gap-3 text-xs text-gray-500 mt-1">
                                        <div>BID: <span id="gold-bid-value" class="font-medium">$1,950.25</span></div>
                                        <div>ASK: <span id="gold-ask-value" class="font-medium">$1,951.75</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 text-sm">
                                <span class="font-medium text-gray-700">Range:</span>
                                <span id="gold-high-low" class="ml-1 text-gray-600">$1,945.50 / $1,955.80</span>
                            </div>
                        </div>

                        <!-- Silver -->
                        <div class="p-5 hover:bg-gray-50 transition duration-300">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-3">
                                    <div class="bg-gray-100 p-3 rounded-full">
                                        <i class="fas fa-moon text-gray-600"></i>
                                    </div>
                                    <h3 class="text-gray-800 font-semibold">Silver (Ounce)</h3>
                                </div>
                                <div class="text-right">
                                    <div class="text-xl font-bold text-gray-900" id="silver-bid">$23.45</div>
                                    <div class="flex gap-3 text-xs text-gray-500 mt-1">
                                        <div>BID: <span id="silver-bid-value" class="font-medium">$23.42</span></div>
                                        <div>ASK: <span id="silver-ask-value" class="font-medium">$23.48</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 text-sm">
                                <span class="font-medium text-gray-700">Range:</span>
                                <span id="silver-high-low" class="ml-1 text-gray-600">$23.20 / $23.60</span>
                            </div>
                        </div>

                        <!-- Currency -->
                        <div class="p-5 hover:bg-gray-50 transition duration-300">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-3">
                                    <div class="bg-blue-100 p-3 rounded-full">
                                        <i class="fas fa-rupee-sign text-blue-600"></i>
                                    </div>
                                    <h3 class="text-gray-800 font-semibold">Currency Rates</h3>
                                </div>
                                <div class="text-right">
                                    <div class="text-xl font-bold text-gray-900" id="inr-usd">₹82.45</div>
                                    <div class="text-xs text-gray-500 mt-1">USD/INR</div>
                                </div>
                            </div>
                            <div class="mt-3 text-sm">
                                <span class="font-medium text-gray-700">Gold Gram (USD):</span>
                                <span id="gram-usd" class="ml-1 text-gray-600">$62.35</span>
                            </div>
                            <div class="text-sm">
                                <span class="font-medium text-gray-700">Pair:</span>
                                <span id="inr-gram-pair" class="ml-1 text-gray-600">₹82.45 / $62.35</span>
                            </div>
                        </div>
                    </div>

                    <!-- Market Status -->
                    <div class="bg-gradient-to-r from-green-50 to-green-100 p-4 border-t border-green-200">
                        <div class="flex items-center justify-between">
                            <div>
                                <h3 class="text-sm font-semibold text-gray-900">Market Status</h3>
                                <p class="text-xs text-gray-600">Live updates every 3 seconds</p>
                            </div>
                            <span
                                class="inline-flex items-center px-3 py-1 rounded-full bg-green-100 text-green-700 text-sm font-medium animate-pulse-slow">
                                <i class="fas fa-circle text-green-500 text-xs mr-1.5"></i>
                                Active
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Contact Card -->
                <div class="bg-white rounded-2xl overflow-hidden card-shadow">
                    <div class="bg-gradient-to-r from-amber-500 via-[#FAF3BC] to-amber-500 p-5">
                        <h2 class="text-2xl font-bold text-black flex items-center">
                            <i class="fas fa-address-card mr-2"></i> Contact Us
                        </h2>
                    </div>
                    <div class="p-5 space-y-5">
                        <div class="flex items-start gap-4">
                            <div class="bg-amber-100 p-3 rounded-full">
                                <i class="fas fa-phone-alt text-amber-600"></i>
                            </div>
                            <div>
                                <h3 class="text-gray-900 font-semibold">Phone</h3>
                                <p class="text-gray-600">+91 98765 43210</p>
                                <p class="text-xs text-gray-500 mt-1">Available Mon-Sat (10 AM - 7 PM)</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="bg-amber-100 p-3 rounded-full">
                                <i class="fas fa-envelope text-amber-600"></i>
                            </div>
                            <div>
                                <h3 class="text-gray-900 font-semibold">Email</h3>
                                <p class="text-gray-600">info@shristijewellers.com</p>
                                <p class="text-xs text-gray-500 mt-1">We respond within 24 hours</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="bg-amber-100 p-3 rounded-full">
                                <i class="fas fa-map-marker-alt text-amber-600"></i>
                            </div>
                            <div>
                                <h3 class="text-gray-900 font-semibold">Address</h3>
                                <p class="text-gray-600">123 Jewellery Street, Mumbai, India - 400001</p>
                                <p class="text-xs text-gray-500 mt-1">Visit our showroom</p>
                            </div>
                        </div>
                        <div class="pt-4">
                            <button
                                class="bg-gradient-to-r from-amber-500 via-[#FAF3BC] to-amber-500 text-black py-3 px-6 rounded-lg w-full font-medium hover:shadow-lg transition duration-300 flex items-center justify-center">
                                <i class="far fa-comment-dots mr-2"></i>
                                Contact Sales Team
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Social Media -->
                <div class="bg-white rounded-2xl overflow-hidden card-shadow p-5">
                    <h3 class="font-semibold text-gray-800 mb-4">Follow Us</h3>
                    <div class="flex justify-around">
                        <a href="#"
                            class="bg-blue-100 text-blue-600 p-3 rounded-full hover:bg-blue-600 hover:text-white transition duration-300">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#"
                            class="bg-pink-100 text-pink-600 p-3 rounded-full hover:bg-pink-600 hover:text-white transition duration-300">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#"
                            class="bg-sky-100 text-sky-600 p-3 rounded-full hover:bg-sky-600 hover:text-white transition duration-300">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#"
                            class="bg-red-100 text-red-600 p-3 rounded-full hover:bg-red-600 hover:text-white transition duration-300">
                            <i class="fab fa-youtube"></i>
                        </a>
                        <a href="#"
                            class="bg-green-100 text-green-600 p-3 rounded-full hover:bg-green-600 hover:text-white transition duration-300">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

       


    </div>

    <script>
        // Update price based on quantity
        function updatePrice(id, quantity) {
            // Base prices
            const basePrices = {
                '22kGold': 5250,
                '20kGold': 4850,
                '18kGold': 4350,
                '24Silver': 75.50
            };

            // Calculate and update the displayed price
            const basePrice = basePrices[id];
            const totalPrice = (basePrice * quantity).toLocaleString('en-IN', {
                maximumFractionDigits: 2,
                minimumFractionDigits: 2
            });

            // Update the displayed price
            document.getElementById(id).innerText = `₹${totalPrice}`;
        }

        // Current time for "last updated" field
        function updateCurrentTime() {
            const now = new Date();
            const options = {
                month: 'short',
                day: 'numeric',
                year: 'numeric',
                hour: '2-digit',
                minute: '2-digit',
                hour12: true
            };
            document.getElementById('update-time').innerText = now.toLocaleDateString('en-US', options);
        }

        // Call the function once when the page loads
        updateCurrentTime();

        // Simulating live market data updates
        function simulateMarketUpdates() {
            // Gold bid/ask
            let goldBase = 1950.25 + (Math.random() * 5 - 2.5);
            document.getElementById('gold-bid').innerText = `$${goldBase.toFixed(2)}`;
            document.getElementById('gold-bid-value').innerText = `$${goldBase.toFixed(2)}`;
            document.getElementById('gold-ask-value').innerText = `$${(goldBase + 1.5).toFixed(2)}`;

            // Gold range
            let goldLow = goldBase - (Math.random() * 5);
            let goldHigh = goldBase + (Math.random() * 5);
            document.getElementById('gold-high-low').innerText = `$${goldLow.toFixed(2)} / $${goldHigh.toFixed(2)}`;

            // Silver bid/ask
            let silverBase = 23.45 + (Math.random() * 0.4 - 0.2);
            document.getElementById('silver-bid').innerText = `$${silverBase.toFixed(2)}`;
            document.getElementById('silver-bid-value').innerText = `$${silverBase.toFixed(2)}`;
            document.getElementById('silver-ask-value').innerText = `$${(silverBase + 0.06).toFixed(2)}`;

            // Silver range
            let silverLow = silverBase - (Math.random() * 0.4);
            let silverHigh = silverBase + (Math.random() * 0.4);
            document.getElementById('silver-high-low').innerText = `$${silverLow.toFixed(2)} / $${silverHigh.toFixed(2)}`;

            // Update time
            updateCurrentTime();
        }

        // Run the simulation every 5 seconds
        setInterval(simulateMarketUpdates, 5000);
    </script>

    <!-- Footer Marquee -->
    <div class="bg-gray-800 text-yellow-100 py-2 overflow-hidden mt-4">
        <div class="container mx-auto px-4">
            <marquee class="text-sm md:text-base">
                Shristi Jewellers Live Rates provides Gold &amp; Silver prices obtained from various sources believed to
                be reliable, but we do not guarantee their accuracy. Our gold &amp; silver price data are provided
                without warranty or claim of reliability.
            </marquee>
        </div>
    </div>


    <!-- Footer -->
    <footer class="bg-white pt-16 pb-12 border-t border-gray-100 shadow-inner">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Top Section with Logo and Links -->
            <div class="grid grid-cols-1 md:grid-cols-12 gap-8 mb-12">
                <!-- Logo Section -->
                <div class="md:col-span-4 flex flex-col items-center md:items-start">
                    <div class="flex items-center mb-4">
                        <div class="relative">
                            <div class="absolute inset-0 gold-gradient rounded-full blur-sm opacity-70 transform scale-110"></div>
                            <img src="https://cdn.pixabay.com/photo/2017/01/08/21/58/golden-swing-1964101_1280.png"
                                alt="Shristi Jewellers Logo"
                                class="h-20 w-20 relative rounded-full object-cover border-2 border-yellow-300 shadow-lg transform transition-transform duration-500 hover:scale-105 z-10">
                        </div>
                        <div class="ml-4 hidden md:block">
                            <h2 class="font-playfair text-2xl font-bold text-gray-800 tracking-wide">Shristi <span class="text-yellow-600">Jewellers</span></h2>
                            <p class="text-sm text-gray-500 italic mt-1">Crafting Elegance in Every Piece</p>
                        </div>
                    </div>
                    <div class="md:hidden text-center mt-2">
                        <h2 class="font-playfair text-2xl font-bold text-gray-800 tracking-wide">Shristi <span class="text-yellow-600">Jewellers</span></h2>
                        <p class="text-sm text-gray-500 italic mt-1">Crafting Elegance in Every Piece</p>
                    </div>
                    <p class="text-gray-500 text-sm mt-4 hidden md:block">Celebrating the art of fine jewellery since 1995. Each piece tells a story of craftsmanship and heritage.</p>
                </div>
                
                <!-- Quick Links -->
                <div class="md:col-span-2 text-center md:text-left">
                    <h3 class="font-playfair text-gray-800 font-semibold text-lg mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-500 hover:text-yellow-600 transition duration-300 footer-link-hover">About Us</a></li>
                        <li><a href="#" class="text-gray-500 hover:text-yellow-600 transition duration-300 footer-link-hover">Collections</a></li>
                        <li><a href="#" class="text-gray-500 hover:text-yellow-600 transition duration-300 footer-link-hover">Custom Design</a></li>
                        <li><a href="#" class="text-gray-500 hover:text-yellow-600 transition duration-300 footer-link-hover">Care Guide</a></li>
                    </ul>
                </div>
                
                <!-- Customer Service -->
                <div class="md:col-span-2 text-center md:text-left">
                    <h3 class="font-playfair text-gray-800 font-semibold text-lg mb-4">Customer Care</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-500 hover:text-yellow-600 transition duration-300 footer-link-hover">Contact Us</a></li>
                        <li><a href="#" class="text-gray-500 hover:text-yellow-600 transition duration-300 footer-link-hover">FAQs</a></li>
                        <li><a href="#" class="text-gray-500 hover:text-yellow-600 transition duration-300 footer-link-hover">Shipping</a></li>
                        <li><a href="#" class="text-gray-500 hover:text-yellow-600 transition duration-300 footer-link-hover">Returns</a></li>
                    </ul>
                </div>
                
                <!-- Legal -->
                <div class="md:col-span-2 text-center md:text-left">
                    <h3 class="font-playfair text-gray-800 font-semibold text-lg mb-4">Legal</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-500 hover:text-yellow-600 transition duration-300 footer-link-hover">Privacy Policy</a></li>
                        <li><a href="#" class="text-gray-500 hover:text-yellow-600 transition duration-300 footer-link-hover">Terms of Service</a></li>
                        <li><a href="#" class="text-gray-500 hover:text-yellow-600 transition duration-300 footer-link-hover">Refund Policy</a></li>
                        <li><a href="#" class="text-gray-500 hover:text-yellow-600 transition duration-300 footer-link-hover">Cookie Policy</a></li>
                    </ul>
                </div>
                
                <!-- Newsletter -->
                <div class="md:col-span-2 text-center md:text-left">
                    <h3 class="font-playfair text-gray-800 font-semibold text-lg mb-4">Stay Connected</h3>
                    <p class="text-sm text-gray-500 mb-4">Subscribe for exclusive updates and offers</p>
                    <div class="relative">
                        <input type="email" placeholder="Your email" class="w-full px-4 py-2 text-sm border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:border-transparent">
                        <button class="absolute right-1 top-1 bg-yellow-500 text-white px-3 py-1 rounded-md text-xs font-medium hover:bg-yellow-600 transition duration-300">Join</button>
                    </div>
                </div>
            </div>
            
            <!-- Middle Divider -->
            <div class="flex items-center justify-center my-8">
                <div class="h-px w-full max-w-xs bg-gray-200"></div>
                <div class="gold-gradient h-1 w-16 mx-4 rounded"></div>
                <div class="h-px w-full max-w-xs bg-gray-200"></div>
            </div>
            
            <!-- Social Media and Copyright -->
            <div class="flex flex-col md:flex-row justify-between items-center">
                <!-- Social Media Links -->
                <div class="flex space-x-4 mb-4 md:mb-0">
                    <a href="#" class="h-10 w-10 rounded-full bg-gray-100 flex items-center justify-center text-gray-600 hover:bg-yellow-50 hover:text-yellow-600 transition duration-300 group">
                        <i class="fab fa-facebook-f group-hover:scale-110 transition-transform duration-300"></i>
                    </a>
                    <a href="#" class="h-10 w-10 rounded-full bg-gray-100 flex items-center justify-center text-gray-600 hover:bg-yellow-50 hover:text-yellow-600 transition duration-300 group">
                        <i class="fab fa-instagram group-hover:scale-110 transition-transform duration-300"></i>
                    </a>
                    <a href="#" class="h-10 w-10 rounded-full bg-gray-100 flex items-center justify-center text-gray-600 hover:bg-yellow-50 hover:text-yellow-600 transition duration-300 group">
                        <i class="fab fa-pinterest-p group-hover:scale-110 transition-transform duration-300"></i>
                    </a>
                    <a href="#" class="h-10 w-10 rounded-full bg-gray-100 flex items-center justify-center text-gray-600 hover:bg-yellow-50 hover:text-yellow-600 transition duration-300 group">
                        <i class="fab fa-twitter group-hover:scale-110 transition-transform duration-300"></i>
                    </a>
                </div>
                
                <!-- Copyright -->
                <div class="text-center md:text-right">
                    <p class="text-sm text-gray-500">&copy; 2025 <span class="font-medium text-gray-700">Shristi Jewellers</span>. All rights reserved.</p>
                    <p class="text-xs text-gray-400 mt-1">Designed with <span class="text-red-400">&hearts;</span> for elegant experiences</p>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Live Clock
        function updateClock() {
            const now = new Date();
            let hours = now.getHours();
            const minutes = String(now.getMinutes()).padStart(2, '0');
            const seconds = String(now.getSeconds()).padStart(2, '0');
            const ampm = hours >= 12 ? 'PM' : 'AM';

            hours = hours % 12;
            hours = hours ? hours : 12; // the hour '0' should be '12'
            hours = String(hours).padStart(2, '0');

            document.getElementById('hours').textContent = hours;
            document.getElementById('minutes').textContent = minutes;
            document.getElementById('seconds').textContent = seconds;
            document.getElementById('period').textContent = ampm;

            // Update last updated time
            const options = {
                hour: '2-digit',
                minute: '2-digit',
                second: '2-digit',
                day: 'numeric',
                month: 'short',
                year: 'numeric'
            };
            document.getElementById('last-updated').textContent = now.toLocaleTimeString('en-IN', options);
        }

        setInterval(updateClock, 1000);
        updateClock();

        // Price Update Functionality
        function updatePrice(elementId, grams) {
            const basePrices = {
                '22kGold': 5250,
                '20kGold': 4850,
                '18kGold': 4350,
                '24Silver': 75.50
            };

            const element = document.getElementById(elementId);
            const total = (basePrices[elementId] * grams).toFixed(2);
            element.textContent = `₹${total} (${grams}gm)`;
        }

        // Simulate Live Price Updates
        function simulateLivePrices() {
            const today = new Date().getDay();
            if (today === 0 || today === 6) return; // Skip on weekends

            // Product prices
            const productIds = ['22kGold', '20kGold', '18kGold', '24Silver'];
            productIds.forEach(id => {
                const element = document.getElementById(id);
                if (!element) return;

                // Get current price (remove ₹ and /gm)
                let currentText = element.textContent;
                let currentPrice = parseFloat(currentText.replace(/[^0-9.]/g, '')) || 100;

                // Random price change (-2 to +2)
                const change = (Math.random() * 4 - 2).toFixed(2);
                const newPrice = (parseFloat(currentPrice) + parseFloat(change)).toFixed(2);

                // Update display
                element.textContent = `₹${newPrice}/gm`;

                // Color animation
                if (change > 0) {
                    element.classList.add('text-green-600');
                    element.classList.remove('text-red-600', 'text-yellow-700', 'text-gray-700');
                    setTimeout(() => {
                        element.classList.remove('text-green-600');
                        element.classList.add(id.includes('Silver') ? 'text-gray-700' : 'text-yellow-700');
                    }, 1000);
                } else if (change < 0) {
                    element.classList.add('text-red-600');
                    element.classList.remove('text-green-600', 'text-yellow-700', 'text-gray-700');
                    setTimeout(() => {
                        element.classList.remove('text-red-600');
                        element.classList.add(id.includes('Silver') ? 'text-gray-700' : 'text-yellow-700');
                    }, 1000);
                }
            });

            // Market data
            const marketData = {
                'gold-bid': {
                    base: 1950,
                    range: 5
                },
                'gold-ask': {
                    base: 1951,
                    range: 5
                },
                'silver-bid': {
                    base: 23.45,
                    range: 0.5
                },
                'silver-ask': {
                    base: 23.48,
                    range: 0.5
                },
                'inr-usd': {
                    base: 82.45,
                    range: 0.3
                },
                'gram-usd': {
                    base: 62.35,
                    range: 0.5
                }
            };

            Object.keys(marketData).forEach(id => {
                const element = document.getElementById(id);
                if (!element) return;

                const data = marketData[id];
                const change = (Math.random() * data.range * 2 - data.range).toFixed(2);
                const newValue = (parseFloat(data.base) + parseFloat(change)).toFixed(2);

                // Update display based on element type
                if (id.includes('bid') || id.includes('ask') || id.includes('usd')) {
                    element.textContent = `$${newValue}`;

                    // Also update the detailed bid/ask values
                    if (id === 'gold-bid') document.getElementById('gold-bid-value').textContent = `$${newValue}`;
                    if (id === 'gold-ask') document.getElementById('gold-ask-value').textContent = `$${newValue}`;
                    if (id === 'silver-bid') document.getElementById('silver-bid-value').textContent =
                        `$${newValue}`;
                    if (id === 'silver-ask') document.getElementById('silver-ask-value').textContent =
                        `$${newValue}`;
                }

                // Update high/low ranges
                if (id === 'gold-bid') {
                    const high = (parseFloat(data.base) + parseFloat(data.range)).toFixed(2);
                    const low = (parseFloat(data.base) - parseFloat(data.range)).toFixed(2);
                    document.getElementById('gold-high-low').textContent = `$${low} / $${high}`;
                }

                if (id === 'silver-bid') {
                    const high = (parseFloat(data.base) + parseFloat(data.range)).toFixed(2);
                    const low = (parseFloat(data.base) - parseFloat(data.range)).toFixed(2);
                    document.getElementById('silver-high-low').textContent = `$${low} / $${high}`;
                }

                // Update INR/Gram pair
                if (id === 'inr-usd' || id === 'gram-usd') {
                    const inr = document.getElementById('inr-usd').textContent.replace('$', '');
                    const gram = document.getElementById('gram-usd').textContent.replace('$', '');
                    document.getElementById('inr-gram-pair').textContent = `₹${inr} / $${gram}`;
                }
            });
        }

        // Run price updates every 3 seconds
        setInterval(simulateLivePrices, 3000);
        simulateLivePrices(); // Initial call
    </script>
    {{-- @endsection --}}

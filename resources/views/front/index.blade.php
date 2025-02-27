@extends('frontLayouts.main', ['title' => 'Live Rate'])
@section('content')
    <div class="text-center ">
        <p style="text-align: center; margin-top: 10px; margin-bottom: -10px; font-size: 26px;">
            Shristi Jewellers
        </p>
    </div>
    <div class="header-top-marquee">
        <div class="container-fluid">
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

            // Function to randomly decide increase or decrease (5 to 10 Rs only)
            function getRandomPriceChange() {
                return Math.floor(Math.random() * (10 - 5 + 1)) + 5;
            }

            // Update price logic — stays within ±10 Rs of actual price
            function updatePrices() {
                priceElements.forEach(item => {
                    const priceElement = document.getElementById(item.id);
                    if (!priceElement) return;

                    const priceChange = getRandomPriceChange();
                    const isIncrease = Math.random() > 0.5;

                    // Apply the price change (either add or subtract 5-10 Rs)
                    if (isIncrease) {
                        item.currentPrice += priceChange;
                    } else {
                        item.currentPrice -= priceChange;
                    }

                    // Constrain the price so it doesn't move more than ±10 Rs from the base price
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
                    const price = parseFloat(text.split('/')[0].replace(/[^0-9.]/g, '')) ||
                        100; // Handle high/low pairs
                    item.value = price;
                }
            });

            function updatePrices() {
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

    <script>
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
@endsection

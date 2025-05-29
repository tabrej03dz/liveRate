@extends('frontLayouts.main', ['title' => 'Live Rate'])
@section('content')

    <meta http-equiv="refresh" content="30">
    {{-- Header Section --}}
    <header class="bg-gradient-to-r from-amber-500 via-[#FAF3BC] to-amber-500 py-4 shadow-md">
        <div class="mb-10 text-center">
            <div class="flex items-center justify-center mb-3">
                <img src="{{ asset('asset/images/logo.png') }}" alt="Shristi Jewellers Logo"
                    class="h-16 w-16 rounded-full shadow-lg border border-black">
            </div>
            <h1 class="logo-text text-4xl md:text-5xl font-bold text-gray-800 mb-2">
                <span class="bg-clip-text text-transparent bg-black">Shristi Jewellers</span>
            </h1>
            <p class="text-gray-800 font-light text-lg">Premium Gold & Silver Since 1975</p>

            <!-- Live Rates Status Indicator -->
            <div class="flex justify-center mt-6">
                <div class="inline-flex items-center space-x-2 text-sm text-green-800 font-medium bg-green-100 px-4 py-1.5 rounded-full shadow-sm"
                    role="status" aria-live="polite">
                    <span class="w-2.5 h-2.5 bg-green-500 rounded-full animate-pulse"></span>
                    <span>
                        Live Rates Updated
                        <time id="update-time" datetime="{{ now()->toIso8601String() }}" class="font-semibold">
                            {{ now()->format('M d, Y, h:i A') }}
                        </time>
                    </span>
                </div>
            </div>
        </div>
    </header>

    <!-- Top Marquee -->
    <div class="bg-[#A16207] text-yellow-100 py-1 overflow-hidden shadow-sm">
        <div class="container mx-auto px-4">
            <marquee class="text-md md:text-base font-medium">
                विशेष ~ आपकी सेवा में हमने एक नई कड़ी और जोड़ दी है सोने के 20k/ 18K Hallmark जेवर वा चांदी की ज्वेलरी
                पायल मूर्ति बर्तन सिक्के संपूर्ण रेंज एवं विशाल संग्रह के साथ ( बहुत ही उचित मूल्य ) पर उपलब्ध हैं हमेशा की
                तरह आपके साथ और सहयोग की कामना करते हैं |
            </marquee>
        </div>
    </div>

    <!-- Main Content Container -->
    <div class="container mx-auto px-4">
        <div class="w-full mt-8">
            <!-- Left Column - Products -->
            <div class="lg:col-span-2">
                <div class="overflow-x-auto rounded-2xl shadow-lg bg-white dark:bg-gray-900">
                    <table class="min-w-full text-sm text-gray-800 dark:text-gray-200">
                        <thead
                            class="bg-gradient-to-r from-amber-600 via-[#FAF3BC] to-amber-600 text-black dark:text-gray-900 border-b border-amber-700">
                            <tr>
                                <th scope="col"
                                    class="px-6 py-5 text-left font-semibold tracking-wide uppercase whitespace-nowrap ">
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

                <!-- Gold Rate Cards -->
                <div class="mt-6">
                    <span class="text-2xl font-semibold text-gray-800 mb-6 flex items-center">
                        <i class="fas fa-coins text-yellow-500 mr-3"></i>
                        Gold Rates
                        <span class="text-sm font-normal text-gray-500 ml-2">(Per Gram)</span>
                    </span>

                    <!-- Grid container for cards -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <!-- Gold 22K Card -->
                        <div class="rounded-2xl overflow-hidden shadow-lg bg-white border-2 border-yellow-400">
                            <div class="bg-gradient-to-r from-amber-500 via-[#FAF3BC] to-amber-500 p-4">
                                <div class="flex justify-between items-center">
                                    <h3 class="text-xl font-bold text-gray-900">Gold 22K</h3>
                                    <span class="bg-white text-gray-900 text-xs rounded-full px-2 py-1 font-semibold">
                                        Hallmark
                                    </span>
                                </div>
                            </div>
                            <div class="p-5 text-center">
                                <div class="p-h ph product-rate border border-yellow-900 mb-4 text-center">
                                    @php
                                        $percent = $goldDiscount22k?->percent ?? 0;
                                        $basePrice = $prices->gram_in_inr;
                                        $caretWisePrice = $basePrice - ($basePrice * 8) / 100;
                                        $discount = ($caretWisePrice * $percent) / 100;
                                        $finalPrice =
                                            $goldDiscount22k?->type == 0
                                                ? $caretWisePrice - $discount
                                                : $caretWisePrice + $discount;
                                    @endphp
                                    <div class="mn-rate-cover">
                                        <span class="bgm e" id="22kGold">{{ round($finalPrice, 2) }}/gm</span>
                                    </div>
                                </div>

                                <div class="p-h ph product-rate">
                                    <input type="number" step="0.01" min="0.01" id="22kGoldInput"
                                        class="border border-yellow-600 rounded-xl py-2 px-4 w-full" name="gram"
                                        placeholder="Enter grams"
                                        oninput="
                                            let gram = parseFloat(this.value);
                                            let basePrice = {{ $prices->gram_in_inr }};
                                            let percent = {{ $percent }};
                                            let type = {{ $goldDiscount22k?->type ?? 0 }};
                                            let caretWisePrice = basePrice - (basePrice * 8 / 100);
                                            let price = caretWisePrice * (isNaN(gram) ? 1 : gram);
                                            let discount = price * percent / 100;
                                            let finalPrice = type == 0 ? price - discount : price + discount;
                                            let displayGram = isNaN(gram) ? 1 : gram;
                                            document.getElementById('22kGold').innerText = finalPrice.toFixed(2) + '/' + displayGram + 'gm';
                                        " />
                                </div>

                                <div class="mt-4 text-sm text-gray-500">
                                    <i class="fas fa-check-circle text-green-500 mr-1"></i> Premium Quality
                                </div>
                            </div>
                        </div>

                        <!-- Gold 20K Card -->
                        <div class="rounded-2xl overflow-hidden shadow-lg bg-white border-2 border-yellow-400">
                            <div class="bg-gradient-to-r from-amber-500 via-[#FAF3BC] to-amber-500 p-4">
                                <div class="flex justify-between items-center">
                                    <h3 class="text-xl font-bold text-gray-900">Gold 20K</h3>
                                    <span class="bg-white text-gray-900 text-xs rounded-full px-2 py-1 font-semibold">
                                        Premium
                                    </span>
                                </div>
                            </div>
                            <div class="p-5 text-center">
                                <div class="p-h ph product-rate border-b border-yellow-800 mb-4">
                                    @php
                                        $percent = $goldDiscount20k?->percent;
                                        $caretWisePrice = $prices->gram_in_inr - ($prices->gram_in_inr * 16.7) / 100;
                                        $dis = ($caretWisePrice * $percent) / 100;
                                        if ($goldDiscount20k?->type == 0) {
                                            $finalPrice = $caretWisePrice - $dis;
                                        } else {
                                            $finalPrice = $caretWisePrice + $dis;
                                        }
                                    @endphp
                                    <div class="mn-rate-cover"><span class="bgm e"
                                            id="20kGold">{{ round($finalPrice, 2) }}/gm</span></div>
                                </div>
                                <div class="p-h ph product-rate">
                                    <input type="number" id="20kGoldInput" class="border border-yellow-800 rounded-xl py-2 px-4 w-full"
                                        name="gram" min="1"
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
                                    }"
                                        placeholder="Enter grams" />
                                </div>
                                <div class="mt-4 text-sm text-gray-500">
                                    <i class="fas fa-check-circle text-green-500 mr-1"></i> Standard Quality
                                </div>
                            </div>
                        </div>

                        <!-- Gold 18K Card -->
                        <div class="rounded-2xl overflow-hidden shadow-lg bg-white border-2 border-yellow-400">
                            <div class="bg-gradient-to-r from-amber-500 via-[#FAF3BC] to-amber-500 p-4">
                                <div class="flex justify-between items-center">
                                    <h3 class="text-xl font-bold text-gray-900">Gold 18K</h3>
                                    <span class="bg-white text-gray-900 text-xs rounded-full px-2 py-1 font-semibold">
                                        Jewelry
                                    </span>
                                </div>
                            </div>
                            <div class="p-5 text-center">
                                <div class="p-h ph product-rate border-b border-yellow-800 mb-4">
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
                                </div>
                                <div class="p-h ph product-rate">
                                    <input type="number" id="18kGoldInput" class="border border-yellow-800 rounded-xl py-2 px-4 w-full"
                                        name="gram" min="1"
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
                                    }"
                                        placeholder="Enter grams" />
                                </div>
                                <div class="mt-4 text-sm text-gray-500">
                                    <i class="fas fa-check-circle text-green-500 mr-1"></i> Jewelry Grade
                                </div>
                            </div>
                        </div>

                        <!-- Gold  (Silver) Card -->
                        <div class="rounded-2xl overflow-hidden shadow-lg bg-white border-2 border-gray-400">
                            <div class="bg-gradient-to-r from-gray-300 via-white to-gray-300 p-4">
                                <div class="flex justify-between items-center">
                                    <h3 class="text-xl font-bold text-gray-900">Silver</h3>
                                    <span class="bg-white text-gray-900 text-xs rounded-full px-2 py-1 font-semibold">
                                        Hallmark
                                    </span>
                                </div>
                            </div>
                            <div class="p-5 text-center">
                                <div class="p-h ph product-rate border-b border-yellow-800 mb-4">
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
                                </div>
                                <div class="p-h ph product-rate">
                                    <input type="number" id="24SilverInput" class="border border-yellow-800 rounded-xl py-2 px-4 w-full"
                                        name="gram" min="1"
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
                                    }"
                                        placeholder="Enter grams" />
                                </div>
                                <div class="mt-4 text-sm text-gray-500">
                                    <i class="fas fa-check-circle text-green-500 mr-1"></i> Premium Quality
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column - Market Data -->
            <div class="lg:col-span-1 mt-8">
                <div class="space-y-6">
                    <!-- Market Data Header -->
{{--                    <div--}}
{{--                        class="bg-gradient-to-r from-amber-600 via-[#FAF3BC] to-amber-600 text-black border border-yellow-200 rounded-xl shadow-md overflow-hidden">--}}
{{--                        <table class="w-full text-center text-sm md:text-base font-semibold">--}}
{{--                            <thead>--}}
{{--                                <tr>--}}
{{--                                    <th class="py-3 px-4">Spot</th>--}}
{{--                                    <th class="py-3 px-4">Bid</th>--}}
{{--                                    <th class="py-3 px-4">Ask</th>--}}
{{--                                    <th class="py-3 px-4">High / Low</th>--}}
{{--                                </tr>--}}
{{--                            </thead>--}}
{{--                        </table>--}}
{{--                    </div>--}}

                    <!-- Price Details Table -->
                    <!-- Price Spot Boxes -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                        <!-- Gold Spot -->
                        <div class="bg-white border border-yellow-400 rounded-xl shadow-md p-4">
                            <h3 class="text-lg font-bold text-yellow-800 mb-3">Gold Spot</h3>
                            <div class="space-y-2">
                                <div><span class="font-semibold text-gray-700">Bid:</span> <span class="gold-bid text-green-600 font-mono">{{ $prices->ounce_price_bid }}</span></div>
                                <div><span class="font-semibold text-gray-700">Ask:</span> <span class="gold-ask text-red-600 font-mono">{{ $prices->ounce_price_ask }}</span></div>
                                <div><span class="font-semibold text-gray-700">Low/High:</span>
                                    <span class="gold-high-low font-mono">
                    {{ $prices->ounce_price_usd_today_low }} / {{ $prices->ounce_price_usd_today_high }}
                </span>
                                </div>
                            </div>
                        </div>

                        <!-- Silver Spot -->
                        <div class="bg-white border border-gray-300 rounded-xl shadow-md p-4">
                            <h3 class="text-lg font-bold text-gray-700 mb-3">Silver Spot</h3>
                            <div class="space-y-2">
                                <div><span class="font-semibold text-gray-700">Bid:</span> <span class="silver-bid text-green-600 font-mono">{{ round($silverPrices->silver_ounce_price_bid_usd, 2) }}</span></div>
                                <div><span class="font-semibold text-gray-700">Ask:</span> <span class="silver-ask text-red-600 font-mono">{{ round($silverPrices->silver_ounce_price_ask_usd, 2) }}</span></div>
                                <div><span class="font-semibold text-gray-700">Low/High:</span>
                                    <span class="silver-high-low font-mono">
                    {{ round($silverPrices->silver_ounce_price_usd_today_low_usd, 2) }} / {{ round($silverPrices->silver_ounce_price_usd_today_high_usd, 2) }}
                </span>
                                </div>
                            </div>
                        </div>

                        <!-- INR Spot -->
                        <div class="bg-white border border-green-400 rounded-xl shadow-md p-4">
                            <h3 class="text-lg font-bold text-green-700 mb-3">INR Spot</h3>
                            <div class="space-y-2">
                                <div><span class="font-semibold text-gray-700">Bid:</span> <span class="inr-bid font-mono">{{ $prices->usd_to_inr }}</span></div>
{{--                                <div><span class="font-semibold text-gray-700">Gram in USD:</span> <span class="gram-usd font-mono">{{ $prices->gram_in_usd }}</span></div>--}}
                                <div><span class="font-semibold text-gray-700">Ask:</span> <span class="inr-ask font-mono">{{ $prices->usd_to_inr }}</span></div>
{{--                                <div class="text-xs text-gray-500">--}}
{{--                                    Pair: {{ $prices->usd_to_inr }}/{{ $prices->usd_to_inr }}--}}
{{--                                </div>--}}
                                <div><span class="font-semibold text-gray-700">Low/High:</span>
                                    <span class="inr-high-low font-mono">
                                        {{ round($prices->usd_to_inr , 2) }} / {{ round($prices->usd_to_inr + 0.1, 2) }}
                                    </span>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

                <!-- Contact Card -->
                <div
                    class="bg-white rounded-2xl overflow-hidden shadow-lg transition-transform duration-300 hover:shadow-xl mt-6">
                    <div class="bg-gradient-to-r from-amber-500 via-[#FAF3BC] to-amber-500 p-6">
                        <h2 class="text-2xl font-bold text-black flex items-center">
                            <i class="fas fa-address-card mr-3"></i> Contact Us
                        </h2>
                    </div>
                    <div class="p-6 space-y-6">
                        <!-- Phone -->
                        <div class="flex items-start gap-5">
                            <div class="bg-amber-100 p-3 rounded-full flex-shrink-0">
                                <i class="fas fa-phone-alt text-amber-600 text-lg"></i>
                            </div>
                            <div>
                                <h3 class="text-gray-900 font-semibold text-lg">Phone</h3>
                                <p class="text-gray-600 mt-1">9414400331
                                </p>
                                <p class="text-gray-600 mt-1">7014137278</p>
                                <p class="text-xs text-gray-500 mt-2">Available Mon-Sat (10 AM - 7 PM)</p>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="flex items-start gap-5">
                            <div class="bg-amber-100 p-3 rounded-full flex-shrink-0">
                                <i class="fas fa-envelope text-amber-600 text-lg"></i>
                            </div>
                            <div>
                                <h3 class="text-gray-900 font-semibold text-lg">Email</h3>
                                <p class="text-gray-600 mt-1">Naveensoni111@ymail.com</p>
                                <p class="text-xs text-gray-500 mt-2">We respond within 24 hours</p>
                            </div>
                        </div>

                        <!-- Address -->
                        <div class="flex items-start gap-5">
                            <div class="bg-amber-100 p-3 rounded-full flex-shrink-0">
                                <i class="fas fa-map-marker-alt text-amber-600 text-lg"></i>
                            </div>
                            <div>
                                <h3 class="text-gray-900 font-semibold text-lg">Address</h3>
                                <p class="text-gray-600 mt-1">Shristi jewellers Soni Road, Nayabase, sujangarh 331507
                                    Rajasthan</p>
                                <p class="text-xs text-gray-500 mt-2">Visit our showroom</p>
                            </div>
                        </div>

                        <!-- Button -->
                        <div class="pt-2">
                            <button
                                class="bg-gradient-to-r from-amber-500 via-[#FAF3BC] to-amber-500 text-black py-3 px-6 rounded-lg w-full font-medium hover:shadow-lg transition duration-300 flex items-center justify-center group">
                                <i
                                    class="far fa-comment-dots mr-3 transform group-hover:scale-110 transition-transform"></i>
                                Contact Sales Team
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Social Media Card -->
                <div
                    class="bg-white rounded-2xl overflow-hidden shadow-lg p-6 mt-6 flex flex-col justify-between transition-transform duration-300 hover:shadow-xl">
                    <div class="w-full">
                        <h3 class="font-semibold text-gray-800 mb-6 text-2xl">Follow Us</h3>
                        <div class="grid grid-cols-5 gap-5 justify-items-center">
                            <a href="https://www.facebook.com/share/18tfcJRbk3/"
                                class="bg-blue-100 text-blue-600 p-4 rounded-full hover:bg-blue-600 hover:text-white transition duration-300 transform hover:-translate-y-1">
                                <i class="fab fa-facebook-f text-lg"></i>
                            </a>
                            <a href="https://www.instagram.com/shristijewellers?utm_source=qr&igsh=MTZzaHkzMHk4YnN4cQ=="
                                class="bg-pink-100 text-pink-600 p-4 rounded-full hover:bg-pink-600 hover:text-white transition duration-300 transform hover:-translate-y-1">
                                <i class="fab fa-instagram text-lg"></i>
                            </a>
                            <a href="#"
                                class="bg-sky-100 text-sky-600 p-4 rounded-full hover:bg-sky-600 hover:text-white transition duration-300 transform hover:-translate-y-1">
                                <i class="fab fa-twitter text-lg"></i>
                            </a>
                            <a href="#"
                                class="bg-red-100 text-red-600 p-4 rounded-full hover:bg-red-600 hover:text-white transition duration-300 transform hover:-translate-y-1">
                                <i class="fab fa-youtube text-lg"></i>
                            </a>
                            <a href="#"
                                class="bg-green-100 text-green-600 p-4 rounded-full hover:bg-green-600 hover:text-white transition duration-300 transform hover:-translate-y-1">
                                <i class="fab fa-whatsapp text-lg"></i>
                            </a>
                        </div>

                        <div class="my-6 border-t border-gray-100"></div>

                        <div class="mt-4">
                            <h4 class="text-gray-700 font-medium mb-3">Subscribe to our newsletter</h4>
                            <div class="flex">
                                <input type="email" placeholder="Your email"
                                    class="flex-grow px-4 py-2 rounded-l-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-amber-300">
                                <button
                                    class="bg-amber-500 text-white px-4 py-2 rounded-r-lg hover:bg-amber-600 transition">
                                    <i class="fas fa-paper-plane"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Disclaimer Marquee -->
        <div class="mt-8 bg-gray-100 rounded-lg p-2">
            <marquee class="text-sm text-gray-600">
                Shristi Jewellers Live Rates provides Gold & Silver prices obtained from various sources believed to be
                reliable,
                but we do not guarantee their accuracy. Our gold & silver price data are provided without warranty or claim
                of reliability.
                It is accepted by the site visitor on the condition that errors or omissions shall not be made the basis for
                any claim,
                demand or cause for action.
            </marquee>
        </div>
    </div>

    <!-- JavaScript -->

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const priceElements = [
                { id: '22kGold', inputId: '22kGoldInput', basePrice: null, currentPrice: null },
                { id: '20kGold', inputId: '20kGoldInput', basePrice: null, currentPrice: null },
                { id: '18kGold', inputId: '18kGoldInput', basePrice: null, currentPrice: null },
                { id: '24Silver', inputId: '24SilverInput', basePrice: null, currentPrice: null }
            ];

            // Initialize prices from HTML
            priceElements.forEach(item => {
                const priceElement = document.getElementById(item.id);
                if (priceElement) {
                    let initialText = priceElement.innerText.trim();
                    let initialPrice = parseFloat(initialText.split('/')[0].replace(/[^0-9.]/g, '')) || 100;
                    item.basePrice = initialPrice;
                    item.currentPrice = initialPrice;
                }
            });

            let increaseNext = true; // Toggle flag

            function getRandomPriceChange() {
                const change = parseFloat((Math.random()).toFixed(2)); // between 0.00 and 1.00
                return increaseNext ? change : -change;
            }

            function isWithinWorkingHours() {
                // const now = new Date();
                // const day = now.getDay(); // 0 = Sunday, 6 = Saturday
                // const currentMinutes = now.getHours() * 60 + now.getMinutes();
                // // return (day >= 1 && day <= 5) && (currentMinutes >= 540 && currentMinutes <= 975); // 9:00–16:15
                // return (day >= 1 && day <= 5) && (currentMinutes >= 540 && currentMinutes <= 1095); // 9:00–16:15
                return true;
            }

            function updatePrices() {
                if (!isWithinWorkingHours()) return;

                priceElements.forEach(item => {
                    const priceElement = document.getElementById(item.id);
                    const inputElement = document.getElementById(item.inputId);
                    if (!priceElement || !inputElement) return;

                    const gram = parseFloat(inputElement.value) || 10;
                    const priceChange = getRandomPriceChange();
                    item.currentPrice += priceChange;

                    const maxPrice = item.basePrice + 2;
                    const minPrice = item.basePrice - 2;
                    item.currentPrice = Math.min(Math.max(item.currentPrice, minPrice), maxPrice);

                    const totalPrice = item.currentPrice * gram;
                    let arrow = '', color = 'black';

                    if (priceChange > 0) {
                        color = "green";
                        arrow = `<i class="fas fa-arrow-up"></i>`;
                    } else if (priceChange < 0) {
                        color = "red";
                        arrow = `<i class="fas fa-arrow-down"></i>`;
                    }

                    priceElement.innerHTML = `${totalPrice.toFixed(2)}/${gram}gm ${arrow}`;
                    priceElement.style.color = color;

                    // Animation effect
                    priceElement.classList.add('price-update-animation');
                    setTimeout(() => {
                        priceElement.classList.remove('price-update-animation');
                    }, 1000);
                });

                increaseNext = !increaseNext; // Toggle for next call
            }

            // Trigger update every 10 seconds
            setInterval(updatePrices, 10000);
            updatePrices();
        });
    </script>

    <style>
        .price-update-animation {
            transition: all 0.5s ease;
            transform: scale(1.05);
        }
        .bgm.e {
            font-weight: bold;
            font-size: 1.1em;
        }
    </style>



    {{-- test --}}
{{--    <script>--}}
{{--        document.addEventListener("DOMContentLoaded", function() {--}}
{{--            // Store initial prices (could come from server-side rendering)--}}
{{--            const priceElements = [{--}}
{{--                    selector: ".gold-bid",--}}
{{--                    value: null--}}
{{--                },--}}
{{--                {--}}
{{--                    selector: ".gold-ask",--}}
{{--                    value: null--}}
{{--                },--}}
{{--                {--}}
{{--                    selector: ".gold-high-low",--}}
{{--                    value: null--}}
{{--                },--}}
{{--                {--}}
{{--                    selector: ".silver-bid",--}}
{{--                    value: null--}}
{{--                },--}}
{{--                {--}}
{{--                    selector: ".silver-ask",--}}
{{--                    value: null--}}
{{--                },--}}
{{--                {--}}
{{--                    selector: ".silver-high-low",--}}
{{--                    value: null--}}
{{--                },--}}
{{--                {--}}
{{--                    selector: ".inr-usd",--}}
{{--                    value: null--}}
{{--                },--}}
{{--                {--}}
{{--                    selector: ".gram-usd",--}}
{{--                    value: null--}}
{{--                },--}}
{{--                {--}}
{{--                    selector: ".inr-gram-pair",--}}
{{--                    value: null--}}
{{--                }--}}
{{--            ];--}}

{{--            // Initialize prices from HTML--}}
{{--            priceElements.forEach(item => {--}}
{{--                const element = document.querySelector(item.selector);--}}
{{--                if (element) {--}}
{{--                    const text = element.innerText.trim();--}}
{{--                    const price = parseFloat(text.split('/')[0].replace(/[^0-9.]/g, '')) || 100;--}}
{{--                    item.value = price;--}}
{{--                }--}}
{{--            });--}}

{{--            function isWorkingHours() {--}}

{{--                const now = new Date();--}}
{{--                const day = now.getDay(); // 0 (Sunday) to 6 (Saturday)--}}
{{--                const hours = now.getHours();--}}

{{--                // Check if it's a weekday (1-5) and between 9 AM (9) and 4 PM (17)--}}
{{--                // return (day >= 1 && day <= 5) && (hours >= 9 && hours < 16);--}}

{{--                return (--}}
{{--                    day >= 1 && day <= 5 && (--}}
{{--                        (hours > 9 && hours < 16) ||--}}
{{--                        (hours === 9 && minutes >= 15) ||--}}
{{--                        (hours === 16 && minutes <= 15)--}}
{{--                    )--}}
{{--                );--}}

{{--            }--}}

{{--            function updatePrices() {--}}
{{--                if (!isWorkingHours()) {--}}
{{--                    // Clear any active intervals if we're outside working hours--}}
{{--                    clearInterval(priceUpdateInterval);--}}
{{--                    return;--}}
{{--                }--}}

{{--                priceElements.forEach(item => {--}}
{{--                    const element = document.querySelector(item.selector);--}}
{{--                    if (!element) return;--}}

{{--                    // Handle high/low specially if needed (for pairs like "100 / 105")--}}
{{--                    if (item.selector.includes("high-low") || item.selector.includes("inr-gram-pair")) {--}}
{{--                        const parts = element.innerText.split("/");--}}
{{--                        if (parts.length === 2) {--}}
{{--                            let oldLow = parseFloat(parts[0].trim()) || 100;--}}
{{--                            let oldHigh = parseFloat(parts[1].trim()) || 100;--}}

{{--                            // Simulate new prices--}}
{{--                            const newLow = (oldLow + (Math.random() * 2 - 1)).toFixed(2);--}}
{{--                            const newHigh = (oldHigh + (Math.random() * 2 - 1)).toFixed(2);--}}

{{--                            // Update element--}}
{{--                            element.innerText = `${newLow} / ${newHigh}`;--}}

{{--                            // Coloring logic (based on low price)--}}
{{--                            if (parseFloat(newLow) > oldLow) {--}}
{{--                                element.style.color = "green";--}}
{{--                            } else if (parseFloat(newLow) < oldLow) {--}}
{{--                                element.style.color = "red";--}}
{{--                            } else {--}}
{{--                                element.style.color = "";--}}
{{--                            }--}}
{{--                            return;--}}
{{--                        }--}}
{{--                    }--}}

{{--                    // Normal price update for single values--}}
{{--                    let oldPrice = item.value;--}}
{{--                    let newPrice = (oldPrice + (Math.random() * 2 - 1)).toFixed(2); // Random price up/down--}}

{{--                    // Update price text--}}
{{--                    element.innerText = newPrice;--}}

{{--                    // Apply color change--}}
{{--                    if (parseFloat(newPrice) > oldPrice) {--}}
{{--                        element.style.color = "green";--}}
{{--                    } else if (parseFloat(newPrice) < oldPrice) {--}}
{{--                        element.style.color = "red";--}}
{{--                    } else {--}}
{{--                        element.style.color = "";--}}
{{--                    }--}}

{{--                    // Store new price--}}
{{--                    item.value = parseFloat(newPrice);--}}
{{--                });--}}
{{--            }--}}

{{--            // Start with initial check--}}
{{--            if (isWorkingHours()) {--}}
{{--                // Start updating every 3 seconds--}}
{{--                var priceUpdateInterval = setInterval(updatePrices, 3000);--}}
{{--            }--}}

{{--            // Also check every hour in case we cross the working hours threshold--}}
{{--            setInterval(function() {--}}
{{--                if (isWorkingHours() && !priceUpdateInterval) {--}}
{{--                    priceUpdateInterval = setInterval(updatePrices, 3000);--}}
{{--                } else if (!isWorkingHours() && priceUpdateInterval) {--}}
{{--                    clearInterval(priceUpdateInterval);--}}
{{--                    priceUpdateInterval = null;--}}
{{--                }--}}
{{--            }, 3600000); // Check every hour--}}
{{--        });--}}
{{--    </script>--}}


{{--    <script>--}}
{{--        document.addEventListener("DOMContentLoaded", function () {--}}
{{--            const priceElements = [--}}
{{--                { selector: ".gold-bid", value: null },--}}
{{--                { selector: ".gold-ask", value: null },--}}
{{--                { selector: ".gold-high-low", value: null },--}}
{{--                { selector: ".silver-bid", value: null },--}}
{{--                { selector: ".silver-ask", value: null },--}}
{{--                { selector: ".silver-high-low", value: null },--}}
{{--                { selector: ".inr-usd", value: null },--}}
{{--                { selector: ".gram-usd", value: null },--}}
{{--                { selector: ".inr-high-low", value: null },--}}
{{--            ];--}}

{{--            let toggleDirection = true; // true = add, false = subtract--}}
{{--            let priceUpdateInterval = null;--}}

{{--            // Initialize prices from HTML--}}
{{--            priceElements.forEach(item => {--}}
{{--                const element = document.querySelector(item.selector);--}}
{{--                if (element) {--}}
{{--                    const text = element.innerText.trim();--}}
{{--                    const price = parseFloat(text.split('/')[0].replace(/[^0-9.]/g, '')) || 100;--}}
{{--                    item.value = price;--}}
{{--                }--}}
{{--            });--}}

{{--            function isWorkingHours() {--}}
{{--                const now = new Date();--}}
{{--                const day = now.getDay(); // 0 (Sunday) to 6 (Saturday)--}}
{{--                const hours = now.getHours();--}}
{{--                const minutes = now.getMinutes();--}}

{{--                return (--}}
{{--                    day >= 1 && day <= 5 &&--}}
{{--                    (--}}
{{--                        (hours > 9 && hours < 16) ||--}}
{{--                        (hours === 9 && minutes >= 15) ||--}}
{{--                        (hours === 16 && minutes <= 15)--}}
{{--                    )--}}
{{--                );--}}
{{--            }--}}

{{--            function updatePrices() {--}}
{{--                if (!isWorkingHours()) {--}}
{{--                    clearInterval(priceUpdateInterval);--}}
{{--                    priceUpdateInterval = null;--}}
{{--                    return;--}}
{{--                }--}}

{{--                priceElements.forEach(item => {--}}
{{--                    const element = document.querySelector(item.selector);--}}
{{--                    if (!element) return;--}}

{{--                    const change = +(Math.random() * (1 - 0.01) + 0.01).toFixed(2); // Random change between 0.01 and 1.00--}}

{{--                    if (item.selector.includes("high-low") || item.selector.includes("inr-gram-pair")) {--}}
{{--                        const parts = element.innerText.split("/");--}}
{{--                        if (parts.length === 2) {--}}
{{--                            let oldLow = parseFloat(parts[0].trim()) || 100;--}}
{{--                            let oldHigh = parseFloat(parts[1].trim()) || 100;--}}

{{--                            let newLow = toggleDirection ? oldLow + change : oldLow - change;--}}
{{--                            let newHigh = toggleDirection ? oldHigh + change : oldHigh - change;--}}

{{--                            element.innerText = `${newLow.toFixed(2)} / ${newHigh.toFixed(2)}`;--}}
{{--                            element.style.color = toggleDirection ? "green" : "red";--}}
{{--                            return;--}}
{{--                        }--}}
{{--                    }--}}

{{--                    // Normal price update--}}
{{--                    let oldPrice = item.value;--}}
{{--                    let newPrice = toggleDirection ? oldPrice + change : oldPrice - change;--}}
{{--                    newPrice = newPrice.toFixed(2);--}}

{{--                    element.innerText = newPrice;--}}

{{--                    if (parseFloat(newPrice) > oldPrice) {--}}
{{--                        element.style.color = "green";--}}
{{--                    } else if (parseFloat(newPrice) < oldPrice) {--}}
{{--                        element.style.color = "red";--}}
{{--                    } else {--}}
{{--                        element.style.color = "";--}}
{{--                    }--}}

{{--                    item.value = parseFloat(newPrice);--}}
{{--                });--}}

{{--                toggleDirection = !toggleDirection; // Alternate next cycle--}}
{{--            }--}}

{{--            if (isWorkingHours()) {--}}
{{--                priceUpdateInterval = setInterval(updatePrices, 3000);--}}
{{--            }--}}

{{--            // Check every hour if we need to start or stop updates--}}
{{--            setInterval(function () {--}}
{{--                if (isWorkingHours() && !priceUpdateInterval) {--}}
{{--                    priceUpdateInterval = setInterval(updatePrices, 3000);--}}
{{--                } else if (!isWorkingHours() && priceUpdateInterval) {--}}
{{--                    clearInterval(priceUpdateInterval);--}}
{{--                    priceUpdateInterval = null;--}}
{{--                }--}}
{{--            }, 3600000);--}}
{{--        });--}}
{{--    </script>--}}


    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const priceElements = [
                { selector: ".gold-bid", value: null },
                { selector: ".gold-ask", value: null },
                { selector: ".gold-high-low", value: null },
                { selector: ".silver-bid", value: null },
                { selector: ".silver-ask", value: null },
                { selector: ".silver-high-low", value: null },
                { selector: ".inr-ask", value: null },
                { selector: ".inr-bid", value: null },
                { selector: ".inr-high-low", value: null },
            ];

            let priceUpdateInterval = null;

            // Initialize prices from HTML
            priceElements.forEach(item => {
                const element = document.querySelector(item.selector);
                if (element) {
                    const text = element.innerText.trim();
                    const price = parseFloat(text.split('/')[0].replace(/[^0-9.]/g, '')) || 100;
                    item.value = price;
                }
            });

            function isWorkingHours() {
                // const now = new Date();
                // const day = now.getDay();
                // const hours = now.getHours();
                // const minutes = now.getMinutes();
                //
                // return (
                //     day >= 1 && day <= 5 &&
                //     (
                //         (hours > 9 && hours < 16) ||
                //         (hours === 9 && minutes >= 15) ||
                //         (hours === 16 && minutes <= 15)
                //     )
                // );
                return true;
            }

            function updatePrices() {
                if (!isWorkingHours()) {
                    clearInterval(priceUpdateInterval);
                    priceUpdateInterval = null;
                    return;
                }

                priceElements.forEach(item => {
                    const element = document.querySelector(item.selector);
                    if (!element) return;

                    // const change = +(Math.random() * (1 - 0.01) + 0.01).toFixed(2); // 0.01 to 1.00
                    const change = +(Math.random() * (0.1 - 0.01) + 0.01).toFixed(3);
                    const direction = Math.random() < 0.5 ? -1 : 1; // random add or subtract

                    if (item.selector.includes("high-low") || item.selector.includes("inr-high-low")) {
                        const parts = element.innerText.split("/");
                        if (parts.length === 2) {
                            let oldLow = parseFloat(parts[0].trim()) || 100;
                            let oldHigh = parseFloat(parts[1].trim()) || 100;

                            let newLow = oldLow + direction * change;
                            let newHigh = oldHigh + direction * change;

                            element.innerText = `${newLow.toFixed(2)} / ${newHigh.toFixed(2)}`;
                            element.style.color = direction > 0 ? "green" : "red";
                            return;
                        }
                    }

                    let oldPrice = item.value;
                    let newPrice = oldPrice + direction * change;
                    newPrice = newPrice.toFixed(2);

                    element.innerText = newPrice;
                    element.style.color = direction > 0 ? "green" : "red";
                    item.value = parseFloat(newPrice);
                });
            }

            if (isWorkingHours()) {
                priceUpdateInterval = setInterval(updatePrices, 6000);
            }

            setInterval(function () {
                if (isWorkingHours() && !priceUpdateInterval) {
                    priceUpdateInterval = setInterval(updatePrices, 6000);
                } else if (!isWorkingHours() && priceUpdateInterval) {
                    clearInterval(priceUpdateInterval);
                    priceUpdateInterval = null;
                }
            }, 3600000);
        });
    </script>



    {{-- time::: --}}
    <script>
        // Function to update the datetime in the header
        function updateHeaderTime() {
            const updateTimeElement = document.getElementById('update-time');
            if (updateTimeElement) {
                const now = new Date();
                const formatted = now.toLocaleString('en-US', {
                    dateStyle: 'medium',
                    timeStyle: 'short'
                });
                updateTimeElement.textContent = formatted;
                updateTimeElement.setAttribute('datetime', now.toISOString());
            }
        }

        // Function to update the clock
        function clock() {
            const hoursEl = document.getElementById('hours');
            const minutesEl = document.getElementById('minutes');
            const secondsEl = document.getElementById('seconds');
            const periodEl = document.getElementById('period');

            if (hoursEl && minutesEl && secondsEl && periodEl) {
                const d = new Date();
                let h = d.getHours();
                const m = d.getMinutes();
                const s = d.getSeconds();

                const ampm = h >= 12 ? "PM" : "AM";
                h = h % 12 || 12; // Convert to 12-hour format and handle midnight (0 -> 12)

                hoursEl.textContent = h.toString().padStart(2, '0');
                minutesEl.textContent = m.toString().padStart(2, '0');
                secondsEl.textContent = s.toString().padStart(2, '0');
                periodEl.textContent = ampm;
            }
        }

        // Initialize both date and clock on load
        window.addEventListener('DOMContentLoaded', () => {
            updateHeaderTime();
            clock();
            setInterval(clock, 1000);
        });
    </script>
@endsection

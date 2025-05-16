@extends('frontLayouts.main', ['title' => 'Live Rate'])
@section('content')


        {{-- <div class="text-center px-4 py-4 font-bold text-2xl">
            Shristi Jewellers
        </div> --}}

         <header class="bg-gradient-to-r from-amber-500 via-[#FAF3BC] to-amber-500 py-4 shadow-md">


    {{-- header --}}
    <header class="bg-gradient-to-r from-amber-500 via-[#FAF3BC] to-amber-500 py-4 shadow-md">


        <!-- Header -->
        <div class="mb-10 text-center">
            <div class="flex items-center justify-center mb-3">
                <img src="{{ asset('logo.jpg') }}" alt="Logo" class="h-16 w-16 rounded-full shadow-lg">
            </div>
            <h1 class="logo-text text-4xl md:text-5xl font-bold text-gray-800 mb-2">
                <span class="bg-clip-text text-transparent bg-black">Shristi Jewellers</span>
            </h1>
            <p class="text-gray-800 font-light text-lg">Premium Gold & Silver Since 1975</p>
            <!-- Live Rates Status Indicator -->
            <div class="flex justify-center mt-6">
                <div class="inline-flex items-center space-x-2 text-sm text-green-800 font-medium bg-green-100 px-4 py-1.5 rounded-full shadow-sm"
                    role="status" aria-live="polite">
                    <!-- Green dot indicator -->
                    <span class="w-2.5 h-2.5 bg-green-500 rounded-full animate-pulse"></span>

                    <!-- Status text and dynamic time -->
                    <span>
                        Live Rates Updated
                        <time id="update-time" datetime="2025-05-13T10:30:00" class="font-semibold">
                            May 13, 2025, 10:30 AM
                        </time>
                    </span>
                </div>
            </div>

        </div>

    </header>



    {{-- <div class="header-top-marquee">
        <div class="container-fluid">
            <marquee class="marquee1">विशेष ~ आपकी सेवा में हमने एक नई कड़ी और जोड़ दी है सोने के 20k/ 18K Hallmark जेवर
                वा चांदी की ज्वेलरी पायल मूर्ति बर्तन सिक्के संपूर्ण रेंज एवं विशाल संग्रह के साथ ( बहुत ही उचित मूल्य )
                पर उपलब्ध हैं हमेशा की तरह आपके साथ और सहयोग की कामना करते हैं | Working Hours: 10:00 AM - 08:00 PM
            </marquee>
        </div>
    </div> --}}
    <!-- Top Marquee -->
    <div class="bg-amber-800 py-2 overflow-hidden px-4">
        <marquee class="text-sm md:text-base">
            विशेष ~ आपकी सेवा में हमने एक नई कड़ी और जोड़ दी है सोने के 20k/ 18K Hallmark जेवर वा चांदी की ज्वेलरी पायल
            मूर्ति बर्तन सिक्के संपूर्ण रेंज एवं विशाल संग्रह के साथ ( बहुत ही उचित मूल्य ) पर उपलब्ध हैं हमेशा की तरह आपके
            साथ और सहयोग की कामना करते हैं | Working Hours: 10:00 AM - 08:00 PM
        </marquee>

    <!-- Top Marquee -->
    <div class="bg-amber-800 text-yellow-100 py-2 overflow-hidden shadow-sm">
        <div class="container mx-auto px-4">
            <marquee class="text-sm md:text-base font-medium">
                विशेष ~ chandan yadav आपकी सेवा में हमने एक नई कड़ी और जोड़ दी है सोने के 20k/ 18K Hallmark जेवर वा चांदी की ज्वेलरी
                पायल
                मूर्ति बर्तन सिक्के संपूर्ण रेंज एवं विशाल संग्रह के साथ ( बहुत ही उचित मूल्य ) पर उपलब्ध हैं हमेशा की
                तरह आपके
                साथ और सहयोग की कामना करते हैं | Working Hours: 10:00 AM - 08:00 PM
            </marquee>
        </div>

    </div>


    {{-- <div class="container">

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
    </div> --}}


    <div class="container">

        <div class="left-side">
            <div class="main-product">
                {{-- <div id="divHeader" class="bg-white shadow-md rounded-lg overflow-hidden">
                    <table class="min-w-full table-auto">
                        <thead>
                            <tr class="bg-gradient-to-r from-yellow-100 to-yellow-200 text-gray-800 uppercase text-sm">
                                <th class="px-2 py-3 text-left font-semibold">Product</th>
                                <th class="px-2 py-3 text-center font-semibold">Carat</th>
                                <th class="px-2 py-3 text-center font-semibold">Price</th>
                                <th class="px-2 py-3 text-center font-semibold">Quantity</th>
                            </tr>
                        </thead>
                    </table>
                </div> --}}
                <div id="divHeader" class="overflow-x-auto rounded-2xl shadow-lg bg-white dark:bg-gray-900 my-6 mx-2">
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


                <div class="divProduct" id="divProduct">
                    <!-- Gold Rate Cards -->
                    <div class="mb-6">
                        <h2 class="text-2xl font-semibold text-gray-800 mb-6 flex items-center">
                            <i class="fas fa-coins text-yellow-500 mr-3"></i>
                            Gold Rates
                            <span class="text-sm font-normal text-gray-500 ml-2">(Per Gram)</span>
                        </h2>

                        <div
                            class="bg-gradient-to-r from-yellow-50 to-white shadow-xl rounded-2xl p-2 mb-6 border border-yellow-200 overflow-auto">
                            <table class="w-full text-sm sm:text-base">
                                <tbody>
                                    <tr
                                        class="border-b border-yellow-200 hover:bg-yellow-100 transition duration-200 ease-in-out rounded-2xl">
                                        <!-- Product Name -->
                                        <td class="text-center w-[20%] px-1 py-1">
                                            <div
                                                class="text-2xl font-bold text-yellow-700 flex items-center justify-center gap-2">
                                                {{-- <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-yellow-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4m16 0l-4 4m4-4l-4-4" />
                        </svg> --}}
                                                Gold <span class="text-yellow-900">₹</span>
                                            </div>
                                        </td>

                                        <!-- Carat -->
                                        <td class="text-center w-[20%] px-1 py-1">
                                            <span
                                                class="inline-block bg-yellow-100 text-yellow-900 text-sm font-semibold px-1 py-1 rounded-full shadow-md tracking-wide">
                                                22K
                                            </span>
                                        </td>

                                        <td class="p-h ph product-rate border border-yellow-900"
                                            style="width: 25%; text-align: center;">
                                            @php
                                                $percent = $goldDiscount22k?->percent;

                                                $caretWisePrice =
                                                    $prices->gram_in_inr - ($prices->gram_in_inr * 8) / 100;

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
                                        <td class="p-h ph product-rate border-b" style="width: 25%; text-align: center;">
                                            <input type="number" class="border border-yellow-600" name="gram"
                                                min="1"
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




                        <div
                            class="content-cover bg-gradient-to-r from-yellow-50 to-white shadow-xl rounded-2xl p-2 mb-6 border border-yellow-200">
                            <table class="left-side-table">
                                <tbody>
                                    <tr
                                        class="ligh-white border-b border-yellow-200 hover:bg-yellow-100 transition duration-200 ease-in-out rounded-2xl">
                                        <td class="text-center w-[20%] px-1 py-1">
                                            <div
                                                class="text-2xl font-bold text-yellow-700 flex items-center justify-center gap-2">
                                                {{-- <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-yellow-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4m16 0l-4 4m4-4l-4-4" />
                        </svg> --}}
                                                Gold <span class="text-yellow-900">₹</span>
                                            </div>
                                        </td>
                                        <!-- Carat -->
                                        <td class="text-center w-[20%] px-1 py-1">
                                            <span
                                                class="inline-block bg-yellow-100 text-yellow-900 text-sm font-semibold px-1 py-1 rounded-full shadow-md tracking-wide">
                                                20K
                                            </span>
                                        </td>
                                        <td class="p-h ph product-rate border-b border-yellow-800"
                                            style="width: 25%; text-align: center;">
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
                                        <td class="p-h ph product-rate border-b border-yellow-800"
                                            style="width: 25%; text-align: center;">
                                            <input type="number" class="border border-yellow-800" name="gram"
                                                min="1"
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


                        <div
                            class="content-cover bg-gradient-to-r from-yellow-50 to-white shadow-xl rounded-2xl p-2 mb-6 border border-yellow-200">
                            <table class="left-side-table">
                                <tbody>
                                    <tr
                                        class="ligh-white border-b border-yellow-200 hover:bg-yellow-100 transition duration-200 ease-in-out rounded-2xl">
                                        <td class="text-center w-[20%] px-1 py-1">
                                            <div
                                                class="text-2xl font-bold text-yellow-700 flex items-center justify-center gap-2">
                                                {{-- <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-yellow-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4m16 0l-4 4m4-4l-4-4" />
                        </svg> --}}
                                                Gold <span class="text-yellow-900">₹</span>
                                            </div>
                                        </td>
                                        <!-- Carat -->
                                        <td class="text-center w-[20%] px-1 py-1">
                                            <span
                                                class="inline-block bg-yellow-100 text-yellow-900 text-sm font-semibold px-1 py-1 rounded-full shadow-md tracking-wide">
                                                18K
                                            </span>
                                        </td>
                                        <td class="p-h ph product-rate border-b border-yellow-800"
                                            style="width: 25%; text-align: center;">
                                            @php
                                                $percent = $goldDiscount18k?->percent;

                                                $caretWisePrice =
                                                    $prices->gram_in_inr - ($prices->gram_in_inr * 21) / 100;

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
                                        <td class="p-h ph product-rate border-b border-yellow-800"
                                            style="width: 25%; text-align: center;">
                                            <input type="number" class="border border-yellow-800" name="gram"
                                                min="1"
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

                        <div
                            class="content-cover bg-gradient-to-r from-yellow-50 to-white shadow-xl rounded-2xl p-2 mb-6 border border-yellow-200">
                            <table class="left-side-table">
                                <tbody>
                                    <tr
                                        class="ligh-white border-b border-yellow-200 hover:bg-yellow-100 transition duration-200 ease-in-out rounded-2xl">
                                        <td class="text-center w-[20%] px-1 py-1">
                                            <div
                                                class="text-2xl font-bold text-yellow-700 flex items-center justify-center gap-2">
                                                {{-- <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-yellow-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4m16 0l-4 4m4-4l-4-4" />
                        </svg> --}}
                                                Gold <span class="text-yellow-900">₹</span>
                                            </div>
                                        </td>
                                        <!-- Carat -->
                                        <td class="text-center w-[20%] px-1 py-1">
                                            <span
                                                class="inline-block bg-yellow-100 text-yellow-900 text-sm font-semibold px-1 py-1 rounded-full shadow-md tracking-wide">
                                                24K
                                            </span>
                                        </td>
                                        <td class="p-h ph product-rate border-b border-yellow-800"
                                            style="width: 25%; text-align: center;">
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
                                        <td class="p-h ph product-rate border-b border-yellow-800"
                                            style="width: 25%; text-align: center;">
                                            <input type="number" class="border border-yellow-800" name="gram"
                                                min="1"
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


            {{-- <div class="right-side">
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
        </div> --}}

            <div class="right-side px-4 py-6">
                <div class="max-w-4xl mx-auto">
                    <div class="space-y-6">
                        <!-- Header Table -->
                        <div id="divFutureHd"
                            class="bg-gradient-to-r from-amber-600 via-[#FAF3BC] to-amber-600 text-black border border-yellow-200 rounded-xl shadow-md overflow-hidden">
                            <table class="w-full text-center text-sm md:text-base font-semibold text-gray-800">
                                <thead>
                                    <th class="py-3 px-4">Spot</th>
                                    <th class="py-3 px-4">Bid</th>
                                    <th class="py-3 px-4">Ask</th>
                                    <th class="py-3 px-4">High / Low</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>

                        <!-- Price Details -->
                        <div id="divFuture" class="bg-white border border-gray-200 rounded-xl shadow-md p-4">
                            <table class="w-full text-sm md:text-base text-center text-gray-700">
                                <tbody class="divide-y divide-gray-100">
                                    <tr class="hover:bg-gray-50">
                                        <td class="py-3 font-semibold text-yellow-800">Gold</td>
                                        <td><span
                                                class="e gold-bid font-mono text-green-600">{{ $prices->ounce_price_bid }}</span>
                                        </td>
                                        <td><span
                                                class="e gold-ask font-mono text-red-600">{{ $prices->ounce_price_ask }}</span>
                                        </td>
                                        <td><span class="e gold-high-low">{{ $prices->ounce_price_usd_today_low }} /
                                                {{ $prices->ounce_price_usd_today_high }}</span></td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="py-3 font-semibold text-yellow-800">Silver $</td>
                                        <td><span
                                                class="e silver-bid font-mono text-green-600">{{ round($silverPrices->silver_ounce_price_bid_usd, 2) }}</span>
                                        </td>
                                        <td><span
                                                class="e silver-ask font-mono text-red-600">{{ round($silverPrices->silver_ounce_price_ask_usd, 2) }}</span>
                                        </td>
                                        <td><span
                                                class="e silver-high-low">{{ round($silverPrices->silver_ounce_price_usd_today_low_usd, 2) }}
                                                /
                                                {{ round($silverPrices->silver_ounce_price_usd_today_high_usd, 2) }}</span>
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="py-3 font-semibold text-yellow-800">INR ₹</td>
                                        <td colspan="2"><span
                                                class="e inr-usd font-mono">{{ $prices->usd_to_inr }}</span>
                                        </td>
                                        <td>
                                            <span class="e gram-usd">{{ $prices->gram_in_usd }}</span><br>
                                            <span
                                                class="e inr-gram-pair text-sm text-gray-500">{{ $prices->usd_to_inr }}/{{ $prices->gram_in_usd }}</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Card -->
            <div class="bg-white rounded-2xl overflow-hidden card-shadow w-full">
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
            <div class="bg-white rounded-2xl overflow-hidden card-shadow p-5 w-full">
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


        <marquee class="marquee2">Shristi Jewellers Live Rates provides Gold &amp; Silver prices obtained from various
            sources believed to be reliable, but we do not guarantee their accuracy. Our gold &amp; silver price data are
            provided without warranty or claim of reliability. It is accepted by the site visitor on the condition that
            errors or omissions shall not be made the basis for any claim, demand or cause for action.
        </marquee>

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


        {{-- <script>
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


    </script> --}}
        {{-- test --}}
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


        function isWorkingHours() {
            const now = new Date();
            const day = now.getDay(); // 0 (Sunday) to 6 (Saturday)
            const hours = now.getHours();

            // Check if it's a weekday (1-5) and between 9 AM (9) and 5 PM (17)
            return (day >= 1 && day <= 5) && (hours >= 9 && hours < 18);
        }

                function isWorkingHours() {

                    const now = new Date();
                    const day = now.getDay(); // 0 (Sunday) to 6 (Saturday)
                    const hours = now.getHours();


                    // Check if it's a weekday (1-5) and between 9 AM (9) and 4 PM (17)
                    return (day >= 1 && day <= 5) && (hours >= 9 && hours < 18);
                }

                function updatePrices() {
                    if (!isWorkingHours()) {
                        // Clear any active intervals if we're outside working hours
                        clearInterval(priceUpdateInterval);
                        return;
                    }

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

                // Start with initial check
                if (isWorkingHours()) {
                    // Start updating every 3 seconds
                    var priceUpdateInterval = setInterval(updatePrices, 3000);
                }

                // Also check every hour in case we cross the working hours threshold
                setInterval(function() {
                    if (isWorkingHours() && !priceUpdateInterval) {
                        priceUpdateInterval = setInterval(updatePrices, 3000);
                    } else if (!isWorkingHours() && priceUpdateInterval) {
                        clearInterval(priceUpdateInterval);
                        priceUpdateInterval = null;
                    }
                }, 3600000); // Check every hour
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
    </scrip> --}}

        <script>
            // date time of header
            // Example: update timestamp dynamically
            const updateTimeElement = document.getElementById('update-time');
            const now = new Date();
            const formatted = now.toLocaleString('en-US', {
                dateStyle: 'medium',
                timeStyle: 'short'
            });
            updateTimeElement.textContent = formatted;
            updateTimeElement.setAttribute('datetime', now.toISOString());
            // end date time of header
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

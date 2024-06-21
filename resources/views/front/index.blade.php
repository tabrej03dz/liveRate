@extends('frontLayouts.main', ['title' => 'Live Rate'])
@section('content')

<div class="text-center ">
    <p style="text-align: center; margin-top: 10px; margin-bottom: -10px; font-size: 26px;">
{{--        {{\Carbon\Carbon::today()->format('l, F j, Y')}}--}}

{{--            [<span id="hours">00</span>--}}
{{--            <span id="dots">:</span>--}}
{{--            <span id="minutes">00</span>--}}
{{--            <span id="dots">:</span>--}}
{{--            <span id="seconds">00</span>--}}
{{--            <span id="period">00</span>]--}}

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

{{--                <div class="content-cover">--}}
{{--                    <table class="left-side-table">--}}
{{--                        <tbody>--}}
{{--                        <tr class="ligh-white">--}}
{{--                            <td class="p-h p" style="width: 28%; text-align: center;">--}}
{{--                                <div class="main-product-cover">--}}
{{--                                    <h3 >Gold &#8377;</h3>--}}
{{--                                </div>--}}
{{--                            </td>--}}
{{--                            <td class="p-h ph product-rate" style="width: 25%; text-align: center;">--}}
{{--                                <div class="mn-rate-cover"><span class="bgm e">24K</span></div>--}}
{{--                            </td>--}}
{{--                            <td class="p-h ph product-rate" style="width: 25%; text-align: center;">--}}
{{--                                @php--}}
{{--                                    $percent = $discount?->percent;--}}
{{--                                    $dis = ($prices->gram_in_inr * $percent)/100;--}}
{{--                                    if($discount?->type == 0){--}}
{{--                                        $finalPrice = $prices->gram_in_inr - $dis;--}}
{{--                                    }else{--}}
{{--                                        $finalPrice = $prices->gram_in_inr + $dis;--}}
{{--                                    }--}}
{{--                                @endphp--}}
{{--                                <div class="mn-rate-cover"><span class="bgm e" id="24kGold">{{round($finalPrice, 2)}}/gm</span></div>--}}
{{--                            </td>--}}
{{--                            <td class="p-h ph product-rate" style="width: 25%; text-align: center;">--}}
{{--                                <input type="number" name="gram" min="1" onkeyup="--}}
{{--                                        let gram = this.value;--}}
{{--                                    if(gram == ''){--}}
{{--                                        const price = {{$prices->gram_in_inr}} * 1;--}}
{{--                                        const discount = (price * {{$percent}})/100;--}}
{{--                                        if({{$discount?->type}} == 0){--}}
{{--                                            let finalPrice = price - discount;--}}
{{--                                            document.getElementById('24kGold').innerText = finalPrice.toFixed(2) + ' / ' + gram + 'gm';--}}
{{--                                        }else{--}}
{{--                                            let finalPrice = price + discount;--}}
{{--                                            document.getElementById('24kGold').innerText = finalPrice.toFixed(2) + '/' + gram + 'gm';--}}
{{--                                        }--}}

{{--                                        // document.getElementById('24kGold').innerText = finalPrice.toFixed(2) + '/' + gram + 'gm';--}}
{{--                                    }else{--}}
{{--                                        const price = {{$prices->gram_in_inr}} * gram;--}}
{{--                                        const discount = (price * {{$percent}})/100;--}}

{{--                                        if({{$discount?->type}} == 0){--}}
{{--                                            const finalPrice = price - discount;--}}
{{--                                            document.getElementById('24kGold').innerText = finalPrice.toFixed(2) + '/' + gram + 'gm';--}}
{{--                                        }else{--}}
{{--                                            const finalPrice = price + discount;--}}
{{--                                            document.getElementById('24kGold').innerText = finalPrice.toFixed(2) + '/' + gram + 'gm';--}}
{{--                                        }--}}
{{--                                    }--}}
{{--                                " style="width: 100%;"/>--}}
{{--                            </td>--}}
{{--                        </tr>--}}
{{--                        </tbody>--}}
{{--                    </table>--}}
{{--                </div>--}}


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
                                    $percent = $goldDiscount?->percent;

                                    $caretWisePrice = $prices->gram_in_inr - (($prices->gram_in_inr * 8)/100);

                                    $dis = ($caretWisePrice * $percent)/100;
                                    if($goldDiscount?->type == 0){
                                        $finalPrice = $caretWisePrice - $dis;
                                    }else{
                                        $finalPrice = $caretWisePrice + $dis;
                                    }
                                @endphp
                                <div class="mn-rate-cover"><span class="bgm e" id="22kGold">{{round($finalPrice, 2)}}/gm</span></div>
                            </td>
                            <td class="p-h ph product-rate" style="width: 25%; text-align: center;">
                                <input type="number" name="gram" min="1" onkeyup="
                                    let gram = this.value;
                                    if(gram == ''){
                                        const price = ({{$prices->gram_in_inr}} - (({{$prices->gram_in_inr}} * 8)/100)) * 1;
                                        const discount = (price * {{$percent}})/100;
                                        if({{$goldDiscount?->type}} == 0){
                                            let finalPrice = price - discount;
                                            document.getElementById('22kGold').innerText = finalPrice.toFixed(2) + '/' + gram + 'gm';
                                        }else{
                                            let finalPrice = price + discount;
                                            document.getElementById('22kGold').innerText = finalPrice.toFixed(2) + '/' + gram + 'gm';
                                        }

                                        // document.getElementById('22kGold').innerText = finalPrice.toFixed(2);
                                    }else{
                                        const price = ({{$prices->gram_in_inr}} - (({{$prices->gram_in_inr}} * 8)/100)) * gram;
                                        const discount = (price * {{$percent}})/100;

                                        if({{$goldDiscount?->type}} == 0){
                                            const finalPrice = price - discount;
                                            document.getElementById('22kGold').innerText = finalPrice.toFixed(2) + '/' + gram + 'gm';
                                        }else{
                                            const finalPrice = price + discount;
                                            document.getElementById('22kGold').innerText = finalPrice.toFixed(2) + '/' + gram + 'gm';
                                        }
                                    }
                                " style="width: 100%;"/>
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
                                    $percent = $goldDiscount?->percent;

                                    $caretWisePrice = $prices->gram_in_inr - (($prices->gram_in_inr * 16.7)/100);

                                    $dis = ($caretWisePrice * $percent)/100;
                                    if($goldDiscount?->type == 0){
                                        $finalPrice = $caretWisePrice - $dis;
                                    }else{
                                        $finalPrice = $caretWisePrice + $dis;
                                    }
                                @endphp
                                <div class="mn-rate-cover"><span class="bgm e" id="20kGold">{{round($finalPrice, 2)}}/gm</span></div>
                            </td>
                            <td class="p-h ph product-rate" style="width: 25%; text-align: center;">
                                <input type="number" name="gram" min="1" onkeyup="
                                    let gram = this.value;
                                    if(gram == ''){
                                        const price = ({{$prices->gram_in_inr}} - (({{$prices->gram_in_inr}} * 16.7)/100)) * 1;
                                        const discount = (price * {{$percent}})/100;
                                        if({{$goldDiscount?->type}} == 0){
                                            let finalPrice = price - discount;
                                            document.getElementById('20kGold').innerText = finalPrice.toFixed(2) + '/' + gram + 'gm';
                                        }else{
                                            let finalPrice = price + discount;
                                            document.getElementById('20kGold').innerText = finalPrice.toFixed(2) + '/' + gram + 'gm';
                                        }

                                        // document.getElementById('20kGold').innerText = finalPrice.toFixed(2);
                                    }else{
                                        const price = ({{$prices->gram_in_inr}} - (({{$prices->gram_in_inr}} * 16.7)/100)) * gram;
                                        const discount = (price * {{$percent}})/100;

                                        if({{$goldDiscount?->type}} == 0){
                                            const finalPrice = price - discount;
                                            document.getElementById('20kGold').innerText = finalPrice.toFixed(2) + '/' + gram + 'gm';
                                        }else{
                                            const finalPrice = price + discount;
                                            document.getElementById('20kGold').innerText = finalPrice.toFixed(2) + '/' + grma + 'gm';
                                        }
                                    }
                                " style="width: 100%;"/>
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
                                    $percent = $goldDiscount?->percent;

                                    $caretWisePrice = $prices->gram_in_inr - (($prices->gram_in_inr * 21)/100);

                                    $dis = ($caretWisePrice * $percent)/100;
                                    if($goldDiscount?->type == 0){
                                        $finalPrice = $caretWisePrice - $dis;
                                    }else{
                                        $finalPrice = $caretWisePrice + $dis;
                                    }
                                @endphp
                                <div class="mn-rate-cover"><span class="bgm e" id="18kGold">{{round($finalPrice, 2)}}/gm</span></div>
                            </td>
                            <td class="p-h ph product-rate" style="width: 25%; text-align: center;">
                                <input type="number" name="gram" min="1" onkeyup="
                                    let gram = this.value;
                                    if(gram == ''){
                                        const price = ({{$prices->gram_in_inr}} - (({{$prices->gram_in_inr}} * 21)/100)) * 1;
                                        const discount = (price * {{$percent}})/100;
                                        if({{$goldDiscount?->type}} == 0){
                                            let finalPrice = price - discount;
                                            document.getElementById('18kGold').innerText = finalPrice.toFixed(2) + '/' + gram + 'gm';
                                        }else{
                                            let finalPrice = price + discount;
                                            document.getElementById('18kGold').innerText = finalPrice.toFixed(2) + '/' + gram + 'gm';
                                        }

                                        // document.getElementById('18kGold').innerText = finalPrice.toFixed(2);
                                    }else{
                                        const price = ({{$prices->gram_in_inr}} - (({{$prices->gram_in_inr}} * 21)/100)) * gram;
                                        const discount = (price * {{$percent}})/100;

                                        if({{$goldDiscount?->type}} == 0){
                                            const finalPrice = price - discount;
                                            document.getElementById('18kGold').innerText = finalPrice.toFixed(2) + '/' + gram + 'gm';
                                        }else{
                                            const finalPrice = price + discount;
                                            document.getElementById('18kGold').innerText = finalPrice.toFixed(2) + '/' + gram + 'gm';
                                        }
                                    }
                                " style="width: 100%;"/>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>


{{--                <div class="content-cover">--}}
{{--                    <table class="left-side-table">--}}
{{--                        <tbody>--}}
{{--                        <tr class="ligh-white">--}}
{{--                            <td class="p-h p0" style="width: 28%; text-align: center;">--}}
{{--                                <div class="main-product-cover">--}}
{{--                                    <h3>Gold</h3>--}}
{{--                                </div>--}}
{{--                            </td>--}}
{{--                            <td class="p-h ph product-rate" style="width: 25%; text-align: center;">--}}
{{--                                <div class="mn-rate-cover"><span class="bgm e">16K</span></div>--}}
{{--                            </td>--}}
{{--                            <td class="p-h ph product-rate" style="width: 25%; text-align: center;">--}}
{{--                                @php--}}
{{--                                    $percent = $discount?->percent;--}}

{{--                                    $caretWisePrice = $prices->gram_in_inr - (($prices->gram_in_inr * 33.1)/100);--}}

{{--                                    $dis = ($caretWisePrice * $percent)/100;--}}
{{--                                    if($discount?->type == 0){--}}
{{--                                        $finalPrice = $caretWisePrice - $dis;--}}
{{--                                    }else{--}}
{{--                                        $finalPrice = $caretWisePrice + $dis;--}}
{{--                                    }--}}
{{--                                @endphp--}}
{{--                                <div class="mn-rate-cover"><span class="bgm e" id="16kGold">{{round($finalPrice, 2)}}/gm</span></div>--}}
{{--                            </td>--}}
{{--                            <td class="p-h ph product-rate" style="width: 25%; text-align: center;">--}}
{{--                                <input type="number" name="gram" min="1" onkeyup="--}}
{{--                                    let gram = this.value;--}}
{{--                                    if(gram == ''){--}}
{{--                                        const price = ({{$prices->gram_in_inr}} - (({{$prices->gram_in_inr}} * 33.1)/100)) * 1;--}}
{{--                                        const discount = (price * {{$percent}})/100;--}}
{{--                                        if({{$discount?->type}} == 0){--}}
{{--                                            let finalPrice = price - discount;--}}
{{--                                            document.getElementById('16kGold').innerText = finalPrice.toFixed(2) + '/' + gram + 'gm';--}}
{{--                                        }else{--}}
{{--                                            let finalPrice = price + discount;--}}
{{--                                            document.getElementById('16kGold').innerText = finalPrice.toFixed(2) + '/' + gram + 'gm';--}}
{{--                                        }--}}

{{--                                        // document.getElementById('16kGold').innerText = finalPrice.toFixed(2);--}}
{{--                                    }else{--}}
{{--                                        const price = ({{$prices->gram_in_inr}} - (({{$prices->gram_in_inr}} * 33.1)/100)) * gram;--}}
{{--                                        const discount = (price * {{$percent}})/100;--}}

{{--                                        if({{$discount?->type}} == 0){--}}
{{--                                            const finalPrice = price - discount;--}}
{{--                                            document.getElementById('16kGold').innerText = finalPrice.toFixed(2) + '/' + gram + 'gm';--}}
{{--                                        }else{--}}
{{--                                            const finalPrice = price + discount;--}}
{{--                                            document.getElementById('16kGold').innerText = finalPrice.toFixed(2) + '/' + gram + 'gm';--}}
{{--                                        }--}}
{{--                                    }--}}
{{--                                " style="width: 100%;"/>--}}
{{--                            </td>--}}
{{--                        </tr>--}}
{{--                        </tbody>--}}
{{--                    </table>--}}
{{--                </div>--}}




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
                                    if ($silverDiscount?->percent){
                                    $percent = $silverDiscount?->percent;
                                    }else{
                                        $percent = 0;
                                    }
                                    $dis = ($prices->silver_gram_in_inr * $percent)/100;
                                    if($silverDiscount?->type == 0){
                                        $finalPrice = $prices->silver_gram_in_inr - $dis;
                                    }else{
                                        $finalPrice = $prices->silver_gram_in_inr + $dis;
                                    }
                                @endphp
                                <div class="mn-rate-cover"><span class="bgm e" id="24Silver">{{round($finalPrice, 2)}}/gm</span></div>
                            </td>
                            <td class="p-h ph product-rate" style="width: 25%; text-align: center;">
                                <input type="number" name="gram" min="1" onkeyup="
                                    let gram = this.value;
                                    if(gram == ''){
                                        const price = {{$prices->silver_gram_in_inr}} * 1;
                                        const discount = (price * {{$percent}})/100;
                                        if({{$silverDiscount?->type}} == 0){
                                            let finalPrice = price - discount;
                                            document.getElementById('24Silver').innerText = finalPrice.toFixed(2) + '/' + gram + 'gm';
                                        }else{
                                            let finalPrice = price + discount;
                                            document.getElementById('24Silver').innerText = finalPrice.toFixed(2) + '/' + gram + 'gm';
                                        }
                                            // document.getElementById('24Silver').innerText = finalPrice.toFixed(2);
                                    }else{
                                        const price = {{$prices->silver_gram_in_inr}} * gram;
                                        const discount = (price * {{$percent}})/100;

                                        if({{$silverDiscount?->type}} == 0){
                                            const finalPrice = price - discount;
                                            document.getElementById('24Silver').innerText = finalPrice.toFixed(2) + '/' + gram + 'gm';
                                        }else{
                                            const finalPrice = price + discount;
                                            document.getElementById('24Silver').innerText = finalPrice.toFixed(2) + '/' + gram + 'gm';
                                        }
                                    }
                                " style="width: 100%;"/>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>


{{--                <div class="content-cover">--}}
{{--                    <table class="left-side-table">--}}
{{--                        <tbody>--}}
{{--                        <tr class="ligh-white">--}}
{{--                            <td class="p-h p0" style="width: 28%; text-align: center;">--}}
{{--                                <div class="main-product-cover">--}}
{{--                                    <h3>Silver</h3>--}}
{{--                                </div>--}}
{{--                            </td>--}}
{{--                            <td class="p-h ph product-rate" style="width: 25%; text-align: center;">--}}
{{--                                <div class="mn-rate-cover"><span class="bgm e">22K</span></div>--}}
{{--                            </td>--}}
{{--                            <td class="p-h ph product-rate" style="width: 25%; text-align: center;">--}}
{{--                                @php--}}
{{--                                    if ($discount?->percent){--}}
{{--                                    $percent = $discount?->percent;--}}
{{--                                    }else{--}}
{{--                                        $percent = 0;--}}
{{--                                    }--}}
{{--                                    $caratWisePrice = $prices->silver_gram_in_inr - (($prices->silver_gram_in_inr * 8)/100);--}}
{{--                                    $dis = ($caratWisePrice * $percent)/100;--}}
{{--                                    if($discount?->type == 0){--}}
{{--                                        $finalPrice = $caratWisePrice - $dis;--}}
{{--                                    }else{--}}
{{--                                        $finalPrice = $caratWisePrice + $dis;--}}
{{--                                    }--}}
{{--                                @endphp--}}
{{--                                <div class="mn-rate-cover"><span class="bgm e" id="22Silver">{{round($finalPrice, 2)}}/gm</span></div>--}}
{{--                            </td>--}}
{{--                            <td class="p-h ph product-rate" style="width: 25%; text-align: center;">--}}
{{--                                <input type="number" name="gram" min="1" onkeyup="--}}
{{--                                    let gram = this.value;--}}
{{--                                    if(gram == ''){--}}
{{--                                        const price = ({{$prices->silver_gram_in_inr}} - (({{$prices->silver_gram_in_inr}} * 8)/100)) * 1;--}}
{{--                                        const discount = (price * {{$percent}})/100;--}}
{{--                                        if({{$discount?->type}} == 0){--}}
{{--                                            let finalPrice = price - discount;--}}
{{--                                            document.getElementById('22Silver').innerText = finalPrice.toFixed(2) + '/' + gram + 'gm';--}}
{{--                                        }else{--}}
{{--                                            let finalPrice = price + discount;--}}
{{--                                            document.getElementById('22Silver').innerText = finalPrice.toFixed(2) + '/' + gram + 'gm';--}}
{{--                                        }--}}

{{--                                        // document.getElementById('22Silver').innerText = finalPrice.toFixed(2);--}}
{{--                                    }else{--}}
{{--                                        const price = ({{$prices->silver_gram_in_inr}} - (({{$prices->silver_gram_in_inr}} * 8)/100)) * gram;--}}
{{--                                        const discount = (price * {{$percent}})/100;--}}

{{--                                        if({{$discount?->type}} == 0){--}}
{{--                                            const finalPrice = price - discount;--}}
{{--                                            document.getElementById('22Silver').innerText = finalPrice.toFixed(2) + '/' + gram + 'gm';--}}
{{--                                        }else{--}}
{{--                                            const finalPrice = price + discount;--}}
{{--                                            document.getElementById('22Silver').innerText = finalPrice.toFixed(2) + '/' + gram + 'gm';--}}
{{--                                        }--}}
{{--                                    }--}}
{{--                                " style="width: 100%;"/>--}}
{{--                            </td>--}}
{{--                        </tr>--}}
{{--                        </tbody>--}}
{{--                    </table>--}}
{{--                </div>--}}


{{--                <div class="content-cover">--}}
{{--                    <table class="left-side-table">--}}
{{--                        <tbody>--}}
{{--                        <tr class="ligh-white">--}}
{{--                            <td class="p-h p0" style="width: 28%; text-align: center;">--}}
{{--                                <div class="main-product-cover">--}}
{{--                                    <h3>Silver</h3>--}}
{{--                                </div>--}}
{{--                            </td>--}}
{{--                            <td class="p-h ph product-rate" style="width: 25%; text-align: center;">--}}
{{--                                <div class="mn-rate-cover"><span class="bgm e">20K</span></div>--}}
{{--                            </td>--}}
{{--                            <td class="p-h ph product-rate" style="width: 25%; text-align: center;">--}}
{{--                                @php--}}
{{--                                    if ($discount?->percent){--}}
{{--                                    $percent = $discount?->percent;--}}
{{--                                    }else{--}}
{{--                                        $percent = 0;--}}
{{--                                    }--}}
{{--                                    $caratWisePrice = $prices->silver_gram_in_inr - (($prices->silver_gram_in_inr * 17)/100);--}}
{{--                                    $dis = ($caratWisePrice * $percent)/100;--}}
{{--                                    if($discount?->type == 0){--}}
{{--                                        $finalPrice = $caratWisePrice - $dis;--}}
{{--                                    }else{--}}
{{--                                        $finalPrice = $caratWisePrice + $dis;--}}
{{--                                    }--}}
{{--                                @endphp--}}
{{--                                <div class="mn-rate-cover"><span class="bgm e" id="20Silver">{{round($finalPrice, 2)}}/gm</span></div>--}}
{{--                            </td>--}}
{{--                            <td class="p-h ph product-rate" style="width: 25%; text-align: center;">--}}
{{--                                <input type="number" name="gram" min="1" onkeyup="--}}
{{--                                    let gram = this.value;--}}
{{--                                    if(gram == ''){--}}
{{--                                        const price = ({{$prices->silver_gram_in_inr}} - (({{$prices->silver_gram_in_inr}} * 17)/100)) * 1;--}}
{{--                                        const discount = (price * {{$percent}})/100;--}}
{{--                                        if({{$discount?->type}} == 0){--}}
{{--                                            let finalPrice = price - discount;--}}
{{--                                            document.getElementById('20Silver').innerText = finalPrice.toFixed(2) + '/' + gram + 'gm';--}}
{{--                                        }else{--}}
{{--                                            let finalPrice = price + discount;--}}
{{--                                            document.getElementById('20Silver').innerText = finalPrice.toFixed(2) + '/' + gram + 'gm';--}}
{{--                                        }--}}
{{--                                            // document.getElementById('20Silver').innerText = finalPrice.toFixed(2);--}}
{{--                                    }else{--}}
{{--                                        const price = ({{$prices->silver_gram_in_inr}} - (({{$prices->silver_gram_in_inr}} * 17)/100)) * gram;--}}
{{--                                        const discount = (price * {{$percent}})/100;--}}

{{--                                        if({{$discount?->type}} == 0){--}}
{{--                                            const finalPrice = price - discount;--}}
{{--                                            document.getElementById('20Silver').innerText = finalPrice.toFixed(2) + '/' + gram + 'gm';--}}
{{--                                        }else{--}}
{{--                                            const finalPrice = price + discount;--}}
{{--                                            document.getElementById('20Silver').innerText = finalPrice.toFixed(2) + '/' + gram + 'gm';--}}
{{--                                        }--}}
{{--                                    }--}}
{{--                                " style="width: 100%;"/>--}}
{{--                            </td>--}}
{{--                        </tr>--}}
{{--                        </tbody>--}}
{{--                    </table>--}}
{{--                </div>--}}


{{--                <div class="content-cover">--}}
{{--                    <table class="left-side-table">--}}
{{--                        <tbody>--}}
{{--                        <tr class="ligh-white">--}}
{{--                            <td class="p-h p0" style="width: 28%; text-align: center;">--}}
{{--                                <div class="main-product-cover">--}}
{{--                                    <h3>Silver</h3>--}}
{{--                                </div>--}}
{{--                            </td>--}}
{{--                            <td class="p-h ph product-rate" style="width: 25%; text-align: center;">--}}
{{--                                <div class="mn-rate-cover"><span class="bgm e">18K</span></div>--}}
{{--                            </td>--}}
{{--                            <td class="p-h ph product-rate" style="width: 25%; text-align: center;">--}}
{{--                                @php--}}
{{--                                    if ($discount?->percent){--}}
{{--                                    $percent = $discount?->percent;--}}
{{--                                    }else{--}}
{{--                                        $percent = 0;--}}
{{--                                    }--}}
{{--                                    $caratWisePrice = $prices->silver_gram_in_inr - (($prices->silver_gram_in_inr * 25)/100);--}}
{{--                                    $dis = ($caratWisePrice * $percent)/100;--}}
{{--                                    if($discount?->type == 0){--}}
{{--                                        $finalPrice = $caratWisePrice - $dis;--}}
{{--                                    }else{--}}
{{--                                        $finalPrice = $caratWisePrice + $dis;--}}
{{--                                    }--}}
{{--                                @endphp--}}
{{--                                <div class="mn-rate-cover"><span class="bgm e" id="18Silver">{{round($finalPrice, 2)}}/gm</span></div>--}}
{{--                            </td>--}}
{{--                            <td class="p-h ph product-rate" style="width: 25%; text-align: center;">--}}
{{--                                <input type="number" name="gram" min="1" onkeyup="--}}
{{--                                    let gram = this.value;--}}
{{--                                    if(gram == ''){--}}
{{--                                        const price = ({{$prices->silver_gram_in_inr}} - (({{$prices->silver_gram_in_inr}} * 25)/100)) * 1;--}}
{{--                                        const discount = (price * {{$percent}})/100;--}}
{{--                                        if({{$discount?->type}} == 0){--}}
{{--                                            let finalPrice = price - discount;--}}
{{--                                            document.getElementById('18Silver').innerText = finalPrice.toFixed(2) + '/' + gram + 'gm';--}}
{{--                                        }else{--}}
{{--                                            let finalPrice = price + discount;--}}
{{--                                            document.getElementById('18Silver').innerText = finalPrice.toFixed(2) + '/' + gram + 'gm';--}}
{{--                                        }--}}
{{--                                            // document.getElementById('18Silver').innerText = finalPrice.toFixed(2);--}}
{{--                                    }else{--}}
{{--                                        const price = ({{$prices->silver_gram_in_inr}} - (({{$prices->silver_gram_in_inr}} * 25)/100)) * gram;--}}
{{--                                        const discount = (price * {{$percent}})/100;--}}

{{--                                        if({{$discount?->type}} == 0){--}}
{{--                                            const finalPrice = price - discount;--}}
{{--                                            document.getElementById('18Silver').innerText = finalPrice.toFixed(2) + '/' + gram + 'gm';--}}
{{--                                        }else{--}}
{{--                                            const finalPrice = price + discount;--}}
{{--                                            document.getElementById('18Silver').innerText = finalPrice.toFixed(2) + '/' + gram + 'gm';--}}
{{--                                        }--}}
{{--                                    }--}}
{{--                                " style="width: 100%;"/>--}}
{{--                            </td>--}}
{{--                        </tr>--}}
{{--                        </tbody>--}}
{{--                    </table>--}}
{{--                </div>--}}


{{--                <div class="content-cover">--}}
{{--                    <table class="left-side-table">--}}
{{--                        <tbody>--}}
{{--                        <tr class="ligh-white">--}}
{{--                            <td class="p-h p0" style="width: 28%; text-align: center;">--}}
{{--                                <div class="main-product-cover">--}}
{{--                                    <h3>Silver</h3>--}}
{{--                                </div>--}}
{{--                            </td>--}}
{{--                            <td class="p-h ph product-rate" style="width: 25%; text-align: center;">--}}
{{--                                <div class="mn-rate-cover"><span class="bgm e">16K</span></div>--}}
{{--                            </td>--}}
{{--                            <td class="p-h ph product-rate" style="width: 25%; text-align: center;">--}}
{{--                                @php--}}
{{--                                    if ($discount?->percent){--}}
{{--                                    $percent = $discount?->percent;--}}
{{--                                    }else{--}}
{{--                                        $percent = 0;--}}
{{--                                    }--}}
{{--                                    $caratWisePrice = $prices->silver_gram_in_inr - (($prices->silver_gram_in_inr * 33)/100);--}}
{{--                                    $dis = ($caratWisePrice * $percent)/100;--}}
{{--                                    if($discount?->type == 0){--}}
{{--                                        $finalPrice = $caratWisePrice - $dis;--}}
{{--                                    }else{--}}
{{--                                        $finalPrice = $caratWisePrice + $dis;--}}
{{--                                    }--}}
{{--                                @endphp--}}
{{--                                <div class="mn-rate-cover"><span class="bgm e" id="16Silver">{{round($finalPrice, 2)}}/gm</span></div>--}}
{{--                            </td>--}}
{{--                            <td class="p-h ph product-rate" style="width: 25%; text-align: center;">--}}
{{--                                <input type="number" name="gram" min="1" onkeyup="--}}
{{--                                    let gram = this.value;--}}
{{--                                    if(gram == ''){--}}
{{--                                        const price = ({{$prices->silver_gram_in_inr}} - (({{$prices->silver_gram_in_inr}} * 33)/100)) * 1;--}}
{{--                                        const discount = (price * {{$percent}})/100;--}}
{{--                                        if({{$discount?->type}} == 0){--}}
{{--                                            let finalPrice = price - discount;--}}
{{--                                            document.getElementById('16Silver').innerText = finalPrice.toFixed(2) + '/' + gram + 'gm';--}}
{{--                                        }else{--}}
{{--                                            let finalPrice = price + discount;--}}
{{--                                            document.getElementById('16Silver').innerText = finalPrice.toFixed(2) + '/' + gram + 'gm';--}}
{{--                                        }--}}
{{--                                            // document.getElementById('16Silver').innerText = finalPrice.toFixed(2);--}}
{{--                                    }else{--}}
{{--                                        const price = ({{$prices->silver_gram_in_inr}} - (({{$prices->silver_gram_in_inr}} * 33)/100)) * gram;--}}
{{--                                        const discount = (price * {{$percent}})/100;--}}

{{--                                        if({{$discount?->type}} == 0){--}}
{{--                                            const finalPrice = price - discount;--}}
{{--                                            document.getElementById('16Silver').innerText = finalPrice.toFixed(2) + '/' + gram + 'gm';--}}
{{--                                        }else{--}}
{{--                                            const finalPrice = price + discount;--}}
{{--                                            document.getElementById('16Silver').innerText = finalPrice.toFixed(2) + '/' + gram + 'gm';--}}
{{--                                        }--}}
{{--                                    }--}}
{{--                                " style="width: 100%;"/>--}}
{{--                            </td>--}}
{{--                        </tr>--}}
{{--                        </tbody>--}}
{{--                    </table>--}}
{{--                </div>--}}
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
                                        <td><span class="e">{{$prices->ounce_price_bid}}</span></td>
                                        <td><span class="e">{{$prices->ounce_price_ask}}</span></td>
                                        <td><span class="e">{{$prices->ounce_price_usd_today_low}} / {{$prices->ounce_price_usd_today_high}}</span></td>
                                    </tr>
                                    <tr>
                                        <td><span>SILVER $</span></td>
                                        <td><span class="e">{{round($silverPrices->silver_ounce_price_bid_usd, 2)}}</span></td>
                                        <td><span class="e">{{round($silverPrices->silver_ounce_price_ask_usd, 2)}}</span></td>
                                        <td><span class="e">{{round($silverPrices->silver_ounce_price_usd_today_high_usd, 2)}} / {{round($silverPrices->silver_ounce_price_usd_today_low_usd, 2)}}</span></td>
                                    </tr>

                                    <tr>
                                        <td><span>INR ₹ </span></td>
                                        <td><span class="e" colspan="2">{{$prices->usd_to_inr}}</span></td>
                                        <td><span class="e">{{$prices->gram_in_usd}}</span></td>
                                        <td><span class="e">{{$prices->usd_to_inr}}/{{$prices->gram_in_usd}}</span></td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
{{--            <div class="row">--}}
{{--                <div class="col-md-12 col-sm-12 mt-2">--}}
{{--                    <div class="mheader" id="divSpotHd">--}}
{{--                        <table class="p-title-cover">--}}
{{--                            <tbody>--}}
{{--                            <tr>--}}
{{--                                <td><span>SPOT</span></td>--}}
{{--                                <td><span>BID</span></td>--}}
{{--                                <td><span>ASK</span></td>--}}
{{--                                <td><span>HIGH / LOW</span></td>--}}
{{--                            </tr>--}}
{{--                            </tbody>--}}
{{--                        </table>--}}
{{--                    </div>--}}
{{--                    <div id="divSpot">--}}
{{--                        <div class="mrt">--}}
{{--                            <div class="pp">--}}
{{--                                <table>--}}
{{--                                    <tbody>--}}
{{--                                    <tr>--}}
{{--                                        <td><span>GOLD $</span></td>--}}
{{--                                        <td><span class="l">2344.31</span></td>--}}
{{--                                        <td><span class="h">2344.64</span></td>--}}
{{--                                        <td><span class="e">2347.60 / 2332.44</span></td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td><span>SILVER $</span></td>--}}
{{--                                        <td><span class="e">30.86</span></td>--}}
{{--                                        <td><span class="e">30.88</span></td>--}}
{{--                                        <td><span class="e">30.91 / 30.35</span></td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td><span>INR $</span></td>--}}
{{--                                        <td><span class="e">83.0800</span></td>--}}
{{--                                        <td><span class="e">83.1300</span></td>--}}
{{--                                        <td><span class="e">83.1350 / 83.0410</span></td>--}}
{{--                                    </tr>--}}
{{--                                    </tbody>--}}
{{--                                </table>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="row">--}}
{{--                <div class="col-md-12 col-sm-12 mt-2">--}}
{{--                    <div class="mheader" id="divNextHd">--}}
{{--                        <table class="p-title-cover">--}}
{{--                            <tbody>--}}
{{--                            <tr>--}}
{{--                                <td><span>NEXT</span></td>--}}
{{--                                <td><span>BID</span></td>--}}
{{--                                <td><span>ASK</span></td>--}}
{{--                                <td><span>HIGH / LOW</span></td>--}}
{{--                            </tr>--}}
{{--                            </tbody>--}}
{{--                        </table>--}}
{{--                    </div>--}}
{{--                    <div id="divNext">--}}
{{--                        <div class="mrt">--}}
{{--                            <div class="pp">--}}
{{--                                <table>--}}
{{--                                    <tbody>--}}
{{--                                    <tr>--}}
{{--                                        <td><span>GOLD NEXT</span></td>--}}
{{--                                        <td><span class="e">71976</span></td>--}}
{{--                                        <td><span class="e">71990</span></td>--}}
{{--                                        <td><span class="e">72187 / 71725</span></td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td><span>SILVER NEXT</span></td>--}}
{{--                                        <td><span class="e">93872</span></td>--}}
{{--                                        <td><span class="e">93894</span></td>--}}
{{--                                        <td><span class="e">93936 / 93200</span></td>--}}
{{--                                    </tr>--}}
{{--                                    </tbody>--}}
{{--                                </table>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </div>
</div>


<marquee class="marquee2">Shristi Jewellers Live Rates provides Gold &amp; Silver prices obtained from various
    sources believed to be reliable, but we do not guarantee their accuracy. Our gold &amp; silver price data are
    provided without warranty or claim of reliability. It is accepted by the site visitor on the condition that
    errors or omissions shall not be made the basis for any claim, demand or cause for action. </marquee>

<script>
    function clock(){
        let hours = document.getElementById('hours');
        let minutes = document.getElementById('minutes');
        let period = document.getElementById('period');
        let seconds = document.getElementById('seconds');

        let d = new Date();

        let h = d.getHours();
        let m = d.getMinutes();
        let s = d.getSeconds();



        let ampm = h >= 12 ? "PM" : "AM";

        if( h > 12 ){
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
    setInterval(clock,1000);


</script>

@endsection




@extends('frontLayouts.main', ['title' => 'Live Rate'])
@section('content')



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
                                <div class="mn-rate-cover"><span class="bgm e" id="24kGold">{{$goldPrice['price_gram_24k']}}</span></div>
                            </td>
                            <td class="p-h ph product-rate">
                                <select name="gram" onchange="
                                    const price = {{$goldPrice['price_gram_24k']}} * this.value;
                                    document.getElementById('24kGold').innerText = price;
                                ">
                                    <option value="1">1 gram</option>
                                    <option value="2">2 gram</option>
                                    <option value="3">3 gram</option>
                                    <option value="4">4 gram</option>
                                    <option value="5">5 gram</option>
                                </select>
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
                                <div class="mn-rate-cover"><span class="bgm e" id="22kGold">{{$goldPrice['price_gram_22k']}}</span></div>
                            </td>
                            <td class="p-h ph product-rate">
                                <select name="gram" onchange="
                                    const price = {{$goldPrice['price_gram_22k']}} * this.value;
                                    document.getElementById('22kGold').innerText = price;
                                ">
                                    <option value="1">1 gram</option>
                                    <option value="2">2 gram</option>
                                    <option value="3">3 gram</option>
                                    <option value="4">4 gram</option>
                                    <option value="5">5 gram</option>
                                </select>
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
                                <div class="mn-rate-cover"><span class="bgm e" id="21kGold">{{$goldPrice['price_gram_21k']}}</span></div>
                            </td>
                            <td class="p-h ph product-rate">
                                <select name="gram" onchange="
                                    const price = {{$goldPrice['price_gram_21k']}} * this.value;
                                    document.getElementById('21kGold').innerText = price;
                                ">
                                    <option value="1">1 gram</option>
                                    <option value="2">2 gram</option>
                                    <option value="3">3 gram</option>
                                    <option value="4">4 gram</option>
                                    <option value="5">5 gram</option>
                                </select>
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
                                <div class="mn-rate-cover"><span class="bgm e" id="20kGold">{{$goldPrice['price_gram_20k']}}</span></div>
                            </td>
                            <td class="p-h ph product-rate">
                                <select name="gram" onchange="
                                    const price = {{$goldPrice['price_gram_20k']}} * this.value;
                                    document.getElementById('20kGold').innerText = price;
                                ">
                                    <option value="1">1 gram</option>
                                    <option value="2">2 gram</option>
                                    <option value="3">3 gram</option>
                                    <option value="4">4 gram</option>
                                    <option value="5">5 gram</option>
                                </select>
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
                                <div class="mn-rate-cover"><span class="bgm e" id="18kGold">{{$goldPrice['price_gram_18k']}}</span></div>
                            </td>
                            <td class="p-h ph product-rate">
                                <select name="gram" onchange="
                                    const price = {{$goldPrice['price_gram_18k']}} * this.value;
                                    document.getElementById('18kGold').innerText = price;
                                ">
                                    <option value="1">1 gram</option>
                                    <option value="2">2 gram</option>
                                    <option value="3">3 gram</option>
                                    <option value="4">4 gram</option>
                                    <option value="5">5 gram</option>
                                </select>
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
                                <div class="mn-rate-cover"><span class="bgm e" id="16kGold">{{$goldPrice['price_gram_16k']}}</span></div>
                            </td>
                            <td class="p-h ph product-rate">
                                <select name="gram" onchange="
                                    const price = {{$goldPrice['price_gram_16k']}} * this.value;
                                    document.getElementById('16kGold').innerText = price;
                                ">
                                    <option value="1">1 gram</option>
                                    <option value="2">2 gram</option>
                                    <option value="3">3 gram</option>
                                    <option value="4">4 gram</option>
                                    <option value="5">5 gram</option>
                                </select>
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
                                <div class="mn-rate-cover"><span class="bgm e" id="14kGold">{{$goldPrice['price_gram_14k']}}</span></div>
                            </td>
                            <td class="p-h ph product-rate">
                                <select name="gram" onchange="
                                    const price = {{$goldPrice['price_gram_14k']}} * this.value;
                                    document.getElementById('14kGold').innerText = price;
                                ">
                                    <option value="1">1 gram</option>
                                    <option value="2">2 gram</option>
                                    <option value="3">3 gram</option>
                                    <option value="4">4 gram</option>
                                    <option value="5">5 gram</option>
                                </select>
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
                                    <h3>Silver</h3>
                                </div>
                            </td>
                            <td class="p-h ph product-rate">
                                <div class="mn-rate-cover"><span class="bgm e">24K</span></div>
                            </td>
                            <td class="p-h ph product-rate">
                                <div class="mn-rate-cover"><span class="bgm e" id="24kSilver">{{$silverPrice['price_gram_24k']}}</span></div>
                            </td>
                            <td class="p-h ph product-rate">
                                <select name="gram" onchange="
                                    const price = {{$silverPrice['price_gram_24k']}} * this.value;
                                    document.getElementById('24kSilver').innerText = price;
                                ">
                                    <option value="1">1 gram</option>
                                    <option value="2">2 gram</option>
                                    <option value="3">3 gram</option>
                                    <option value="4">4 gram</option>
                                    <option value="5">5 gram</option>
                                </select>
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
                                    <h3>Silver</h3>
                                </div>
                            </td>
                            <td class="p-h ph product-rate">
                                <div class="mn-rate-cover"><span class="bgm e">22K</span></div>
                            </td>
                            <td class="p-h ph product-rate">
                                <div class="mn-rate-cover"><span class="bgm e" id="22kSilver">{{$silverPrice['price_gram_22k']}}</span></div>
                            </td>
                            <td class="p-h ph product-rate">
                                <select name="gram" onchange="
                                    const price = {{$silverPrice['price_gram_22k']}} * this.value;
                                    document.getElementById('22kSilver').innerText = price;
                                ">
                                    <option value="1">1 gram</option>
                                    <option value="2">2 gram</option>
                                    <option value="3">3 gram</option>
                                    <option value="4">4 gram</option>
                                    <option value="5">5 gram</option>
                                </select>
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
                                    <h3>Silver</h3>
                                </div>
                            </td>
                            <td class="p-h ph product-rate">
                                <div class="mn-rate-cover"><span class="bgm e">21K</span></div>
                            </td>
                            <td class="p-h ph product-rate">
                                <div class="mn-rate-cover"><span class="bgm e" id="21kSilver">{{$silverPrice['price_gram_21k']}}</span></div>
                            </td>
                            <td class="p-h ph product-rate">
                                <select name="gram" onchange="
                                    const price = {{$silverPrice['price_gram_21k']}} * this.value;
                                    document.getElementById('21kSilver').innerText = price;
                                ">
                                    <option value="1">1 gram</option>
                                    <option value="2">2 gram</option>
                                    <option value="3">3 gram</option>
                                    <option value="4">4 gram</option>
                                    <option value="5">5 gram</option>
                                </select>
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
                                    <h3>Silver</h3>
                                </div>
                            </td>
                            <td class="p-h ph product-rate">
                                <div class="mn-rate-cover"><span class="bgm e">20K</span></div>
                            </td>
                            <td class="p-h ph product-rate">
                                <div class="mn-rate-cover"><span class="bgm e" id="20kSilver">{{$silverPrice['price_gram_20k']}}</span></div>
                            </td>
                            <td class="p-h ph product-rate">
                                <select name="gram" onchange="
                                    const price = {{$silverPrice['price_gram_20k']}} * this.value;
                                    document.getElementById('20kSilver').innerText = price;
                                ">
                                    <option value="1">1 gram</option>
                                    <option value="2">2 gram</option>
                                    <option value="3">3 gram</option>
                                    <option value="4">4 gram</option>
                                    <option value="5">5 gram</option>
                                </select>
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
                                    <h3>Silver</h3>
                                </div>
                            </td>
                            <td class="p-h ph product-rate">
                                <div class="mn-rate-cover"><span class="bgm e">18K</span></div>
                            </td>
                            <td class="p-h ph product-rate">
                                <div class="mn-rate-cover"><span class="bgm e" id="18kSilver">{{$silverPrice['price_gram_18k']}}</span></div>
                            </td>
                            <td class="p-h ph product-rate">
                                <select name="gram" onchange="
                                    const price = {{$silverPrice['price_gram_18k']}} * this.value;
                                    document.getElementById('18kSilver').innerText = price;
                                ">
                                    <option value="1">1 gram</option>
                                    <option value="2">2 gram</option>
                                    <option value="5">5 gram</option>
                                    <option value="8">8 gram</option>
                                    <option value="10">10 gram</option>
                                    <option value="12">12 gram</option>
                                    <option value="15">15 gram</option>
                                </select>
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


@endsection

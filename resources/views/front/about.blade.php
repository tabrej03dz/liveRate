@extends('frontLayouts.main', ['title' => 'Live Rate'])
@section('content')

    <style>
        h1 {
            text-align: center;
            color: goldenrod;
            margin-top: 20px;
            font-size: 2em;
            /* Adjust the font size as needed */
        }

        /* Style for about content */
        .about-content {
            border: 2px solid goldenrod;
            padding: 20px;
            /* Add padding for better spacing */
            margin: 20px auto;
            /* Center the div horizontally */
            max-width: 1000px;
            /* Set a maximum width */
            text-align: center;
            /* Center the text inside the div */
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .about-content {
                padding: 15px;
                /* Reduce padding for smaller screens */
            }
        }

        @media (max-width: 576px) {
            h1 {
                font-size: 1.5em;
                /* Reduce font size for smaller screens */
            }

            .about-content {
                padding: 10px;
                /* Further reduce padding for smaller screens */
            }
        }

        @media (max-width: 375px) {
            h1 {
                font-size: 1.2em;
                /* Further reduce font size for smaller screens */
            }

            .about-content {
                padding: 5px;
                /* Further reduce padding for smaller screens */
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
    <h1>ABOUT US</h1>
    <div class="about-content">
        @forelse($abouts as $about)
            <h3>{{$about->title}}</h3>
            <p>{!! $about->description !!}</p>
        @empty
            <P>Coming Soon.........</P>
        @endforelse
    </div>
</main>

<!--Main End-->




<!--Footer Start-->

<marquee class="marquee2">Shristi Jewellers Live Rates provides Gold &amp; Silver prices obtained from various
    sources believed to be reliable, but we do not guarantee their accuracy. Our gold &amp; silver price data are
    provided without warranty or claim of reliability. It is accepted by the site visitor on the condition that
    errors or omissions shall not be made the basis for any claim, demand or cause for action. </marquee>

@endsection

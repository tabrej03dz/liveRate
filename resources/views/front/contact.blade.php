@extends('frontLayouts.main')
@section('content')

    <style>
        .contact-us {
            text-align: center;
            padding: 50px 20px;
        }

        .contact-us h2 {
            color: #b38b00;
            margin-bottom: 20px;
            font-size: 40px;
        }

        .contact-container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            align-items: stretch;
        }

        .contact-box {
            background-color: white;
            border: 10px solid #b38b00;
            border-radius: 10px;
            padding: 20px;
            margin: 10px;
            width: 250px;
            display: flex;
            flex-direction: column;
            align-items: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            box-sizing: border-box;
        }

        .contact-box .icon {
            background-color: #b38b00;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 10px;
        }

        .contact-box .icon img {
            width: 24px;
            height: 24px;
        }

        .contact-box h3 {
            color: #b38b00;
            margin-bottom: 10px;
        }

        .contact-box p {
            color: #333;
            margin: 5px 0;
            text-align: center;
        }

        .contact-box p:last-child {
            margin-bottom: 0;
        }

        @media (max-width: 768px) {
            .contact-container {
                flex-direction: column;
                align-items: center;
            }

            .contact-box {
                width: 100%;
                max-width: 300px;
            }
        }

        /*Contact Us End*/

        /*Form Start*/

        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap');

        .form-container-main {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .form-container {
            background-color: #fff;
            border: 10px solid #d8a941;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 1000px;
            width: 100%;
        }

        .form-header {
            background-color: #d8a941;
            color: #fff;
            padding: 15px;
            text-align: center;
            font-weight: bold;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
        }

        .form-body {
            padding: 20px;
        }

        .form-row {
            display: flex;
            flex-wrap: wrap;
            margin-bottom: 15px;
        }

        .form-group {
            position: relative;
            width: 50%;
            padding: 0 10px;
            margin-bottom: 15px;
        }

        .form-input,
        .form-textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
            font-family: inherit;
            resize: none;
        }

        .form-input:focus,
        .form-textarea:focus {
            outline: none;
            border-color: #d8a941;
            box-shadow: 0 0 5px rgba(216, 169, 65, 0.3);
        }

        .form-label {
            position: absolute;
            top: -8px;
            left: 15px;
            background-color: #fff;
            padding: 0 5px;
            font-size: 12px;
            color: #666;
        }

        .form-submit {
            background-color: #d8a941;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .form-submit:hover {
            background-color: #c59a3a;
        }

        @media (max-width: 480px) {
            .form-group {
                width: 100%;
            }
        }

        /*Form End*/



        .contact-icon-container-main {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .contact-icon-container {
            background-color: #fff;
            border: 10px solid goldenrod;
            border-radius: 10px;
            padding: 40px 20px;
            max-width: 800px;
            width: 100%;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .contact-header h1 {
            margin: 0 0 30px;
            font-size: 28px;
            color: goldenrod;
            text-transform: uppercase;
            letter-spacing: 2px;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1);
        }

        .social-icons {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }

        .icon {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            margin: 10px;
            font-size: 24px;
            color: #fff;
            background-color: goldenrod;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            transition: background-color 0.3s ease;
            text-decoration: none;
        }

        .icon:hover {
            background-color: #b38a40;
        }

        .facebook {
            background-color: #3b5998;
        }

        .twitter {
            background-color: #1da1f2;
        }

        .instagram {
            background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285aeb 90%);
        }

        .linkedin {
            background-color: #0077b5;
        }

        .youtube {
            background-color: #ff0000;
        }

        @media (max-width: 480px) {
            .contact-icon-container-main {
                width: 95%;
            }

            .contact-icon-container {
                padding: 30px 15px;
            }

            .contact-header h1 {
                font-size: 24px;
            }

            .icon {
                font-size: 20px;
                width: 40px;
                height: 40px;
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

    <div class="contact-us">
        <h2>CONTACT US</h2>
        <div class="contact-container">
            <div class="contact-box">
                <div class="icon">
                    <img src="{{asset('asset/images/phone-solid.svg')}}" alt="Phone Icon">
                </div>
                <h3>NUMBER</h3>
                <p>{{ $contact->phone }}</p>
                <p>{{ $contact->phone1 }}</p>
            </div>
            <div class="contact-box">
                <div class="icon">
                    <img src="{{asset('asset/images/location-dot-solid.svg')}}" alt="Location Icon">
                </div>
                <h3>ADDRESS</h3>
                <p>{!! $contact->full_address !!}</p>
            </div>
            <div class="contact-box">
                <div class="icon">
                    <img src="{{asset('asset/images/envelope-solid.svg')}}" alt="Email Icon">
                </div>
                <h3>E-MAIL</h3>
                <p>{{ $contact->email }}</p>
            </div>
        </div>
    </div>

    <!--Form Start-->

    <div class="form-container-main">
        <div class="form-container">
            <div class="form-header">INQUIRY FORM</div>
            <div class="form-body">
                <div class="form-row">
                    <div class="form-group">
                        <input type="text" placeholder="Please enter your Name" class="form-input" required>
                        <span class="form-label">Name *</span>
                    </div>
                    <div class="form-group">
                        <input type="email" placeholder="Please enter your email" class="form-input" required>
                        <span class="form-label">Email *</span>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <input type="tel" placeholder="Please enter your phone" class="form-input" required>
                        <span class="form-label">Phone *</span>
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Please enter Subject" class="form-input">
                        <span class="form-label">Subject</span>
                    </div>
                </div>
                <div class="form-group">
                    <textarea placeholder="Message for me *" class="form-textarea" required></textarea>
                    <span class="form-label">Message *</span>
                </div>
                <div class="form-row">
                    <button type="submit" class="form-submit">Submit</button>
                </div>
            </div>
        </div>
    </div>

    <!--Form End-->


    <!--contact-icon-container Start-->
    <div class="contact-icon-container-main">
        <div class="contact-icon-container">
            <div class="contact-header">
                <h1>follow us</h1>
                <div class="social-icons">
                    <a href="#" class="icon facebook">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="icon twitter">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="https://www.instagram.com/shristijewellers?igsh=Z3ZhaGNzeG1oMWtw"
                       class="icon instagram">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="icon linkedin">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="#" class="icon youtube">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!--contact-icon-container End-->

</main>

<!--Main End-->

@endsection

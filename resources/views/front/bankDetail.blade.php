@extends('frontLayouts.main')
@section('content')

    <style>
        .bank-text {
            margin-top: 20px;
            text-align: center;
            color: goldenrod;
            font-size: 40px;
            font-weight: bold;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        }

        .bank-container-main {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .bank-container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            border: 2px solid goldenrod;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin-top: 50px;
            width: 100%;
            position: relative;
        }

        img {
            max-width: 200px;
            height: auto;
            display: block;
            margin: 0 auto 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .details {
            font-size: 16px;
            padding: 20px;
            border-radius: 5px;
            background-color: #f9f9f9;
            box-shadow: inset 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .row {
            display: flex;
            margin-bottom: 15px;
            align-items: center;
        }

        .label {
            font-weight: bold;
            width: 150px;
            color: #555;
        }

        .value {
            flex: 1;
            color: #333;
        }

        @media (max-width: 480px) {
            .label {
                width: 120px;
            }

            .bank-container {
                padding: 20px;
            }
        }
    </style>

<!--Main Start-->

<main>

    <h2 class="bank-text">BANK DETAILS</h2>

    <div class="bank-container-main">

        @foreach($banks as $bank)

            <div class="bank-container">
                <img src="{{asset('storage/'. $bank->bank_logo)}}" alt="IDFC FIRST Bank Logo">
                <div class="details">
                    <div class="row">
                        <span class="label">Bank Name</span>
                        <span class="value">: {{$bank->bank_name}}</span>
                    </div>
                    <div class="row">
                        <span class="label">Account Holder Name</span>
                        <span class="value">: {{ $bank->account_holder_name }}</span>
                    </div>
                    <div class="row">
                        <span class="label">Account Number</span>
                        <span class="value">: {{$bank->account_number}}</span>
                    </div>
                    <div class="row">
                        <span class="label">Ifsc Code</span>
                        <span class="value">: {{ $bank->ifsc_code }}</span>
                    </div>
                    <div class="row">
                        <span class="label">Swift Code</span>
                        <span class="value">: IDFBINBBMUM</span>
                    </div>
                    <div class="row">
                        <span class="label">Branch Name</span>
                        <span class="value">: {{$bank->branch_name}}</span>
                    </div>
                </div>
            </div>
        @endforeach


    </div>

</main>

<!--Main End-->




<!--Footer Start-->

<marquee class="marquee2">Shristi Jewellers Live Rates provides Gold &amp; Silver prices obtained from various
    sources believed to be reliable, but we do not guarantee their accuracy. Our gold &amp; silver price data are
    provided without warranty or claim of reliability. It is accepted by the site visitor on the condition that
    errors or omissions shall not be made the basis for any claim, demand or cause for action. </marquee>



@endsection

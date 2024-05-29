@extends('frontLayouts.main')
@section('content')

    <style>
        .update-container {
            max-width: 1000px;
            /* Set a maximum width */
            margin: 0 auto;
            /* Center the container */
            padding: 20px;
            /* Add padding */
        }

        .update-us {
            text-align: center;
            margin-bottom: 20px;
        }

        .update-us h1 {
            color: #d4af37;
            /* Golden color */
            font-size: 2.5em;
            /* Large font size */
            text-align: center;
            /* Center the text */
        }

        .date-search {
            display: flex;
            justify-content: center;
            /* Center the date search inputs and button */
            gap: 10px;
            /* Space between inputs and button */
            margin-top: 10px;
        }

        .date-search input[type="text"] {
            padding: 10px;
            /* Add padding */
            border: 1px solid #ccc;
            /* Light gray border */
            border-radius: 5px;
            /* Rounded corners */
            width: 120px;
            /* Fixed width */
            text-align: center;
            /* Center the text */
            font-size: 1em;
            /* Set font size */
        }

        .date-search button {
            padding: 10px 15px;
            /* Add padding */
            background-color: #d4af37;
            /* Golden background */
            border: none;
            /* Remove border */
            border-radius: 5px;
            /* Rounded corners */
            color: white;
            /* White text color */
            cursor: pointer;
            /* Pointer cursor on hover */
            font-size: 1em;
            /* Set font size */
        }

        .updates {
            margin-top: 20px;
        }

        .update {
            background-color: white;
            /* White background */
            border: 1px solid #d4af37;
            /* Golden border */
            border-radius: 10px;
            /* Rounded corners */
            margin-bottom: 20px;
            /* Space below each update */
            padding: 15px;
            /* Add padding */
        }

        .update-info {
            display: flex;
            justify-content: center;
            /* Center the text */
            align-items: center;
            /* Center align items */
            background-color: #d4af37;
            /* Golden background */
            padding: 15px;
            /* Add padding */
            border-radius: 10px 10px 0 0;
            /* Rounded top corners */
        }

        .update-info h2 {
            color: white;
            /* White text color */
            margin: 0;
            /* Remove margin */
            font-size: 1.5em;
            /* Set font size */
            text-align: center;
            /* Center the text */
        }

        .update p {
            padding: 15px;
            /* Add padding */
            margin: 0;
            /* Remove margin */
            font-size: 1.2em;
            /* Set font size */
        }

        .update span {
            color: #d4af37;
            /* Golden text color */
            display: block;
            /* Block display */
            text-align: center;
            /* Center the text */
            margin-top: 10px;
            /* Space above */
            font-size: 18px;
            /* Set font size */
            font-weight: bold;
        }

        @media (max-width: 768px) {
            .update-container {
                padding: 10px;
            }

            .update-us h1 {
                font-size: 2em;
                /* Smaller font size on smaller screens */
            }

            .date-search {
                flex-direction: column;
                /* Stack elements vertically */
                align-items: center;
            }

            .date-search input[type="text"],
            .date-search button {
                font-size: 0.9em;
                padding: 8px;
                width: 100%;
                /* Full width */
                margin-bottom: 10px;
                /* Space between inputs */
            }

            .update-info h2 {
                font-size: 1.2em;
                /* Smaller font size */
            }

            .update p {
                font-size: 1em;
                /* Smaller font size */
            }

            .update span {
                font-size: 0.8em;
                /* Smaller font size */
            }
        }

        @media (max-width: 480px) {
            .date-search {
                flex-direction: column;
                gap: 5px;
                /* Reduce gap */
            }

            .date-search input[type="text"],
            .date-search button {
                width: 80%;
                font-size: 0.8em;
                padding: 6px;
            }

            .update-us h1 {
                font-size: 1.5em;
                /* Smaller font size */
            }

            .update-info h2 {
                font-size: 1em;
                /* Smaller font size */
            }

            .update p {
                font-size: 0.9em;
                /* Smaller font size */
            }

            .update span {
                font-size: 0.7em;
                /* Smaller font size */
            }
        }
    </style>
<!--Header End-->



<!--Main Start-->

<main>

    <div class="update-container">
        <div class="update-us">
            <h1>UPDATES</h1>
            <div class="date-search">
                <input type="text" placeholder="28/05/2024">
                <input type="text" placeholder="28/05/2024">
                <button>Search</button>
            </div>
        </div>
        <div class="updates">

            @foreach($updates as $update)
                <div class="update">
                    <div class="update-info">
                        <h2>{{$update->title}}</h2>
                    </div>
                    <span>{{ \Carbon\Carbon::parse($update->date)->format('F jS, Y') }}</span>
                    <p>{{ $update->description }}</p>
                </div>
            @endforeach
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

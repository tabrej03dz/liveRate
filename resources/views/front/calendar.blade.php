@extends('frontLayouts.main')
@section('content')

    <style>
        .calendar-container {
            max-width: 800px;
            margin: 0 auto;
            margin-top: 20px;
        }

        .calendar {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 5px;
        }

        .calendar .day {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: center;
        }

        .calendar .gold-rate {
            color: goldenrod;
            font-weight: bold;
        }

        .calendar .silver-rate {
            color: silver;
            font-weight: bold;
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

    <div class="calendar-container">
        <div class="calendar"></div>
    </div>

</main>

<!--Main End-->




<!--Footer Start-->

<marquee class="marquee2">Shristi Jewellers Live Rates provides Gold &amp; Silver prices obtained from various
    sources believed to be reliable, but we do not guarantee their accuracy. Our gold &amp; silver price data are
    provided without warranty or claim of reliability. It is accepted by the site visitor on the condition that
    errors or omissions shall not be made the basis for any claim, demand or cause for action. </marquee>


<script>
    // Example rates data for demonstration
    const ratesData = {
        "2024-06-01": { gold: "50,000", silver: "2,000" },
        "2024-06-02": { gold: "50,100", silver: "2,050" },
        // Add more rates data for other dates as needed
    };

    // Function to render the calendar with rates
    function renderCalendar() {
        const calendarContainer = document.querySelector('.calendar');

        const today = new Date();
        const currentYear = today.getFullYear();
        const currentMonth = today.getMonth();

        const daysInMonth = new Date(currentYear, currentMonth + 1, 0).getDate();

        let calendarHTML = '';
        for (let day = 1; day <= daysInMonth; day++) {
            const dateStr = `${currentYear}-${currentMonth + 1}-${day}`;
            const rateData = ratesData[dateStr];

            calendarHTML += `
            <div class="day">
                <div>${day}</div>
                <div class="gold-rate">${rateData ? rateData.gold : 'N/A'}</div>
                <div class="silver-rate">${rateData ? rateData.silver : 'N/A'}</div>
            </div>
        `;
        }

        calendarContainer.innerHTML = calendarHTML;
    }

    // Render the calendar initially
    renderCalendar();

</script>
@endsection


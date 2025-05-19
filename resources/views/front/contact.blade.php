@extends('frontLayouts.main')

@section('content')

<div class="bg-yellow-100 text-yellow-800 py-2">
    <div class="container mx-auto px-4">
        <marquee behavior="scroll" direction="left" class="text-sm font-medium">
            विशेष ~ आपकी सेवा में हमने एक नई कड़ी और जोड़ दी है सोने के 20k/18K Hallmark जेवर
            वा चांदी की ज्वेलरी पायल मूर्ति बर्तन सिक्के संपूर्ण रेंज एवं विशाल संग्रह के साथ
            (बहुत ही उचित मूल्य) पर उपलब्ध हैं हमेशा की तरह आपके साथ और सहयोग की कामना करते हैं |
            Working Hours: 10:00 AM - 08:00 PM
        </marquee>
    </div>
</div>

<main class="py-10 px-4">
    <section class="text-center mb-12">
        <h2 class="text-4xl font-bold text-yellow-700 uppercase tracking-wide mb-6">Contact Us</h2>
        @if($contact)
            <div class="flex flex-wrap justify-center gap-6">
                <div class="w-72 bg-white border-4 border-yellow-700 rounded-xl shadow p-6 flex flex-col items-center">
                    <div class="bg-yellow-700 rounded-full w-12 h-12 flex items-center justify-center mb-4">
                        <img src="{{ asset('asset/images/phone-solid.svg') }}" alt="Phone" class="w-5 h-5">
                    </div>
                    <h3 class="text-yellow-700 font-semibold text-lg mb-2">Number</h3>
                    <p>{{ $contact->phone }}</p>
                    <p>{{ $contact->phone1 }}</p>
                </div>
                <div class="w-72 bg-white border-4 border-yellow-700 rounded-xl shadow p-6 flex flex-col items-center">
                    <div class="bg-yellow-700 rounded-full w-12 h-12 flex items-center justify-center mb-4">
                        <img src="{{ asset('asset/images/location-dot-solid.svg') }}" alt="Address" class="w-5 h-5">
                    </div>
                    <h3 class="text-yellow-700 font-semibold text-lg mb-2">Address</h3>
                    <p>{!! $contact->full_address !!}</p>
                </div>
                <div class="w-72 bg-white border-4 border-yellow-700 rounded-xl shadow p-6 flex flex-col items-center">
                    <div class="bg-yellow-700 rounded-full w-12 h-12 flex items-center justify-center mb-4">
                        <img src="{{ asset('asset/images/envelope-solid.svg') }}" alt="Email" class="w-5 h-5">
                    </div>
                    <h3 class="text-yellow-700 font-semibold text-lg mb-2">E-mail</h3>
                    <p>{{ $contact->email }}</p>
                </div>
            </div>
        @else
            <p class="text-gray-600">No contact information available.</p>
        @endif
    </section>

    <!-- Inquiry Form -->
    <section class="max-w-5xl mx-auto bg-white border-4 border-yellow-500 rounded-xl shadow-md">
        <div class="bg-yellow-500 text-white text-center py-4 text-xl font-bold rounded-t-xl">
            Inquiry Form
        </div>
        <div class="p-6">
            <form action="{{ route('inquiry.store') }}" method="POST" class="space-y-6">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Name *</label>
                        <input type="text" name="name" required placeholder="Enter your name"
                               class="w-full border border-gray-300 rounded px-4 py-2 focus:ring-2 focus:ring-yellow-400 focus:outline-none">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Email *</label>
                        <input type="email" name="email" required placeholder="Enter your email"
                               class="w-full border border-gray-300 rounded px-4 py-2 focus:ring-2 focus:ring-yellow-400 focus:outline-none">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Phone *</label>
                        <input type="tel" name="phone" required placeholder="Enter your phone"
                               class="w-full border border-gray-300 rounded px-4 py-2 focus:ring-2 focus:ring-yellow-400 focus:outline-none">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Subject</label>
                        <input type="text" name="subject" placeholder="Enter subject"
                               class="w-full border border-gray-300 rounded px-4 py-2 focus:ring-2 focus:ring-yellow-400 focus:outline-none">
                    </div>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Message *</label>
                    <textarea name="message" required rows="4" placeholder="Enter your message"
                              class="w-full border border-gray-300 rounded px-4 py-2 focus:ring-2 focus:ring-yellow-400 focus:outline-none"></textarea>
                </div>
                <div class="text-center">
                    <button type="submit"
                            class="bg-yellow-500 hover:bg-yellow-600 text-white font-semibold py-2 px-6 rounded transition duration-300">
                        Submit
                    </button>
                </div>
                @if(session('success'))
                    <div class="mt-4 bg-green-100 text-green-800 px-4 py-2 rounded">
                        {{ session('success') }}
                    </div>
                @endif
            </form>
        </div>
    </section>

    <!-- Social Media Section -->
    <section class="mt-12 flex justify-center">
        <div class="w-full max-w-2xl bg-white border-4 border-yellow-500 rounded-xl p-6 shadow text-center">
            <h2 class="text-2xl font-bold text-yellow-700 uppercase mb-6">Follow Us</h2>
            <div class="flex justify-center space-x-4 text-white text-xl">
                <a href="#" class="w-10 h-10 bg-blue-700 rounded-full flex items-center justify-center hover:bg-blue-800 transition">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="https://www.facebook.com/share/18tfcJRbk3/" class="w-10 h-10 bg-blue-400 rounded-full flex items-center justify-center hover:bg-blue-500 transition">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="https://www.instagram.com/shristijewellers?utm_source=qr&igsh=MTZzaHkzMHk4YnN4cQ=="
                   class="w-10 h-10 bg-gradient-to-tr from-yellow-300 via-pink-500 to-purple-700 rounded-full flex items-center justify-center hover:opacity-90 transition">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="#" class="w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center hover:bg-blue-700 transition">
                    <i class="fab fa-linkedin-in"></i>
                </a>
                <a href="#" class="w-10 h-10 bg-red-600 rounded-full flex items-center justify-center hover:bg-red-700 transition">
                    <i class="fab fa-youtube"></i>
                </a>
            </div>
        </div>
    </section>
</main>

@endsection

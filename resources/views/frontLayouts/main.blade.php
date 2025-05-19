<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Layout</title>
    <!-- or for .png -->
    <link rel="icon" href="{{ asset('asset/images/logo.png') }}" type="image/png">

    <link rel="stylesheet" href="{{ asset('asset/css/main-style.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<style>
    body {
        font-family: 'Poppins', sans-serif;
        background-color: #f8f9fa;
    }

    .marquee-gold {
        background: linear-gradient(90deg, #FFD700, #D4AF37, #FFD700);
        color: #000;
        font-weight: 600;
    }

    .marquee-silver {
        background: linear-gradient(90deg, #C0C0C0, #E5E4E2, #C0C0C0);
        color: #000;
        font-weight: 600;
    }

    .gold-card {
        background: linear-gradient(135deg, #FFD700, #D4AF37);
        box-shadow: 0 4px 15px rgba(212, 175, 55, 0.3);
    }

    .silver-card {
        background: linear-gradient(135deg, #E5E4E2, #C0C0C0);
        box-shadow: 0 4px 15px rgba(192, 192, 192, 0.3);
    }

    .rate-change-up {
        animation: pulseGreen 2s infinite;
    }

    .rate-change-down {
        animation: pulseRed 2s infinite;
    }

    @keyframes pulseGreen {
        0% {
            box-shadow: 0 0 0 0 rgba(0, 255, 0, 0.4);
        }

        70% {
            box-shadow: 0 0 0 10px rgba(0, 255, 0, 0);
        }

        100% {
            box-shadow: 0 0 0 0 rgba(0, 255, 0, 0);
        }
    }

    @keyframes pulseRed {
        0% {
            box-shadow: 0 0 0 0 rgba(255, 0, 0, 0.4);
        }

        70% {
            box-shadow: 0 0 0 10px rgba(255, 0, 0, 0);
        }

        100% {
            box-shadow: 0 0 0 0 rgba(255, 0, 0, 0);
        }
    }

    .header-glow {
        text-shadow: 0 0 10px rgba(255, 215, 0, 0.7);
    }
</style>

<body>
    @php
        $contact = \App\Models\Contact::first();
    @endphp
    <!-- Header Top Container -->
    <div
        class="header-top container mx-auto flex items-center justify-between py-3 px-4 md:py-4 md:px-6 bg-white shadow-sm">
        <!-- Menu Icon -->
        <div class="menu-icon bg-gradient-to-r from-[#E29938] via-[#FAF3BC] to-[#E29938] rounded-full p-3 w-12 h-12 flex items-center justify-center cursor-pointer hover:opacity-90 transition-opacity"
            id="menu-icon">
            &#9776;
        </div>

        <!-- Logo - Centered with balanced margins -->
        <div class="logo flex-1 text-center mx-4 md:mx-8">
            <a href="{{ route('home') }}" class="inline-block">
                <img src="{{ asset('asset/images/logo.png') }}" alt="Company Logo"
                    class="h-14 md:h-16 object-contain mx-auto">
            </a>
        </div>

        <!-- Contact Info - Better right alignment -->
        <div class="contact-info ml-auto md:ml-0">
            <h2 class="text-xs md:text-sm font-semibold text-gray-600 flex items-center justify-end gap-2">
                <i class="fas fa-phone text-[#E29938] text-sm md:text-base"></i> CONTACT NUMBER
            </h2>
            <p class="mt-1 space-y-0.5">
                <a href="tel:+91{{ $contact?->phone ?? '9414400331' }}"
                    class="text-base md:text-lg font-bold text-gray-800 hover:text-[#E29938] transition-colors">
                    <span class="bookingno2 block">+91-{{ $contact?->phone ?? '9414400331' }}</span>
                    <span class="bookingno2 block">+91-7014137278</span>
                </a>
            </p>
        </div>
    </div>

    <!-- Header Main -->

    <header class="header-main hidden lg:block">
        <nav class="header-nav">
            <ul class="header-ul" id="nav-links">
                <li><a href="{{ route('abouts') }}" style="text-color: #ffffff;">About Us</a></li>
                <li><a href="{{ route('home') }}">Live Rates</a></li>
                <li><a href="{{ route('coinsRate') }}">Coins Rates</a></li>
                <li><a href="{{ route('updates') }}">Updates</a></li>
                <li><a href="{{ route('bankDetail') }}">Bank Details</a></li>
                <li><a href="{{ route('calendar') }}">Calendar</a></li>
                <li><a href="{{ route('contacts') }}">Contact Us</a></li>
            </ul>
        </nav>
    </header>

    <!-- Sidebar -->

    <aside id="sidebar">
        <div class="sidebar-header">
            <img src="{{ asset('asset/images/logo.png') }}" alt="Logo" class="logo">
        </div>
        <ul class="sidebar-menu">
            <li><a href="{{ route('abouts') }}"><i class="fa fa-info-circle"></i> About Us</a></li>
            <li><a href="#"><i class="fa fa-diamond"></i> Jewellery</a></li>
            <li><a href="{{ route('home') }}"><i class="fa fa-line-chart"></i> Live Rate</a></li>
            <li><a href="{{ route('coinsRate') }}"><i class="fa fa-money"></i> Coin Rate</a></li>
            <li><a href="{{ route('updates') }}"><i class="fa fa-newspaper-o"></i> Updates</a></li>
            <li><a href="{{ route('bankDetail') }}"><i class="fa fa-bank"></i> Bank Detail</a></li>
            <li><a href="{{ route('calendar') }}"><i class="fa fa-calendar"></i> Economic Calendar</a></li>
            <li><a href="{{ route('contacts') }}"><i class="fa fa-envelope"></i> Contact Us</a></li>
            <li><a href="{{ route('home') }}"><i class="fa fa-globe"></i> Visit Our Website</a></li>
            <li><a href="#"><i class="fa fa-share-alt"></i> Share</a></li>
            <li><a href="#"><i class="fa fa-star"></i> Rate Our App</a></li>
        </ul>
        <div class="social-media">
            <p>Follow on Social Account</p>
            <a href="#"><i class="fa fa-facebook p-2"></i></a>
            <a href="#"><i class="fa fa-instagram p-2"></i></a>
        </div>
    </aside>

    <!-- Overlay -->

    <div id="overlay"></div>

    @yield('content')

    <footer class="bg-gray-100 text-gray-700 pt-6 border-t border-gray-300 mx-auto mb-16">
        <div class="w-full max-w-7xl mx-auto px-4 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 pb-10">
            <!-- Company Info -->
            <div>
                <img src="{{ asset('asset/images/logo.png') }}" alt="Shristi Jewellers Logo" class="w-32 mb-4">
                <p class="text-sm">About Company</p>
            </div>
            <!-- Navigation Menu -->
            <div>
                <h3 class="text-lg font-semibold mb-3">Menu</h3>
                <ul class="space-y-2 text-sm">
                    <li><a href="{{ route('abouts') }}" class="hover:text-yellow-700 transition">About</a></li>
                    <li><a href="{{ route('home') }}" class="hover:text-yellow-700 transition">Live Rate</a></li>
                    <li><a href="{{ route('coinsRate') }}" class="hover:text-yellow-700 transition">Coins Rates</a>
                    </li>
                    <li><a href="{{ route('updates') }}" class="hover:text-yellow-700 transition">Update</a></li>
                    <li><a href="{{ route('bankDetail') }}" class="hover:text-yellow-700 transition">Bank Detail</a>
                    </li>
                    <li><a href="{{ route('calendar') }}" class="hover:text-yellow-700 transition">Calendar</a></li>
                    <li><a href="{{ route('contacts') }}" class="hover:text-yellow-700 transition">Contact Us</a></li>
                </ul>
            </div>
            <!-- Contact Info -->
            <div>
                <h3 class="text-lg font-semibold mb-3">Contact Us</h3>
                <div class="text-sm space-y-2">
                    @if ($contact?->full_address)
                        <p>{!! $contact->full_address !!}</p>
                    @endif
                    @if ($contact?->email)
                        <p><a href="mailto:{{ $contact->email }}"
                                class="hover:text-yellow-700 transition">{{ $contact->email }}</a></p>
                    @endif
                    <p><a href="tel:+91{{ $contact->phone ?? '9414400331' }}" class="hover:text-yellow-700 transition">
                            +91 {{ $contact->phone ?? '9414400331' }}
                        </a></p>
                </div>
            </div>
            <!-- App Download -->
            <div>
                <h3 class="text-lg font-semibold mb-3">Get Our App</h3>
                <div class="flex items-center gap-3">
                    <a href="https://play.google.com/store/apps/details?id=co.median.android.obkpkk&pcampaignid=web_share"
                        target="_blank" rel="noopener">
                        <img src="{{ asset('asset/images/android.webp') }}" alt="Get it on Google Play"
                            class="w-32">
                    </a>
                    {{-- Uncomment if iOS app is available
        <a href="#"><img src="{{ asset('asset/images/ios.webp') }}" alt="Download on the App Store" class="w-32"></a>
        --}}
                </div>
            </div>
        </div>
        <!-- Bottom Footer -->
        <div class="bg-gray-200 py-4 text-center text-sm text-gray-600">
            <p>&copy; {{ now()->year }} Shristi Jewellers. All Rights Reserved.</p>
            <p>Design & Developed by <a href="https://realvictorygroups.com/" class="text-yellow-700 hover:underline"
                    target="_blank" rel="noopener">Real Victory Groups</a></p>
        </div>
    </footer>


    @include('frontLayouts.footer')

    <script src="{{ asset('asset/js/script.js') }}"></script>

</body>

</html>

@extends('frontLayouts.main')
@section('title', 'Gold & Silver Prices - Hospital')
@section('content')
    https://www.goodreturns.in/silver-rates/kanpur.html
    <!-- Prices Start -->
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-8">
                <!-- Price Detail Start -->
                <div class="mb-5">
                    <h1 class="mb-4">Today's Gold & Silver Prices</h1>

                    <!-- Gold Prices -->
                    <div class="bg-light rounded p-4 mb-4">
                        <h3 class="text-primary mb-3">Gold Price</h3>
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between">
                                <span>24K (1 gram)</span>
                                <strong>₹{{ $goldPrices['24k'] ?? '----' }}</strong>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <span>22K (1 gram)</span>
                                <strong>₹{{ $goldPrices['22k'] ?? '----' }}</strong>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <span>18K (1 gram)</span>
                                <strong>₹{{ $goldPrices['18k'] ?? '----' }}</strong>
                            </li>
                        </ul>
                    </div>

                    <!-- Silver Prices -->
                    <div class="bg-light rounded p-4">
                        <h3 class="text-primary mb-3">Silver Price</h3>
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between">
                                <span>1 gram</span>
                                <strong>₹{{ $silverPrices['1g'] ?? '----' }}</strong>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <span>10 grams</span>
                                <strong>₹{{ $silverPrices['10g'] ?? '----' }}</strong>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <span>1 kg</span>
                                <strong>₹{{ $silverPrices['1kg'] ?? '----' }}</strong>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Price Detail End -->
            </div>

            <!-- Sidebar Start -->
            <div class="col-lg-4">
                <!-- Quick Note -->
                <div class="mb-5">
                    <h4 class="d-inline-block text-primary text-uppercase border-bottom border-5 mb-4">Price Info</h4>
                    <div class="bg-light rounded p-4">
                        <p>Prices are updated daily and may vary by city and jeweler. Always confirm before buying.</p>
                    </div>
                </div>

                <!-- Price History Placeholder -->
                <div class="mb-5">
                    <h4 class="d-inline-block text-primary text-uppercase border-bottom border-5 mb-4">Price History</h4>
                    <div class="bg-light rounded p-4">
                        <p>Historical price charts coming soon...</p>
                    </div>
                </div>

                <!-- Promotion -->
                <div>
                    <h4 class="d-inline-block text-primary text-uppercase border-bottom border-5 mb-4">Offers</h4>
                    <div class="bg-light rounded text-center p-4">
                        <p>Check out our exclusive jewellery offers and discounts.</p>
                        <a href="#" class="btn btn-primary py-2 px-4">Explore Now</a>
                    </div>
                </div>
            </div>
            <!-- Sidebar End -->
        </div>
    </div>
    <!-- Prices End -->

@endsection


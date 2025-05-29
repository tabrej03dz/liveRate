@extends('layouts.aap')
@section('content')

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <div class="card shadow-sm rounded-3">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0">Add New Metal Rates</h4>
                    </div>

                    <div class="card-body">

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                            <form action="{{ $rate ? route('rate.update', $rate->id) : route('rate.store') }}" method="POST">
                                @csrf

                                @php
                                    $metals = [
                                        ['label' => '24K Gold Rate', 'id' => '24k_gold', 'percent' => 'gold_24k_percent'],
                                        ['label' => '22K Gold Rate', 'id' => '22k_gold', 'percent' => 'gold_22k_percent'],
                                        ['label' => '20K Gold Rate', 'id' => '20k_gold', 'percent' => 'gold_20k_percent'],
                                        ['label' => '18K Gold Rate', 'id' => '18k_gold', 'percent' => 'gold_18k_percent'],
                                        ['label' => 'Silver Rate',     'id' => 'silver',    'percent' => 'silver_percent'],
                                    ];
                                @endphp

                                @foreach ($metals as $metal)
                                    <div class="mb-3 row">
                                        <label for="{{ $metal['id'] }}" class="col-md-4 col-form-label text-end fw-semibold">{{ $metal['label'] }}</label>
                                        <div class="col-md-3">
                                            <input type="number" step="0.01" class="form-control" id="{{ $metal['id'] }}" name="{{ $metal['id'] }}" value="{{ $rate->{$metal['id']} ?? old($metal['id']) }}" placeholder="Rate">
                                        </div>
                                        <div class="col-md-3">
                                            <input type="number" step="0.01" class="form-control" id="{{ $metal['percent'] }}" name="{{ $metal['percent'] }}" value="{{ $rate->{$metal['percent']} ?? old($metal['percent']) }}" placeholder="% Purity">
                                        </div>
                                        <p id="{{ $metal['id'] }}_final" class="mt-2 fw-bold text-primary">Final: </p>
                                    </div>
                                @endforeach

                                <div class="row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-success px-4">💾 Save Rates</button>
                                    </div>
                                </div>
                            </form>

                            <script>
                                document.addEventListener("DOMContentLoaded", function () {
                                    const metals = [
                                        { rateId: '24k_gold', percentId: 'gold_24k_percent' },
                                        { rateId: '22k_gold', percentId: 'gold_22k_percent' },
                                        { rateId: '20k_gold', percentId: 'gold_20k_percent' },
                                        { rateId: '18k_gold', percentId: 'gold_18k_percent' },
                                        { rateId: 'silver', percentId: 'silver_percent' },
                                    ];

                                    metals.forEach(({ rateId, percentId }) => {
                                        const rateInput = document.getElementById(rateId);
                                        const percentInput = document.getElementById(percentId);
                                        const finalOutput = document.getElementById(`${rateId}_final`);

                                        function calculateFinal() {
                                            const rate = parseFloat(rateInput.value);
                                            const percent = parseFloat(percentInput.value);

                                            if (!isNaN(rate) && !isNaN(percent)) {
                                                const final = (rate + (rate * percent / 100)).toFixed(2);
                                                finalOutput.textContent = `Final: ₹ ${final}`;
                                            } else {
                                                finalOutput.textContent = "Final: ";
                                            }
                                        }

                                        rateInput.addEventListener('input', calculateFinal);
                                        percentInput.addEventListener('input', calculateFinal);

                                        // Trigger initial calculation if values are pre-filled
                                        calculateFinal();
                                    });
                                });
                            </script>

                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection

@extends('layouts.aap')
@section('content')

    <div class="container mt-5">
        <h1>Coin</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('coin.update', ['coin' => $coin]) }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Metal</label>
                <select name="metal" id="" class="form-control">
                    <option value="">Gold/Silver</option>
                    <option value="gold" {{$coin->metal == 'gold' ? 'selected' : ''}}>Gold</option>
                    <option value="silver" {{$coin->metal == 'silver' ? 'selected' : ''}}>Silver</option>
                </select>
            </div>
            <div class="form-group">
                <label for="carat">Carat</label>
                <input type="number" class="form-control" id="" name="carat" placeholder="Carat" value="{{ $coin->carat }}">
            </div>
            <div class="form-group">
                <label for="weight">Weight</label>
                <input type="number" name="weight" class="form-control" placeholder="Weigh in grams" value="{{ $coin->weight }}">
            </div>
            <div class="form-group">
                <label for="Price">Price</label>
                <input type="number" class="form-control" id="price" name="price" value="{{ $coin->price }}">
            </div>
            <div class="form-group">
                <label for="type">Type</label>
                <select name="type" class="form-control" id="">
                    <option value="">Coin/Ginni</option>
                    <option value="coin" {{$coin->type == 'coin' ? 'selected' : ''}}>Coin</option>
                    <option value="ginni" {{$coin->type == 'ginni' ? 'selected' : ''}}>Ginni</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


@endsection

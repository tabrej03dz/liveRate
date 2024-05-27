@extends('layouts.aap')
@section('content')

    <div class="container mt-5">
        <h1>Create Product</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('product.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="image">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
            </div>
            <div class="form-group">
                <label for="title">Price</label>
                <input type="text" class="form-control" id="price" name="price" value="{{ old('price') }}" required>
            </div>

            <div class="form-group">
                <label for="title">Price</label>
                <select name="carat" id="" class="form-control">
                    <option value="">Select</option>
                    <option value="18">18K</option>
                    <option value="20">20K</option>
                    <option value="22">22K</option>
                    <option value="24">24K</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


@endsection

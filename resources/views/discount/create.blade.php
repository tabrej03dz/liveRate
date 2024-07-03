@extends('layouts.aap')
@section('content')

    <div class="container mt-5">
        <h1>Discount</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('discount.store') }}" method="POST" >
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" required>
            </div>

            <div class="form-group">
                <label for="title">percent</label>
                <input type="text" class="form-control" id="percent" name="percent" value="{{ old('percent') }}" required>
            </div>

            <div class="form-group">
                <label for="metal">Carat</label>
                <select name="carat" id="carat" class="form-control">
                    <option value="18">18K</option>
                    <option value="20">20K</option>
                    <option value="22">22K</option>
                </select>
            </div>

            <div class="form-group">
                <label for="status">Status</label>
                <select name="status" id="status" class="form-control">
                    <option value="0">Inactive</option>
                    <option value="1">Active</option>
                </select>
            </div>

            <div class="form-group">
                <label for="type">Type</label>
                <select name="type" id="status" class="form-control">
                    <option value="0">Down</option>
                    <option value="1">Up</option>
                </select>
            </div>

            <div class="form-group">
                <label for="metal">Metal</label>
                <select name="metal" id="status" class="form-control">
                    <option value="gold">Gold</option>
                    <option value="silver">Silver</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection

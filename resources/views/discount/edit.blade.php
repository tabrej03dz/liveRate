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

        <form action="{{ route('discount.update', $discount) }}" method="POST" >
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $discount->title }}" required>
            </div>

            <div class="form-group">
                <label for="title">percent</label>
                <input type="number" class="form-control" id="percent" name="percent" value="{{ $discount->percent }}" required>
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <select name="status" id="status" class="form-control">
                    <option value="0" {{$discount->status == '0' ? 'selected' : ''}}>Inactive</option>
                    <option value="1" {{$discount->status == '1' ? 'selected' : ''}}>Active</option>
                </select>
            </div>

            <div class="form-group">
                <label for="type">Type</label>
                <select name="type" id="status" class="form-control">
                    <option value="0" {{$discount->type == 0 ? 'selected' : ''}}>Down</option>
                    <option value="1" {{$discount->type == 1 ? 'selected' : ''}}>Up</option>
                </select>
            </div>

            <div class="form-group">
                <label for="metal">Metal</label>
                <select name="metal"  class="form-control">
                    <option value="gold" {{$discount->metal == 'gold' ? 'selected' : ''}}>Gold</option>
                    <option value="silver" {{$discount->metal == 'silver' ? 'selected' : ''}}>Silver</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


@endsection

@extends('layouts.aap')
@section('content')

    <div class="container mt-5">
        <h1>Make Update</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('update.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Bank Logo</label>
                <input type="file" class="form-control" id="bank_logo" name="bank_logo" value="{{ old('bank_logo') }}" required>
            </div>
            <div class="form-group">
                <label for="title">Bank Name</label>
                <input type="text" class="form-control" id="bank_name" name="bank_name" value="{{ old('bank_name') }}" required>
            </div>
            <div class="form-group">
                <label for="title">Account Holder Name</label>
                <input type="text" class="form-control" id="account_holder_name" name="account_holder_name" value="{{ old('account_holder_name') }}" required>
            </div>
            <div class="form-group">
                <label for="title">Account Number</label>
                <input type="text" class="form-control" id="account_number" name="account_number" value="{{ old('account_number') }}" required>
            </div>
            <div class="form-group">
                <label for="title">IFSC Code</label>
                <input type="text" class="form-control" id="bank_name" name="bank_name" value="{{ old('bank_name') }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

@endsection

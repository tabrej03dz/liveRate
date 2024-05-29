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

        <form action="{{ route('bank.update', ['bank' => $bank]) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Bank Logo</label>
                <input type="file" class="form-control" id="bank_logo" name="bank_logo" value="{{$bank->bank_logo}}" >
            </div>
            <div class="form-group">
                <label for="title">Bank Name</label>
                <input type="text" class="form-control" id="bank_name" name="bank_name" value="{{ $bank->bank_name }}" required>
            </div>
            <div class="form-group">
                <label for="title">Account Holder Name</label>
                <input type="text" class="form-control" id="account_holder_name" name="account_holder_name" value="{{ $bank->account_holder_name }}" required>
            </div>
            <div class="form-group">
                <label for="title">Account Number</label>
                <input type="text" class="form-control" id="account_number" name="account_number" value="{{ $bank->account_number }}" required>
            </div>
            <div class="form-group">
                <label for="ifsc_code">IFSC Code</label>
                <input type="text" class="form-control" id="ifsc_code" name="ifsc_code" value="{{ $bank->ifsc_code }}" required>
            </div>

            <div class="form-group">
                <label for="swift_code">IFSC Code</label>
                <input type="text" class="form-control" id="swift_code" name="swift_code" value="{{ $bank->swift_code }}" required>
            </div>

            <div class="form-group">
                <label for="title">Branch Name</label>
                <input type="text" class="form-control" id="branch_name" name="branch_name" value="{{ $bank->branch_name }}" required>
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

@endsection

@extends('layouts.aap')
@section('content')

    <div class="container mt-5">
        <h1>Add Contact</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('contact.update', ['contact' => $contact]) }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Phone 1</label>
                <input type="text" class="form-control" id="phone" name="phone" value="{{ $contact->phone }}" required>
            </div>

            <div class="form-group">
                <label for="title">Phone 2</label>
                <input type="text" class="form-control" id="phone1" name="phone1" value="{{ $contact->phone1 }}" required>
            </div>
            <div class="form-group">
                <label for="description">Full Address</label>
                <textarea class="form-control textarea" id="full_address" name="full_address">{{ $contact->full_address }}</textarea>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $contact->email }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


@endsection


@extends('layouts.aap')
@section('content')

    <div class="container mt-5">
        <h1>About</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('about.store') }}" method="POST" >
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" required>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control textarea" id="description" name="description">{{ old('description') }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


@endsection

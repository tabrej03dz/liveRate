@extends('layouts.aap')
@section('content')

    <div class="container mt-5">
        <h1>Edit</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('update.update', ['update' => $update]) }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $update->title }}" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control textarea" id="description" name="description">{{ $update->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="author_name">Date</label>
                <input type="date" class="form-control" id="date" name="date" value="{{ $update->date }}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

@endsection

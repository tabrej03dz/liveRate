@extends('layouts.aap')

@section('content')


    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @if(session('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('error') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif

                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <div class="d-flex justify-content-between align-items-center">
                            <h1>Contacts</h1>
                            @if($contacts->count()  == 0)
                                <a href="{{ route('contact.create') }}" class="btn btn-light">Add Contact</a>
                            @endif
                        </div>
                    </div>

                    <div class="card-body">
                        <form action="" method="GET" class="mb-4">
                            <div class="input-group">
                                <input type="text" name="keyword" class="form-control" placeholder="Search...">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-primary">Search</button>
                                </div>
                            </div>
                        </form>

                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Phone 1</th>
                                    <th>Phone 2</th>
                                    <th>Full Address</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse ($contacts as $contact)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $contact->phone }}</td>
                                        <td>{{ $contact->phone1 }}</td>
                                        <td>{!! $contact->full_address !!}</td>
                                        <td>{{$contact->email}}</td>
                                        <td>
                                            <a href="{{ route('contact.edit', $contact) }}" class="btn btn-primary">Edit</a>
                                            <a href="{{ route('contact.delete', $contact) }}" class="btn btn-danger">Remove</a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5">No posts found</td>
                                    </tr>
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="card-footer">
                        <!-- Pagination links can be added here if needed -->
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

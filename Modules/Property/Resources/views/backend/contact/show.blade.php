@extends('backend.layouts.app')

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="container">
                <h1>Property Query Details</h1>

                <p><strong>Full Name:</strong> {{ $query->name }}</p>
                <p><strong>Phone Number:</strong> {{ $query->phone }}</p>
                <p><strong>Email:</strong> {{ $query->email }}</p>
                <p><strong>Message:</strong> {{ $query->message }}</p>
            </div>
        </div>
    </div>
@endsection

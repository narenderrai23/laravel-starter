@extends('backend.layouts.app')


@section('content')
    <div class="card">
        <div class="card-body">
            <div class="container">
                <h1>Property Query Details</h1>

                <p><strong>Full Name:</strong> {{ $query->full_name }}</p>
                <p><strong>Phone Number:</strong> {{ $query->phone_number }}</p>
                <p><strong>Location:</strong> {{ $query->location->name }}</p>
                <p><strong>Property Type:</strong> {{ $query->propertyType->name }}</p>
                <p><strong>Min Beds:</strong> {{ $query->min_beds }}</p>
                <p><strong>Min Baths:</strong> {{ $query->min_baths }}</p>
                <p><strong>Min Area:</strong> {{ $query->min_area }} m²</p>
                <p><strong>Max Area:</strong> {{ $query->max_area }} m²</p>
            </div>
        </div>
    </div>
@endsection

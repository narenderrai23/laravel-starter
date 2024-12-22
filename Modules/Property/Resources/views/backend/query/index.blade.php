@extends('backend.layouts.app')

@section('title')
    {{ __($module_action) }} {{ __($module_title) }}
@endsection

@section('breadcrumbs')
    <x-backend.breadcrumbs>
        <x-backend.breadcrumb-item type="active"
            icon='{{ $module_icon }}'>{{ __($module_title) }}</x-backend.breadcrumb-item>
    </x-backend.breadcrumbs>
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <!-- Search Results Table -->
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Full Name</th>
                        <th>Phone Number</th>
                        <th>Location</th>
                        <th>Property Type</th>
                        <th>Min Beds</th>
                        <th>Min Baths</th>
                        <th>Min Area</th>
                        <th>Max Area</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($queries as $query)
                        <tr>
                            <td>{{ $query->full_name }}</td>
                            <td>{{ $query->phone_number }}</td>
                            <td>{{ $query->location->name }}</td>
                            <td>{{ $query->propertyType->name }}</td>
                            <td>{{ $query->min_beds }}</td>
                            <td>{{ $query->min_baths }}</td>
                            <td>{{ $query->min_area }}</td>
                            <td>{{ $query->max_area }}</td>
                            <td>
                                <!-- You can add actions like edit, delete, view -->
                                <a href="{{ route('backend.queries.show', $query->id) }}" class="btn btn-info btn-sm">View</a>
                                <!-- You can add more buttons for actions like edit or delete -->
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="9" class="text-center">No queries found</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

        </div>
    </div>
@endsection

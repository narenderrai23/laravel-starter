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
                        <th>Email</th>
                        <th>Message</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($queries as $query)
                        <tr>
                            <td>{{ $query->name }}</td>
                            <td>{{ $query->phone }}</td>
                            <td>{{ $query->email }}</td>
                            <td>{{ $query->message }}</td>
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

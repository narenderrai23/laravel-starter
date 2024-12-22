<x-mail::message>
    # New Estimate Query Submitted

    <p>A new estimate query has been submitted.</p>

    <p><strong>Full Name:</strong> {{ $query->full_name }}</p>
    <p><strong>Phone Number:</strong> {{ $query->phone_number }}</p>
    <p><strong>Location:</strong> {{ $query->location_id }}</p>
    <p><strong>Property Type:</strong> {{ $query->property_type_id }}</p>
    <p><strong>Minimum Beds:</strong> {{ $query->min_beds ?? 'N/A' }}</p>
    <p><strong>Minimum Baths:</strong> {{ $query->min_baths ?? 'N/A' }}</p>
    <p><strong>Minimum Area:</strong> {{ $query->min_area ?? 'N/A' }}</p>
    <p><strong>Maximum Area:</strong> {{ $query->max_area ?? 'N/A' }}</p>

    <x-mail::button :url="url('/')">
        Button Text
    </x-mail::button>

    Thanks,<br>
    {{ config('app.name') }}
</x-mail::message>

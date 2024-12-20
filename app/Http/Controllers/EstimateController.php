<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;
use App\Models\EstimateQuery;

class EstimateController extends Controller
{
     // Handle form submission
     public function submitForm(Request $request)
     {
         // Validate the incoming form data
         $validated = $request->validate([
             'full_name' => 'required|string|max:255',
             'phone_number' => 'required|string|max:15',
             'location_id' => 'required|exists:locations,id',
             'property_type_id' => 'required|exists:property_types,id',
             'min_beds' => 'nullable|integer|min:0',
             'min_baths' => 'nullable|integer|min:0',
             'min_area' => 'nullable|numeric|min:0',
             'max_area' => 'nullable|numeric|min:0',
         ]);

         // Save the data to the database
         EstimateQuery::create($validated);

         // Redirect back with success message
         return redirect()->back()->with('success', 'Your query has been submitted successfully!');
     }
}

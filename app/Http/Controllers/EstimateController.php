<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;
use App\Models\EstimateQuery;
use Modules\Property\Models\Property;

class EstimateController extends Controller
{

    public $module_action;
    public $module_title;
    public $module_icon;
    public $module_name;
    public function __construct()
    {
        // Page Title
        $this->module_title = 'Query';

        // module icon
        $this->module_icon = 'fa-regular fa-sun';
    }

    function index(Request $request)
    {
        $module_action = null;
        $module_title = $this->module_title;
        $module_icon = $this->module_icon;
        $module_name = $this->module_name;

        $queries = EstimateQuery::query();
        $queries = $queries->latest()->paginate(10);

        return view(
            'property::backend.query.index',
            compact('queries', 'module_action', 'module_icon', 'module_title', 'module_name')
        );
    }

    public function show($id)
    {
        $query = EstimateQuery::findOrFail($id);
        return view('property::backend.query.show', compact('query'));
    }


    // Handle form submission
    public function submitForm(Request $request)
    {
        // Validate the incoming form data
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:15',
            'location_id' => 'required|exists:locations,id',
            'property_type_id' => 'required|exists:categories,id',
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

    public function search(Request $request)
    {
        // Fetch all locations and property types
        $locations = get_all_locations();
        $propertyTypes = get_all_properties();

        // Build the query for filtering properties
        $properties = Property::query();

        if ($request->keyword) {
            $properties->where('name', 'like', '%' . $request->keyword . '%');
        }

        if ($request->location_id) {
            $properties->where('location_id', $request->location_id);
        }

        if ($request->category_id) {
            $properties->where('category_id', $request->category_id);
        }

        // Paginate the results
        $properties = $properties->paginate(10);

        // Return the view with the filtered results
        return view('front.search', compact('locations', 'propertyTypes', 'properties'));
    }
}

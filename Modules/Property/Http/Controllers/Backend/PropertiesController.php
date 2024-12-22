<?php

namespace Modules\Property\Http\Controllers\Backend;

use App\Authorizable;
use App\Http\Controllers\Backend\BackendBaseController;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Modules\Post\Enums\PostStatus;
use Modules\Post\Enums\PostType;

class PropertiesController extends BackendBaseController
{
    use Authorizable;

    public function __construct()
    {
        // Page Title
        $this->module_title = 'Properties';

        // module name
        $this->module_name = 'properties';

        // directory path of the module
        $this->module_path = 'property::backend';

        // module icon
        $this->module_icon = 'fa-regular fa-sun';

        // module model name, path
        $this->module_model = "Modules\Property\Models\Property";
    }


    public function store(Request $request)
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'Store';

        $validated_data = $request->validate([
            'name' => 'required|max:191',
            'slug' => 'nullable|max:191',
            'created_by_alias' => 'nullable|max:191',
            'intro' => 'required',
            'content' => 'required',
            'image' => 'required|max:191',
            'category_id' => 'required|integer',
            'location_id' => 'required|integer',
            'type' => Rule::enum(PostType::class),
            'is_featured' => 'required|integer',
            'status' => Rule::enum(PostStatus::class),
            'published_at' => 'required|date',
            'meta_title' => 'nullable|max:191',
            'meta_keywords' => 'nullable|max:191',
            'order' => 'nullable|integer',
            'meta_description' => 'nullable',
            'meta_og_image' => 'nullable|max:191',
        ]);

        $data['created_by_name'] = auth()->user()->name;

        $$module_name_singular = $module_model::create($data);

        flash("New '".Str::singular($module_title)."' Added")->success()->important();

        logUserAccess($module_title.' '.$module_action.' | Id: '.$$module_name_singular->id);

        return redirect("admin/{$module_name}");
    }

}

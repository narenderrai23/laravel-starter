<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Support\Str;
use Modules\Post\Models\Post;
use App\Http\Controllers\Controller;

class FrontendController extends Controller
{
    // public $module_model;

    // public function __construct()
    // {
    //     $this->module_model = "Modules\Post\Models\Post";
    // }

    // /**
    //  * Retrieves the view for the index page of the frontend.
    //  *
    //  * @return \Illuminate\Contracts\View\View
    //  */
    // public function index()
    // {
    //     $module_model = $this->module_model;
    //     $posts = Post::orderBy("created_at", "desc")->paginate(3);
    //     $module_name = $module_model::latest()->paginate();
    //     return view('front.index', compact('module_name'));
    //     // return view(
    //     //     "front.index",
    //     //     compact('module_name')
    //     // );
    // }

    public $module_title;

    public $module_name;

    public $module_path;

    public $module_icon;

    public $module_model;

    public function __construct()
    {
        // Page Title
        $this->module_title = 'Posts';

        // module name
        $this->module_name = 'posts';

        // directory path of the module
        $this->module_path = 'post::frontend';

        // module icon
        $this->module_icon = 'fa-regular fa-sun';

        // module model name, path
        $this->module_model = "Modules\Post\Models\Post";
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'List';

        $$module_name = $module_model::latest()->paginate(3);

        return view(
            "front.index",
            compact('module_title', 'module_name', "$module_name", 'module_icon', 'module_action', 'module_name_singular')
        );
    }


    /**
     * Privacy Policy Page.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function privacy()
    {
        return view('frontend.privacy');
    }

    /**
     * Terms & Conditions Page.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function terms()
    {
        return view('frontend.terms');
    }
}

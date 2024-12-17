<?php

namespace Modules\Property\Http\Controllers\Backend;

use App\Authorizable;
use App\Http\Controllers\Backend\BackendBaseController;

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

}

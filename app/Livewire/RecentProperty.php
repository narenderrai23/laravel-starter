<?php

namespace App\Livewire;

use Livewire\Component;

class RecentProperty extends Component
{
    public $limit;

    public function render()
    {
        $limit = $this->limit;

        $limit = $limit > 0 ? $limit : 5;

        $recentBlogs = \Modules\Property\Models\Property::recentlyPublished()->take($limit)->get();

        return view('livewire.recent-property', data: compact('recentBlogs'));
    }
}

<?php
namespace UiBuilder\Navigation\View;

use Illuminate\Support\Str;
use Illuminate\View\Component;
use Illuminate\Support\Facades\Route;
use UiBuilder\Navigation\Factory\Features;

class Navigation extends Component
{

    public $features = [];

    public function __construct(Features $features)
    {
        $this->features = $features->all();
    }


    public function render()
    {
        return view('navigation::basic');
    }

    /**
     * Determine if the feature option is the current selected option.
     *
     * @param  object  $route
     * @return bool
     */
    public function isSelected($feature)
    {
        $routeCurrent = Route::currentRouteName();

        $isSelected = Str::startsWith($routeCurrent,$feature->route_prefix);

        return $isSelected;
    }
}
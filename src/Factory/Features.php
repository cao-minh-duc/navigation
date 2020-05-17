<?php
namespace UiBuilder\Navigation\Factory;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Route;

class Features
{
    public function all()
    {
        $features = config('navigation.features') ?? [];

        $features = collect($features)->map(function($feature) {

            $feature = (object) $feature;

            $routeCurrent = Route::currentRouteName();

            $feature->selected = Str::startsWith($routeCurrent,$feature->route_prefix);

            return $feature;
        });

        return $features;
    }
}
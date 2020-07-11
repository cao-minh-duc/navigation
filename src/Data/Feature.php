<?php
namespace UiBuilder\Navigation\Data;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Route;

class Feature 
{
    public string $route;

    public string $icon;

    public string $name;

    public string $route_prefix;

    public function __construct(array $attribute)
    {
        $this->route = $attribute['route'] ?? '';
        $this->icon = $attribute['icon'] ?? '';
        $this->name = $attribute['name'] ?? '';
        $this->route_prefix = $attribute['route_prefix'] ?? '';
    }

    public function isSelected(): bool
    {
        $routeCurrent = Route::currentRouteName();

        return Str::startsWith($routeCurrent,$this->route_prefix);

    }
}
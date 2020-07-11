<?php
namespace UiBuilder\Navigation\Factories;

use Illuminate\Support\Str;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Route;
use UiBuilder\Navigation\Data\Feature;
use UiBuilder\Navigation\Adapters\ConfigAdapter;

class FeaturesFactory
{
    protected ConfigAdapter $config;

    public function __construct(ConfigAdapter $config)
    {
        $this->config = $config;
    }

    public function get(): Collection
    {
        $features = $this->config->getFeatures();

        $features = collect($features)->map(function($feature) {

            $feature = new Feature($feature);

            return $feature;
        });

        return $features;
    }
}
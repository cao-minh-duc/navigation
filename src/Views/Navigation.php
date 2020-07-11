<?php
namespace UiBuilder\Navigation\Views;

use Illuminate\Support\Str;
use Illuminate\View\Component;
use Illuminate\Support\Collection;
use UiBuilder\Navigation\Data\Logo;
use Illuminate\Support\Facades\Route;
use UiBuilder\Navigation\Factories\LogoFactory;
use UiBuilder\Navigation\Factories\FeaturesFactory;

class Navigation extends Component
{

    public Collection $features;

    public Logo $logo;
    
    public function __construct(FeaturesFactory $featuresFactory, LogoFactory $logoFactory)
    {
        $this->features = $featuresFactory->get();
        $this->logo = $logoFactory->get();
    }


    public function render()
    {
        return view('navigation::basic');
    }
}
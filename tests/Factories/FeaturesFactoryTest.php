<?php
namespace UiBuilder\Navigation\Tests\Factories;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Config;
use UiBuilder\Navigation\Data\Feature;
use UiBuilder\Navigation\Tests\TestCase;
use UiBuilder\Navigation\Factories\FeaturesFactory;

class FeaturesFactoryTest extends TestCase
{
    /** @test */
    public function it_should_get_collection_of_features()
    {
        Config::set('navigation.features',[
            [
                'route' => 'home',
                // 'icon' => '',
                'name' => 'Home',
                'route_prefix' => 'home'
            ]
        ]);

        Route::shouldReceive('currentRouteName')
                ->andReturn('home');

        $features = app(FeaturesFactory::class)->get();
        $featureHome = $features->first();

        $this->assertInstanceOf(
            Feature::class,
            $featureHome
        );

        $this->assertEquals(
            'home', $featureHome->route
        );
        $this->assertEquals(
            '', $featureHome->icon
        );
        $this->assertEquals(
            'Home', $featureHome->name
        );

        $this->assertTrue($featureHome->isSelected());
        
    }
}
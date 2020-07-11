<?php
namespace UiBuilder\Navigation\Tests\Adapters;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Config;
use UiBuilder\Navigation\Tests\TestCase;
use UiBuilder\Navigation\Adapters\ConfigAdapter;

class ConfigAdapterTest extends TestCase
{
    /** @test */
    public function it_should_get_features()
    {
        $configAdapter = new ConfigAdapter();
        Config::set('navigation.features',null);

        $this->assertInstanceOf(
            Collection::class,
            $configAdapter->getFeatures()
        );
    }

    /** @test */
    public function it_should_get_logo()
    {
        $configAdapter = new ConfigAdapter();
        Config::set('navigation.logo',null);

        $this->assertEquals('',$configAdapter->getLogo());
    }
}
<?php

namespace UiBuilder\Navigation\Tests;

use Orchestra\Testbench\TestCase;
use UiBuilder\Navigation\NavigationServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [NavigationServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}

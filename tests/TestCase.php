<?php

namespace UiBuilder\Navigation\Tests;

use Orchestra\Testbench\TestCase as BaseTestCase;
use UiBuilder\Navigation\NavigationServiceProvider;

class TestCase extends BaseTestCase
{

    protected function getPackageProviders($app)
    {
        return [NavigationServiceProvider::class];
    }
}

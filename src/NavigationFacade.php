<?php

namespace UiBuilder\Navigation;

use Illuminate\Support\Facades\Facade;

/**
 * @see \UiBuilder\Navigation\Skeleton\SkeletonClass
 */
class NavigationFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'navigation';
    }
}

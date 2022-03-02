<?php

namespace Laryarh\Adminbundle;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Laryarh\Adminbundle\Skeleton\SkeletonClass
 */
class AdminbundleFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'adminbundle';
    }
}

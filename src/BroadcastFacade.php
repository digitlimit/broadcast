<?php

namespace Digitlimit\Broadcast;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Digitlimit\Broadcast\Skeleton\SkeletonClass
 */
class BroadcastFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'broadcast';
    }
}

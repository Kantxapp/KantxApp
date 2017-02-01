<?php namespace GeneaLabs\Phpgmaps\Facades;

use Illuminate\Support\Facades\Facade;

class PhpgmapsFacade extends Facade
{

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'phpgmaps';
    }
}

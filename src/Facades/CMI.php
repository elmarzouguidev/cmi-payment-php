<?php

namespace Elmarzouguidev\CMI\Facades;

use Illuminate\Support\Facades\Facade;

class CMI extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'CMI';
    }
}

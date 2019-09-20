<?php

namespace Gameloch\Office\Facade;

use Illuminate\Support\Facades\Facade;

class Office extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return \Gameloch\Office\Office::class;
    }
}
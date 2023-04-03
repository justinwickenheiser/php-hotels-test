<?php

namespace GvsuWebTeam\Hotels\Facades;

use Illuminate\Support\Facades\Facade;

class HotelsFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'hotels';
    }
}

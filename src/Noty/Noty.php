<?php

namespace RSmalc\Noty;

use Illuminate\Support\Facades\Facade;


class Noty extends Facade
{
    /**
     * IoC container
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'noty';
    }
}
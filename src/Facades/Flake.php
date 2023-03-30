<?php

namespace Ejntaylor\Flake\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Ejntaylor\Flake\Flake
 */
class Flake extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Ejntaylor\Flake\Flake::class;
    }
}

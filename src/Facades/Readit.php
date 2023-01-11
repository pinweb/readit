<?php

namespace Pinweb\Readit\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Pinweb\Readit\Readit
 */
class Readit extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Pinweb\Readit\Readit::class;
    }
}

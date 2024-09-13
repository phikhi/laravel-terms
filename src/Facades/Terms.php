<?php

namespace Phikhi\Terms\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Phikhi\Terms\Terms
 */
class Terms extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Phikhi\Terms\Terms::class;
    }
}

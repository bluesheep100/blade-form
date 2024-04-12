<?php

namespace Bluesheep\BladeForm\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Bluesheep\BladeForm\BladeForm
 */
class BladeForm extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Bluesheep\BladeForm\BladeForm::class;
    }
}

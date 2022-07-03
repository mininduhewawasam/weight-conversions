<?php

namespace Mininduhewawasam\WeightConversions\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Mininduhewawasam\WeightConversions\WeightConversions
 */
class WeightConversions extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'weight-conversions';
    }
}

<?php

namespace PilotMax\ModelHistory\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \PilotMax\ModelHistory\ModelHistory
 */
class ModelHistory extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'model-history';
    }
}

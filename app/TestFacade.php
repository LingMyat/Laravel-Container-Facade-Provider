<?php

namespace App;

use Illuminate\Support\Facades\Facade;

class TestFacade extends Facade
    {
        /**
         * Get the registered name of the component.
         *
         * @return string
         */
        protected static function getFacadeAccessor()
        {
            return 'test';
        }
    }
